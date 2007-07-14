/********************************************************************
 *                                                                  *
 * THIS FILE IS PART OF THE OggTheora SOFTWARE CODEC SOURCE CODE.   *
 * USE, DISTRIBUTION AND REPRODUCTION OF THIS LIBRARY SOURCE IS     *
 * GOVERNED BY A BSD-STYLE SOURCE LICENSE INCLUDED WITH THIS SOURCE *
 * IN 'COPYING'. PLEASE READ THESE TERMS BEFORE DISTRIBUTING.       *
 *                                                                  *
 * THE Theora SOURCE CODE IS COPYRIGHT (C) 2002-2003                *
 * by the Xiph.Org Foundation http://www.xiph.org/                  *
 *                                                                  *
 ********************************************************************

  function: example encoder application; makes an Ogg Theora/Vorbis
            file from YUV4MPEG2 and WAV input

 ********************************************************************/

#define _GNU_SOURCE
#define _LARGEFILE_SOURCE
#define _LARGEFILE64_SOURCE
#define _FILE_OFFSET_BITS 64

/* Define to give performance data win32 only*/
//#define THEORA_PERF_DATA 
#ifdef THEORA_PERF_DATA
#include <windows.h>
#endif

#ifdef HAVE_CONFIG_H
# include <config.h>

#endif

#ifndef _REENTRANT
# define _REENTRANT
#endif

#include <stdio.h>
#ifndef WIN32
#include <unistd.h>
#include <sys/types.h>
#include <fcntl.h>
#include <errno.h>
#endif
#include <stdlib.h>
#include <string.h>
#ifndef WIN32
#include <getopt.h>
#else
#include "getopt.h"
#endif
#include <time.h>
#include <math.h>
#include "theora/theora.h"
#include "vorbis/codec.h"
#include "vorbis/vorbisenc.h"

#ifdef _WIN32
/* supply missing headers and functions to Win32 */

#include <fcntl.h>

static double rint(double x)
{
  if (x < 0.0)
    return (double)(int)(x - 0.5);
  else
    return (double)(int)(x + 0.5);
}
#endif

const char *optstring = "o:a:A:v:V:s:S:f:F:";
struct option options [] = {
  {"output",required_argument,NULL,'o'},
  {"audio-rate-target",required_argument,NULL,'A'},
  {"video-rate-target",required_argument,NULL,'V'},
  {"audio-quality",required_argument,NULL,'a'},
  {"video-quality",required_argument,NULL,'v'},
  {"aspect-numerator",optional_argument,NULL,'s'},
  {"aspect-denominator",optional_argument,NULL,'S'},
  {"framerate-numerator",optional_argument,NULL,'f'},
  {"framerate-denominator",optional_argument,NULL,'F'},
  {NULL,0,NULL,0}
};

struct bufferFifoNodeType
{
	struct bufferFifoNodeType *next;
	int size;
	char *data; //a de-facto 64k block
};

struct bufferFifoType
{
	int totalBytes;
	struct bufferFifoNodeType *head;
	struct bufferFifoNodeType *tail;
};

typedef struct bufferFifoType bufferFifo;

/* You'll go to Hell for using globals. */

int *audio=NULL;
int audio_fd;

int *video=NULL;
int video_fd;

bufferFifo *audio_buffer=NULL;
bufferFifo *video_buffer=NULL;

int audio_ch=0;
int audio_hz=0;

float audio_q=.1;
int audio_r=-1;

int video_x=0;
int video_y=0;
int frame_x=0;
int frame_y=0;
int frame_x_offset=0;
int frame_y_offset=0;
int video_hzn=-1;
int video_hzd=-1;
int video_an=-1;
int video_ad=-1;

int video_r=-1;
int video_q=16;

static void usage(void){
  fprintf(stderr,
          "Usage: encoder_example [options] [audio_file] video_file\n\n"
          "Options: \n\n"
          "  -o --output <filename.ogg>     file name for encoded output;\n"
          "                                 If this option is not given, the\n"
          "                                 compressed data is sent to stdout.\n\n"
          "  -A --audio-rate-target <n>     bitrate target for Vorbis audio;\n"
          "                                 use -a and not -A if at all possible,\n"
          "                                 as -a gives higher quality for a given\n"
          "                                 bitrate.\n\n"
          "  -V --video-rate-target <n>     bitrate target for Theora video\n\n"
          "  -a --audio-quality <n>         Vorbis quality selector from -1 to 10\n"
          "                                 (-1 yields smallest files but lowest\n"
          "                                 fidelity; 10 yields highest fidelity\n"
          "                                 but large files. '2' is a reasonable\n"
          "                                 default).\n\n"
          "   -v --video-quality <n>        Theora quality selector fro 0 to 10\n"
          "                                 (0 yields smallest files but lowest\n"
          "                                 video quality. 10 yields highest\n"
          "                                 fidelity but large files).\n\n"
          "   -s --aspect-numerator <n>     Aspect ratio numerator, default is 0\n"
          "                                 or extracted from YUV input file\n"
          "   -S --aspect-denominator <n>   Aspect ratio denominator, default is 0\n"
          "                                 or extracted from YUV input file\n"
          "   -f --framerate-numerator <n>  Frame rate numerator, can be extracted\n"
          "                                 from YUV input file. ex: 30000000\n"
          "   -F --framerate-denominator <n>Frame rate denominator, can be extracted\n"
          "                                 from YUV input file. ex: 1000000\n"
          "                                 The frame rate nominator divided by this\n"
          "                                 determinates the frame rate in units per tick\n"
          "encoder_example accepts only uncompressed RIFF WAV format audio and\n"
          "YUV4MPEG2 uncompressed video.\n\n");
  exit(1);
}

