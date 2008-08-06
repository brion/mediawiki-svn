<?php
$cur_path = $IP = dirname(__FILE__);
//include commandLine.inc from the mediaWiki maintance dir: 
require_once ('../../../maintenance/commandLine.inc');

define('MV_DOWNLOAD_DIR', '/metavid/video_archive/');
define('MV_ARCHIVE_ORG_DL', 'http://www.archive.org/download/mv_');


//for gennerate flv metadata:
include_once('../skins/mv_embed/flvServer/MvFlv.php');

if (count($args) == 0 || isset ($options['help'])) {
	print "
	Downloads files from archive.org to configured directory:{$mvDownloadDir}

	options keyword: 
		all 		  //to get all
		[stream_name] //to grab a specifc stream

";
}else{
	proccess_streams($args[0]);
}

function proccess_streams($stream_name='all'){
	if($stream_name=='all'){
		$sql = "SELECT * FROM `mv_streams` LIMIT 0, 5000";
	}else{
		$sql = "SELECT * FROM `mv_streams` WHERE `name` ={$stream_name}";
	}
	$dbr = wfGetDB(DB_READ);
	$result = $dbr->query($sql);
	while($stream = $dbr->fetchObject($result) ){		
		$local_fl = MV_DOWNLOAD_DIR . $stream->name.'.flv';
		$remote_fl = MV_ARCHIVE_ORG_DL . $stream->name.'/'.$stream->name.'.flv';
		
		if(remotefsize($remote_fl)<100000){
			print "remote file: $remote_fl < 100k  (skipping) \n";
			continue;  
		}
		//senate_proceeding_08-01-07/senate_proceeding_08-01-07.flv
		//check local file size matches remote: 
		if(is_file($local_fl)){
			print "file $local_fl present";
			if( filesize($local_fl)!=remotefsize($remote_fl)){
				echo ' local:'. formatbytes(filesize($local_fl)). 
						' != remote:' . formatbytes(remotefsize($remote_fl))."\n";
				echo 'attempting to resume: ' . "\n";
				curldownload($remote_fl, $local_fl);				
			}else{
				echo ' sizes match: ' . formatbytes(filesize($local_fl)) .'='.
						formatbytes(remotefsize($remote_fl))."\n";					
			}							
		}else{
			echo "DL it: $remote_fl \n";
			if(curldownload($remote_fl, $local_fl)){
				echo 'succesfully grabed '.$remote_fl."\n"; 
			};			
		}
		if(!is_file($local_fl). META_DATA_EXT){
			echo "gennerating flv metadata\n";		
			$flv = new MyFLV();
			try {
				$flv->open( $local_fl );
			} catch (Exception $e) {
				die("<pre>The following exception was detected while trying to open a FLV file:\n" . $e->getMessage() . "</pre>");
			}
			$flv->getMetaData();
			echo "done with .meta (" . filesize($local_fl.META_DATA_EXT).") \n";
		}
	}
	
}
function curldownload($remote_file, $local_file){
	$pid = simple_run_background("curl -L -C - -o $local_file $remote_file");
	print "started download with pid: $pid \n";
	$remote_size = remotefsize($remote_file);
	$prev_byte=0;
	while (is_process_running($pid)) {
		$speed =hr_bytes( (filesize($local_file) - $prev_byte)/10);
		echo "downloaded (" .hr_bytes(filesize($local_file)).' of '. hr_bytes($remote_size). ") " . $speed. "/s \n";
		$prev_byte= filesize($local_file);
		clearstatcache();
		sleep(10);
	}
	return true;
}
function download ($file_source, $file_target, $sn){
  // Preparations
  $file_source = str_replace(' ', '%20', html_entity_decode($file_source)); // fix url format
  if (file_exists($file_target)) { chmod($file_target, 0777); } // add write permission
  $remote_size = remotefsize($file_source);
  // Begin transfer
  if (($rh = fopen($file_source, 'rb')) === FALSE) { return false; } // fopen() handles
  if (($wh = fopen($file_target, 'wb')) === FALSE) { return false; } // error messages.
  $i=0;
  while (!feof($rh)){
  	//report progress every 2000
  	if($i==2000){
  		$i=0;
  		$lfs = filesize($file_target);  		
  		print formatbytes($lfs) .' of '. formatbytes($remote_size)." of $sn \n";
  		clearstatcache();
  	}
  	$i++;
    // unable to write to file, possibly because the harddrive has filled up
    if (fwrite($wh, fread($rh, 8192)) === FALSE) { 
    	fclose($rh); fclose($wh); return false; 
    }
  }

  // Finished without errors
  fclose($rh);
  fclose($wh);
  return true;
}
function formatbytes($val, $digits = 4, $mode = "SI", $bB = "B"){ //$mode == "SI"|"IEC", $bB == "b"|"B"
        $si = array("", "k", "M", "G", "T", "P", "E", "Z", "Y");
        $iec = array("", "Ki", "Mi", "Gi", "Ti", "Pi", "Ei", "Zi", "Yi");
        switch(strtoupper($mode)) {
            case "SI" : $factor = 1000; $symbols = $si; break;
            case "IEC" : $factor = 1024; $symbols = $iec; break;
            default : $factor = 1000; $symbols = $si; break;
        }
        switch($bB) {
            case "b" : $val *= 8; break;
            default : $bB = "B"; break;
        }
        for($i=0;$i<count($symbols)-1 && $val>=$factor;$i++)
            $val /= $factor;
        $p = strpos($val, ".");
        if($p !== false && $p > $digits) $val = round($val);
        elseif($p !== false) $val = round($val, $digits-$p);
        return round($val, $digits) . " " . $symbols[$i] . $bB;
 }
  
    function remotefsize($url) {
        //$sch = parse_url($url, PHP_URL_SCHEME);
        //if (($sch != "http") && ($sch != "https") && ($sch != "ftp") && ($sch != "ftps")) {
        //    return false;
        //}
        $sch='http';
        if (($sch == "http") || ($sch == "https")) {
            $headers = get_headers($url, 1);
            if ((!array_key_exists("Content-Length", $headers))) { return false; }
            return $headers["Content-Length"];
        }
        if (($sch == "ftp") || ($sch == "ftps")) {
            $server = parse_url($url, PHP_URL_HOST);
            $port = parse_url($url, PHP_URL_PORT);
            $path = parse_url($url, PHP_URL_PATH);
            $user = parse_url($url, PHP_URL_USER);
            $pass = parse_url($url, PHP_URL_PASS);
            if ((!$server) || (!$path)) { return false; }
            if (!$port) { $port = 21; }
            if (!$user) { $user = "anonymous"; }
            if (!$pass) { $pass = "phpos@"; }
            switch ($sch) {
                case "ftp":
                    $ftpid = ftp_connect($server, $port);
                    break;
                case "ftps":
                    $ftpid = ftp_ssl_connect($server, $port);
                    break;
            }
            if (!$ftpid) { return false; }
            $login = ftp_login($ftpid, $user, $pass);
            if (!$login) { return false; }
            $ftpsize = ftp_size($ftpid, $path);
            ftp_close($ftpid);
            if ($ftpsize == -1) { return false; }
            return $ftpsize;
        }
    }    
function simple_run_background($command){
	$PID = shell_exec("nohup $command > /dev/null & echo $!");
	return $PID;
}
//Verifies if a process is running in linux
function is_process_running($PID){
	$ProcessState='';
	exec("ps $PID", $ProcessState);
	return(count($ProcessState) >= 2);
}
function hr_bytes($size) {
        $a = array("B", "KB", "MB", "GB", "TB", "PB");
        $pos = 0;        
        while ($size >= 1024) {
                $size /= 1024;
                $pos++;
        }
        return round($size,2)." ".$a[$pos];
}

?>