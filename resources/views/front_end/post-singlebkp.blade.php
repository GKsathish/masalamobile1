@foreach ($details as $feed)
@php
$hitcount_value = DB::table('post')->where('postid', $feed->postid)->take(1)->get();
@endphp
@foreach ($hitcount_value as $hitcount)
@php
DB::table('post')->where('postid', $feed->postid)->take(1)->update(['hitcount' => $hitcount->hitcount + 1]);
@endphp
@endforeach

@extends('front_end.header')
@section('content')

<?php
/*$metatitle = $feed->posttitle;
$metadescription = $feed->description;
$metaimage = $feed->imagepath;
$metaurl = "https://mobilemasala.com/";*/
?>

<head>
 <style>
     #main{
             float: left !important;
             width: 298px !important;

     }
     .post-content-inner-postdetails{
         width: 350px !important;
    padding-right: 5px;
     }
     
     .post-content-inner-details {
            width: 63% !important; 
            
        }
        
        
        @media only screen and (max-width: 1020px){
               .post-content-inner-details {
            width: 100% !important; 
            
        }

    }
 </style>

<meta property="og:title" content="Celebrity Gossips | Entertainment | Fashion | Visual Stories" />
<meta name="description" content="Mobile Masala is a popular entertainment website in India. It is the one-stop site for trending film news, paparazzi videos, celeb gossip news, lifestyle tips, health advice, etc. The spectrum of content includes Bollywood News, Entertainment, Fashion, Celebrity Gossip, Movies, Music, Technology and Gadgets,  Food, Health and Wellness, Sports, Auto, Travel and Tourism, Indian Television, Regional Cinema, Movie Reviews, and more. Mobile Masala curates the best and most popular content in the form of text articles, images, paparazzi videos and visual stories." />
<meta name="keywords" content="Celebrity Gossips,Entertainment,Fashion,Visual Stories" />
<meta name="Author" content="https://mobilemasala.com/" />

  <meta property="og:url" content="https://mobilemasala.com/"> 
<meta property="og:title" content="Celebrity Gossips | Entertainment | Fashion | Visual Stories" /> 
  <meta property="og:description" content=" Mobile Masala is a popular entertainment website in India. It is the one-stop site for trending film news, paparazzi videos, celeb gossip news, lifestyle tips, health advice, etc. The spectrum of content includes Bollywood News, Entertainment, Fashion, Celebrity Gossip, Movies, Music, Technology and Gadgets,  Food, Health and Wellness, Sports, Auto, Travel and Tourism, Indian Television, Regional Cinema, Movie Reviews, and more. Mobile Masala curates the best and most popular content in the form of text articles, images, paparazzi videos and visual stories." /> 
  <meta property="og:image" content="https://mobilemasala.com/assets/front_end/images/logo.png" />

</head>




@section('description')
<?php echo substr(strip_tags($feed->description), 0, 30); ?>
@endsection

@section('title')
<?php echo substr(strip_tags($feed->posttitle), 0, 30); ?>
@endsection

@section('url','https://mobilemasala.com/')

@section('image',$feed->imagepath)


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
    <div class="ads">
        
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
        
    <!--video ad added by praveen--> 
    