int bufferFifoPut(bufferFifo *buffer, void *dataToAdd, int dataSize, char func)
{
	//fprintf(stderr, "In bufferFifoPut\n");
	if(dataSize <= 0) return 0;

	//if it will fit in the last node, decide whether to spend time copying
	//or waste the rest of the last node's space and just point to another 64k block.

	/*fprintf(stderr, "Buffering ");
	if(buffer == video_buffer)
	{
		fprintf(stderr, "video data...");
	} else if (buffer==audio_buffer)
	{
		fprintf(stderr, "audio data...");
	} else {
		fprintf(stderr, "called by %c\n", func);
	}
	*/

	int tailSpace;
	if(buffer->tail != NULL)
	{
		//fprintf(stderr, "Accessing tail @ %p\n", buffer->tail);
		tailSpace = 65536 - buffer->tail->size;
	}
	else tailSpace = 65536;

	//fprintf(stderr, "new data is %d, tailSpace is %d\n", dataSize, tailSpace);

	if(dataSize < 65536 / 2 && tailSpace - dataSize >= 0 && buffer->tail != NULL)
	{
		//fprintf(stderr, "Copying to end of last block...\n");
		char *offset = buffer->tail->data + buffer->tail->size;
		memcpy(offset, dataToAdd, dataSize);
		free(dataToAdd);
		buffer->tail->size += dataSize;
	} else {
		//fprintf(stderr, "Making new tail...\n");
		//we'll create a new node.
		struct bufferFifoNodeType *node = malloc( sizeof( struct bufferFifoNodeType ) );
		//fprintf(stderr, "Building new node @ %p\n", node);

		//if we have a tail, link it to the new one
		if(buffer->tail != NULL)
		{
			buffer->tail->next = node;
			//fprintf(stderr, "Linked old tail @ %p to new tail @ %p\n", buffer->tail, node);
		} else {
			buffer->head = node;
		}

		buffer->tail = node;

		buffer->tail->size = dataSize;
		buffer->tail->data = dataToAdd;
		buffer->tail->next = NULL;
	}
	buffer->totalBytes += dataSize;
	//fprintf(stderr, "leaving bufferFifoPut, %d/%d\n", dataSize, buffer->totalBytes);
	return dataSize;
}

void waitFor(int *stream)
{
	//set blocking on streams
	//fcntl(*video, F_SETFL, fcntl(*video, F_GETFL) & ~O_NONBLOCK);
	//fcntl(*audio, F_SETFL, fcntl(*audio, F_GETFL) & ~O_NONBLOCK);

	fd_set readStreams;
	struct timeval tv;
	int retval;
	int nfds; //highest numbered file descriptor
	if(*video > *audio) nfds = *video; else nfds = *audio;

	FD_ZERO(&readStreams);
	FD_SET(*video, &readStreams);
	FD_SET(*audio, &readStreams);

	{
		tv.tv_sec = 7;
		tv.tv_usec = 0;

		fd_set readyStreams = readStreams;
		retval = select(nfds + 1, &readyStreams, NULL, NULL, &tv);
		if(retval == -1)
		{
			fprintf(stderr, "Error while looking for new data to read.\n");
			exit(1);
		} else if(retval)
		{
			if(FD_ISSET(*stream, &readyStreams))
			{
				fcntl(*audio, F_SETFL, fcntl(*audio, F_GETFL) | O_NONBLOCK);
				fcntl(*video, F_SETFL, fcntl(*video, F_GETFL) | O_NONBLOCK);
				return;
			} else {
				//read the new data off the other stream until we get data on *stream
				int otherfd;
				bufferFifo *otherBuffer;
				if(*video==*stream)
				{
					otherfd = *audio;
					otherBuffer = audio_buffer;
				} else {
					otherfd = *video;
					otherBuffer = video_buffer;
				}

				void *readSpace = malloc ( 65536 );
				int status = read(otherfd, readSpace, 65536);
				if(status == -1)
				{
					fprintf(stderr, "Unknown error while trying to buffer more data\n");
					exit(1);
				}
				bufferFifoPut(otherBuffer, readSpace, status, 'w');
			}
		} else {
			fprintf(stderr, "Timeout waiting for decoder to write new data!");
			exit(1);
		}
	}
}

int bufferFifoGet(bufferFifo *buffer, void *ptr, int dataSize)
{
	//fprintf(stderr, "In bufferFifoGet\n");
	int bytesPopped = 0;

	while(buffer->head != NULL && buffer->head->size <= dataSize - bytesPopped)
	{
		struct bufferFifoNodeType *currNode = buffer->head;
		memcpy(ptr + bytesPopped, currNode->data, currNode->size);
		bytesPopped += currNode->size;
		free(currNode->data);

		buffer->head = currNode->next;

		//fprintf(stderr, "Freeing empty node at %p\n", currNode);
		free(currNode);
	}

	//at this point, either we've run out of buffered data or we need to add endy bits
	if(buffer->head != NULL)
	{
		int endyBits = dataSize - bytesPopped;

		memcpy(ptr + bytesPopped, buffer->head->data, endyBits);
		bytesPopped += endyBits;
		buffer->head->size -= endyBits;
		memmove(buffer->head->data, buffer->head->data + endyBits, buffer->head->size);
	} else {
		//we've consumed the tail node.
		buffer->tail = NULL;
	}

	buffer->totalBytes -= bytesPopped;
	//fprintf(stderr, "Out bufferFifoGet\n");
	if(buffer->tail != NULL)
	{
		//fprintf(stderr, "Tail @ %p\n", buffer->tail);
	}

	return bytesPopped;
}

