


@foreach ($details as $feed)
@php
$hitcount_value = DB::table('paparazzi_post')->where('postid', $feed->postid)->take(1)->get();
@endphp
@foreach ($hitcount_value as $hitcount)
@php
DB::table('paparazzi_post')->where('postid', $feed->postid)->take(1)->update(['hitcount' => $hitcount->hitcount + 1]);
@endphp
@endforeach
<?php  $lang = $feed->language;?>


@extends('front_end.langHeader')

@section('content')

<header class="entry-nav clear">
	<ul>
    <?php if($lang=="English" || $lang==""){?>
            <li><a href="/">Home</a></li>
            <li>Paparazzi</li>
        <?php }?>

        <?php if($lang=="Hindi"){?>
            <li><a href="/Hindi">होम
</a></li>
<li>Paparazzi</li>
        <?php }?>
         <?php if($lang=="Telugu"){?>
            <li><a href="/Telugu">
                హోమ్

</a></li>
		
<li>Paparazzi</li>
		
       <?php }?>
	</ul>
</header>



<div class="entry-content">


<!-- 
	<div class="ads">
        <!-- <img src="assets/front_end/images/g8.jpg" /> -->
        <!-- <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
        <div id="gpt-passback-mobilemasala.com.Banner0.1638192042">
            <script>
                window.googletag = window.googletag || {cmd: []};
                googletag.cmd.push(function() {
                googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638192042', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638192042').addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.display("gpt-passback-mobilemasala.com.Banner0.1638192042");
                });
            </script> -->
        <!-- </div> -->
    <!-- </div>	 --> -->
   
	<div class="container post-content left">
    	<div class="post-content-inner clear">
            <h1>{{$feed->posttitle}}</h1>
           <div class="postview-and-time clear">
           @if($feed->published_date != "")
				<span class="left" ><i class="fa fa-eye"></i><?php


function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
$feed_date = $feed->published_date;

    echo time_elapsed_string(date("Y-m-d H:i:s", strtotime($feed_date)));


// $feed_date = $feed->created_at;
// //  echo strtotime($feed_date);
// echo time_elapsed_string(strtotime($feed_date));
?></span>
@endif
                <span class="left"><i class="fa fa-eye"></i>{{$feed->hitcount}} View</span>
			</div>
            
            <div class="video-wrap">
  <!-- <div class="video">
    <iframe width="600" height="340" src="https://www.youtube.com/embed/0pThnRneDjw" frameborder="0" gesture="media" allowfullscreen></iframe>
  </div> -->
<!-- </div> -->
            <?php
                $video = $feed->videopath . "?autoplay=1";


                $vidoeurl = explode("https://www.youtube.com/embed/", $video);
                //var_dump($vidoeurl);
                $shortcode = $vidoeurl['1'];

                ?>

                        <iframe id="vid_frame2"   class="video"width="100%" height="700" src="{{$video}}" id="mob_paparazzi_main" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    


              

              
                    

                    <!-- <figure class="content-media content-media--video" id="featured-media">
      <iframe class="content-media__object" id="featured-video" src="https://www.youtube.com/embed/SF4aHwxHtZ0?enablejsapi=1&rel=0&showinfo=0&controls=0" frameborder="0"></iframe>
    </figure> -->
            <div class="clear"></div>
            <aside class="post-content-inner-postdetails left">
            <?php if($feed->published_date != '') { ?>
               	<h4><i class="fa fa-calendar"></i> Posted on <a href="#" rel="bookmark"><?php  $created_date = $feed->published_date;  echo date("F j, Y",strtotime($created_date)); ?></time></a></h4>
            <?php } ?>
                <div class="socialshare clear">
                    <ul>
                       <li><a href="http://www.facebook.com/sharer.php?u=<?php echo env('SITE_URL'); ?>paparazzi-post/<?php echo $feed->postid; ?>" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li> <a href="https://twitter.com/share?url=<?php echo env('SITE_URL'); ?>paparazzi-post&id=<?php echo $feed->postid; ?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"> <i class="fab fa-twitter"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                        <li><a href="https://www.instagram.com/?url=<?php echo env('SITE_URL'); ?>paparazzi-post&id=<?php echo $feed->postid; ?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                       <li><a href="https://api.whatsapp.com/send?text=<?php echo env('SITE_URL'); ?><?php echo "paparazzi-post%26id=".$feed->postid; ?>" data-action="share/whatsapp/share"  data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
    			<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
                <div id="gpt-passback-mobilemasala.com.Banner0.1638192088">
                <script>
                window.googletag = window.googletag || {cmd: []};
                googletag.cmd.push(function() {
                googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638192088', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638192088').addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.display("gpt-passback-mobilemasala.com.Banner0.1638192088");
                });
                </script>
                </div>
            </aside>
            <aside class="post-content-inner-details right">
            <h2>{{$feed->posttitle}}</h2>
            <?php echo implode(' ', array_slice(explode(' ', $feed->description), 0)); ?>
            </aside>
			<!-- <div class="ads"><img src="assets/front_end/images/g8.jpg" /></div>	 -->
        </div>
        <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
        <div id="gpt-passback-mobilemasala.com.Banner0.1638192133">
        <script>
        window.googletag = window.googletag || {cmd: []};
        googletag.cmd.push(function() {
        googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638192133', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638192133').addService(googletag.pubads());
            googletag.enableServices();
            googletag.display("gpt-passback-mobilemasala.com.Banner0.1638192133");
        });
        </script>
        </div>	
        <div class="next-prev-button clear">
            @php
            $next_feed = DB::table('paparazzi_post')->where('status','Publish')->inRandomOrder()->take(1)->get();
            $previous_feed = DB::table('paparazzi_post')->where('status','Publish')->inRandomOrder()->take(1)->get();
            @endphp
            @foreach ($previous_feed as $previous_feed)
			<a href="paparazzi-post&id={{$previous_feed->postid}}" rel="prev">Previous</a>
            @endforeach
            @foreach ($next_feed as $next_feed)
            <a href="paparazzi-post&id={{$next_feed->postid}}" rel="next">Next</a>
            @endforeach
		</div>
    </div>	
    @endforeach 
	<aside id="secondary" class="container post-sidebar widget-area right">
    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<div id="gpt-passback-MRATF001">
  <script>
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
    googletag.defineSlot('/22387492205,22578111928/ad-masalamobile.com-bsnl(pyro)-banner-300x250-atf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRATF001').addService(googletag.pubads());
    googletag.enableServices();
    googletag.pubads().set('page_url', 'masalamobile.com');
    googletag.display('gpt-passback-MRATF001');
    });
  </script>