<!--    <script async id="AV62382721bab93c441117d951" type="text/javascript" src="https://tg1.aniview.com/api/adserver/spt?AV_TAGID=62382721bab93c441117d951&AV_PUBLISHERID=6229e046286f660f8b1f0456"></script>
-->    
    <!--video ad added by praveen-->
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
            <figure><img src="{{$feed->imagepath}}" alt="" width="100%"></figure>
            <div class="clear"></div>
            <aside class="post-content-inner-postdetails left">
            <?php if($feed->published_date != '') { ?>
                <h4><i class="fa fa-calendar"></i> Posted on <a href="#" rel="bookmark"><?php  $created_date = $feed->published_date;  echo date("F j, Y",strtotime($created_date)); ?></time></a></h4>
            <?php } ?>
                <div class="socialshare clear">
                    <ul>
                       <li><a href="http://www.facebook.com/sharer.php?u=<?php echo env('SITE_URL'); ?>post-single/<?php echo $feed->postid; ?>" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li> <a href="https://twitter.com/share?url=<?php echo env('SITE_URL'); ?>post-single&id=<?php echo $feed->postid; ?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"> <i class="fab fa-twitter"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                        <li><a href="https://www.instagram.com/?url=<?php echo env('SITE_URL'); ?>post-single&id=<?php echo $feed->postid; ?>" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                       <li><a href="https://api.whatsapp.com/send?text=<?php echo env('SITE_URL'); ?><?php echo "meta_share%26id=".$feed->postid."%26share=yes"; ?>" data-action="share/whatsapp/share"  data-action="share/whatsapp/share" onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
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
            
            <div>
                <a href="https://mobilemasala.com/" class="tagclick" >#MobileMasala</a>
                
                  @foreach ($get_categoryname as $categoryname)
                  
                    <?php 
                    
                    $cat = $categoryname->categoryname;
                    $catreplace =  str_replace(' ','',$cat);
                    
                    ?>
                    <a href="https://mobilemasala.com/post-content&id={{$categoryname->categoryid}}" class="tagclick">#<?php echo $catreplace;  ?></a>
                    @endforeach
                

        @php 
      $tag = DB::table('post')->DISTINCT()->where('postid',$feed->postid)->take(8)->orderBy('created_at','desc')->get();
      @endphp

      
      @foreach($tag as $taginfo)    
      <?php 
        //$tagnew =  implode(' ', array_slice(explode(',', $taginfo->hashtag), 0));

         $tagnew = $taginfo->hashtag;

         $re = (explode(",",$tagnew));
             
             foreach ($re as $value) {?>
              
              <?php  if(!empty($value)){ ?>
              <a href="https://www.mobilemasala.com/search?search= <?php echo $value;?>" class="tagclick">#<?php echo $taname = str_replace(' ','',$value); ?></a>
              <?php } ?>
              <?php } ?>
            
    
         @endforeach


            </div>
               <div style="margin-top: 10px;">
                <center>
                 
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
                 
                </center>
               </div>
            </aside>
            <!-- <div class="ads"><img src="assets/front_end/images/g8.jpg" /></div>     -->
        </div>

        <div class="next-prev-button clear">
            @foreach ($next_feed as $next_feed)
            <a href="post-single&id={{$next_feed->postid}}" rel="prev">Previous</a>
            @endforeach
            
            @foreach ($previous_feed as $previous_feed)
            <a href="post-single&id={{$previous_feed->postid}}" rel="next">Next</a>
            @endforeach
        </div>
    </div>  
    @endforeach 
    <aside id="secondary" class="container post-sidebar widget-area right">
    @include('front_end.sidebar')
    </aside>
    <!-- <div class="ads clear"><img src="assets/front_end/images/g6.jpg" /></div>   -->
    <div class="container related-post clear">
        <h2><span>Related Posts</span></h2>
       
        <ul>
        @php 
        $entertainmentinfo = DB::table('post')->where('categoryid',$feed->categoryid)->where('postid', '<>', $feed->postid)->where('status','Publish')->orderBy('created_at','desc')->skip(4)->take(12)->get(); 
        @endphp
        @foreach($entertainmentinfo as $entertainmentinfo)
       
            <li>
                
                @php
                        $get_cat = DB::table('category')->where('categoryid',$feed->categoryid)->get();
                        @endphp
                        @foreach($get_cat as $get_cat)
                        <h5 style="    padding: 8px 0;">{{$get_cat->categoryname}}</h5>
                        @endforeach
                   <a href="post-single&id={{$entertainmentinfo->postid}" title=""> <figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
                </a>
                <a href="post-single&id={{$entertainmentinfo->postid}}" title="">
                    <h3>{{$entertainmentinfo->posttitle}}</h3>
                </a>
                <a href="post-single&id={{$entertainmentinfo->postid}}" title="">
                    <p></p>
                </a>
            </li>
         @endforeach
        </ul>
       
    </div>
    <!-- <div class="ads clear"><img src="assets/front_end/images/g8.jpg" /></div>   -->
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

<script>
$(document).ready(function(){
  $("aside a:contains(Also read)").css("display", "none");
});
</script>

<script>
$(document).ready(function(){
  $("aside a:contains(Also Read)").css("display", "none");
});
</script>
@endsection
