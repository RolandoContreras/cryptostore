var scroll_position,myVideo,myVideo_start=0, open_popup_checker=0, subscribe_window_checker=0, timeout2, video_promo_frame;
var iframe2 = document.getElementById('video_promo_frame2');
if (document.getElementById('video_promo_frame')){
var iframe = document.getElementById('video_promo_frame');
 var player = new Vimeo.Player(iframe); 
}
if (getInternetExplorerVersion()!=-1){
	document.body.className = document.body.className+' for_ie';
}
function getInternetExplorerVersion()
                            {
                                var rv = -1;
                                if (navigator.appName == 'Microsoft Internet Explorer')
                                {
                                    var ua = navigator.userAgent;
                                    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
                                    if (re.exec(ua) != null)
                                        rv = parseFloat( RegExp.$1 );
                              
								}
                                else if (navigator.appName == 'Netscape')
                                {
                                    var ua = navigator.userAgent;
									
                                    var re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
									var re2  = new RegExp("Edge/.([0-9]{1,}[\.0-9]{0,})");
                                    if (re.exec(ua) != null || re2.exec(ua) != null)
                                        rv = parseFloat( RegExp.$1 );
                                } 
                                return rv;
                            }

$(document).ready(function(){
function header__fixed(){
	scroll_position =   self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
		if (scroll_position>70){
			$('.header').addClass('header__fixed');
		} else {
			$('.header').removeClass('header__fixed');
		}
}
if ($('.header').length){
	header__fixed();
	$(window).on('scroll', function(){
			header__fixed();
								});
}
	
if ($('#main_countdown').length){
	
	var shortcode_date2 = $("#main_countdown").data("event-starts");
	var current_time = new Date($("#main_countdown").attr('val')).getTime();

	countTo = new Date(shortcode_date2);
	
function initCountdown2(){
	
	var timerSeconds2 = setInterval(function() {
		
	    now2 = current_time;
		current_time = current_time+1000;
		
		now = new Date(now2);
		countTo = new Date(shortcode_date2);
		
		if(now > countTo){
	    	console.log("DONE")
	    	clearInterval(timerSeconds2)
	    	return
	    }
		
		difference = (countTo-now);

	    var second = Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1 );
	    var minute = Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1 );	
	    var hour = Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1) ;
	    var day = Math.floor(difference/(60*60*1000*24)*1);


	if (day>7){
		
		var week = Math.floor(day/7); 
			//day = day - week*7;
	} else {
		var week = 0;
	}
		if (week>9){
			week +='';	
		} else {
			week ='0'+week;	
		}
	
		if (day>9){
			day +='';	
		} else {
			day ='0'+day;	
		}
		if (hour>9){
			hour +='';	
		} else {
			hour ='0'+hour;	
		}
		if (second>9){
			second +='';	
		} else {
			second ='0'+second;	
		}
		if (minute>9){
			minute +='';	
		} else {
			minute ='0'+minute;	
		}

		if ($('#intelligence__counter2').length){
$('#ai_counter__days2').text(day);
$('#ai_counter__hours2').text(hour);
$('#ai_counter__min2').text(minute);
$('#ai_counter__sec2').text(second);			
		}

$('#ai_counter__days').text(day);
$('#ai_counter__hours').text(hour);
$('#ai_counter__min').text(minute);
$('#ai_counter__sec').text(second);


	    
	}, 1000);

}
initCountdown2();
}	

window.addEventListener("orientationchange", function() {
    	scroll_position =   self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
		$('html,body').animate({scrollTop:scroll_position},0);
		$('.mobile_bag_clicker').click();
    }, false);