</div>
<section class="container padding-top-none clear" style="padding:0;">
 		<h2><a href="post-content&id=9"><span>Suggested Articles</span></a></h2>
		 <div class="sidebarposts clear">
					  <ul>
                      @php 
                        $entertainmentinfo = DB::table('paparazzi_post')->where('postid', '<>', $feed->postid)->where('status','Publish')->orderBy('published_date','desc')->take(4)->get(); 
                        @endphp
                        @foreach($entertainmentinfo as $entertainmentinfo)
                            <li>
                            <a href="paparazzi-post&id={{$entertainmentinfo->postid}}">
                                <figure style="width:50%;">
                                    <!-- <img src="{{$entertainmentinfo->videopath}}" alt=""> -->
                                    <iframe src="{{$entertainmentinfo->videopath}}" style="width:100%;height: 100px;vertical-align: middle;"></iframe>
                                </figure>
                                <h3>{{$entertainmentinfo->posttitle}}</h3>
                            </a>
                            </li>
                        @endforeach
					</ul>
				</div>	
</section>
<div style="text-align:center;">
	    <!-- <div class="ads">
			<!-- <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
			<div id="gpt-passback-MRMTF">
			  <script>
			    window.googletag = window.googletag || {cmd: []};
			    googletag.cmd.push(function() {
			    googletag.defineSlot('/22387492205/ad-masalamobile.com-bsnl(pyro)-banner-300x250-mtf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRMTF').addService(googletag.pubads());
			    googletag.enableServices();
			    googletag.pubads().set('page_url', 'masalamobile.com');
			    googletag.display('gpt-passback-MRMTF');
			    });
			  </script>
			</div></div>	 -->
			<!-- </div> -->
			 -->
			<!-- <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
				<div id="gpt-passback-MRBTF001">
				  <script>
				    window.googletag = window.googletag || {cmd: []};
				    googletag.cmd.push(function() {
				    googletag.defineSlot('/22387492205/ad-masalamobile.com-bsnl(pyro)-banner-300x250-btf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRBTF001').addService(googletag.pubads());
				    googletag.enableServices();
				    googletag.pubads().set('page_url', 'masalamobile.com');
				    googletag.display('gpt-passback-MRBTF001');
				    });
				  </script>
				</div> -->
			<div class="widget_categories">
				<h2>Categories</h2>
				<ul>
					<li><a href="post-content&id=6">Health &amp; Wellness</a></li>
					<!-- <li><a href="#">General Gossip</a></li> -->
					<li><a href="post-content&id=7">Technology &amp; Gadgets</a></li>
					<!-- <li><a href="#">Believe It or Not</a></li> -->
					<li><a href="post-content&id=4">Movies</a></li>
					<!-- <li><a href="post-content&id=12">Horoscope</a></li> -->
					<li><a href="post-content&id=9">Sports</a></li>
					<!-- <li><a href="#">Hot Content</a></li> -->
					<li><a href="post-content&id=1">Fashion</a></li>
					<li><a href="post-content&id=2">Celebrity Gossip</a></li>
					<!-- <li><a href="#">Fitness</a></li> -->
					<!-- <li><a href="post-content&id=9">Sports</a></li> -->
					<li><a href="post-content&id=8">Entertainment</a></li>
					<li><a href="post-content&id=5">Music</a></li>
					<li><a href="post-content&id=10">Auto News</a></li>
					<li><a href="post-content&id=11">Travel & Tourism</a></li>
					<li><a href="post-content&id=17">More</a></li>
				</ul>
			</div>
			 <div style="text-align:center;">
				<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
				<div id="gpt-passback-MRBTF">
				  <script>
				    window.googletag = window.googletag || {cmd: []};
				    googletag.cmd.push(function() {
				    googletag.defineSlot('/22387492205/ad-masalamobile.com-bsnl(pyro)-banner-300x250-btf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRBTF').addService(googletag.pubads());
				    googletag.enableServices();
				    googletag.pubads().set('page_url', 'masalamobile.com');
				    googletag.display('gpt-passback-MRBTF');
				    });
				  </script>
				</div>
			</div>
			
			
			
	</aside>
	<!-- <div class="ads clear"><img src="assets/front_end/images/g6.jpg" /></div>	 -->
    <div class="container related-post clear">
    <?php if($lang == "Hindi"){?>
		<h2><span>रिलेटेड पोस्ट्स</span></h2>
        <?php }?>
        <?php if($lang == ""|| $lang =="English"){?>
        <h2><span>Related posts</span></h2>
        <?php }?>
        
	
        <?php if($lang == "Telugu"){?>
        <h2><span> రిలేటెడ్  పోస్ట్స్ </span></h2>
        
        <?php }?>
        
        <ul>
        @php 
        $entertainmentinfo = DB::table('paparazzi_post')->where('postid', '<>', $feed->postid)->where('status','Publish')->where('language',$feed->language)->orderBy('published_date','desc')->skip(4)->take(12)->get(); 
        @endphp
        @foreach($entertainmentinfo as $entertainmentinfo)
      
          <?php if($lang =="" ||$lang =="Telugu"){?>
            <li>
				<a href="#" title="">
               
                    	<h5>Paparazzi</h5>
                    <figure >
                    <iframe width="100%" height="150" src="{{$entertainmentinfo->videopath}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </figure>
            	</a>
            	<a href="paparazzi-post&id={{$entertainmentinfo->postid}}" title="">
                    <h3>{{$entertainmentinfo->posttitle}}</h3>
            	</a>
            	<a href="paparazzi-post&id={{$entertainmentinfo->postid}}" title="">
                    <p></p>
            	</a>
            </li>
         
         <?php }?>
         <?php if($lang =="Hindi"){?>
            <li>
				<a href="#" title="">
               
                    	<h5>Paparazzi</h5>
                    <figure >
                    <iframe width="100%" height="150" src="{{$entertainmentinfo->videopath}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </figure>
            	</a>
            	<a href="paparazzi-post&id={{$entertainmentinfo->postid}}" title="">
                    <h3>{{$entertainmentinfo->posttitle}}</h3>
            	</a>
            	<a href="paparazzi-post&id={{$entertainmentinfo->postid}}" title="">
                    <p></p>
            	</a>
            </li>
         
         <?php }?>

         @endforeach
        </ul>
       
	</div>
	<!-- <div class="ads clear"><img src="assets/front_end/images/g8.jpg" /></div>	 -->