int fiforead(void *ptr, int size, int nItems, int *stream);

int fiforead_hlpr(void *ptr, int totalNeeded, int *stream)
{
	int bytesRead = 0;
	int readStatus = 0;
	int againCount = 0;
	while(bytesRead < totalNeeded)
	{
		readStatus = read(*stream, ptr + bytesRead, totalNeeded - bytesRead);
		//fprintf(stderr, "Read %d/%d bytes in fiforead_hlpr\n", readStatus, totalNeeded - bytesRead);
		if(readStatus == -1)
		{
			if(errno == EAGAIN)
			{
				readStatus = 0; // for the benefit of the subtraction
				if(againCount > 0 && againCount < 160)
				{
					//fprintf(stderr, "Multiple EAGAIN condition %d :(\n", againCount);
					//don't try to read another page, there won't ever be any
				} else if(againCount == 160)
				{
					/*we're not getting anywhere -- nothing's actively writing to the fifo.
					* Only hope now is to put it back in blocking mode and hope the kernel
					* wakes us back up someday...
					*/
					waitFor(stream);

					//how about that...we're back!  
					againCount = 0;
					continue;
				}

				//could the problem be that the other fifo is full?
				//get other stream
				int other;
				//fprintf(stderr, "Polling for data to buffer from other stream ");
				if(stream == video)
				{
					other = *audio;
					//fprintf(stderr, "(audio)\n");
				} else {
					other = *video;
					//fprintf(stderr, "(video)\n");
				}
				char test;
				int readOther = read(other, &test, 1);
				if(readOther == -1)
				{
					if(errno == EAGAIN)
					{
						//fprintf(stderr, "Both input streams empty, waiting for more data...\n");
						//nope, both fifo's empty. block target stream and wait.
						waitFor(stream);
						continue;
					} else {
						fprintf(stderr, "Error while buffering non-target stream. Code %d\n", errno);
						exit(1);
					}
				} else {
					//flush a bunch more out of the other named pipe.
					char *readSpace = malloc( 65536 );
					*readSpace = test;
					//define other
					readOther = read(other, readSpace + 1, 65535);
					if(readOther == -1)
					{
						if(errno != EAGAIN)
						{
							fprintf(stderr, "Error while buffering non-target stream. Code %d\n", errno);
						} else {
							readOther = 0;
						}
					}
					bufferFifo *otherBuff;
					if(stream == video) otherBuff = audio_buffer; else otherBuff = video_buffer;
					bufferFifoPut(otherBuff, readSpace, readOther + 1, 'h');

					//wait 1/50th sec for more data on the target stream
					struct timespec remaining;
					struct timespec wait = {0, 20000000};
					nanosleep(&wait, &remaining );
				}
				againCount++;
			} else {
				fprintf(stderr, "Error reading from stream. Error code %d\n", errno);
				exit(1);
			}
		} else if(readStatus == 0){
			break; //actual eof.
		} else {
			bytesRead += readStatus;
			againCount = 0;
		}
	} // end while
	//fprintf(stderr, "Leaving fiforead_hlpr with %d bytes\n", bytesRead);
	return bytesRead;
}

int fiforead(void *ptr, int size, int nItems, int *stream)
{
	int bufferedRead = 0;
	if(video != NULL && *stream == *video)
	{
		//check for buffered data
		bufferedRead = bufferFifoGet(video_buffer, ptr, size * nItems);
		if(bufferedRead < size * nItems)
		{
			//fprintf(stderr, "Reading from video stream...\n");
			//fiforead_hlpr readBytes = [size * nItems - sizeof(buffer)] from fifo:
			return bufferedRead + fiforead_hlpr(ptr + bufferedRead, size * nItems - bufferedRead, video);
		} else {
			return bufferedRead;
		}
	} else if(audio != NULL && *stream == *audio)
	{
		//fprintf(stderr, "Reading from audio stream...\n");
		bufferedRead = bufferFifoGet(audio_buffer, ptr, size * nItems);
		if(bufferedRead < size * nItems)
		{
			return bufferedRead + fiforead_hlpr(ptr + bufferedRead, size * nItems - bufferedRead, audio);
		} else {
			return bufferedRead;
		}
	} else {
		//the stream hasn't yet been identified. Duplicate fread functionality to get all bits
		int unbufferedRead = 0;
		int rstatus;
		while(unbufferedRead < size * nItems)
		{
			rstatus = read(*stream, ptr, size * nItems - unbufferedRead);
			if(rstatus < 0)
			{
				fprintf(stderr, "Error while reading stream of unknown type. Error code %d\n", errno);
				break;
			} else if(rstatus == 0)
			{
				fprintf(stderr, "End of file while reading stream of unknown type\n");
				break;
			} else {
				unbufferedRead += rstatus;
				/*
				//wait 1/50th sec for more data on the target stream
				struct timespec remaining;
				struct timespec wait = {0, 20000000};
				nanosleep(&wait, &remaining );
				*/
			}
		}
		//fprintf(stderr, "Read %d bytes on unidentified stream\n", unbufferedRead);
		return unbufferedRead;
	}
}