$('.mobile_bag_clicker').on('click', function(){
		$('.mobile_bag_clicker').css({'display':'block','height':'50px'});	
		setTimeout(function(){ $('.mobile_bag_clicker').removeAttr('style'); },200);
										 		});
	$('.ml-block-form').on('submit', function(){
				$(this).find('input[type="email"]').focus();
										 	 });

	
	$('.distribution_question_clicker').on('click', function(){
		if ($(this).parents('.distribution_question').hasClass('question_opened')){
			$(this).parents('.distribution_question').removeClass('question_opened');
		} else {
			$(this).parents('.distribution_question').addClass('question_opened');
		}
	});	
	
	if ($('.header__menu').length && $('.popup-menu__content').length){
		$('.popup-menu__content').html($('.header__menu').html());
	}
	$('.popup-menu__content ul li a').on('click', function(){
		$('#popup-menu').removeAttr('style');
		$('html').removeClass('hide_scroll');
		$('#popup-menu .popup_block').removeClass('popup_block__top');
	}); 
	

	
	
$('.text__more a').on('click', function () {
        var dval = $(this).attr('val');
        $(this).attr('val',$(this).text());
        if ($(this.parentNode).hasClass('text__open')) {
            $($(this).attr('href')).slideUp();
            $(this).text(dval).parent().removeClass('text__open');
        } else {
            $($(this).attr('href')).slideDown();
            $(this).text(dval).parent().addClass('text__open');
        }
        return false;
    });
	
	

	
	
	if ($('#video_file_1').length){
		$('#video_file_1').css('visibility','hidden');
		$('#represent__video .represent__description').removeAttr('style');
	
		
		//$(window).on('load', function(){	});	
		 myVideo=document.getElementById('video_file_1');

		function  video_playing(){
			
		if (myVideo_start!=1){
			
		scroll_position =   self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
		if ((scroll_position)>($(myVideo).offset().top-$('body').height()/2) && (scroll_position)<($(myVideo).offset().top+$('body').height()/2) ){
	
		myVideo.play();
		
		//myVideo_start=1;
		}
			}
	}

if (device.mobile()==true || device.tablet()==true  ){	}
		else {	
	myVideo.addEventListener("ended", function() { 
		$(myVideo).remove();
		$('#represent__video .represent__description').removeAttr('style');
		myVideo_start=1;
	});
		myVideo.addEventListener("play", function() { 
			$('#video_file_1').css('visibility','visible');
			$('#represent__video .represent__description').hide();
		});

	$(window).on('scroll', function(){
		video_playing();
	});
		video_playing();
	}
	}
	
	

	/*newsletter-form2*/
	if ($('#newsletter-form5').length){	
  $('#newsletter-form5').trigger('reset');

 $("#newsletter-form5").validate({
       rules:{ 
			mail:{ required: true, email:true}
       },
       messages:{
			 mail:{required: '', email: ''}
       },
         submitHandler: function(form) { }
    });
						   }
	/*newsletter-form2 END*/
	/*newsletter-form2*/
	if ($('#newsletter-form2').length){	
  $('#newsletter-form2').trigger('reset');

						   }
	/*newsletter-form2 END*/
	/*newsletter-form3*/
	if ($('#newsletter-form3').length){	
  $('#newsletter-form3').trigger('reset');

 $("#newsletter-form3").validate({
       rules:{ 
			mail:{ required: true, email:true}
       },
       messages:{
			 mail:{required: '', email: ''}
       },
         submitHandler: function(form) { }
    });
						   }
	/*newsletter-form3 END*/
	
/*newsletter-form*/
	if ($('#newsletter-form').length){	
  $('#newsletter-form').trigger('reset');

 $("#newsletter-form").validate({
       rules:{ 
			mail:{ required: true, email:true}
       },
       messages:{
			 mail:{required: '', email: ''}
       },
         submitHandler: function(form) { }
    });
						   }
	/*newsletter-form END*/

	/*sign-up-form*/