</div>
<script async='async' src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
<div id='sticky' style='position: fixed; right: 0px; bottom: 0px; margin: 0 auto;width: 100%; background-color: rgba(255, 255, 255, 0.8); border-top: 2px solid rgba(225, 225, 225, 0.8); visibility: hidden; z-index:99999999;'><button id='ad_close' style='color:#000; background-color: hsla(0,0%,100%,.8); border: hsla(0,0%,100%,.8); position:absolute; left : 0px; top : -45px;'>x</button>
<div id='gpt-passback-Sticky' style='min-width: 300px; min-height: 50px;text-align: center; display: flex; justify-content:center;'>
<script>
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
    googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638181911', [[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-Sticky').addService(googletag.pubads());
    googletag.enableServices();
    googletag.pubads().set('page_url', 'mobilemasala.com');
    googletag.display('gpt-passback-Sticky');
    googletag.pubads().addEventListener('slotOnload', function(event) {
    var slotId = event.slot.getSlotElementId();
    if(slotId=="gpt-passback-Sticky"){
    document.getElementById("sticky").style.visibility='visible';
	document.getElementById("ad_close").onclick = function(){
		document.getElementById("sticky").remove();
	}
    }
    });
    });




    (function($) {
	var $window = $(window);
	var $videoWrap = $('.video-wrap');
	var $video = $('.video');
	var videoHeight = $video.outerHeight();

	$window.on('scroll',  function() {
		var windowScrollTop = $window.scrollTop();
		var videoBottom = videoHeight + $videoWrap.offset().top;
		
		if (windowScrollTop > videoBottom) {
			$videoWrap.height(videoHeight);
			$video.addClass('stuck');
		} else {
			$videoWrap.height('auto');
			$video.removeClass('stuck');
		}
	});
}(jQuery));


   
  </script>
</div>
</div>
<style>
    @media only screen and (max-width:768px)
    {
        #mob_paparazzi_main
        {
            height:250px;
        }
        
    


    
}


@keyframes fade-in-up {
	 0% {
		 opacity: 0;
	}
	 100% {
		 transform: translateY(0);
		 opacity: 1;
	}
}

.video iframe {
	 max-width: 100%;
	 max-height: 100%;
}

.video.stuck {
	 position: fixed;
	 bottom: 20px;
	 right: 20px;
	 width: 260px;
	 height: 145px;
	 transform: translateY(100%);
	 animation: fade-in-up 0.75s ease forwards;
	z-index: 1;
}

    
   </style>
@endsection



