static void id_file(char *f){
  int testFileDescriptor = -1, *test = &testFileDescriptor;
  unsigned char buffer[80];
  int ret;
  int tmp_video_hzn, tmp_video_hzd, tmp_video_an, tmp_video_ad;
  int extra_hdr_bytes;

  /* open it, look for magic */

  if(!strcmp(f,"-")){
    /* stdin */
    testFileDescriptor=3;
  }else{
    testFileDescriptor=open(f,O_RDONLY);
    if(testFileDescriptor == -1){
      fprintf(stderr,"Unable to open file %s.\n",f);
      exit(1);
    } else {
      fcntl(testFileDescriptor, F_SETFL, fcntl(testFileDescriptor, F_GETFL) & ~O_NONBLOCK);
    }
  }

  ret=fiforead(buffer, 1, 4, test);
  if(ret<4){
    fprintf(stderr,"EOF determining file type of file %s.\n",f);
    exit(1);
  }

  if(!memcmp(buffer,"RIFF",4)){
    /* possible WAV file */

    if(audio){
      /* umm, we already have one */
      fprintf(stderr,"Multiple RIFF WAVE files specified on command line.\n");
      exit(1);
    }

    /* Parse the rest of the header */

    ret=fiforead(buffer, 1, 4, test);
    ret=fiforead(buffer, 1, 4, test);
    fprintf(stderr, "Read %d bytes\n", ret);
    if(ret<4)goto riff_err;
    if(!memcmp(buffer,"WAVE",4)){

      while( (ret=fiforead(buffer, 1, 4, test)) && ret != 0){
        fprintf(stderr, "Read %d bytes\n", ret);
        if(ret<4)goto riff_err;
        if(!memcmp("fmt",buffer,3)){

          /* OK, this is our audio specs chunk.  Slurp it up. */

          ret=fiforead(buffer, 1, 20, test);
          fprintf(stderr, "Read %d bytes\n", ret);
          if(ret<20)goto riff_err;

          extra_hdr_bytes = (buffer[0]  + (buffer[1] << 8) +
                            (buffer[2] << 16) + (buffer[3] << 24)) - 16;

          if(memcmp(buffer+4,"\001\000",2)){
            fprintf(stderr,"The WAV file %s is in a compressed format; "
                    "can't read it.\n",f);
            exit(1);
          }

          audio_fd = testFileDescriptor;
          audio=&audio_fd;
          audio_ch=buffer[6]+(buffer[7]<<8);
          audio_hz=buffer[8]+(buffer[9]<<8)+
            (buffer[10]<<16)+(buffer[11]<<24);

          if(buffer[18]+(buffer[19]<<8)!=16){
            fprintf(stderr,"Can only read 16 bit WAV files for now.\n");
            exit(1);
          }

          /* read past extra header bytes */
          while(extra_hdr_bytes){
            int read_size = (extra_hdr_bytes > sizeof(buffer)) ?
             sizeof(buffer) : extra_hdr_bytes;
            ret = fiforead(buffer, 1, read_size, test);

            if (ret < read_size)
              goto riff_err;
            else
              extra_hdr_bytes -= read_size;
          }
          fprintf(stderr, "Aligning to data...\n");
          /* Now, align things to the beginning of the data */
          /* Look for 'dataxxxx' */
          while( (ret=fiforead(buffer, 1, 4, test)) && ret != 0){
            if(ret<4)
			  { fprintf(stderr, "ret is %d\n", ret);
				goto riff_err;}
            if(!memcmp("data",buffer,4)){
              /* We're there.  Ignore the declared size for now. */
              ret=fiforead(buffer, 1, 4, test);
              if(ret<4)goto riff_err;

              fprintf(stderr,"File %s is 16 bit %d channel %d Hz RIFF WAV audio.\n",
                      f,audio_ch,audio_hz);

              fcntl(testFileDescriptor, F_SETFL, fcntl(testFileDescriptor, F_GETFL) | O_NONBLOCK);
              return;
            }
          }
        }
      }
    }

    fprintf(stderr,"Couldn't find WAVE data in RIFF file %s.\n",f);
    exit(1);

  }
  if(!memcmp(buffer,"YUV4",4)){
    /* possible YUV2MPEG2 format file */
    /* read until newline, or 80 cols, whichever happens first */
    int i;
    for(i=0;i<79;i++){
      ret=fiforead(buffer+i, 1, 1, test);
      if(ret<1)goto yuv_err;
      if(buffer[i]=='\n')break;
    }
    if(i==79){
      fprintf(stderr,"Error parsing %s header; not a YUV2MPEG2 file?\n",f);
    }
    buffer[i]='\0';

    if(!memcmp(buffer,"MPEG",4)){
      char interlace;

      if(video){
        /* umm, we already have one */
        fprintf(stderr,"Multiple video files specified on command line.\n");
        exit(1);
      }

      if(buffer[4]!='2'){
        fprintf(stderr,"Incorrect YUV input file version; YUV4MPEG2 required.\n");
      }

      ret=sscanf((char *)buffer,"MPEG2 W%d H%d F%d:%d I%c A%d:%d",
                 &frame_x,&frame_y,&tmp_video_hzn,&tmp_video_hzd,&interlace,
                 &tmp_video_an,&tmp_video_ad);
      if(ret<7){
        fprintf(stderr,"Error parsing YUV4MPEG2 header in file %s.\n",f);
        exit(1);
      }

      /* update fps and aspect ratio globals if not specified in the command line */
      if (video_hzn==-1) video_hzn = tmp_video_hzn;
      if (video_hzd==-1) video_hzd = tmp_video_hzd;
      if (video_an==-1) video_an = tmp_video_an;
      if (video_ad==-1) video_ad = tmp_video_ad;

      if(interlace!='p'){
        fprintf(stderr,"Input video is interlaced; Theora handles only progressive scan\n");
        exit(1);
      }

      video_fd = testFileDescriptor;
      video=&video_fd;

      fprintf(stderr,"File %s is %dx%d %.02f fps YUV12 video.\n",
              f,frame_x,frame_y,(double)video_hzn/video_hzd);

      fcntl(testFileDescriptor, F_SETFL, fcntl(testFileDescriptor, F_GETFL) | O_NONBLOCK);
      return;
    }
  }
  fprintf(stderr,"Input file %s is neither a WAV nor YUV4MPEG2 file.\n",f);
  exit(1);

 riff_err:
  fprintf(stderr,"EOF parsing RIFF file %s.\n",f);
  exit(1);
 yuv_err:
  fprintf(stderr,"EOF parsing YUV4MPEG2 file %s.\n",f);
  exit(1);

}