if ($('#sign-up-form').length){	
  $('#sign-up-form').trigger('reset');

 $("#sign-up-form").validate({
       rules:{ 
			mail:{ required: true, email:true}
       },
       messages:{
			 mail:{required: '', email: ''}
       },
         submitHandler: function(form) { }
    });
						   }
	/*sign-up-form END*/
	
	$('.atificial-intelligence__next').on('click', function () {
		var hr = $(this).attr('href').split('#');		
		hr = '#'+hr[1];
		$('html,body').animate({scrollTop:$(hr).offset().top},600);
		return false;
	});
	$('.footer_ontop').on('click', function () {
		$('html,body').animate({scrollTop:'0px'},600);
		return false;
	});
	$('.faq__dt_a').on('click', function () {
		if ($(this).find('.faq__link').hasClass('open')){
			$(this).find('.faq__link').removeClass('open').parents('dt').next('dd').hide();
		} else {
			$('.faq__link.open').removeClass('open').parents('dt').next('dd').slideUp();
			$(this).find('.faq__link').addClass('open').parents('dt').next('dd').show();
		}
	});
	
	$('.atificial-intelligence__popup_close').on('click', function () {
		$('.atificial-intelligence__popup').hide();
    });
    /* $('#garanty_modal').modal('show'); */

	
	
		if ( $('#offers__slider').length  ){
		var offers__height,offers__top,interval1,num2;

		$('#offers__slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	mouseDrag : false,
	navText: [ '', '' ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
	   onChanged : function(el){
	    num = el.item.index;
	num2 = $('#offers__slider .offers__slider_item').eq(num).attr('val');

		 $('.placing-offers__for_slide').hide();
		 $('.for_slide'+(num2)).show();  
		offers__top =  ($('#offers__slider .offers__slider_item').eq(num).find('img').height()-$('#offers__slider .offers__slider_item').eq(num).find('.img_wrap').height());
		 if (offers__top>=0){
			
		    $('#offers__slider .offers__slider_item img').stop().css({'top':'0px'});
			$('#offers__slider .offers__slider_item').eq(num).find('img').stop().animate({'top':'-'+offers__top+'px'},offers__top*9,"linear");
		   
			clearInterval(interval1);
		   interval1  = setInterval(function(){
			   $('#offers__slider .offers__slider_item img').stop().css({'top':'0px'});
			   $('#offers__slider .offers__slider_item').eq(num).find('img').stop().animate({'top':'-'+offers__top+'px'},offers__top*9,"linear");
		   },offers__top*9+300);
		 }
    }, 
	  onInitialized  : function(){
		 $('.placing-offers__slider .owl-dot:eq(1)').click();
		  $('.placing-offers__slider .owl-dot:eq(0)').click();
	 }
								  });

											

	}
	
	if ( $('.roadshow .owl-carousel').length  ){
		var roadshow_num;
		$('.roadshow  .tab-pane').show();
	
	$('.roadshow .owl-carousel').each(function(){
		if ($(this).find('.roadshow__events_item').length>1){
		$(this).owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	mouseDrag : true,
	navText: [ '', '' ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    },
	   onChanged : function(el){
		 roadshow_num = $('.roadshow .owl-dots .owl-dot') .index($('.roadshow .owl-dots .owl-dot.active'));
		 if (roadshow_num>=15){
			 $('.roadshow .owl-dots').addClass('move_dots');
		 } else {
			 $('.roadshow .owl-dots').removeClass('move_dots');
		 }
		   /*
	    num = el.item.index;
	 var ddd = '';
		  for (key in el.property ) {
			  ddd += key+' '+el.property[key]+'\n';
		  }
		  */
	   }
								  });
		}
		$(this).show();
											   });
		$('.roadshow  .tab-pane').removeAttr('style');
	}
	if ( $('#blog-video-slider').length ){
		
		$('#blog-video-slider').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	mouseDrag : true,
	navText: [ '', '' ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
								  });
		
	}