<amp-story publisher-logo-src="https://timesofindia.indiatimes.com/photo/75200131.cms" poster-portrait-src="https://static.toiimg.com/thumb/msid-95724239,width-960,height-1024,resizemode-6.cms" publisher="TimesOfIndia.com" standalone="" class="i-amphtml-element i-amphtml-layout-container i-amphtml-experiment-story-load-inactive-outside-viewport i-amphtml-built i-amphtml-story-desktop-one-panel i-amphtml-layout i-amphtml-story-loaded" i-amphtml-layout="container" muted="" orientation="portrait"><amp-analytics data-credentials="include" type="gtag" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" aria-hidden="true" style="width: 1px; height: 1px;" hidden=""><script type="application/json">
               {
                 "vars": {
                   "gtag_id": "UA-198011-4",
                   "config": {
                     "UA-198011-4": {
                       "groups": "default"
                     }
                   }
                 },
                 "triggers": {
                   "storyProgress": {
                     "on": "story-page-visible",
                     "vars": {
                       "event_name": "web_story",
                       "event_action": "story_progress",
                       "event_category": "Visual Stories_Web",
                       "event_label": "${storyPageId}_https://timesofindia.indiatimes.com/tv/web-stories/malayalam/stunning-looks-of-prayaga-martin/photostory/95724149.cms",
                       "send_to": ["UA-198011-4"]
                     }
                   },
                   "storyEnd": {
                     "on": "story-last-page-visible",
                     "vars": {
                       "event_name": "web_story",
                       "event_action": "story_complete",
                       "event_category": "Visual Stories_Web",
                       "send_to": ["UA-198011-4"]
                     }
                   },
                  "linkClick": {
                      "on": "click",
                      "selector": "#btn_link",
                      "request": "event",
                      "vars": {
                        "event_name": "cta_click",
                        "eventCategory": "${title}",
                        "eventAction": "cta-click",
                        "event_label": "${storyPageId}"
                      }
                    },
                    "linkClick": {
                      "on": "click",
                      "selector": "#btn_link_next",
                      "request": "event",
                      "vars": {
                        "event_name": "click_readmore",
                        "event_category": "Web_VisualStories",
                        "eventAction": "click_readmore",
                        "event_label": "Malayalam_https://timesofindia.indiatimes.com/tv/web-stories/malayalam/breathtaking-looks-of-nimisha/photostory/95693542.cms"
                      }
                    },
                    "trackClickThrough": {
                      "on": "story-click-through",
                      "tagName": "a",
                      "request": "click",
                      "vars": {
                       "event_name": "web_story",
                       "event_category": "${eventCategory}",
                       "event_action": "${eventAction}",
                       "event_label": "${eventLabel}",
                       "send_to": ["UA-198011-4"]
                     }
                   }
                 }
               }
             </script></amp-analytics><amp-analytics data-block-on-consent="" type="comscore" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" aria-hidden="true" style="width: 1px; height: 1px;" hidden=""><script type="application/json">
                {
                   "vars":{"c1":"2", "c2":"6036484"},
                   "extraUrlParams": {
                     "comscorekw": "amp"
                   }
                }
                </script></amp-analytics><amp-analytics id="ibeatanalytics" type="ibeatanalytics" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" aria-hidden="true" style="width: 1px; height: 1px;" hidden=""><script type="application/json">
                  {
                     "vars": {
                        "d":"timesofindia.indiatimes.com"
                       
                    }
                  }
              </script></amp-analytics><amp-story-page class="cover i-amphtml-element i-amphtml-layout-container i-amphtml-built i-amphtml-layout i-amphtml-story-page-loaded" id="amp-cover" i-amphtml-layout="container" role="region" active="" distance="0" aria-hidden="false"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" i-amphtml-layout="container"><amp-img tabindex="0" height="1024" width="768" class="image i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" layout="responsive" src="https://static.toiimg.com//photo/95724239/95724239.jpg?imgsize=22108" alt="&ZeroWidthSpace;Stunning looks of Prayaga Martin" i-amphtml-layout="responsive" style="--loader-delay-offset:248ms !important;"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 133.333%;"></i-amphtml-sizer><img decoding="async" alt="&ZeroWidthSpace;Stunning looks of Prayaga Martin" src="https://static.toiimg.com//photo/95724239/95724239.jpg?imgsize=22108" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-story-grid-layer><amp-story-grid-layer template="vertical" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" i-amphtml-layout="container"><div class="logo tech-show"><amp-img width="50" height="50" layout="fixed" class="logo i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" src="https://timesofindia.indiatimes.com/photo/75200131.cms" i-amphtml-layout="fixed" alt="" style="width: 50px; height: 50px; --loader-delay-offset:248ms !important;"><img decoding="async" alt="" src="https://timesofindia.indiatimes.com/photo/75200131.cms" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" template="vertical" i-amphtml-layout="container"><div class="inner-align-end tech-show"><h1 class="phone-heading">&ZeroWidthSpace;Stunning looks of Prayaga Martin</h1><p class="amp-cover__date date">Nov 24, 2022</p><h4 class="ytxt">TV</h4><b class="amp-cover__author author">Radhika Nair</b></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BStunning+looks+of+Prayaga+Martin&image=%2Fphoto%2F95724239%2F95724239.jpg%3Fimgsize%3D22108&generic=TV&bg_color=#85695A&msid=95724239&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=cover&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&desc=Here+are+some+endearing+pictures+of+Prayaga+Martin&textposition=align-end&authorname=potime:26--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built i-amphtml-layout i-amphtml-story-page-loaded" id="page2" i-amphtml-layout="container" role="region" distance="1" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724235/95724235.jpg?imgsize=46300" alt="&ZeroWidthSpace;The doe-eyed actress" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"><img decoding="async" alt="&ZeroWidthSpace;The doe-eyed actress" src="https://static.toiimg.com//photo/95724235/95724235.jpg?imgsize=46300" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;The doe-eyed actress</h2><p class="summary">Prayaga is widely loved for her movies</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BThe+doe-eyed+actress&image=%2Fphoto%2F95724235%2F95724235.jpg%3Fimgsize%3D46300&generic=TV&bg_color=#997B68&msid=95724235&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=2&desc=Prayaga+is+widely+loved+for+her+movies&textposition=align-end&authorname=potime:29--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built i-amphtml-layout i-amphtml-story-page-loaded" id="page3" i-amphtml-layout="container" role="region" distance="2" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724232/95724232.jpg?imgsize=75548" alt="&ZeroWidthSpace;Gorgeous look" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"><img decoding="async" alt="&ZeroWidthSpace;Gorgeous look" src="https://static.toiimg.com//photo/95724232/95724232.jpg?imgsize=75548" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;Gorgeous look</h2><p class="summary">She keeps her fans glued to her account with her gorgeous pics</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BGorgeous+look&image=%2Fphoto%2F95724232%2F95724232.jpg%3Fimgsize%3D75548&generic=TV&bg_color=#243742&msid=95724232&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=3&desc=She+keeps+her+fans+glued+to+her+account+with+her+gorgeous+pics&textposition=align-end&authorname=potime:28--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page4" i-amphtml-layout="container" role="region" distance="3" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724230/95724230.jpg?imgsize=47106" alt="&ZeroWidthSpace;Mystic frame" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;Mystic frame</h2><p class="summary">The actress is a fan of creative photography too</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BMystic+frame&image=%2Fphoto%2F95724230%2F95724230.jpg%3Fimgsize%3D47106&generic=TV&bg_color=#885E31&msid=95724230&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=4&desc=The+actress+is+a+fan+of+creative+photography+too&textposition=align-end&authorname=potime:29--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page5" i-amphtml-layout="container" role="region" distance="4" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724226/95724226.jpg?imgsize=47524" alt="&ZeroWidthSpace;Deep dyed Malayali" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;Deep dyed Malayali</h2><p class="summary">She calls herself a deep-dyed Malayali, well we can't agree more</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BDeep+dyed+Malayali&image=%2Fphoto%2F95724226%2F95724226.jpg%3Fimgsize%3D47524&generic=TV&bg_color=#B57068&msid=95724226&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=5&desc=She+calls+herself+a+deep-dyed+Malayali%2C+well+we+can%27t+agree+more&textposition=align-end&authorname=potime:33--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page6" i-amphtml-layout="container" role="region" distance="5" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724224/95724224.jpg?imgsize=31468" alt="&ZeroWidthSpace;Killer look" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;Killer look</h2><p class="summary">How is her badass avatar?</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BKiller+look&image=%2Fphoto%2F95724224%2F95724224.jpg%3Fimgsize%3D31468&generic=TV&bg_color=#3C281D&msid=95724224&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=6&desc=How+is+her+badass+avatar%3F&textposition=align-end&authorname=potime:28--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page7" i-amphtml-layout="container" role="region" distance="6" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724223/95724223.jpg?imgsize=87016" alt="&ZeroWidthSpace;Million dollar smile" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;Million dollar smile</h2><p class="summary">She has a captivating smile</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BMillion+dollar+smile&image=%2Fphoto%2F95724223%2F95724223.jpg%3Fimgsize%3D87016&generic=TV&bg_color=#75483F&msid=95724223&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=7&desc=She+has+a+captivating+smile&textposition=align-end&authorname=potime:33--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page8" i-amphtml-layout="container" role="region" distance="7" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724215/95724215.jpg?imgsize=39292" alt="&ZeroWidthSpace;Breathtaking" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;Breathtaking</h2><p class="summary">It is hard to take eyes off her</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BBreathtaking&image=%2Fphoto%2F95724215%2F95724215.jpg%3Fimgsize%3D39292&generic=TV&bg_color=#9E938A&msid=95724215&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=8&desc=It+is+hard+to+take+eyes+off+her&textposition=align-end&authorname=potime:32--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page9" i-amphtml-layout="container" role="region" distance="8" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724211/95724211.jpg?imgsize=28704" alt="Picture perfect" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>Picture perfect</h2><p class="summary">She looks unbelievably perfect in this picture</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=Picture+perfect&image=%2Fphoto%2F95724211%2F95724211.jpg%3Fimgsize%3D28704&generic=TV&bg_color=#563A29&msid=95724211&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=9&desc=She+looks+unbelievably+perfect+in+this+picture&textposition=align-end&authorname=potime:29--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page10" i-amphtml-layout="container" role="region" distance="9" aria-hidden="true"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img noloading="" tabindex="0" height="900" width="1600" layout="fixed" src="https://static.toiimg.com//photo/95724203/95724203.jpg?imgsize=53412" alt="&ZeroWidthSpace;Super Kudumbam" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 1600px; height: 900px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end" style="opacity: 0;"><h2>&ZeroWidthSpace;Super Kudumbam</h2><p class="summary">She is currently seen as a judge on Super Kudumbam</p></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"><p class="ftr">Instagram/Prayaga-Martin</p></div></amp-story-grid-layer><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><!--/amp_web_stories_layout_entertainment.cms?v=2000&&amp_story=1&title=%E2%80%8BSuper+Kudumbam&image=%2Fphoto%2F95724203%2F95724203.jpg%3Fimgsize%3D53412&generic=TV&bg_color=#D2A491&msid=95724203&author=Radhika Nair&publish_date=Nov 24, 2022&agency_name=Instagram/Prayaga-Martin&type=slide&logo=https://timesofindia.indiatimes.com/photo/75200131.cms&logo_width=50&logo_height=50&item_position=10&desc=She+is+currently+seen+as+a+judge+on+Super+Kudumbam&textposition=align-end&authorname=potime:33--><amp-story-page class="slide i-amphtml-element i-amphtml-layout-container i-amphtml-built" id="page11" i-amphtml-layout="container" role="region" distance="10" aria-hidden="true"><amp-story-grid-layer template="fill" style="background-color:#8b0000" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" i-amphtml-layout="container"><amp-img tabindex="0" height="1024" width="768" layout="fixed" src="https://static.toiimg.com/photo/95693542/95693542.jpg" alt="Breathtaking looks of Nimisha" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" style="width: 768px; height: 1024px;"></amp-img></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div animate-in-duration="3s" animate-in-delay=".5s" animate-in="fade-in" class="inner-align-end-next" style="opacity: 0;"><p class="summary">Thanks For Reading!</p><h2>Next: Breathtaking looks of Nimisha</h2></div></amp-story-grid-layer><amp-story-grid-layer class="align-end i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built" template="vertical" i-amphtml-layout="container"><div class="inner-align-end photo_credit"></div></amp-story-grid-layer><amp-story-page-outlink cta-image="none" cta-accent-element="background" cta-accent-color="#E21B22" theme="custom" layout="nodisplay"><a role="link" target="_top" href="/tv/web-stories/malayalam/breathtaking-looks-of-nimisha/photostory/95693542.cms" id="btn_link_next" rel="nofollow" i-amphtml-orig-tabindex="0" tabindex="-1"><p class="cta_link-next">Find out More</p></a></amp-story-page-outlink><div class="i-amphtml-story-spinner" aria-hidden="true" aria-label="Loading video"><div class="i-amphtml-story-spinner-container"><div class="i-amphtml-story-spinner-layer"><div class="i-amphtml-story-spinner-circle-clipper left"></div><div class="i-amphtml-story-spinner-circle-clipper right"></div></div></div></div></amp-story-page><amp-story-auto-ads class="i-amphtml-element i-amphtml-layout-container i-amphtml-built i-amphtml-layout" i-amphtml-layout="container"><script type="application/json">
                          {
                            "ad-attributes": {
                              "type": "doubleclick",
                              "data-slot": "/7176/Etimes_AMP/Etimes_AMP_VisualStories/Etimes_AMP_VisualStories_StoryAd1",
                              "rtc-config" : {
                                    "urls":["https://ade.clmbtech.com/cde/aeamp/65615"],
                                    "timeoutMillis": 1000
                                }
                            }
                          }
                        </script></amp-story-auto-ads><amp-story-bookend layout="nodisplay" src="../amp_web_stories_feed/msid-78657499,type-bookend.cms"></amp-story-bookend><canvas height="3" width="3" style="width: 100% !important; height: 100% !important; position: absolute !important; left: 0px !important; top: 0px !important;"></canvas><amp-story-share-menu></amp-story-share-menu><div class="i-amphtml-system-layer-host"></div><div class="i-amphtml-story-button-container i-amphtml-story-fwd-next next-container"><button class="i-amphtml-story-button-move" aria-label="Next page"></button></div><div class="i-amphtml-story-button-container i-amphtml-story-back-prev prev-container i-amphtml-story-button-hidden"><button class="i-amphtml-story-button-move" disabled="" aria-label="Previous page"></button></div><div class="i-amphtml-ad-overlay-host"></div><amp-story-page ad="" aria-hidden="true" distance="2" id="i-amphtml-ad-page-1" class="i-amphtml-element i-amphtml-layout-container i-amphtml-built i-amphtml-layout i-amphtml-story-page-loaded" i-amphtml-layout="container" style="background-color: rgb(33, 33, 37);" role="region"><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" i-amphtml-layout="container"><amp-ad type="doubleclick" data-slot="/7176/Etimes_AMP/Etimes_AMP_VisualStories/Etimes_AMP_VisualStories_StoryAd1" rtc-config="{&quot;urls&quot;:[&quot;https://ade.clmbtech.com/cde/aeamp/65615&quot;],&quot;timeoutMillis&quot;:1000}" class="i-amphtml-story-ad i-amphtml-element i-amphtml-layout-fill i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" layout="fill" amp-story="" i-amphtml-layout="fill" data-amp-slot-index="0" data-a4a-upgrade-type="amp-ad-network-doubleclick-impl" style="--loader-delay-offset:0ms !important;" data-google-query-id="CPSe7sSRxvsCFeS8SwUdygUJWw"><div fallback=""><div class="i-amphtml-ad-default-holder" data-ad-holder-text="Ad"></div></div><amp-analytics sandbox="true" trigger="immediate" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built" i-amphtml-layout="fixed" aria-hidden="true" hidden="" style="width: 1px; height: 1px;"><script type="application/json">{"requests":{"csi":"https://csi.gstatic.com/csi?"},"transport":{"xhrpost":false},"triggers":{"adRequestStart":{"on":"ad-request-start","request":"csi","sampleSpec":{"sampleOn":"a4a-csi-${pageViewId}","threshold":1},"selector":"amp-ad","selectionMethod":"closest","extraUrlParams":{"met.a4a":"afs_lvt.${viewerLastVisibleTime}~afs.${time}"}},"adResponseEnd":{"on":"ad-response-end","request":"csi","sampleSpec":{"sampleOn":"a4a-csi-${pageViewId}","threshold":1},"selector":"amp-ad","selectionMethod":"closest","extraUrlParams":{"met.a4a":"afe.${time}"}},"adRenderStart":{"on":"ad-render-start","request":"csi","sampleSpec":{"sampleOn":"a4a-csi-${pageViewId}","threshold":1},"selector":"amp-ad","selectionMethod":"closest","extraUrlParams":{"met.a4a":"ast.${scheduleTime}~ars_lvt.${viewerLastVisibleTime}~ars.${time}","qqid":"${qqid}"}},"adIframeLoaded":{"on":"ad-iframe-loaded","request":"csi","sampleSpec":{"sampleOn":"a4a-csi-${pageViewId}","threshold":1},"selector":"amp-ad","selectionMethod":"closest","extraUrlParams":{"met.a4a":"ail.${time}"}}},"extraUrlParams":{"s":"ampad","ctx":"2","c":"${correlator}","slotId":"${slotId}","puid":"${requestCount}~${timestamp}"}}</script></amp-analytics><iframe height="633" width="377" title="3rd party ad content" frameborder="0" allowfullscreen="" allowtransparency="" scrolling="no" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation" role="region" aria-label="Advertisement" tabindex="0" class="i-amphtml-fill-content" referrerpolicy="unsafe-url" marginheight="0" marginwidth="0" srcdoc="<!DOCTYPE html>
  <html ⚡4ads lang=&quot;en&quot;>
  <head>
    <base href=&quot;https://securepubads.g.doubleclick.net/gampad/ads?iu=%2F7176%2FEtimes_AMP%2FEtimes_AMP_VisualStories%2FEtimes_AMP_VisualStories_StoryAd1&amp;amp;adk=23329407&amp;amp;sz=1x1&amp;amp;output=html&amp;amp;impl=ifr&amp;amp;ifi=1&amp;amp;msz=376x-1&amp;amp;psz=376x-1&amp;amp;fws=4&amp;amp;scp=sg%3D30b%2Ch9r%2Cshy%2Cjo8%2Co1v%2Cgau%2Csgn%2C2vf%2C2xi%2C8k6%2C8k8%2C2vk%2C8ix%2C8gw%2C2vr%2C2x6%2Cqji%2C30r%2C5vy%2Csfp%2Csfq%2Cl7r%2Co1y%2Ck8d%2Co1x%2Ck8l%2C446%2Cl7o%2C5bz%2Capc&amp;amp;spsa=377x633&amp;amp;adf=949766391&amp;amp;nhd=0&amp;amp;adx=495&amp;amp;ady=0&amp;amp;oid=2&amp;amp;jar=2022-11-24-05&amp;amp;ptt=13&amp;amp;gdfp_req=1&amp;amp;sfv=1-0-37&amp;amp;u_sd=1&amp;amp;artc=833&amp;amp;ati=2&amp;amp;ard=ade.clmbtech.com%2Fcde%2Faeamp%2F65615&amp;amp;is_amp=3&amp;amp;amp_v=2211042305000&amp;amp;d_imp=1&amp;amp;c=179392004103&amp;amp;ga_cid=GA1.2.1255258566.1669266554&amp;amp;ga_hid=4103&amp;amp;dt=1669269482462&amp;amp;biw=1366&amp;amp;bih=633&amp;amp;u_aw=1366&amp;amp;u_ah=741&amp;amp;u_cd=24&amp;amp;u_w=1366&amp;amp;u_h=768&amp;amp;u_tz=330&amp;amp;u_his=1&amp;amp;vis=1&amp;amp;scr_x=0&amp;amp;scr_y=0&amp;amp;bc=7&amp;amp;url=https%3A%2F%2Ftimesofindia.indiatimes.com%2Ftv%2Fweb-stories%2Fmalayalam%2Fstunning-looks-of-prayaga-martin%2Fphotostory%2F95724149.cms&amp;amp;ref=https%3A%2F%2Ftimesofindia.indiatimes.com%2Fetimes%2Fweb-stories%3Ffrom%3Dmdr&amp;amp;bdt=3137&amp;amp;uap=Linux&amp;amp;uapv=4.18.0&amp;amp;uaa=x86&amp;amp;uafv=105.0.5195.102&amp;amp;uab=64&amp;amp;dtd=886&quot;>
    <meta charset=&quot;UTF-8&quot;>
    <meta http-equiv=Content-Security-Policy content=&quot;
      img-src * data:;
      media-src *;
      font-src *;
      connect-src *;
      script-src https://cdn.ampproject.org/lts/ https://cdn.ampproject.org/rtv/ https://cdn.ampproject.org/sw/;
      object-src 'none';
      child-src 'none';
      default-src 'none';
      style-src https://cdn.materialdesignicons.com https://cloud.typography.com https://fast.fonts.net https://fonts.googleapis.com https://maxcdn.bootstrapcdn.com https://p.typekit.net https://pro.fontawesome.com https://use.fontawesome.com https://use.typekit.net 'unsafe-inline';
    &quot;>
    <meta http-equiv=&quot;origin-trial&quot; content=AlQOrFnZiFdI61JEjqDm5lg07gKrnYgXL9jDD/w7EHNFBE60/++yfetyABuyjCD917535XXwd9JHzjrKK36TDg0AAABweyJvcmlnaW4iOiJodHRwczovL2FtcHByb2plY3Qub3JnOjQ0MyIsImZlYXR1cmUiOiJQcml2YWN5U2FuZGJveEFkc0FQSXMiLCJleHBpcnkiOjE2ODA2NTI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ==>
    <head><meta charset=&quot;utf-8&quot;><meta content=&quot;width=device-width,minimum-scale=1,initial-scale=1&quot; name=&quot;viewport&quot;><meta content=&quot;vendor=doubleclick,type=impression-id,value=CPSe7sSRxvsCFeS8SwUdygUJWw&quot; name=&quot;amp4ads-id&quot;><meta content=&quot;https://adssettings.google.com/whythisad?source=display&amp;amp;reasons=AXLQBRy0XmMHx0hay786X3fN6tLWd9WWVxyPzaKtccBbGz9heWk1UKPpoOUq3z3e_Su1uRTp1qkgcElTQVIdct1vuqM1RgghyTgvHCXtrM33XrV7N5VRflhKR0PHOaUd2XYPGOIUImYsSUV-SUUh2KUJ69W1O5clZ1-aPiVa2CMMzLiyntqJ-NYlv8csz-bdzo-lKivboP4fpUoOlRsKI7sGRU4ZZyTx-MOfoJpUN5IEUzHwRSahH-cl1GAleRqw6yzrGcnvA6vt_6y0kv8iml4zGmFcz12LIDU40HNtObMzHQaY-KC9Xr4vxQruVEnEt25xrDI-RrVm1P63oZ3ZOdtrWhuAcdNg8hs3jGlBDRPjvw4AexhFU2U5kiDGsZucgwSctumrh2UtM9V1qch491WbFDPejQEwPS6hQrdeAknhhfSnvXL6Auf4AuO4odmMCK8D710AhBij-4mAVcBmbC9umIJ7l39w4IhWj6xktAFRNMc3eqQSr-PP5vyOjrdA0BvQMjgpzf_iwabuBah_IlZLm5cJL_oGAQRk7vOOdeMYyXVggks2Y8vQ0jdyveL_h6r9ANuEONma2Ut9jujdCLTo-v5QwGDJ1apyKA8IOs9aFzoV7QdQsDz-wpf8Wcei7zcWeEQRUahn3lxgPFWAKNjrDEFTCm7WW33L3t5TWRLVcBUBw23AqN_mjaJ-M2gzz-_KuSj2sbJJKtmsZPiGUEZytYF1OgSS6-gW_msR6jW7gt9dAK_9nQpdP6OxLT_EFn2SnSxEUZQ05IGgwPx-VWOKI6RJAX8W5PJNgfo8mIEajkqWT162BVWTBVJes74TmHjPki23hsKnLBX3PCP5gGKFZZrY4q8Y2xeXKRhH2H3-58MPKzaEonC0VRKg_cMIqME29_7Q4-RX2VZMVP4vblpRqA4guMvCGnkJPsRJjcXtZ5BgryEBjDg-aAmk7Q5eUGMaWM4nloylkMbIkFGx-0Zd5gZlmnJEE75BOATvywrT6eaxvJD-SXbBVAPcGZiG8lqo3R-7tDRPvFhUDeaO37ypgWKo2E58liXXmMQzBGRcRfT__7uL3gEV3oQ50lKsDu6YwtrER7bYA13mepY4yLUMYzjWwIjIr6dmbaXfZe1Ypnt-6NH30yNXLqQDwUj_sbnj9g8rr9Ym4GShb9NETNexENghMIoEzFdQI6jWIH7mm0PfgKRSL5sECOi_hqRq9Z1kTNV3d7YMxugoN9Bo5zy79-BY0grvCBIlqQp4TMBF9RQwN2jHP0gOhsLENPeOxYU5VcpDWtxC8lwQlhoFNMR6sd0R_sqS0ZK3pmdS2oHYgaCTcVKauaGB5e3G4Ry3iOk69XbRJ-tFcv8s4Wm6XawgN2K7olvtib81w26Vrgd_toFgRLVXYLqbRZeazAu03CPJqikUMrvTTyzjszXd7SiM5GLPYa6_LXt5oROeF32f_x3p6_QFfXOH3MRSytBBTxaqZMRDsy-rbNjNUKK509xTDkLotmTmBexFLSwnXWGZoILZ4-oJ4HhF6i5W1R_VSzJo9vG1KsomSxiD1no0jsGS323hAiGL6A6rxm5ZbD6QguloMoD97rCrdf40kQJ2dO9rt2r29e5714jQVGUkPeX9LKqYKabHFw7H_9343MhTWTzEvp5ByZFEVJzUv89YwFYq48PVuQtTXn68240zHfrHcZrZIMHfzZqBVdf5oArFUz2vOd8d-2rTaFty_I8KPF4ToWgdZVv8S6Nl83werBM-2lcKg4bbtzpe-BTCaqsjjXNnFSv6_n0EHbiGBzfvWR5Uzf1ruhoX0s70hgpD2Q4lhGRSFAkg4mM50eWSkh69qttQBMEWVyBHMBIasAcLeeJuhw3f&quot; name=&quot;amp4ads-vars-attribution-url&quot;><meta content=&quot;https://googleads.g.doubleclick.net/pagead/images/mtad/abg_blue.png&quot; name=&quot;amp4ads-vars-attribution-icon&quot;><meta content=&quot;Get Quote&quot; name=&quot;amp-cta-type&quot;><meta content=&quot;https://www.googleadservices.com/pagead/aclk?sa=L&amp;amp;ai=CGkdsDQh_Y7TkDOT5rtoPyouk2AXLj82ybLmywbGGDtzZHhABIO2C-B9g5erjA6AB4ojH9QLIAQngAgCoAwHIA0qqBM8CT9Cf1aCo3uhhQ4cM1xCB7Hr5J_rUsJFbg40iYjaRa7TXLD3Av3YgxC6f_8M_6FlxOO8N9UVCg0qXQUE43MunyD_nPakvK7amqEEVzR5bOr1jcU9fUXxldZChu9eTsSVGIWMZD7IMI1WFx5MJZHS2QmAzgOSsjbBomGLFbxoN9-DXJBQ8R7smC3wydUKBRpnfNBoqrzLz32XfXA2cC0qUPG0k_-oX6Ul0-ZFbrW8X6zA7UcRr6X0tbLg1eM0XVBX7tjvvKnZIS1LySAU6rIjB1Wcp4wHPEb79WseVFWY3VhFGNXs5WQljDYo7l_8mWzJc_eY0_0gRYth3hQXynuNmk860I1GILaBy0LlhxqbfRDT_a_RPWRUqfFEvCVgiuYGk4vNL9bsv-MimwwMqNir65-Od6jO-qCGbJeYbknvLDIVD0mw5kmJgNtL0EtDR2QDABOCI9drBA-AEAaAGLoAHhve4igGoB47OG6gHk9gbqAfulrECqAf-nrECqAeko7ECqAfVyRuoB6a-G6gHmgaoB_PRG6gHltgbqAeqm7ECqAf_nrECqAffn7EC2AcA0ggPCIBhEAEYHTICigI6AoBAsQkIRZj85ooBQIAKA5gLAcgLAYAMAbgMAbgT5APYEw2IFALQFQGYFgH4FgGAFwE&amp;amp;ae=1&amp;amp;num=1&amp;amp;cid=CAQSKQDq26N9zpiewoHE9godbX3OTa9uBW73rHKk61HS3lDvHqlJ8YpsqaVgGAEgEw&amp;amp;sig=AOD64_12MOEKPROTzO07vkKbFBbJdC0F4g&amp;amp;client=ca-pub-2230723027927371&amp;amp;adurl=https://www.hapag-lloyd.com/en/online-business/quotation/quick-quotes.html%3Fgclid%3DEAIaIQobChMI9J7uxJHG-wIV5LxLBR3KBQlbEAEYASAAEgLxgPD_BwE&quot; name=&quot;amp-cta-url&quot;><meta content=&quot;46&quot; name=&quot;amp4ads-vars-creative-type&quot;><meta content=&quot;484&quot; name=&quot;amp4ads-vars-template-id&quot;><meta content=&quot;131&quot; name=&quot;amp4ads-vars-layout-id&quot;><style amp-custom=&quot;&quot;>HTML,BODY{height:100%;width:100%;margin:0;padding:0;}BODY{}#mys-overlay{height:100%;width:100%;overflow:hidden;position:absolute;top:0;left:0;box-sizing:border-box;pointer-events:none;z-index:1;display:none;}BODY A,BODY A:visited,BODY A:hover,BODY A:active{color:inherit;cursor:pointer;text-decoration:inherit;}[dir=rtl] .flip-on-rtl{transform:scale(-1,1);transform-origin:center;}.ns-tfobz-l-cardTowerAll{opacity:.01;position:absolute;top:0;left:0;display:block;width:377px;height:633px;}.ns-tfobz-e-0{border:none;box-sizing:border-box;width:100%;height:100%;font-family:&quot;Google Sans&quot;,Roboto,Arial,sans-serif;align-items:center;justify-content:center;display:flex;flex-direction:column;}.ns-tfobz-e-1{box-sizing:border-box;width:377px;height:633px;}.ns-tfobz-e-2{box-sizing:border-box;position:relative;top:208.29px;left:0;width:100%;height:100%;overflow:hidden;}.ns-tfobz-e-3{box-sizing:border-box;position:absolute;top:-208.29px;left:0;width:100px;height:100px;}.ns-tfobz-e-4{box-sizing:border-box;position:absolute;top:-208.29px;left:0;width:100%;height:100%;}.ns-tfobz-e-5{box-sizing:border-box;position:relative;top:-100%;left:0;width:100%;height:100%;display:flex;flex-direction:column;align-items:center;}.ns-tfobz-e-6{display:block;max-height:100%;max-width:100%;}.ns-tfobz-e-7{flex-shrink:0;flex-grow:0;width:377px;}.ns-tfobz-e-8{box-sizing:border-box;display:flex;flex-grow:1;height:50%;max-width:100%;margin:16px;align-items:center;flex-direction:column;}.ns-tfobz-e-9{box-sizing:border-box;line-height:1.4em;font-weight:300;text-align:center;padding-top:26.39px;margin:0 37.7px;}.ns-tfobz-e-11{box-sizing:border-box;line-height:1.4em;font-weight:700;text-align:center;margin:18.99px 37.7px;}.ns-tfobz-e-13{box-sizing:border-box;font-weight:300;text-align:center;letter-spacing:0.01em;line-height:1.5em;margin:0 37.7px;flex:1 0 0;}.ns-tfobz-e-15{box-sizing:border-box;height:100px;width:1px;flex-shrink:0;}.ns-tfobz-v-4 .ns-tfobz-e-0,.ns-tfobz-v-4 .ns-tfobz-e-13{font-size:23px;}.ns-tfobz-v-4 .ns-tfobz-e-9{font-size:18px;}.ns-tfobz-v-4 .ns-tfobz-e-11{font-size:35px;}.ns-tfobz-l-cardTowerAll{opacity:1;position:relative;}@keyframes button_animation{0%{opacity:0;}50%{opacity:1;}100%{opacity:1;}}@keyframes url_animation{0%{opacity:0;}50%{opacity:0;}100%{opacity:0.7;}}@keyframes image_animation{0%{opacity:0;}100%{opacity:1;}}@keyframes description_animation{0%{opacity:0;transform:translateY(-20%);}100%{opacity:1;}}.ns-tfobz-e-1{background-color:rgb(51,57,68);background-repeat:no-repeat;background-size:contain;background-position:top;}.ns-tfobz-e-2{pointer-events:none;}.ns-tfobz-e-4{background-image:linear-gradient(to bottom, rgba(168,161,164,0) 30%,
                  rgba(168,161,164,1) 38%,
                  rgba(168,161,164,1));}.ns-tfobz-e-7{width:377px;min-width:377px;max-width:377px;height:197px;min-height:197px;max-height:197px;}.ns-tfobz-e-8{background-color:#fff;opacity:.95;border-radius:8px;box-shadow:0 0 2px 0 rgba(0,0,0,.12),0 2px 2px 0 rgba(0,0,0,.24);}.ns-tfobz-e-9{opacity:0.7;animation:url_animation 1.2s cubic-bezier(.4,.0,.2,1) 0s 1;animation-fill-mode:both;color:#333;font-family:&quot;Google Sans&quot;, &quot;Roboto&quot;,&quot;Google Sans&quot;,Roboto,Arial,sans-serif;font-weight:400;}.ns-tfobz-e-10,.ns-tfobz-e-12,.ns-tfobz-e-14{white-space:nowrap;}.ns-tfobz-e-11{animation:button_animation .9s cubic-bezier(.4,.0,.2,1) 0s 1;animation-fill-mode:both;color:#333;font-family:&quot;Google Sans&quot;, &quot;Roboto&quot;,&quot;Google Sans&quot;,Roboto,Arial,sans-serif;}.ns-tfobz-e-13{animation:description_animation .9s cubic-bezier(.4,.0,.2,1) .3s 1;animation-fill-mode:both;color:#333;font-family:&quot;Google Sans&quot;, &quot;Roboto&quot;,&quot;Google Sans&quot;,Roboto,Arial,sans-serif;font-weight:400;}.ns-tfobz-e-1{background-image:url(https://tpc.googlesyndication.com/simgad/8500603729442117881/2076313506083323656);}</style><link href=&quot;https://fonts.googleapis.com/css?family=Google%20Sans%3A400%2C700&quot; rel=&quot;stylesheet&quot;><style amp4ads-boilerplate=&quot;&quot;>body{visibility:hidden}</style></head>
  </head>
  <body></body>
  </html>" style="width: 377px; height: 633px;" id="google_ads_iframe_1"></iframe><amp-analytics sandbox="true" trigger="immediate" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" aria-hidden="true" hidden="" style="width: 1px; height: 1px;"><script type="application/json">{"transport":{"beacon":false,"xhrpost":false},"requests":{"visibility1":"https://pagead2.googlesyndication.com/pcs/activeview?xai=AKAOjssDT7v9cbt4aw2hJlXTaU7N02eCK_h-w1nM0ThSgTG-RQvCD-jSJdt7DRe22kwK_g4NoVE4XIMqUwUPXfLDIFOuTSQTiljhqaPpu58xNHGhRzO8c8q6qPxWOK_j5AbUsCBqQs0&sai=AMfl-YRUlECn_GH9vQzpGpJ6eBNVIdixAyI88D3tkQo4bf1MeUybo2EZ2mEc_Hb_W2s0kFzA0mG2xLeI6QBVkfKijeG1iJ94jfow-h3vkA&sig=Cg0ArKJSzEvzDKhMtx20EAE&cid=CAQSKQDq26N9zpiewoHE9godbX3OTa9uBW73rHKk61HS3lDvHqlJ8YpsqaVgGAEgEw&id=ampim&o=${elementX},${elementY}&d=${elementWidth},${elementHeight}&ss=${screenWidth},${screenHeight}&bs=${viewportWidth},${viewportHeight}&mcvt=${maxContinuousVisibleTime}&mtos=0,0,${maxContinuousVisibleTime},${maxContinuousVisibleTime},${maxContinuousVisibleTime}&tos=0,0,${totalVisibleTime},0,0&tfs=${firstSeenTime}&tls=${lastSeenTime}&g=${minVisiblePercentage}&h=${maxVisiblePercentage}&tt=${totalTime}&r=v&avms=ampa&uap=${uach(platform)}&uapv=${uach(platformVersion)}&uaa=${uach(architecture)}&uam=${uach(model)}&uafv=${uach(uaFullVersion)}&uab=${uach(bitness)}&uafvl=${uach(fullVersionList)}&uaw=${uach(wow64)}&adk=23329407"},"triggers":{"continuousVisible":{"request":["visibility1"],"on":"visible","visibilitySpec":{"selector":"amp-ad","selectionMethod":"closest","visiblePercentageMin":50,"continuousTimeMin":1000}}}}</script></amp-analytics></amp-ad></amp-story-grid-layer><amp-story-grid-layer template="fill" class="i-amphtml-element i-amphtml-layout-container i-amphtml-story-layer i-amphtml-built i-amphtml-layout" i-amphtml-layout="container"><div class="i-amphtml-glass-pane"></div></amp-story-grid-layer></amp-story-page></amp-story>