int spinner=0;
char *spinascii="|/-\\";
void spinnit(void){
  spinner++;
  if(spinner==4)spinner=0;
  fprintf(stderr,"\r%c",spinascii[spinner]);
}

int fetch_and_process_audio(int *audio,ogg_page *audiopage,
                            ogg_stream_state *vo,
                            vorbis_dsp_state *vd,
                            vorbis_block *vb,
                            int audioflag){
  ogg_packet op;
  int i,j;

  while(audio && !audioflag){
    /* process any audio already buffered */
    spinnit();
    if(ogg_stream_pageout(vo,audiopage)>0) return 1;
    if(ogg_stream_eos(vo))return 0;

    {
      /* read and process more audio */
      signed char readbuffer[4096];
      int toread=4096/2/audio_ch;
      int bytesread=fiforead(readbuffer,1,toread*2*audio_ch,audio);
      int sampread=bytesread/2/audio_ch;
      float **vorbis_buffer;
      int count=0;

      if(bytesread<=0){
        /* end of file.  this can be done implicitly, but it's
           easier to see here in non-clever fashion.  Tell the
           library we're at end of stream so that it can handle the
           last frame and mark end of stream in the output properly */
        vorbis_analysis_wrote(vd,0);
      }else{
        vorbis_buffer=vorbis_analysis_buffer(vd,sampread);
        /* uninterleave samples */
        for(i=0;i<sampread;i++){
          for(j=0;j<audio_ch;j++){
            vorbis_buffer[j][i]=((readbuffer[count+1]<<8)|
                                 (0x00ff&(int)readbuffer[count]))/32768.f;
            count+=2;
          }
        }
        
        vorbis_analysis_wrote(vd,sampread);
        
      }

      while(vorbis_analysis_blockout(vd,vb)==1){
        
        /* analysis, assume we want to use bitrate management */
        vorbis_analysis(vb,NULL);
        vorbis_bitrate_addblock(vb);
        
        /* weld packets into the bitstream */
        while(vorbis_bitrate_flushpacket(vd,&op))
          ogg_stream_packetin(vo,&op);
        
      }
    }
  }

  return audioflag;
}

