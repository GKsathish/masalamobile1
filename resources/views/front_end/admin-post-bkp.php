
@extends('front_end.header')
@section('content')

@foreach ($details as $feed)

<header class="entry-nav clear">
	<ul>
		<li><a href="/">Home</a></li>
        @php
        $get_categoryname = DB::table('category')->where('categoryid',$feed->categoryid)->get();
        @endphp
        @foreach ($get_categoryname as $categoryname)
		<li>{{ $categoryname->categoryname }}</li>
        @endforeach
	</ul>
</header>

<div class="entry-content">
	<!-- <div class="ads"><img src="assets/front_end/images/g8.jpg" /></div>	 -->
   
	<div class="container post-content left">
    	<div class="post-content-inner clear">
            <h1>{{$feed->posttitle}}</h1>
           <div class="postview-and-time clear">
              
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
$feed_date = $feed->created_at;
echo time_elapsed_string(date("Y-m-d H:i:s", strtotime($feed_date)));

// $feed_date = $feed->created_at;
// //  echo strtotime($feed_date);
// echo time_elapsed_string(strtotime($feed_date));
?></span>
                <span class="left"><i class="fa fa-eye"></i>{{$feed->hitcount}} View</span>
			</div>
            <figure><img src="{{$feed->imagepath}}" alt="" width="100%"></figure>
            <div class="clear"></div>
            <aside class="post-content-inner-postdetails left">
               	<h4><i class="fa fa-calendar"></i> Posted on <a href="#" rel="bookmark"><?php  $created_date = $feed->created_at; echo date("F j, Y",strtotime($created_date)); ?></time></a></h4>
                <div class="socialshare clear">
                    <ul>
                       <li><a href="http://www.facebook.com/sharer.php?u=<?php echo env('SITE_URL'); ?>post-single&id=<?php echo $feed->postlink; ?>" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li> <a href="https://twitter.com/share?url=<?php echo env('SITE_URL'); ?>post-single&id=<?php echo $feed->postlink; ?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"> <i class="fa fa-twitter"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                        <li><a href="https://www.instagram.com/?url=<?php echo env('SITE_URL'); ?>post-single&id=<?php echo $feed->postlink; ?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                       <!-- <li><a href="https://api.whatsapp.com/send?text=<?php //echo env('SITE_URL'); ?><?php //echo "post-single&id=".$share_link; ?>" data-action="share/whatsapp/share"  data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><i class="fa fa-whatsapp"></i></a></li> -->
                    </ul>
                </div>
    			<div class="googleadsmm clear"><script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
                    <div id="gpt-passback-MRATF">
                      <script>
                        window.googletag = window.googletag || {cmd: []};
                        googletag.cmd.push(function() {
                        googletag.defineSlot('/22387492205,22578111928/ad-masalamobile.com-bsnl(pyro)-banner-300x250-atf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRATF').addService(googletag.pubads());
                        googletag.enableServices();
                        googletag.pubads().set('page_url', 'masalamobile.com');
                        googletag.display('gpt-passback-MRATF');
                        });
                      </script>
                    </div></div>
            </aside>
            <aside class="post-content-inner-details right">
            <h2>{{$feed->posttitle}}</h2>
            <?php echo implode(' ', array_slice(explode(' ', $feed->description), 0)); ?>
            </aside>
			<!-- <div class="ads"><img src="assets/front_end/images/g8.jpg" /></div>	 -->
        </div>
        
    </div>	
    @endforeach 
	<aside id="secondary" class="container post-sidebar widget-area right">
	</aside>
	<!-- <div class="ads clear"><img src="assets/front_end/images/g6.jpg" /></div>	 -->
</div>

@endsection
