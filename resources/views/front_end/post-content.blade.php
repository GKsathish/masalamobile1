


	<?php  echo  $langnn = $_SERVER['REQUEST_URI'];?>
	
	<?php $langn = (explode("&lang=",$langnn)); 
	
	//var_dump($langn);
	
	 $lang = $langn['1'];
	 
	 echo $cat = $langn['0'];
	 
	 
	$cat_id =  (explode("/post-content&id=",$cat));
	

	
	  $catid = $cat_id['1'];
	 
	
	?>

@extends('front_end.langHeader')
@section('content')



<head>
<!-- fb & Whatsapp -->
<meta property="og:title" content="@yield('title')">
<meta property="og:image" content="https://mobilemasala.com/assets/front_end/images/logo.png" />
<meta name="description" content="Mobile Masala is a popular entertainment website in India. It is the one-stop site for trending film news, paparazzi videos, celeb gossip news, lifestyle tips, health advice, etc. The spectrum of content includes Bollywood News, Entertainment, Fashion, Celebrity Gossip, Movies, Music, Technology and Gadgets,  Food, Health and Wellness, Sports, Auto, Travel and Tourism, Indian Television, Regional Cinema, Movie Reviews, and more. Mobile Masala curates the best and most popular content in the form of text articles, images, paparazzi videos and visual stories." />
<meta name="keywords" content="Celebrity Gossips,Entertainment,Fashion,Visual Stories" />
<meta name="Author" content="https://mobilemasala.com/" />
<meta property="og:url" content="https://mobilemasala.com/post-content&id=2" /> 
<link rel="canonical" href="https://mobilemasala.com/post-content&id=2" />

</head>


	


<header class="entry-nav clear">
	<ul>
		<?php if($lang=="English" || $lang==""){?>
            <li><a href="/">Home</a></li>
        <?php }?>

        <?php if($lang=="Hindi"){?>
            <li><a href="/Hindi">होम
</a></li>
        <?php }?>
         <?php if($lang=="Telugu"){?>
            <li><a href="/Telugu">
                హోమ్

</a></li>
        <?php }?>
		
   <?php if($lang=="English"){?>
   
   
       @foreach ($categoryname as $categoryname)
      @php
      
      $categoryname = $categoryname->categoryname;
      
    
     
      @endphp
    @endforeach
 
    
		<li><?php echo $categoryname; ?></li>
   <?php }?>
   
   <?php if($lang=="Hindi"){?>
   
   
       @foreach ($categoryname as $categoryname)
      @php
      
      $categoryname = $categoryname->categoryhindi;
      
    
     
      @endphp
    @endforeach
 
    
		<li><?php echo $categoryname; ?></li>
   <?php }?>
   
   <?php if($lang=="Telugu"){?>
   
   
       @foreach ($categoryname as $categoryname)
      @php
      
      $categoryname = $categoryname->categorytelugu;
      
    
     
      @endphp
    @endforeach
 
    
		<li><?php echo $categoryname; ?></li>
   <?php }?>
       
	</ul>


  
</header>

<div class="entry-content">



	<div class="ads">
    <!-- <img src="assets/front_end/images/g8.jpg" /> -->
    <script async src="http://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <div id="gpt-passback-mobilemasala.com.Banner0.1638191573">
    <script>
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
      googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638191573', [[300,250],[250,250],[360,300],[336,280],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638191573').addService(googletag.pubads());
        googletag.enableServices();
        googletag.display("gpt-passback-mobilemasala.com.Banner0.1638191573");
      });
      </script>
      </div>
  </div>	
	<div class="container post-content newspost left">
	    
	   
    
       <?php   $i = 0; //$i = $loop->iteration%3 ;?>
                
           @php 
                 

			
      $entertainmentinfo= DB::select(DB::raw( "SELECT  * from post where language='$lang' AND categoryid='$catid' ORDER BY published_date DESC"));
   

    @endphp

     
				@foreach($entertainmentinfo as $feed)
			
     
			
				
		@php
            $i++;
            
        @endphp

        @if( $i == 3 )
            <div class="adscategory">
            <script async src="http://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
            <div id="gpt-passback-mobilemasala.com.Banner0.1638185587">
            <script>
            window.googletag = window.googletag || {cmd: []};
            googletag.cmd.push(function() {
              googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638185587', [[300,250],[250,250],[360,300],[336,280],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638185587').addService(googletag.pubads());
                googletag.enableServices();
                googletag.display("gpt-passback-mobilemasala.com.Banner0.1638185587");
              });
              </script>
              </div>
            </div>
        @endif
        @if( $i == 6 )
            <div class="adscategory">
            <script async src="http://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
            <div id="gpt-passback-mobilemasala.com.Banner0.1638182904">
            <script>
            window.googletag = window.googletag || {cmd: []};
            googletag.cmd.push(function() {
              googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638182904', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638182904').addService(googletag.pubads());
                googletag.enableServices();
                googletag.display("gpt-passback-mobilemasala.com.Banner0.1638182904");
              });
              </script>
              </div>
            </div>
        @endif
        @if( $i == 9 )
            <div class="adscategory">
            <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
            <div id="gpt-passback-mobilemasala.com.Banner0.1638182864">
            <script>
            window.googletag = window.googletag || {cmd: []};
            googletag.cmd.push(function() {
              googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638182864', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638182864').addService(googletag.pubads());
                googletag.enableServices();
                googletag.display("gpt-passback-mobilemasala.com.Banner0.1638182864");
              });
              </script>
              </div>
            </div>
        @endif
        
        <article class="clear lazy">
            
            <h5 class="left"><?php echo $categoryname; ?></h5>
        <figure class="left"><a href="post-single&id={{$feed->postid}}&id={{$feed->postid}}"><img src="{{$feed->imagepath}}" alt=""></a></figure>
              <aside class="right">
                  <div>
                  
                  <a href="post-single&id={{$feed->postid}}&id={{$feed->postlink}}">
                      <h2>{{$feed->posttitle}}</h2>
                  </a>
                  <!-- <p><?php //echo mb_substr($feed->description, 0,100)."..."; ?></p> -->
                  @if($feed->published_date != "")
                  <a href="">Posted on <strong><?php echo date("F j, Y",strtotime($feed->published_date)); ?></strong></a>
                  @endif
                  </div>
              </aside>
          </article>
        @endforeach
        
        </article>
		<!-- <div class="ads"><img src="assets/front_end/images/g6.jpg" /></div>	 -->
    </div>	
	<aside id="secondary" class="container post-sidebar widget-area right">
	@include('front_end.sidebar')
	</aside>
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
@endsection


