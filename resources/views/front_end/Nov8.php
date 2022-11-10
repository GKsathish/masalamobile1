


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



	<div class="ads">
        <!-- <img src="assets/front_end/images/g8.jpg" /> -->
        <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
        <div id="gpt-passback-mobilemasala.com.Banner0.1638192042">
            <script>
                window.googletag = window.googletag || {cmd: []};
                googletag.cmd.push(function() {
                googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638192042', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638192042').addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.display("gpt-passback-mobilemasala.com.Banner0.1638192042");
                });
            </script>
        </div>
    </div>	
   
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
            <?php
                $video = $feed->videopath . "?autoplay=1";


                $vidoeurl = explode("https://www.youtube.com/embed/", $video);
                //var_dump($vidoeurl);
                $shortcode = $vidoeurl['1'];

                ?>
                <div class="video-str">
                    <figure>


                        <iframe id="vid_frame2"   class="video"width="100%" height="700" src="{{$video}}" id="mob_paparazzi_main" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </figure>
                </div>
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
	    <div class="ads">
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
			</div>
			
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
   </style>
@endsection