var df_top,this_1;
if ($('.roadshow__item').length){
	/*
	$('.roadshow__item').each(function(){
		$('.roadshow').append('<img src="'+$(this).attr('data-img')+'" class="roadshow__hide_img">');
	});
	*/

}	
	$('.roadshow__events_item').each(function(i){
		if ($(this).find('.roadshow__item:first').attr('data-img')){
			$(this).find('.roadshow__left').css({'background-image':'url('+$(this).find('.roadshow__item:first').attr('data-img')+')'});
		}
		$(this).find('.roadshow__right .roadshow__line').css({'height':$(this).find('.roadshow__item:first').height()});
		$(this).find('.roadshow__item:first').addClass('active');
	});
	

	if (device.mobile()==true || device.tablet()==true  ){ /**/ }
	else {
	$('.roadshow__item').mouseover(function(){
		this_1 = this;
		if ($(this).hasClass('current_confa')){
			$('.roadshow__next_event').show();
		} else {
			$('.roadshow__next_event').hide();
		}
		$(this_1).parents('.roadshow__right').find('.roadshow__line').show();
		$(this_1).parents('.roadshow__right').find('.roadshow__item').removeClass('active');
		if ($(this).attr('data-img')){
			$(this).parents('.roadshow__events_item').find('.roadshow__left').css({'background-image':'url('+$(this).attr('data-img')+')'});
		}
		df_top = $(this).offset().top - $(this).parents('.roadshow__right').offset().top;
		$(this).parents('.roadshow__right').find('.roadshow__line').stop().animate({'top':df_top,'height':$(this).height()+1}, function(){
			$(this_1).addClass('active').parents('.roadshow__right').find('.roadshow__line').hide();
					});	
		
	});
		$('.roadshow__item.current_confa').mouseover();
		}


	 $('.popup_block__close, .popup_bg, .popup_block__other_closer').on('click', function(){
			$('.popup_block__modal').fadeOut();	
			 $('.popup_block .video_file iframe').remove();
			  $('.popup_block .video_file video').remove();	 
		 $('html').removeClass('hide_scroll');
		 $('html, body').animate({scrollTop: scroll_position},0);
		 $('.popup_block').removeClass('popup_block__top');
		 open_popup_checker=0;
		 
		 if (subscribe_window_checker==1 && $(this).parents('#popup_subscribtion').length<1 ){
			 clearTimeout(timeout2);
			 timeout2 = setTimeout(function(){
						if (open_popup_checker!=1){
			open_popup('#popup_subscribtion');			
						} 
						},10000);
		 }
													}); 

	
if ($('#popup_subscribtion').length){
if ($.cookie("subscribe_window_en") && $.cookie("subscribe_window_en") == 1) {} else {
	subscribe_window_checker=1;
	timeout2 = setTimeout(function(){
						if (open_popup_checker!=1){
			open_popup('#popup_subscribtion');			
						} 
						},45000);
	
	$('#popup_subscribtion .popup_block__close, #popup_subscribtion .popup_bg, #popup_subscribtion .popup_block__other_closer ').click(function(){
		$.cookie('subscribe_window_en', 1, {
    expires: 7,
	path: '/'
	});
		subscribe_window_checker = 0;
			});	
	}
}
	


//vid.ended

	
$(iframe2).on('ended ', function() {		
	open_popup_checker=0;
		 
		 if (subscribe_window_checker==1 && $(this).parents('#popup_subscribtion').length<1 ){
			 clearTimeout(timeout2);
			 timeout2 = setTimeout(function(){
						if (open_popup_checker!=1){
			open_popup('#popup_subscribtion');			
						} 
						},10000);
		 }	
							
});

if (player){
player.ready().then(function() {
	
   player.on('finish', function(){
					open_popup_checker=0;
		 
		 if (subscribe_window_checker==1 && $(this).parents('#popup_subscribtion').length<1 ){
			 clearTimeout(timeout2);
			 timeout2 = setTimeout(function(){
						if (open_popup_checker!=1){
			open_popup('#popup_subscribtion');			
						} 
						},10000);
		 }	
							});
});
}

$('.header__menu li a, .footer__menu a').on('click', function(){
	var hrhr = $(this).attr('href').split('#');
	if ($('#'+hrhr[1]).length){



   }										  
															  });