int fetch_and_process_video(int *video,ogg_page *videopage,
                            ogg_stream_state *to,
                            theora_state *td,
                            int videoflag){
  /* You'll go to Hell for using static variables */
  static int          state=-1;
  static unsigned char *yuvframe[2];
  unsigned char        *line;
  yuv_buffer          yuv;
  ogg_packet          op;
  int i, e;

  if(state==-1){
        /* initialize the double frame buffer */
    yuvframe[0]=malloc(video_x*video_y*3/2);
    yuvframe[1]=malloc(video_x*video_y*3/2);

        /* clear initial frame as it may be larger than actual video data */
        /* fill Y plane with 0x10 and UV planes with 0X80, for black data */
    memset(yuvframe[0],0x10,video_x*video_y);
    memset(yuvframe[0]+video_x*video_y,0x80,video_x*video_y/2);
    memset(yuvframe[1],0x10,video_x*video_y);
    memset(yuvframe[1]+video_x*video_y,0x80,video_x*video_y/2);

    state=0;
  }

  /* is there a video page flushed?  If not, work until there is. */
  while(!videoflag){
    spinnit();

    if(ogg_stream_pageout(to,videopage)>0) return 1;
    if(ogg_stream_eos(to)) return 0;

    {
      /* read and process more video */
      /* video strategy reads one frame ahead so we know when we're
         at end of stream and can mark last video frame as such
         (vorbis audio has to flush one frame past last video frame
         due to overlap and thus doesn't need this extra work */

      /* have two frame buffers full (if possible) before
         proceeding.  after first pass and until eos, one will
         always be full when we get here */

      for(i=state;i<2;i++){
        char c,frame[6];
        int ret=fiforead(frame,1,6,video);
        
	/* match and skip the frame header */
        if(ret<6)break;
        if(memcmp(frame,"FRAME",5)){
          fprintf(stderr,"Loss of framing in YUV input data..%s\n", frame);
          exit(1);
        }
        if(frame[5]!='\n'){
          int j;
          for(j=0;j<79;j++)
            if(fiforead(&c,1,1,video)&&c=='\n')break;
          if(j==79){
            fprintf(stderr,"Error parsing YUV frame header\n");
            exit(1);
          }
        }

        /* read the Y plane into our frame buffer with centering */
        line=yuvframe[i]+video_x*frame_y_offset+frame_x_offset;
        for(e=0;e<frame_y;e++){
          ret=fiforead(line,1,frame_x,video);
            if(ret!=frame_x) break;
          line+=video_x;
        }
        /* now get U plane*/
        line=yuvframe[i]+(video_x*video_y)
          +(video_x/2)*(frame_y_offset/2)+frame_x_offset/2;
        for(e=0;e<frame_y/2;e++){
          ret=fiforead(line,1,frame_x/2,video);
            if(ret!=frame_x/2) break;
          line+=video_x/2;
        }
        /* and the V plane*/
        line=yuvframe[i]+(video_x*video_y*5/4)
                  +(video_x/2)*(frame_y_offset/2)+frame_x_offset/2;
        for(e=0;e<frame_y/2;e++){
          ret=fiforead(line,1,frame_x/2,video);
            if(ret!=frame_x/2) break;
          line+=video_x/2;
        }
        state++;
      }

      if(state<1){
        /* can't get here unless YUV4MPEG stream has no video */
        fprintf(stderr,"Video input contains no frames.\n");
        exit(1);
      }

      /* Theora is a one-frame-in,one-frame-out system; submit a frame
         for compression and pull out the packet */

      {
        yuv.y_width=video_x;
        yuv.y_height=video_y;
        yuv.y_stride=video_x;

        yuv.uv_width=video_x/2;
        yuv.uv_height=video_y/2;
        yuv.uv_stride=video_x/2;

        yuv.y= yuvframe[0];
        yuv.u= yuvframe[0]+ video_x*video_y;
        yuv.v= yuvframe[0]+ video_x*video_y*5/4 ;
      }

      theora_encode_YUVin(td,&yuv);

      /* if there's only one frame, it's the last in the stream */
      if(state<2)
        theora_encode_packetout(td,1,&op);
      else
        theora_encode_packetout(td,0,&op);

      ogg_stream_packetin(to,&op);

      {
        unsigned char *temp=yuvframe[0];
        yuvframe[0]=yuvframe[1];
        yuvframe[1]=temp;
        state--;
      }

    }
  }
  return videoflag;
}

