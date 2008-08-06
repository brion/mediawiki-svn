//javascript for all pages (adds auto_complete for search, and our linkback logo, and re-writes mvd links)

mv_addLoadEvent(mv_setup_allpage); 	
var mv_setup_allpage_flag=false;
var base_roe_url = wgServer + wgScript + '?title=Special:MvExportStream&feed_format=roe&stream_name=';
var gMvd={}; 
function mv_setup_allpage(){	
	js_log("mv embed done loading now setup 'all page'");
	//make sure we have jQuery and any base requried libs: 
	mvJsLoader.doLoad(mvEmbed.lib_jquery, function(){			
 		_global['$j'] = jQuery.noConflict();	
 		js_log('allpage_ did jquery check');
 		var reqLibs = {'$j.fn.autocomplete':'jquery/plugins/jquery.autocomplete.js',
 					   '$j.fn.hoverIntent':'jquery/plugins/jquery.hoverIntent.js'};
 		mvJsLoader.doLoad(
 			reqLibs, function(){
	 				//js_log('allpage_ auto and hover check'+mv_setup_allpage_flag);
					if(!mv_setup_allpage_flag){					   		
						mv_setup_search_ac();
						mv_do_mvd_link_rewrite();												
						mv_page_specific_rewrites();
						//set the flag:					
						mv_setup_allpage_flag=true; 				
					}
				});
	});		
}
function mv_page_specific_rewrites(){
	var mvAskTitle = 'Special:MvExportAsk';
	var rssImg = '<img border="0" src="'+wgScriptPath+'/extensions/MetavidWiki/skins/images/feed-icon-28x28.png"/>';
	var msg_video_rss = 'video rss';
	if($j('#NOTITLEHACK').length!=0)$j('.firstHeading').hide();	
	//add in rss-media feed link if on Special:Ask page
	if(typeof wgPageName!='undefined'){
		if(wgPageName=='Special:Ask'){
			js_log("url : " + document.location);
			var sURL = parseUri(document.location);				
			var podLink=wgArticlePath.replace('$1',  mvAskTitle);
			if(sURL.queryKey['title']){
				//pass along all url params (update the title) 
				podLink+='?';
				for(i in sURL.queryKey){
					if(i !='title')podLink+=i+'='+sURL.queryKey[i]+'&';
				}			
			}else{
				// /title/askparam format	
				var pInx =sURL.relative.indexOf(wgPageName);
				if(pInx!==false){
					podLink+= sURL.relative.substring(pInx+wgPageName.length);
				}
			}
			//@@todo add to javascript msg system
			$j('#bodyContent').before('<span style="float: right;"><a title="'+
					msg_video_rss+'" href="'+podLink+'">'+ rssImg + '</a></span>');
		}
	}
	//move the search filter if #msms_form_search_row
	if($j('#msms_form_search_row').get(0)!=null){
		$j('#msms_form_search_row').appendTo("#searchHeader");
	} 
	//if we have an inline query add a search link
	$j('.smwtable').each(function(){
		if($j('#'+this.id+' .smwfooter a').length!=0){
			var pLink = $j('#'+this.id+' .smwfooter a').attr('href').replace('Special:Ask',mvAskTitle );		
			var colspan = $j('.smwfooter .sortbottom').attr('colspan');
			var pHTML = '<a title="'+msg_video_rss+'" href="'+pLink+'">'+rssImg+'</a>';
			js_log("plink: "+pLink + ' colspan:'+ colspan + ' ph:'+pHTML);
			$j('#'+this.id+' tbody').prepend('<tr><td colspan="'+colspan+'">'+pHTML+'</td></tr>');		
		}
	});	
}
function mv_do_mvd_link_rewrite(){
	js_log('mv_do_mvd_link_rewrite');
	var patt_mvd = new RegExp("MVD:([^:]*):([^\/]*)\/([0-9]+:[0-9]+:[^\/]+)\/([0-9]+:[0-9]+:[^\&]+)(&?.*)");
	var i =0;
	$j('a').each(function(){
		if(this.href.indexOf('Special:')==-1 && this.href.indexOf('action=')==-1){
			titleTest = this.title.match(patt_mvd);
			if(titleTest){
				res = this.href.match(patt_mvd);		
				if(res){			
					if(res[5]!='')return ;
					//skip if res[4] not at end:
					//js_log(res);
					i++;
					if(!gMvd[i])gMvd[i]={};
					gMvd[i]['url']=res[0];
					gMvd[i]['sn']=res[2]; //stream name
					gMvd[i]['st']=res[3]; //start time
					gMvd[i]['et']=res[4]; //end time
					
					//js_log(this.href);			
					//js_log(res);
					//replace with: 
					//TEMP:					
					$j(this).replaceWith('<div id="mvd_link_'+i+'" ' +
							'style="vertical-align: bottom;margin:.5em;border:solid thin black;width:300px;height:60px;">' +
								get_mvdrw_img(i)  + 
							'</div>');							
					$j('#mv_mvd_ex_'+i).click(function(){
						inx = this.id.substr(10);
						mv_ext(inx);
					});
					$j('#mv_pglink_'+i).click(function(){
						inx = this.id.substr(10);
						js_log('inx: '+ inx);
						window.location=wgArticlePath.replace('$1',gMvd[inx]['url']);
					})
				}	
			}
		}		
	});
	js_log('got to I: '+i);
	$j('#mvd_link_'+i).after('<div style="clear:both"></div>')
}
function get_mvdrw_img(i, size){
	var size = (!size)?{'w':80,'h':60}:size;
	var stream_link = wgScript+'?title=Stream:'+gMvd[i]['sn']+'/'+gMvd[i]['st']+'/'+gMvd[i]['et'];
	var stream_desc = gMvd[i]['sn'].substr(0,1).toUpperCase() + gMvd[i]['sn'].substr(1).replace('_', ' ')+' '+ gMvd[i]['st'] + ' to '+ gMvd[i]['et'];
	//@@todo localize javascript msg
	var wiki_link = '<span title="Original Wiki Page" id="mv_pglink_'+i+'" style="cursor:pointer;width:16px;height:16px;float:left;background:url(\''+wgScriptPath+'/extensions/MetavidWiki/skins/images/run_mediawiki.png\');"/>';
	var expand_link = '<span title="Expand Clip"  id="mv_mvd_ex_'+i+'" style="cursor:pointer;width:16px;height:16px;float:left;background:url(\''+wgScriptPath+'/extensions/MetavidWiki/skins/images/closed.png\');"/>';
	var img_url = wgScript+'?action=ajax&rs=mv_frame_server&stream_name='+gMvd[i]['sn']+'&t='+gMvd[i]['st']+'&size=icon';
	return '<img id="mvd_link_im_'+i+'" onclick="mv_ext('+i+')" ' +
				'style="cursor:pointer;float:left;height:'+size['h']+'px;width:'+size['w']+'px;" src="'+img_url+'">'+expand_link+wiki_link+' '+
					'<a title="'+stream_desc+'" href="'+stream_link+'">'+stream_desc+'</a><br>';
}
function mv_ext(inx){
	//grow the window to 300+240 540	
	js_log('i: is '+ inx);
	$j('#mvd_link_'+inx).animate({width:'440px','height':'305px'},1000);
	$j('#mvd_link_im_'+inx).animate({width:'320px','height':'240px'},1000,function(){
		//do mv_embed swap
		$j('#mvd_link_im_'+inx).replaceWith('<video autoplay="true" id="mvd_vid_'+inx +'">');
		$j('#mvd_vid_'+inx).attr('roe', base_roe_url + gMvd[inx]['sn']+'&t='+gMvd[inx]['st']+'/'+gMvd[inx]['et']);
		init_mv_embed(true);		
	});
	$j('#mv_mvd_ex_'+inx).css('background', 'url(\''+wgScriptPath+'/extensions/MetavidWiki/skins/images/opened.png\')');
	$j('#mv_mvd_ex_'+inx).unbind();
	$j('#mv_mvd_ex_'+inx).click(function(){
		inx = this.id.substr(10);
		mv_cxt(inx);
	});
	js_log('did mv ex');
}
function mv_cxt(inx){
	//stop the video: 
	$j('#mvd_vid_'+inx).get(0).stop();
	//replace the html: 
	$j('#mvd_link_'+inx).html(get_mvdrw_img(inx, {'w':320,'h':240}));	
	$j('#mvd_link_'+inx).animate({width:'300px','height':'60px'},1000);
	$j('#mvd_link_im_'+inx).animate({width:'80px','height':'60px'},1000);
	$j('#mv_mvd_ex_'+inx).css('background', 'url(\''+wgScriptPath+'/extensions/MetavidWiki/skins/images/closed.png\')');
	$j('#mv_mvd_ex_'+inx).unbind();
	$j('#mv_mvd_ex_'+inx).click(function(){
		inx = this.id.substr(10);
		mv_ext(inx);
	});
}
/* toggles advanced search */ 
function mv_toggle_advs(){		
	if($j('#advs').val()=='0'){
		$j('#advs').val('1');
		//sync values from basic -> avanced		
		$j("input[@name$='f[0][v]']").val( $j('#search_field').val() );
		
		$j('.advs_basic').fadeOut('fast',function(){
			$j('.advanced_search_tag').before('<span id="tmp_loading_txt">'+getMsg('loading_txt')+'</span>');
			//check for adv search lib and load: @@todo ../ path is not very graceful
			mvJsLoader.doLoad({'mv_setup_search':'../mv_search.js'}, function(){
				$j('#tmp_loading_txt').remove();
				$j('.advs_adv').fadeIn('fast');	
				//give some extra room for advanced search: 
				$j('#frontPageTop').animate({'height':'300px'},'fast');
			});						
		});				
	}else{
		$j('#advs').val('0');
		//sync values from advanced -> basic
		$j('#search_field').val( $j("input[@name$='f[0][v]']").val() );
		//do style display swap
		$j('.advs_adv').fadeOut('fast',function(){
			$j('.advs_basic').fadeIn('fast');
			$j('#frontPageTop').animate({'height':'233px'},'fast');
		});		
	}
}
function mv_setup_search_ac(){
	var uri = wgScript;
	//add the person choices div to searchInput
	//turn off browser baseed autocomplete: 
	$j('#search_field').attr('autocomplete',"off");
	
	//add the sugestions div (abolute positioned so it can be ontop of everything) 	
	$j('body').prepend('<div id="suggestions" style="position:absolute;display:none;z-index:50;">'+
							'<div id="suggestionsTop"></div>'+
								'<div id="suggestionsInner" class="suggestionsBox">'+
								'</div>'+
							'<div id="suggestionsBot"></div>'+						
						'</div>');
	//position the sugestions below the search field:
	if( $j('#search_field').get(0)!=null){
		sf_pos = $j('#search_field').offset();
		sf_pos['top']=sf_pos['top']+40;
		sf_pos['left']=sf_pos['left']-220;
		js_log("moved sugest to: " + sf_pos['top'] + ' '+ sf_pos['left']);
		$j('#suggestions').css(sf_pos);
	}
	
	//add hook:
	$j('#search_field').autocomplete(
		uri,
		{
			autoFill:false,
			onItemSelect:function(v){		
				//alert('selected:' + v.innerHTML + ' page:'+$j('#searchInput').val());	
				//jump to page: 			
				if($j('#search_field').val()=='do_search'){
					qs = v.innerHTML.toLowerCase().indexOf('<b>')+3;
					qe = v.innerHTML.toLowerCase().indexOf('</b>');
					//update the search input (incase redirect fails)
					$j('#search_field').val(v.innerHTML.substring(qs,qe));
					window.location=uri+'/'+'Special:MediaSearch?mv_search='+v.innerHTML.substring(qs,qe);
				}else{
					window.location =uri+'/'+$j('#search_field').val();
				}
			},
			formatItem:function(row){
				if(row[0]=='do_search'){
					return '<span class="ac_txt">'+row[1].replace('$1',$j('#search_field').val())+'</span>';
				}else if(row[2]=='no_image'){
					return '<span class="ac_txt">'+row[1]+'</span>';
				}else{
					return '<img width="44" src="'+ row[2] + '"><span class="ac_img_txt">'+row[1]+'</span>';
				}
			},
			matchSubset:0,
			extraParams:{action:'ajax',rs:'mv_auto_complete_all'},
			paramName:'rsargs[]',
			resultElem:'#suggestionsInner',
			resultContainer:'#suggestions'							
		});
}