if ("onhashchange" in window) {
   if ($(location.hash).length){
		
   }
}


});
/*$(document).ready(function() end*/



function get_video(url){
	
	$('#represent__video').html('<iframe src="https://www.youtube.com/embed/'+url+'?enablejsapi=1&amp;rel=0&amp;autoplay=1&amp;&amp;showinfo=0" width="764" height="403" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay; encrypted-media" ></iframe>');
	
}
function get_video_cn(url){
	$('#represent__video').html('<video width="764" height="403" id="get_video_cn" controls="controls" autoplay="autoplay" ><source src="'+url+'" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\'></video>');
	open_popup_checker=1;
	var get_video_cn_v = $('#get_video_cn');
	$(get_video_cn_v).on('ended', function(){
					open_popup_checker=0;
		 if (subscribe_window_checker==1 && $(this).parents('#popup_subscribtion').length<1 ){
			 clearTimeout(timeout2);
			 timeout2 = setTimeout(function(){
						if (open_popup_checker!=1){
			open_popup('#popup_subscribtion');			
						} 
						},10000);
		 }	
									
								});
}

function open_modal2(httpname){
$('#video_modal .video_file').append('<iframe width="100%" height="578" src="'+httpname+'?enablejsapi=1&amp;rel=0&amp;autoplay=1&amp;&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

	open_popup('#video_modal');
} 
function open_modal3(httpname){
$('#video_modal .video_file').html('<video width="100%" height="578" controls="controls" autoplay="autoplay"><source src="'+httpname+'" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\'></video>');
open_popup('#video_modal');
}

var bheight,topPos,cc_top,popup_hh; 

function open_popup(div){
	open_popup_checker=1;
	/*
	scroll_position =   self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
	*/
	$('html').addClass('hide_scroll');
	
	/*
	$('html, body').animate({scrollTop: scroll_position},0, function(){
	
	});
	*/
		$(div).fadeIn();
	if ($(div).find('.popup_block').height()>$(div).height() ){
		$(div).find('.popup_block').addClass('popup_block__top');
	} else {
		$(div).find('.popup_block').removeClass('popup_block__top');
	}

}

function ml_webform_success_8236514() {
	 open_popup('#popup_thank_you');
              $('.ml-subscribe-form-8236514 form').trigger('reset');
			  //gtag('event', 'sign_up', {'event_category': 'press', 'event_action': 'sign_up'});
			  gtag('event', 'subscribe', {'event_category': 'press', 'event_action': 'subscribe'});
			  //yaCounter48229769.reachGoal('sign_up');
			 yaCounter48229769.reachGoal('subscribe');
            };

 function ml_webform_success_8254780() {
	 open_popup('#popup_thank_you');
               $('.ml-subscribe-form-8254780 form').trigger('reset');
			  // gtag('event', 'get_tokens', {'event_category': 'press', 'event_action': 'get_tokens'});
			   gtag('event', 'subscribe', {'event_category': 'press', 'event_action': 'subscribe'});
			  // yaCounter48229769.reachGoal('get_tokens');
			   yaCounter48229769.reachGoal('subscribe');
            };
 function ml_webform_success_857132 () {
	  $('#popup_subscribtion .popup_subscribtion__for_hide').hide();
	 $('#popup_subscribtion .popup_subscribtion__sucess').show();
	 
	 
	 $.cookie('subscribe_window_en', 1, {
    expires: 7,
	path: '/'
	});
	 
 };
 
 
 
 video_url2 = '';
 
 function video_poster_click(){
	 open_popup_checker=1;
	/*
	video_url2 = video_url;
	 video_start();
	 */
	 player.play();
	 $('.video_promo').addClass('play_video');
 }
 
 
 /*
 // play the targeted video (and hide the poster frame)
function videoPlay($wrapper) {
  var $iframe = $wrapper.find('.js-videoIframe');
  // hide poster
  $wrapper.addClass('videoWrapperActive');
  // add iframe src in, starting the video
 video_start();
}

// stop the targeted/all videos (and re-instate the poster frames)
function videoStop($wrapper) {
  // if we're stopping all videos on page
  if (!$wrapper) {
    var $wrapper = $('.js-videoWrapper');
    var $iframe = $('.js-videoIframe');
  // if we're stopping a particular video
  } else {
    var $iframe = $wrapper.find('.js-videoIframe');
  }
  // reveal poster
  $wrapper.removeClass('videoWrapperActive');
  // remove youtube link, stopping the video from playing in the background
  $iframe.attr('src','');
}
*/
function video_poster_click2(){
	 open_popup_checker=1;
	$('.video_promo').addClass('play_video');
	iframe2.play();
}

/*
function video_start(){
var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
          videoId: video_url2,
		  width:'',
		   height:'',
	playerVars : {
		modestbranding:1,
		   rel:0,
		   hl:'sv',
		   showinfo:0
	},
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });

}

 function onPlayerReady(event) {
       event.target.playVideo();
	   clearInterval(timeout2);
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
 function onPlayerStateChange(event) {
	 if (event.data==1 ){
		 clearInterval(timeout2);
	 } else if (event.data==2 || event.data==0){
											 
		}	 else {}
		
      }
      function stopVideo() {
        player.stopVideo();
      }
*/


 function ml_webform_success_9161514 () {

if ( $('#popup_subscribtion:visible').length>0  ){
  $('#popup_subscribtion .popup_subscribtion__for_hide').hide();
	 $('#popup_subscribtion .popup_subscribtion__sucess').show();
} else {
				open_popup('#popup_thank_you');
               $('.ml-subscribe-form-9161514 form').trigger('reset');
}
	 
	 $.cookie('subscribe_window_en', 1, {
    expires: 7,
	path: '/'
	});
	 
	
        };
		
 function ml_webform_success_9161514 () {

if ( $('#popup_subscribtion:visible').length>0  ){
  $('#popup_subscribtion .popup_subscribtion__for_hide').hide();
	 $('#popup_subscribtion .popup_subscribtion__sucess').show();
} else {
				open_popup('#popup_thank_you');
               $('.ml-subscribe-form-9161514 form').trigger('reset');
}
	 
	 $.cookie('subscribe_window_en', 1, {
    expires: 7,
	path: '/'
	});
	 
	
        };	
		
		
		
 function ml_webform_success_9206678 () {
if ( $('#popup_subscribtion:visible').length>0  ){
  $('#popup_subscribtion .popup_subscribtion__for_hide').hide();
	 $('#popup_subscribtion .popup_subscribtion__sucess').show();
} else {
				open_popup('#popup_thank_you');
               $('.ml-subscribe-form-9206678 form').trigger('reset');
}
	 
	 $.cookie('subscribe_window_en', 1, {
    expires: 7,
	path: '/'
	});
	 
	
        };
		

 function ml_webform_success_9299912 () {
if ( $('#popup_subscribtion:visible').length>0  ){
  $('#popup_subscribtion .popup_subscribtion__for_hide').hide();
	 $('#popup_subscribtion .popup_subscribtion__sucess').show();
} else {
				open_popup('#popup_thank_you');
               $('.ml-subscribe-form-9299912 form').trigger('reset');
}
	 
	 $.cookie('subscribe_window_en', 1, {
    expires: 7,
	path: '/'
	});
	 
        };		

 function ml_webform_success_9299288 () {
if ( $('#popup_subscribtion:visible').length>0  ){
  $('#popup_subscribtion .popup_subscribtion__for_hide').hide();
	 $('#popup_subscribtion .popup_subscribtion__sucess').show();
} else {
				open_popup('#popup_thank_you');
               $('.ml-subscribe-form-9299288 form').trigger('reset');
}
	 
	 $.cookie('subscribe_window_en', 1, {
    expires: 7,
	path: '/'
	});
	
        };	