int main(int argc,char *argv[]){
  int c,long_option_index,ret;

  ogg_stream_state to; /* take physical pages, weld into a logical
                           stream of packets */
  ogg_stream_state vo; /* take physical pages, weld into a logical
                           stream of packets */
  ogg_page         og; /* one Ogg bitstream page.  Vorbis packets are inside */
  ogg_packet       op; /* one raw packet of data for decode */

  theora_state     td;
  theora_info      ti;
  theora_comment   tc;

  vorbis_info      vi; /* struct that stores all the static vorbis bitstream
                          settings */
  vorbis_comment   vc; /* struct that stores all the user comments */

  vorbis_dsp_state vd; /* central working state for the packet->PCM decoder */
  vorbis_block     vb; /* local working space for packet->PCM decode */

  int audioflag=0;
  int videoflag=0;
  int akbps=0;
  int vkbps=0;

  ogg_int64_t audio_bytesout=0;
  ogg_int64_t video_bytesout=0;
  double timebase;


  FILE* outfile = stdout;

#ifdef _WIN32 
# ifdef THEORA_PERF_DATA
    LARGE_INTEGER start_time;
    LARGE_INTEGER final_time;

    LONGLONG elapsed_ticks;
    LARGE_INTEGER ticks_per_second;
    
    LONGLONG elapsed_secs;
    LONGLONG elapsed_sec_mod;
    double elapsed_secs_dbl ;
# endif
  /* We need to set stdin/stdout to binary mode. Damn windows. */
  /* if we were reading/writing a file, it would also need to in
     binary mode, eg, fopen("file.wav","wb"); */
  /* Beware the evil ifdef. We avoid these where we can, but this one we
     cannot. Don't add any more, you'll probably go to hell if you do. */
  _setmode( _fileno( stdin ), _O_BINARY );
  _setmode( _fileno( stdout ), _O_BINARY );


#endif

  audio_buffer = malloc( sizeof(bufferFifo) );
  audio_buffer->totalBytes = 0;
  audio_buffer->head = NULL;
  audio_buffer->tail = NULL;

  video_buffer = malloc( sizeof(bufferFifo) );
  video_buffer->totalBytes = 0;
  video_buffer->head = NULL;
  video_buffer->tail = NULL;

  while((c=getopt_long(argc,argv,optstring,options,&long_option_index))!=EOF){
    switch(c){
    case 'o':
      outfile=fopen(optarg,"wb");
      if(outfile==NULL){
        fprintf(stderr,"Unable to open output file '%s'\n", optarg);
        exit(1);
      }
      break;;

    case 'a':
      audio_q=atof(optarg)*.099;
      if(audio_q<-.1 || audio_q>1){
        fprintf(stderr,"Illegal audio quality (choose -1 through 10)\n");
        exit(1);
      }
      audio_r=-1;
      break;

    case 'v':
      video_q=rint(atof(optarg)*6.3);
      if(video_q<0 || video_q>63){
        fprintf(stderr,"Illegal video quality (choose 0 through 10)\n");
        exit(1);
      }
      video_r=0;
      break;

    case 'A':
      audio_r=atof(optarg)*1000;
      if(audio_q<0){
        fprintf(stderr,"Illegal audio quality (choose > 0 please)\n");
        exit(1);
      }
      audio_q=-99;
      break;

    case 'V':
      video_r=rint(atof(optarg)*1000);
      if(video_r<45000 || video_r>2000000){
        fprintf(stderr,"Illegal video bitrate (choose 45kbps through 2000kbps)\n");
        exit(1);
      }
      video_q=0;
     break;

    case 's':
      video_an=rint(atof(optarg));
      break;

    case 'S':
      video_ad=rint(atof(optarg));
      break;

    case 'f':
      video_hzn=rint(atof(optarg));
      break;

    case 'F':
      video_hzd=rint(atof(optarg));
      break;

    default:
      usage();
    }
  }

  while(optind<argc){
    /* assume that anything following the options must be a filename */
    id_file(argv[optind]);
    optind++;
  }



#ifdef THEORA_PERF_DATA
# ifdef WIN32
    QueryPerformanceCounter(&start_time);
# endif
#endif


  /* yayness.  Set up Ogg output stream */
  srand(time(NULL));
  {
    /* need two inequal serial numbers */
    int serial1, serial2;
    serial1 = rand();
    serial2 = rand();
    if (serial1 == serial2) serial2++;
    ogg_stream_init(&to,serial1);
    ogg_stream_init(&vo,serial2);
  }

  /* Set up Theora encoder */
  if(!video){
    fprintf(stderr,"No video files submitted for compression?\n");
    exit(1);
  }
  /* Theora has a divisible-by-sixteen restriction for the encoded video size */
  /* scale the frame size up to the nearest /16 and calculate offsets */
  video_x=((frame_x + 15) >>4)<<4;
  video_y=((frame_y + 15) >>4)<<4;
  /* We force the offset to be even.
     This ensures that the chroma samples align properly with the luma
      samples. */
  frame_x_offset=((video_x-frame_x)/2)&~1;
  frame_y_offset=((video_y-frame_y)/2)&~1;

  theora_info_init(&ti);
  ti.width=video_x;
  ti.height=video_y;
  ti.frame_width=frame_x;
  ti.frame_height=frame_y;
  ti.offset_x=frame_x_offset;
  ti.offset_y=frame_y_offset;
  ti.fps_numerator=video_hzn;
  ti.fps_denominator=video_hzd;
  ti.aspect_numerator=video_an;
  ti.aspect_denominator=video_ad;
  ti.colorspace=OC_CS_UNSPECIFIED;
  ti.pixelformat=OC_PF_420;
  ti.target_bitrate=video_r;
  ti.quality=video_q;

  ti.dropframes_p=0;
  ti.quick_p=1;
  ti.keyframe_auto_p=1;
  ti.keyframe_frequency=64;
  ti.keyframe_frequency_force=64;
  ti.keyframe_data_target_bitrate=video_r*1.5;
  ti.keyframe_auto_threshold=80;
  ti.keyframe_mindistance=8;
  ti.noise_sensitivity=1;

  theora_encode_init(&td,&ti);
  theora_info_clear(&ti);

  /* initialize Vorbis too, assuming we have audio to compress. */
  if(audio){
    vorbis_info_init(&vi);
	if(audio_hz > 192000){
		audio_hz = audio_hz / 100;
	}
    if(audio_q>-99)
      ret = vorbis_encode_init_vbr(&vi,audio_ch,audio_hz,audio_q);
    else
      ret = vorbis_encode_init(&vi,audio_ch,audio_hz,-1,audio_r,-1);
    if(ret){
      fprintf(stderr,"The Vorbis encoder could not set up a mode according to\n"
              "the requested quality or bitrate.\nDetected audio at %d hz,\n%d\n", audio_hz, audio_r);
      exit(1);
    }

    vorbis_comment_init(&vc);
    vorbis_analysis_init(&vd,&vi);
    vorbis_block_init(&vd,&vb);
  }

  /* write the bitstream header packets with proper page interleave */

  /* first packet will get its own page automatically */
  theora_encode_header(&td,&op);
  ogg_stream_packetin(&to,&op);
  if(ogg_stream_pageout(&to,&og)!=1){
    fprintf(stderr,"Internal Ogg library error.\n");
    exit(1);
  }
  fwrite(og.header,1,og.header_len,outfile);
  fwrite(og.body,1,og.body_len,outfile);

  /* create the remaining theora headers */
  theora_comment_init(&tc);
  theora_encode_comment(&tc,&op);
  ogg_stream_packetin(&to,&op);
  theora_encode_tables(&td,&op);
  ogg_stream_packetin(&to,&op);

  if(audio){
    ogg_packet header;
    ogg_packet header_comm;
    ogg_packet header_code;

    vorbis_analysis_headerout(&vd,&vc,&header,&header_comm,&header_code);
    ogg_stream_packetin(&vo,&header); /* automatically placed in its own
                                         page */
    if(ogg_stream_pageout(&vo,&og)!=1){
      fprintf(stderr,"Internal Ogg library error.\n");
      exit(1);
    }
    fwrite(og.header,1,og.header_len,outfile);
    fwrite(og.body,1,og.body_len,outfile);

    /* remaining vorbis header packets */
    ogg_stream_packetin(&vo,&header_comm);
    ogg_stream_packetin(&vo,&header_code);
  }

  /* Flush the rest of our headers. This ensures
     the actual data in each stream will start
     on a new page, as per spec. */
  while(1){
    int result = ogg_stream_flush(&to,&og);
      if(result<0){
        /* can't get here */
        fprintf(stderr,"Internal Ogg library error.\n");
        exit(1);
      }
    if(result==0)break;
    fwrite(og.header,1,og.header_len,outfile);
    fwrite(og.body,1,og.body_len,outfile);
  }
  if(audio){
    while(1){
      int result=ogg_stream_flush(&vo,&og);
      if(result<0){
        /* can't get here */
        fprintf(stderr,"Internal Ogg library error.\n");
        exit(1);
      }
      if(result==0)break;
      fwrite(og.header,1,og.header_len,outfile);
      fwrite(og.body,1,og.body_len,outfile);
    }
  }

  /* setup complete.  Raw processing loop */
  fprintf(stderr,"Compressing....\n");
  while(1){
    ogg_page audiopage;
    ogg_page videopage;

    /* is there an audio page flushed?  If not, fetch one if possible */
    audioflag=fetch_and_process_audio(audio,&audiopage,&vo,&vd,&vb,audioflag);

    /* is there a video page flushed?  If not, fetch one if possible */
    videoflag=fetch_and_process_video(video,&videopage,&to,&td,videoflag);

    /* no pages of either?  Must be end of stream. */
    if(!audioflag && !videoflag)break;

    /* which is earlier; the end of the audio page or the end of the
       video page? Flush the earlier to stream */
    {
      int audio_or_video=-1;
      double audiotime=
        audioflag?vorbis_granule_time(&vd,ogg_page_granulepos(&audiopage)):-1;
      double videotime=
        videoflag?theora_granule_time(&td,ogg_page_granulepos(&videopage)):-1;

      if(!audioflag){
        audio_or_video=1;
      } else if(!videoflag) {
        audio_or_video=0;
      } else {
        if(audiotime<videotime)
          audio_or_video=0;
        else
          audio_or_video=1;
      }

      if(audio_or_video==1){
        /* flush a video page */
        video_bytesout+=fwrite(videopage.header,1,videopage.header_len,outfile);
        video_bytesout+=fwrite(videopage.body,1,videopage.body_len,outfile);
        videoflag=0;
        timebase=videotime;
        
      }else{
        /* flush an audio page */
        audio_bytesout+=fwrite(audiopage.header,1,audiopage.header_len,outfile);
        audio_bytesout+=fwrite(audiopage.body,1,audiopage.body_len,outfile);
        audioflag=0;
        timebase=audiotime;
      }
      {
        int hundredths=timebase*100-(long)timebase*100;
        int seconds=(long)timebase%60;
        int minutes=((long)timebase/60)%60;
        int hours=(long)timebase/3600;
        
        if(audio_or_video)
          vkbps=rint(video_bytesout*8./timebase*.001);
        else
          akbps=rint(audio_bytesout*8./timebase*.001);
        
        fprintf(stderr,
                "\r      %d:%02d:%02d.%02d audio: %dkbps video: %dkbps                 ",
                hours,minutes,seconds,hundredths,akbps,vkbps);
      }
    }

  }

  /* clear out state */

  if(audio){
    ogg_stream_clear(&vo);
    vorbis_block_clear(&vb);
    vorbis_dsp_clear(&vd);
    vorbis_comment_clear(&vc);
    vorbis_info_clear(&vi);
  }
  if(video){
    ogg_stream_clear(&to);
    theora_clear(&td);
  }

  if(outfile && outfile!=stdout)fclose(outfile);

  fprintf(stderr,"\r   \ndone.\n\n");

#ifdef THEORA_PERF_DATA
# ifdef WIN32
    QueryPerformanceCounter(&final_time);
    elapsed_ticks = final_time.QuadPart - start_time.QuadPart;
    ticks_per_second;
    QueryPerformanceFrequency(&ticks_per_second);
    elapsed_secs = elapsed_ticks / ticks_per_second.QuadPart;
    elapsed_sec_mod = elapsed_ticks % ticks_per_second.QuadPart;
    elapsed_secs_dbl = elapsed_secs;
    elapsed_secs_dbl += ((double)elapsed_sec_mod / (double)ticks_per_second.QuadPart);
    printf("Encode time = %lld ticks\n", elapsed_ticks);
    printf("~%lld and %lld / %lld seconds\n", elapsed_secs, elapsed_sec_mod, ticks_per_second.QuadPart);
    printf("~%Lf seconds\n", elapsed_secs_dbl);
# endif

#endif 

  return(0);

}
