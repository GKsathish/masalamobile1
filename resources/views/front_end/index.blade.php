	@extends('front_end.header')
	@section('content')



	 
	<head>
	
	<style>
	#tagchange {
		width: auto;
		float: left;
		color: #1d1dc3;
	}
	/* .smallcont{
		display: flex;
       flex-direction: row;
	 width:100%;
	  
	   
	} */
	.tr-cont li {
    
    width:10% !important;
    font-size:14px !important;
    font-weight:bold;
}

.ct{
        display: block;
    font-size: 14px;
    margin:2px;
        line-height: 18px;


    font-weight: bold;
   
       width: 100%;
    height:40px;
    
    word-break:break-all;
    

}

.trilers{
	display: grid;
	
	grid-template-columns: repeat(4,1fr) ;
	width:100%;
		
        gap:10px;
	margin-top: 10px;
	
	}
.img2{	
    width: 100% ;
    height:100% ;
    vertical-align: middle;
    border-radius: 4px;
    
}
/*.thead{*/
    
/*    margin: 10px 0 0 0;color: #000;font-weight: 600;font-size: 15px;line-height: 18px;-webkit-line-clamp: 1;display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;max-height: initial;*/
/*}*/
	@media only screen and (max-width:920px) {

	.tr-cont li  {
	padding:20px;
    
    width:32% !important;
     

	
}
..tr-cont li a{
    
    width:32% !important;

    
	text-decoration: underline  !important;
	
}
	.trilers{
		display: grid;
	
	grid-template-columns: repeat(2,1fr) ;
	width:100%;
	float:left;
		margin-top: 10px;
	
		
	
	}
	
	.img2{	
    width: 100%;
    height:100%;
    vertical-align: middle;

    
}

.ct{
    /*    display: block;*/
    /*font-size: 12px;*/

    /*font-weight: bold;*/
     width: 100%;
    height:40px;
        display: block;
    font-size: 14px;
    margin-top:10px;
        line-height: 18px;

    word-break:break-all;
    font-weight: bold;
    
    
}

	}
	
	
	
	.hashtag{
		width: 90%;
	
		margin-left: 50px;
		margin-bottom: 35px;
	}

	.vid-main-wrapper {
		width: 100%;
	}

	/*  VIDEO PLAYER CONTAINER
			############################### */
	.vid-container {
		position: relative;

		height: 0;
		width: 60%;
		float: left;
	}

	.vid-container iframe,
	.vid-container object,
	.vid-container embed {
		width: 100%;
		height: 475px !important;
	}


	/*  VIDEOS PLAYLIST 
			############################### */
	.vid-list-container {
		width: 40%;
		height: 100%;
		height: 475px;
		overflow: hidden;
		float: right;

	}



	.vid-list-container:hover,
	.vid-list-container:focus {
		overflow-y: auto;
	}

	ol#vid-list {
		margin: 0px;
		padding: 0;
	
	}

	ol#vid-list li {
		/* height: 130px; */
		width: 100%;
		float: left;
	}

	ol#vid-list li a {
		text-decoration: none;
		background-color: #fff;
		height: 100%;
		display: block;
		padding: 0 10px;
	}

	ol#vid-list li a:hover {
		background-color: #fff;
	}

	.vid-thumb {
		float: left;
		margin-right: 10px;

	}


	.ytp-impression-link{
		
		display:none !important;
	}


	.active-vid {
		background: #3A3A3A;
	}

	#vid-list .desc {
		color: #000;
		font-size: 14px;
		margin-top: 19px;
		text-align: left;
		width: 88%;
	}

	.descp{
		
			-webkit-line-clamp: 3;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		overflow: hidden;
		max-height: initial;
		font-weight: bold;
			font-size: 14px;
			line-height: 18px !important;
			font-weight:bold;
	}
	.descp2{
		
			-webkit-line-clamp: 2 POSITION;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		overflow: hidden;
		max-height: initial;
		font-weight: bold;
		font-size: 14px;
		line-height: 18px !important;
		margin: 11px 5px;
		padding-top:25px;
	}


	#hidetext{
	display:none;   
	}


	#vhidetext{
	display:none;   
	}


	#hidetext_V{
	display:none;   
	}


	#vhidetext_V{
	display:none;   
	}
	.ytp-impression-link{
		
		display:none;
		
	}

	
	#showdesk{
		
		display:block;
	}
	
	#showmbl{
		display:none ;
	}
	
	
	
	#showdesk_V{
		
		display:block;
	}
	
	#showmbl_V{
		display:none ;
	}
	
	
	
	@media only screen and (max-width:1020px){
		#showdesk{
		
		display:none  !important;
	}
	
	#showmbl{
		display:block;
	}
	
	
	
			#showdesk_V{
		
		display:none  !important;
	}
	
	#showmbl_V{
		display:block;
	}
	
	.hashtag{
		
		
		width: 90% !important;
		margin: 0 auto;

	
	}
	#vid-list .desc {
		color: #000;
		font-size: 12px;
		margin-top: 19px;
		text-align: left;
		width: 100%;
		line-height: 14px;
		font-weight:bold;

	}

	.vid-list-container {
		width: 100%;
		height: 100%;
		height: auto;
		overflow: hidden;
		float: right;
		margin-top: 80%;
		margin-left: 0;
	}

	.vid-container {
		position: relative;
		height: 0;
		width: 100%;
		float: left;
	}

	.vid-container iframe,
	.vid-container object,
	.vid-container embed {
		width: 100%;
		height: 235px;
	}
	
	
	.descp{
		
			-webkit-line-clamp: 3;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		overflow: hidden;
		max-height: initial;
		font-weight: bold;
		font-size: 14px;
		line-height: 18px !important;

	}

	.descp2{
		
			-webkit-line-clamp: 2 POSITION;
		display: -webkit-box;
		-webkit-box-orient: vertical;
		overflow: hidden;
		max-height: initial;
		font-weight: bold;
		font-size: 14px;
		line-height: 18px !important;
		margin: 11px 5px;
		padding-top:25px;
	}


	}
	@media only screen and (min-width: 275px) and (max-width: 910px) {
		.vid-container iframe, .vid-container object, .vid-container embed {
		width: 100%;

		height: 215px !important;
		
	}
	.vid-list-container {
		width: 100%;
		height: 50%;

		overflow: hidden;
		float: right;

	}
	
	

	
	}

	.AV62382721bab93c441117d951{
		display:block;
	}
	

tabs//

.tab {

  background-color: #000000!important;
  color:#ffffff!important;
  display:flex;
  flex-direction:row;
  justify-content:space-between;
  padding:20px;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.sect{
	display:flex;
	flex-wrap: wrap;
}
@media only screen and (max-width: 975px){

.random-posts ul{
	display: flex !important;
	flex-direction: row !important; 
	flex-wrap: nowrap !important;
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
	
	
	</head>


	<div class="entry-content">
		<!--Trending Now-->
	<section class="container random-posts padding-top-none clear">
		
		
			<!--video ad added by praveen--> 
			
		<!--    <script async id="AV62382721bab93c441117d951" type="text/javascript" src="https://tg1.aniview.com/api/adserver/spt?AV_TAGID=62382721bab93c441117d951&AV_PUBLISHERID=6229e046286f660f8b1f0456"></script>
		-->    
			<!--video ad added by praveen-->
			


			<h2><span>Trending Now</span></h2>
			<div class="tumbnailcarousel owl-carousel owl-theme clear">
				@php 
				
				$entertainmentinfo= DB::select(DB::raw('SELECT  * FROM(SELECT  imagepath,postid,posttitle,categoryid   FROM post  WHERE trending_now="TRENDING NOW"  ORDER BY  published_date DESC LIMIT 15) AS temptable  LIMIT 12'));
				$entertainmentinfo1= DB::select(DB::raw('SELECT * FROM (SELECT videopath,postid,posttitle FROM paparazzi_post  WHERE trending_now="TRENDING NOW"   ORDER BY published_date DESC LIMIT 8) AS temptable  LIMIT 4'));

				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
					<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
					
				
				<div class="item clear">	
					<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">   
						<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
						<aside>
							@php
							$get_cat = DB::table('category')->where('categoryid',$entertainmentinfo->categoryid)->get();
							@endphp
							@foreach($get_cat as $get_cat)
							<h5>{{$get_cat->categoryname}}</h5>
							@endforeach
							<h3>{{$entertainmentinfo->posttitle}}</h3>
						</aside>
					</a>
		
					
					<button style="float:right; position: relative; bottom: 95px; right: 10px; cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
					<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
					</svg></button>	
				</div>
				
				
				@endforeach
				@foreach($entertainmentinfo1 as $entertainmentinfo)
				
					
				
							
				<a href="paparazzi-post&id={{$entertainmentinfo->postid}}">
							<div style="border:2px  solid #e9e9e9; display:flex;  border-radius:3px;">
							<figure style="margin:4px;"  >
							
												<!-- <iframe src="{{$entertainmentinfo->videopath}}" frameborder="0"></iframe> -->
												<iframe width="100" height="90" src="{{$entertainmentinfo->videopath}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</figure>
						

								
							<div  style="margin: 10px 0 0 0;color: #000;font-weight: 600;font-size: 15px;line-height: 18px;-webkit-line-clamp: 3;display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;max-height: initial;">  
							<h5>Paparazzi</h5>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
								</div>
							</div>
							</a>
				@endforeach 
					
				
					
			</div>

	
			
    </section>


		
				
<section class="container random-posts padding-top-none clear "> 
<h2 ><span><a href="paparazzi-details">Trailers & Teasers</a></span></h2>
			
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );

  
  </script>
	<div id="tabs">
  <ul class="tr-cont">
    <li><a href="#tabs-1">All</a></li>
    <li><a href="#tabs-2">Hindi</a></li>
    <li><a href="#tabs-3">Telugu</a></li>
	<li><a href="#tabs-3">Telugu</a></li>
	<li><a href="#tabs-3">Telugu</a></li>
  </ul>
	<div id="tabs-1">
	
	    <div id="randomposts">				
						@php 
								
								
							$entertainmentinfo1= DB::select(DB::raw('SELECT * FROM (SELECT videopath,postid,posttitle FROM paparazzi_post  WHERE  cat_type="paparazzi"   ORDER BY published_date DESC LIMIT 4) AS temptable  LIMIT 4'));

						@endphp
				    <div class="trilers" >
						@foreach($entertainmentinfo1 as $entertainmentinfo1)
						
						
						
							
							<?php
								$video = $entertainmentinfo1->videopath;
								$vidoeurl = explode("https://www.youtube.com/embed/", $video);
								//var_dump($vidoeurl);
								$shortcode = $vidoeurl['1'];
								?>
						        
									<a href="paparazzi-post&id={{$entertainmentinfo1->postid}}&lang='English'">
									
										<figure style="margin:4px;"  >
														<!-- <iframe src="{{$entertainmentinfo->videopath}}" frameborder="0"></iframe>
															<img  width="100%" height="100%" src="{{$entertainmentinfo1->videopath}}" /> -->
														
															<img src="https://img.youtube.com/vi/<?php echo $shortcode; ?>/default.jpg" class="img2"/>
									

															</figure>
								

										

										<h3 class="ct">{{$entertainmentinfo1->posttitle}}</h3>
										
									
									</a>
                                
							

						@endforeach
                    </div>	
						
					
					
						
        </div>			
				
	</div>
	<div id="tabs-2">
	
	    <div id="randomposts">				
						@php 
								
								
							$entertainmentinfo1= DB::select(DB::raw('SELECT * FROM (SELECT videopath,postid,posttitle FROM paparazzi_post  WHERE  cat_type="paparazzi"   ORDER BY published_date ASC LIMIT 4) AS temptable  LIMIT 4'));

						@endphp
				    <div  class="trilers" >
						@foreach($entertainmentinfo1 as $entertainmentinfo1)
						
						
						
							
							<?php
								$video = $entertainmentinfo1->videopath;
								$vidoeurl = explode("https://www.youtube.com/embed/", $video);
								//var_dump($vidoeurl);
								$shortcode = $vidoeurl['1'];
								?>
						        
									<a href="paparazzi-post&id={{$entertainmentinfo1->postid}}&lang=' '">
									
										<figure style="margin:4px;"  >
														<!-- <iframe src="{{$entertainmentinfo->videopath}}" frameborder="0"></iframe>
															<img  width="100%" height="100%" src="{{$entertainmentinfo1->videopath}}" /> -->
														
															<img src="https://img.youtube.com/vi/<?php echo $shortcode; ?>/default.jpg" class="img2"/>
									

															</figure>
								

										

										<h3 class="ct">{{$entertainmentinfo1->posttitle}}</h3>
										
									
									</a>
                                
							

						@endforeach
                    </div>	
						
					
					
						
        </div>			
				
	</div>
	<div id="tabs-3">
	
	    <div id="randomposts">				
						@php 
								
								
							$entertainmentinfo1= DB::select(DB::raw('SELECT * FROM (SELECT videopath,postid,posttitle FROM paparazzi_post  WHERE  cat_type="paparazzi"   ORDER BY published_date DESC LIMIT 4) AS temptable  LIMIT 4'));

						@endphp
				    <div  class="trilers" >
						@foreach($entertainmentinfo1 as $entertainmentinfo1)
						
						
						
							
							<?php
								$video = $entertainmentinfo1->videopath;
								$vidoeurl = explode("https://www.youtube.com/embed/", $video);
								//var_dump($vidoeurl);
								$shortcode = $vidoeurl['1'];
								?>
						    									<a href="paparazzi-post&id={{$entertainmentinfo1->postid}}&lang='English'">
									
										<figure style="margin:4px;"  >
														<!-- <iframe src="{{$entertainmentinfo->videopath}}" frameborder="0"></iframe>
															<img  width="100%" height="100%" src="{{$entertainmentinfo1->videopath}}" /> -->
														
															<img src="https://img.youtube.com/vi/<?php echo $shortcode; ?>/default.jpg" class="img2"/>
									

															</figure>
								

										

										<h3 class="ct">{{$entertainmentinfo1->posttitle}}</h3>
										
									
									</a>
                                
							

						@endforeach
                    </div>	
						
					
					
						
        </div>			
				
	</div>
</section>

		<!--Entertainment & Sports-->
		<section class="container equal-height padding-top-none clear">
			<aside class="content left">
				<div class="slider-carousel owl-carousel owl-theme clear" id="slider-carousel-enter">
					@php 
						$entertainmentinfo = DB::table('post')->where('categoryid',8)->where('status','Publish')->take(8)->orderBy('published_date','desc')->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo1)
					
					<?php 
					$titlorl = $entertainmentinfo1->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
					
					<div class="item clear">
						<a href="post-single&id={{$entertainmentinfo1->postid}}&post=<?php echo $title;?>">
							<img src="{{$entertainmentinfo1->imagepath}}" alt="">
							<figcaption>
								
								<h5>Entertainment</h5>
								<h5>{{$entertainmentinfo1->uploaded_by}}</h5>
								<h1>{{$entertainmentinfo1->posttitle}}</h1>
							</figcaption>
						</a>
					</div>
					
					@endforeach
				</div>
			</aside>
			<aside class="sidebar right" style="margin:0;">
				<div class="slider-carousel-withdot owl-carousel owl-theme clear" id="slider-carousel-sport">
					@php 
						$entertainmentinfo = DB::table('post')->where('categoryid',9)->where('status','Publish')->take(4)->orderBy('published_date','desc')->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
					<div class="item clear">
						<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>" style="background-image:url(<?php echo $entertainmentinfo->imagepath ?>)">
							<figcaption>
								<h5>Sports</h5>
								<h1>{{$entertainmentinfo->posttitle}}</h1>
							</figcaption>
						</a>
					</div>
					@endforeach
					<!-- <div class="item clear">
						<a href="#" style="background-image:url(assets/front_end/images/sports2.jpg)">
							<figcaption>                            
								<h5>Sports & Gossip</h5>
								<h1>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</h1>
							</figcaption>
						</a>
					</div> -->
				</div>
			</aside>
			
			<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
		
		
			<div id="gpt-passback-mobilemasala.com.Banner0.1638182447">
				<script>
					window.googletag = window.googletag || {cmd: []};
					googletag.cmd.push(function() {
					googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638182447', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638182447').addService(googletag.pubads());
					googletag.enableServices();
					googletag.display("gpt-passback-mobilemasala.com.Banner0.1638182447");
					});
				</script>
			</div>
		</section>

		<script>
		window.googletag = window.googletag || {cmd: []};
		googletag.cmd.push(function() {
		googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638182812', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638182812').addService(googletag.pubads());
			googletag.enableServices();
			googletag.display("gpt-passback-mobilemasala.com.Banner0.1638182812");
		});
		</script>
		
		
		
		<!--Horoscope-->
		
	<section class="container visual-stories clear">
		<h2 class="left"><span><a href="javascript:void(0)">Horoscope</a></span></h2>
			
		
			<div >
				<div class="visual-stories-carousel owl-carousel owl-theme clear">	
				@php
				$get_vs1 = DB::table('v_stories')->where('cat_type','horoscope')->orderBy('storyid','desc')->get();
				@endphp			
				@foreach ($get_vs1 as $get_vs1)		
					<div class="item clear">
						<a href="horoscope&id={{$get_vs1->storyid}}" target="_blank">
							<img src="<?php echo $get_vs1->imagelink; ?>" style="min-height: 400px;" />
							<figcaption>
								<!--<h2>{{$get_vs1->storytitle}}</h2>-->
								<h5>DAILY / WEEKLY </h5>
							</figcaption>
						</a>
					</div>
				@endforeach
				</div>
			</div>

		</section>
		<!--Horoscope-->
		

		

		<!--Celebrity Gossip-->
		<section class="container padding-top-none clear">
			<aside class="content left">
				<h2><a href="post-content&id=2&lang=English" class="text-dark"><span>Celebrity Gossip</span></a></h2>
				<div class="single-article clear">
					<ul>
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid',2)->where('status','Publish')->orderBy('published_date','desc')->take(3)->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
							<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
						
						<li>
						<p style="padding-left:10px;">{{$entertainmentinfo->user}} <span style="font-size:10px;">{{$entertainmentinfo->published_date}}</span></p>
							<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
							 
							<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
							<figcaption>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
								
            
							</figcaption>
							</a>
							<button style="float:right; position: relative; bottom: 40px; right: 20px; cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
		<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
		</svg></button>		
						</li>
					@endforeach
					</ul>
			</div>
				

				<!--<div class="ads"><img src="assets/front_end/images/g2.jpg" /></div> -->
			</aside>
			<aside class="sidebar right">
				<div class="ads">
					<!--<img src="{{asset('assets/front_end/images/adimage/adimg4.jpg')}}" >-->
					<!--<img src="assets/front_end/images/g1.jpg" /> -->
					<!-- <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
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
					</div> -->
						<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
						<div id="gpt-passback-mobilemasala.com.Banner0.1638182846">
						<script>
						window.googletag = window.googletag || {cmd: []};
						googletag.cmd.push(function() {
						googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638182846', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638182846').addService(googletag.pubads());
							googletag.enableServices();
							googletag.display("gpt-passback-mobilemasala.com.Banner0.1638182846");
						});
						</script>
						</div>
				</div>
			</aside>
		</section>
		
	
		
		


		<!--Visual Stories-->
		<section class="container visual-stories clear">
			<h2 class="left"><span><a href="javascript:void(0)">Visual Stories</a></span></h2>
			<div class="tab visualstories right">
				<!-- <button class="tablinks_VS" onclick="openVisualStories(event, 'FEATURED')" id="defaultOpenvs">FASHION</button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'LIFESTYLE')">LIFESTYLE</button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'HEALTH & FITNESS')">HEALTH & FITNESS</button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'ENTERTAINMENT')">ENTERTAINMENT</button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'FOOD')">FOOD</button> -->
				<button class="tablinks_VS" onclick="openVisualStories(event, 'FEATURED')" id="defaultOpenvs"></button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'LIFESTYLE')"></button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'HEALTH & FITNESS')"></button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'ENTERTAINMENT')"></button>
				<button class="tablinks_VS" onclick="openVisualStories(event, 'FOOD')"></button>
				<!-- <button class="tablinks_VS" onclick="openVisualStories(event, 'TRAVEL')">TRAVEL</button> -->
			</div>
			<div id="FEATURED" class="tabVisualStories clear">
				<div class="visual-stories-carousel owl-carousel owl-theme clear">	
				@php
				$get_vs1 = DB::table('v_stories')->where('categoryid',1)->where('cat_type','visualstories')->orderBy('storyid','desc')->get();
				@endphp			
				@foreach ($get_vs1 as $get_vs1)		
					<div class="item clear">
						<a href="stories&id={{$get_vs1->storyid}}" target="_blank">
							<img src="<?php echo $get_vs1->imagelink; ?>" style="min-height: 400px;" />
							<figcaption>
								<h2>{{$get_vs1->storytitle}}</h2>
								<h5>FEATURED</h5>
							</figcaption>
						</a>
					</div>
				@endforeach
				</div>
			</div>
			<div id="LIFESTYLE" class=" tabVisualStories clear">
				<div class="visual-stories-carousel owl-carousel owl-theme clear">
				@php
				$get_vs = DB::table('v_stories')->where('categoryid',13)->get();
				@endphp			
				@foreach ($get_vs as $get_vs)								
					<div class="item clear">
						<a href="stories&id={{$get_vs->storyid}}" target="_blank">
							<img src="<?php echo $get_vs->imagelink; ?>" style="min-height: 400px; " />
							<figcaption>
								<h2>{{$get_vs->storytitle}}</h2>
								<h5>FEATURED</h5>
							</figcaption>
						</a>
					</div>
				@endforeach
				</div>
			</div>
			<div id="HEALTH & FITNESS" class=" tabVisualStories clear">
				<div class="visual-stories-carousel owl-carousel owl-theme clear">						
					@php
				$get_vs = DB::table('v_stories')->where('categoryid',14)->get();

				@endphp			
				@foreach ($get_vs as $get_vs)								
					<div class="item clear">
						<a href="stories&id={{$get_vs->storyid}}" target="_blank">
							<img src="<?php echo $get_vs->imagelink; ?>" style="min-height: 400px;" />
							<figcaption>
								<h2>{{$get_vs->storytitle}}</h2>
								<h5>FEATURED</h5>
							</figcaption>
						</a>
					</div>
				@endforeach
				</div>
			</div>
			<div id="ENTERTAINMENT" class=" tabVisualStories clear">
				<div class="visual-stories-carousel owl-carousel owl-theme clear">						
					@php
				$get_vs = DB::table('v_stories')->where('categoryid',8)->get();
				@endphp			
				@foreach ($get_vs as $get_vs)								
					<div class="item clear">
						<a href="stories&id={{$get_vs->storyid}}" target="_blank">
							<img src="<?php echo $get_vs->imagelink; ?>" style="min-height: 400px;" />
							<figcaption>
								<h2>{{$get_vs->storytitle}}</h2>
								<h5>FEATURED</h5>
							</figcaption>
						</a>
					</div>
				@endforeach
				</div>
			</div>
			<div id="FOOD" class=" tabVisualStories clear">
				<div class="visual-stories-carousel owl-carousel owl-theme clear">						
					@php
				$get_vs = DB::table('v_stories')->where('categoryid',15)->get();
				@endphp			
				@foreach ($get_vs as $get_vs)								
					<div class="item clear">
						<a href="stories&id={{$get_vs->storyid}}" target="_blank">
							<img src="<?php echo $get_vs->imagelink; ?>" style="min-height: 400px;" />
							<figcaption>
								<h2>{{$get_vs->storytitle}}</h2>
								<h5>FEATURED</h5>
							</figcaption>
						</a>
					</div>
				@endforeach
				</div>
			</div>
			<div id="TRAVEL" class=" tabVisualStories clear">
				<div class="visual-stories-carousel owl-carousel owl-theme clear">						
					@php
				$get_vs = DB::table('v_stories')->where('categoryid',16)->get();
				@endphp			
				@foreach ($get_vs as $get_vs)								
					<div class="item clear">
						<a href="stories&id={{$get_vs->storyid}}" target="_blank">
							<img src="<?php echo $get_vs->imagelink; ?>" style="min-height: 400px;" />
							<figcaption>
								<h2>{{$get_vs->storytitle}}</h2>
								<h5>FEATURED</h5>
							</figcaption>
						</a>
					</div>
				@endforeach
				</div>
			</div>
		</section>
		
		
	
	
	
	
		<!--VIDEO STORIES-->
		
		
			<!--Paparazzi-->
		
		<section class="container random-posts padding-top-none clear" >
			<h2><a href="paparazzi-details"><span>VIDEO STORIES</span></a></h2>
			<div id="randomposts">
				
			
		<div class="vid-main-wrapper clearfix" >

			<!-- THE YOUTUBE PLAYER -->
			<div class="vid-container" id = "videostories">
			@php
			$entertainmentinfo = DB::table('paparazzi_post')->where('status','Publish')->where('cat_type','Video_Stories')->orderBy('postid','desc')->take(1)->get();
			@endphp
			@foreach($entertainmentinfo as $entertainmentinfo)

			<?php
			$video = $entertainmentinfo->videopath;
			$vidoeurl = explode("https://www.youtube.com/embed/", $video);
			//var_dump($vidoeurl);
			$shortcode = $vidoeurl['1'];
			?>
<div id='sticky' style='position: fixed; right: 0px; bottom: 0px; margin: 0 auto;width: 100%; background-color: rgba(255, 255, 255, 0.8); border-top: 2px solid rgba(225, 225, 225, 0.8); visibility: hidden; z-index:99999999;'><button id='ad_close' style='color:#000; background-color: hsla(0,0%,100%,.8); border: hsla(0,0%,100%,.8); position:absolute; left : 0px; top : -45px;'>x</button>
	<div id='gpt-passback-Sticky' style='min-width: 300px; min-height: 50px;text-align: center; display: flex; justify-content:center;'>

			<iframe id="vid_frame2" class="video" width="640" height="360" src="https://www.youtube.com/embed/<?php echo  $shortcode;  ?>	?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>
	</div>
			</div>
						<div id ="hidemain_V" class="desc"><p class="descp2"><b>{{$entertainmentinfo->posttitle}}</b></p></div><br>
				
				
				<div id ="" class="desc"><p id="addtext_V" class="descp2"></p></div><br>
				<script>
	var tag = document.createElement("script");
	tag.src = "https://www.youtube.com/iframe_api";
	document.head.appendChild(tag);

	function onYouTubeIframeAPIReady() {
	var player1 = new YT.Player("player", {
		height: "100%",
		width: "100%",
		videoId: "7E2q5PRU5MQ",
		origin: "https://s.codepen.io",
		playerVars: {
		controls: 1
		},
		events: {
		onReady: function(e) {
			e.target.mute();
			videoAutoControl(".video", e.target, 0.5);
		}
		}
	});
	}


	function videoAutoControl(selector, video, videoTogglePct) {
	
	var videoHeightPct = $(selector).height() / $(window).height();
	var offsetIn = (1 - videoTogglePct * videoHeightPct) * 100;
	var offsetOut = -(videoTogglePct * videoHeightPct) * 100;

	function inView(video) {
		video.playVideo();
	}

	function outView(video) {
		video.pauseVideo();
	}

	
	$(selector).waypoint(
		function(direction) {
		if (direction == "down")
			inView(video); 
		else outView(video); 
		},
		{
		offset: offsetIn + "%"
		}
	);


	$(selector).waypoint(
		function(direction) {
		if (direction == "up")
			inView(video); 
		else outView(video); 
		},
		{
		offset: offsetOut + "%"
		}
	);
	}

	</script>
				
			@endforeach


			</div>

			<!-- THE PLAYLIST -->
			<div class="vid-list-container" id="vid-list">
			<ol id="vid-list">
				@php
				$entertainmentinfo = DB::table('paparazzi_post')->where('status','Publish')->where('cat_type','Video_Stories')->orderBy('postid','desc')->inRandomOrder()->take(20)->get();
				@endphp
				@foreach($entertainmentinfo ->slice(1, 20) as $entertainmentinfo)
						
				<?php
				$video = $entertainmentinfo->videopath;
				$vidoeurl = explode("https://www.youtube.com/embed/", $video);
				//var_dump($vidoeurl);
				$shortcode = $vidoeurl['1'];
				?>

				<li  id="showdesk_V" class="youtubedesktoptext_V">
					
				<a  href="javascript:void();" onClick="document.getElementById('vid_frame2').src='https://www.youtube.com/embed/<?php echo  $shortcode;  ?>	?enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1&mute=1'" >
					<span class="vid-thumb"><img src="https://img.youtube.com/vi/<?php echo $shortcode; ?>/default.jpg" /></span>
					
					<div class="desc"><p class="descp2" id="gettittle">{{$entertainmentinfo->posttitle}}</p></div>
		
				</a>
				</li>
				
				<li  id="showmbl_V" class="youtubembltoptext_V">
					
				<a  href=#videostories href="javascript:void();" onClick="document.getElementById('vid_frame2').src='https://www.youtube.com/embed/<?php echo  $shortcode;  ?>	?enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1&mute=1'" >
					<span class="vid-thumb"><img src="https://img.youtube.com/vi/<?php echo $shortcode; ?>/default.jpg" /></span>
					
					<div class="desc"><p class="descp2" id="gettittle">{{$entertainmentinfo->posttitle}}</p></div>
		
				</a>
				</li>
		
				
				
				@endforeach

			</ol>

			</div>

		</div>


		<script>
			$(document).ready(function() {
			$('.vid-item').each(function(index) {
				$(this).on('click', function() {
				var current_index = index + 1;
				$('.vid-item .thumb').removeClass('active');
				$('.vid-item:nth-child(' + current_index + ') .thumb').addClass('active');
				});
			});
			

				$(".youtubembltoptext_V").on('click', function() {
		
				var text = $(this). text();
				
				$("#hidemain_V").hide();
			
				$( "#addtext_V" ).empty();
				$( "#addtext_V" ).append(text);
				
				
				$('#showmbl_V').animate({
						scrollTop: $("#videostories").offset().top
				}, 2000);
				$('#vid_frame2')[0].contentWindow.postMessage('{"event":"command","func":"' + 'startVideo' + '","args":""}', '*');
				
					
			});			
						
			$(".youtubedesktoptext_V").on('click', function() {
		
				var text = $(this). text();
				
				$("#hidemain_V").hide();
				$( "#addtext_V" ).empty();
				$( "#addtext_V" ).append(text);
			});
			});
		</script>
		
		<script>
		$(document).ready(function() {
			$(window).scroll(function() {

			//alert('ok')

			$('#vid_frame2')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
			});

		});
		</script>

			</div>
			<button class="more_pap_btn" onclick="location.href='Video-stories-details'">More Video Stories</button>
		</section>
		
		
		<!--VIDEO STORIES-->
		
		
		
		
		
	
		
		
		<!--Random Posts-->
		<section class="container random-posts padding-top-none clear">
			<h2><span>Random Posts</span></h2>
			<div id="randomposts">
				<ul class="clear">
					@php 
					$entertainmentinfo = DB::table('post')->where('status','Publish')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 3 DAY)')->inRandomOrder()->take(5)->orderBy('published_date','desc')->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					<li>
					<button style="float:right; position: relative;cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
			<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
			</svg></button>
						<a href="post-single&id={{$entertainmentinfo->postid}}&postlink={{$entertainmentinfo->postlink}}" title="">
						@php
							$get_cat = DB::table('category')->where('categoryid',$entertainmentinfo->categoryid)->get();
							@endphp
							@foreach($get_cat as $get_cat)
							<h5>{{$get_cat->categoryname}}</h5>
							@endforeach
							
							<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
						</a>
						
					</li>
					@endforeach
				</ul>
			</div>
		</section>
		
		<!--Random Posts-->
		
		
		
		<!--Movies-->
		
		<section class="container padding-top-none clear">
			<aside class="content left">
				<h2><a href="post-content&id=4&lang=English"><span>Movies</span></a></h2>
				<div class="grid clear">
						@php 
						$entertainmentinfo = DB::table('post')->where('categoryid',4)->where('status','Publish')->orderBy('published_date','desc')->take(3)->get(); 
						@endphp
						@foreach($entertainmentinfo as $entertainmentinfo)
						<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
					
					<article>
					<h3>{{$entertainmentinfo->uploaded_by}}</h3>
						<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
							<img src="{{$entertainmentinfo->imagepath}}" alt="" width="100%">
							<figcaption>
							
								<h5>Movies</h5>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
							</figcaption>
						</a>
					</article>
						@endforeach
					<!-- <article>
						<a href="#">
							<img src="assets/front_end/images/dikkilona_movie.jpg" alt="">
							<figcaption>
								<h5>Movies</h5>
								<h3>Dikkilona | Tamil Movie | Video Song</h3>
							</figcaption>
						</a>
					</article>
					<article>
						<a href="#">
							<img src="assets/front_end/images/dikkilona_movie.jpg" alt="" width="100%">
							<figcaption>
								<h5>Movies</h5>
								<h3>The Big Bull | Hindi Movie | Trailer</h3>
							</figcaption>
						</a>
					</article> -->
				</div>
			</aside>
			
			
			<aside class="sidebar right">
				<div class="ads">
					<!-- <img src="assets/front_end/images/g7.jpg" width="80%"/> -->
					<!-- <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
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
					<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
					<div id="gpt-passback-MRATF002">
					<script>
						window.googletag = window.googletag || {cmd: []};
						googletag.cmd.push(function() {
						googletag.defineSlot('/22387492205,22578111928/ad-masalamobile.com-bsnl(pyro)-banner-300x250-atf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRATF002').addService(googletag.pubads());
						googletag.enableServices();
						googletag.pubads().set('page_url', 'masalamobile.com');
						googletag.display('gpt-passback-MRATF002');
						});
					</script>
					</div> -->
					<!--<img src="{{asset('assets/front_end/images/adimage/adimg4.jpg')}}" style="margin-top:20px;">-->
					<!--<a href="https://play.google.com/store/apps/details?id=com.beeinnovations.zing" target="_blank"><img src="{{asset('image/zing_ad_3.jpg')}}" style="margin-top:20px;width:100%"></a>-->
					
					<!--<script async id="AV62382721bab93c441117d951" type="text/javascript" src="https://tg1.aniview.com/api/adserver/spt?AV_TAGID=62382721bab93c441117d951&AV_PUBLISHERID=6229e046286f660f8b1f0456"></script>-->
					
					<a href="https://play.google.com/store/apps/details?id=com.beeinnovations.zing" target="_blank"><img src="{{asset('assets/front_end/images/adimage/Dussehra 5.jpg')}}" style="margin-top:50px;width:100%"></a>
				</div>
			</aside>
		</section>
		
		<!--Paparazzi-->
		
		<section class="container random-posts padding-top-none clear">
			<h2><a href="paparazzi-details"><span>Paparazzi</span></a></h2>
			<div id="randomposts">
				
			
			<div class="vid-main-wrapper clearfix">

				<!-- THE YOUTUBE PLAYER -->
				<div class="vid-container" id = "paparazzi-section">
				@php
				$entertainmentinfo = DB::table('paparazzi_post')->where('status','Publish')->where('cat_type','paparazzi')->orderBy('postid','desc')->take(1)->get();
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)

				<?php
				$video = $entertainmentinfo->videopath;
				$vidoeurl = explode("https://www.youtube.com/embed/", $video);
				//var_dump($vidoeurl);
				$shortcode = $vidoeurl['1'];
				?>
				 <div class="video-wrap">
				<iframe id="vid_frame" class="video" width="640" height="360" src="https://www.youtube.com/embed/<?php echo  $shortcode;  ?>	?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>
				</div>


					<div id ="hidemain" class="desc"><p class="descp2"><b>{{$entertainmentinfo->posttitle}}</b></p></div><br>
					<div id ="" class="desc"><p id="addtext" class="descp2"></p></div><br>
					
				@endforeach

				</div>

				<!-- THE PLAYLIST -->
				<div class="vid-list-container" id="vid-list">
				<ol id="vid-list">
					@php
					$entertainmentinfo = DB::table('paparazzi_post')->where('status','Publish')->where('cat_type','<>','Video_Stories')->where('cat_type','paparazzi')->orderBy('postid','desc')->inRandomOrder()->take(20)->get();
					@endphp
					@foreach($entertainmentinfo ->slice(1, 20) as $entertainmentinfo)
							
					<?php
					$video = $entertainmentinfo->videopath;
					$vidoeurl = explode("https://www.youtube.com/embed/", $video);
					//var_dump($vidoeurl);
					$shortcode = $vidoeurl['1'];
					?>

					<li  id="showdesk" class="youtubedesktoptext">
						
					<a  href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/<?php echo  $shortcode;  ?>	?enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1&mute=1'" >
						<span class="vid-thumb"><img src="https://img.youtube.com/vi/<?php echo $shortcode; ?>/default.jpg" /></span>
						
						<div class="desc"><p class="descp2" id="gettittle">{{$entertainmentinfo->posttitle}}</p></div>
			
					</a>
					</li>
					
					<li  id="showmbl" class="youtubembltoptext">
						
					<a  href=#paparazzi-section href="javascript:void();" onClick="document.getElementById('vid_frame').src='https://www.youtube.com/embed/<?php echo  $shortcode;  ?>	?enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1&mute=1'" >
						<span class="vid-thumb"><img src="https://img.youtube.com/vi/<?php echo $shortcode; ?>/default.jpg" /></span>
						
						<div class="desc"><p class="descp2" id="gettittle">{{$entertainmentinfo->posttitle}}</p></div>
			
					</a>
					</li>
			
					
					
					@endforeach

				</ol>

				</div>

			</div>


			<script>
				$(document).ready(function() {
				$('.vid-item').each(function(index) {
					$(this).on('click', function() {
					var current_index = index + 1;
					$('.vid-item .thumb').removeClass('active');
					$('.vid-item:nth-child(' + current_index + ') .thumb').addClass('active');
					});
				});
				

					$(".youtubembltoptext").on('click', function() {
			
					var text = $(this). text();
					
					$("#hidemain").hide();
				
					$( "#addtext" ).empty();
					$( "#addtext" ).append(text);
					
					
					$('#showmbl').animate({
							scrollTop: $("#paparazzi-section").offset().top
					}, 2000);
					$('#vid_frame')[0].contentWindow.postMessage('{"event":"command","func":"' + 'startVideo' + '","args":""}', '*');
					
						
				});			
							
				$(".youtubedesktoptext").on('click', function() {
			
					var text = $(this). text();
					
					$("#hidemain").hide();
					$( "#addtext" ).empty();
					$( "#addtext" ).append(text);
				});
				});
			</script>
			
			<script>
			$(document).ready(function() {
				$(window).scroll(function() {

				//alert('ok')

				$('#vid_frame')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
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
			<button class="more_pap_btn" onclick="location.href='paparazzi-details'">More Paparazzi</button>
		</section>
		<!--Fashion and Autonews & Sidebar-->
		<section class="container random-posts padding-top-none clear">
			<h2><a href="post-content&id=1&lang=English"><span>Fashion</span></a></h2>
			<div class="single-article-carousel owl-carousel owl-theme clear">
				
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid',1)->where('status','Publish')->orderBy('published_date','desc')->inRandomOrder()->take(10)->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					<div class="item clear">
										<button style="float:right; position: relative;cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
								<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
								</svg></button>
							<a href="post-single&id={{$entertainmentinfo->postid}}&postlink={{$entertainmentinfo->postlink}}" title="">
							@php
								$get_cat = DB::table('category')->where('categoryid',$entertainmentinfo->categoryid)->get();
								@endphp
								@foreach($get_cat as $get_cat)
								<h5>{{$get_cat->categoryname}}</h5>
								@endforeach
								
								<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
							</a>
										
						
						@endforeach
					
				</div>
		</section>

		
		<!--Technology & Gadgets-->
		
		<section class="container padding-top-none clear">
			<aside class="content left">
				<h2><a href="post-content&id=7&lang=English"><span>Technology & Gadgets</span></a></h2>
				<div class="single-article clear">
					<ul>
					@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',7)->where('status','Publish')->orderBy('published_date','desc')->take(6)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
					<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
						<li>
						<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
						<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
						<figcaption>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
							
							<h5>Technology & Gadgets</h5>
						</figcaption>
						</a>
						<button style="float:right; position: relative; bottom: 40px; right: 20px; cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
			<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
			</svg></button>
						</li>
				@endforeach
					</ul>
				</div>
			</aside>
			<aside class="sidebar right">
				
				<div class="ads">
					</br></br>
					<a href="https://play.google.com/store/apps/details?id=com.beeinnovations.zing" target="_blank"><img src="{{asset('assets/front_end/images/adimage/MMAUG222022.jpg')}}"></a>
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
					</div> -->
				</div>
			</aside>
		</section>
		
		<!--Health and Wellness-->
		
		<section class="container padding-top-none clear">
			<h2><a href="post-content&id=6&lang=English"><span>Health & Wellness</span></a></h2>
			<div class="single-article-carousel owl-carousel owl-theme clear">
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',6)->where('status','Publish')->take(8)->orderBy('published_date','desc')->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
				<div class="item clear">
					<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
						<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
						<aside>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
							<h5>Health & Wellness</h5>
						</aside>
					</a>
					<button style="float:right; position: relative; bottom: 20px; right: 20px; cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
			<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
			</svg></button>
					</div>
					@endforeach
				</div>
		</section>
		<!-- <div class="container padding-top-none ads"><img src="assets/front_end/images/g3.jpg" /></div> -->
			
		<!-- <div class="container padding-top-none ads"><img src="assets/front_end/images/g5.jpg" /></div> -->
		
		<!-- <div class="container ads"><img src="assets/front_end/images/g6.jpg" /></div>	 -->
		
		<!-- <div class="container padding-top-none ads"><img src="assets/front_end/images/g8.jpg" /></div>	 -->
		
		<!--Sports-->
		
		<section class="container padding-top-none clear">
			<h2><a href="post-content&id=9&lang=English"><span>Sports</span></a></h2>
			<div class="tumbnailcarousel owl-carousel owl-theme clear">
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',9)->where('status','Publish')->orderBy('published_date','desc')->take(8)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
				<div class="item clear">
					<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
						<figure><img src="<?php echo $entertainmentinfo->imagepath; ?>" alt=""></figure>
						<aside>
							<h5>Sports</h5>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
						</aside>
					</a>
					<button style="float:right; position: relative; bottom: 95px; right: 10px; cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
					<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
					</svg></button>	
				</div>
				@endforeach
			</div>
		</section>
		
		<!--Music-->
		
		<section class="container padding-top-none clear">
			<h2><a href="post-content&id=5&lang=English"><span>Music</span></a></h2>
			<div class="single-article-carousel owl-carousel owl-theme clear">
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',5)->where('status','Publish')->take(8)->orderBy('published_date','desc')->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
				<div class="item clear">
					<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
						<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
						<aside>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
							<h5>Music</h5>
						</aside>
					</a>
					<button style="float:right; position: relative; bottom: 20px; right: 20px; cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
			<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
			</svg></button>
					</div>
					@endforeach
				</div>
		</section>
		
		<!--Travel & Tourism-->
		
		
		<section class="container random-posts padding-top-none clear">
			<h2><a href="post-content&id=11&lang=English"><span>Travel & Tourism</span></a></h2>
			<div id="randomposts">
				<ul class="clear">
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid',11)->where('status','Publish')->orderBy('published_date','desc')->inRandomOrder()->take(5)->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					
						<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
					
					<li>
					<button style="float:right; position: relative;cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
		`<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
		</svg></button>
						<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>" title="">
						@php
							$get_cat = DB::table('category')->where('categoryid',$entertainmentinfo->categoryid)->get();
							@endphp
							@foreach($get_cat as $get_cat)
							<h5>{{$get_cat->categoryname}}</h5>
							@endforeach
							
							<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
						</a>
						
					</li>
					@endforeach
				</ul>`
			</div>
		</section>
			<!--Fashion and Autonews & Sidebar-->
		
			<section class="container equal-height padding-top-none clear">
		
				<aside class="content left">
					<h2><span><a href="post-content&id=10&lang=English">Autonews</a></span></h2>
					<article class="single-article-box clear">
							@php 
						$entertainmentinfo = DB::table('post')->where('categoryid', 10)->where('status','Publish')->orderBy('published_date','desc')->take(4)->get(); 
						@endphp
						@foreach($entertainmentinfo as $entertainmentinfo)
							<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
						<aside>
							<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
								<figure style="background-image:url('<?php echo $entertainmentinfo->imagepath; ?>');"></figure>
								<figcaption>
									<h5>Autonews</h5>
									<h3>{{$entertainmentinfo->posttitle}}</h3>
								</figcaption>
							</a>
						</aside>
					
							<!-- <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>-->
							<!--<div id="gpt-passback-MRBTF">-->
							<!--	<script>-->
							<!--		window.googletag = window.googletag || {cmd: []};-->
							<!--		googletag.cmd.push(function() {-->
							<!--		googletag.defineSlot('/22387492205/ad-masalamobile.com-bsnl(pyro)-banner-300x250-btf', [[360, 300], [250, 250], [336, 280], [300, 250], [300, 280]], 'gpt-passback-MRBTF').addService(googletag.pubads());-->
							<!--		googletag.enableServices();-->
							<!--		googletag.pubads().set('page_url', 'masalamobile.com');-->
							<!--		googletag.display('gpt-passback-MRBTF');-->
							<!--		});-->
							<!--	</script>-->
							<!--</div>-->
					@endforeach
					</article>
				</aside>
				<aside class="sidebar right">
					<div class="news-list sidebarposts nomargin">
						<div class="tab">
							<button class="tablinks" onclick="openCity(event, 'Recent')" id="defaultOpen">Recent</button>
							<button class="tablinks" onclick="openCity(event, 'Popular')">Popular</button>
						</div>
						<div id="Recent" class="tabcontent clear">
							<ul>
							@php 
							$entertainmentinfo = DB::table('post')->where('status','Publish')->orderBy('published_date','desc')->take(8)->get(); 
							@endphp
							@foreach($entertainmentinfo as $entertainmentinfo)
										<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
								<li>
								<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
									<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
									<h3>{{$entertainmentinfo->posttitle}}</h3>
								</a>
								</li>
							@endforeach
							</ul>
						</div>
						<div id="Popular" class="tabcontent clear">
							<ul>
							<?php /* $entertainmentinfo = DB::table('post')->where('hitcount', '>',0)->where('status','Publish')->take(7)->orderBy('hitcount','desc')->get();  */  //OLD LOGIC ?> 
							@php 
								$entertainmentinfo = DB::table('post')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)')->where('hitcount', '>',0)->where('status','Publish')->take(7)->orderBy('hitcount','desc')->get();
								@endphp
								@foreach($entertainmentinfo as $entertainmentinfo)
														<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
									<li>
									<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
										<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
										<h3>{{$entertainmentinfo->posttitle}}</h3>
									</a>
									</li>
								@endforeach
							</ul>
						</div>	
					</div>
				</aside>
			</section>
		
		<!--More-->
		
		<section class="container padding-top-none clear">
			<h2><a href="post-content&id=17&lang=English"><span>More</span></a></h2>
			<div class="tumbnailcarousel owl-carousel owl-theme clear">
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',17)->where('status','Publish')->orderBy('published_date','desc')->take(8)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
														<?php 
					$titlorl = $entertainmentinfo->posttitle;
					$title = str_replace(" ","+",$titlorl);
					?>
				<div class="item clear">
					<a href="post-single&id={{$entertainmentinfo->postid}}&post=<?php echo $title;?>">
						<figure><img src="<?php echo $entertainmentinfo->imagepath; ?>" alt=""></figure>
						<aside>
							<h5>More</h5>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
						</aside>
					</a>
					<button style="float:right; position: relative; bottom: 95px; right: 10px; cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
					<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
					</svg></button>	
				</div>
				@endforeach
			</div>
		</section>
		
		
	</div>
	<script async='async' src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
	<div id='sticky' style='position: fixed; right: 0px; bottom: 0px; margin: 0 auto;width: 100%; background-color: rgba(255, 255, 255, 0.8); border-top: 2px solid rgba(225, 225, 225, 0.8); visibility: hidden; y-index:99999999;'><button id='ad_close' style='color:#000; background-color: hsla(0,0%,100%,.8); border: hsla(0,0%,100%,.8); position:absolute; left : 0px; top : -45px;'>x</button>
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
	<?php if (\Session::has('success')) { ?>
			<script>
				alert("Subscription Added Successfully");
			</script>
			<?php } ?>
	</div>
	</div>

	</div>

	<div class="containermod" id="a">
				
				</div>
				<div class="modal" id="b">
					<div class="modalcancel">
						<a href="#" class="cancel">X</a>
					</div>
					<div class="modal-body" style="padding: 5.5% 14%">
						<div class="icon-container1" style="display:flex;" >
							<a id="twit" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><div class="smd"> <i class=" img-thumbnail fab fa-twitter fa-2x ico" style="color:#4c6ef5;background-color: aliceblue"></i>
								<p>Twitter</p>
							</div></a>
							<a id="fb" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><div class="smd"> <i class="img-thumbnail fab fa-facebook fa-2x ico" style="color: #3b5998;background-color: #eceff5;"></i>
								<p>Facebook</p>
							</div></a>
							<a id="wa" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><div class="smd"> <i class="img-thumbnail fab fa-whatsapp fa-2x ico" style="color: #25D366;background-color: #cef5dc;"></i>
								<p>Whatsapp</p>
							</div></a>
							<!-- <div class="smd"> <i class="img-thumbnail fab fa-reddit-alien fa-2x" style="color: #FF5700;background-color: #fdd9ce;"></i>
								<p>Reddit</p>
							</div> -->
							<!-- <div class="smd"> <i class="img-thumbnail fab fa-discord fa-2x " style="color: #738ADB;background-color: #d8d8d8;"></i>
								<p>Discord</p>
							</div> -->
						</div>
						<div class="icon-container2" style="display:flex;" >
							
							<a id="mail"onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><div class="smd"> <i class="img-thumbnail fas fa-envelope-open-text fa-2x ico" style="color: #3b5998;background-color: #eceff5;"></i>
								<p>Mail</p>
							</div></a>
							<a id="telegram" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><div class="smd"> <i class="img-thumbnail fab fa-telegram fa-2x ico" style="color: #4c6ef5;background-color: aliceblue"></i>
								<p>Telegram</p>
							</div></a>
							<a id="insta" onClick="javascript: window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=500,padding=200');return false;" target="_blank"><div class="smd"> <i class="img-thumbnail fab fa-instagram fa-2x ico" style="color: #bd3c96;background-color: aliceblue"></i>
								<p>Instagram</p>
							</div></a>
							<!-- <div class="smd"> <i class="img-thumbnail fab fa-weixin fa-2x" style="color: #7bb32e;background-color: #daf1bc;"></i>
								<p>WeChat</p>
							</div> -->
						</div>
					</div>
		<!--        <div class="modal-footer">-->
					<!--<label class="copylabel"></label>-->
		<!--            <div class="row"> <input class="col-10 ur" type="url"   id="myInput" aria-describedby="inputGroup-sizing-default" style="height: 40px;width: 70%; margin-top:7px;"> <button class="cpy" onclick="myFunction()"><i class="far fa-clone"></i></button> </div>-->
		<!--        </div>-->
			</div>
			</div>
				<?php @include('front_end/footer');?>
	<!--<script>-->
	<!--    $(document).ready(function() {-->
	<!--        var value = $("#tagchange").text();-->
		
	<!--        var res = value.split(" ").join("");-->
	<!--        $("#tagchange").empty();-->
	<!--        $("#tagchange").append(res);-->
	<!--       console.log(res);-->
		
	<!--    });-->
	<!--</script>-->


	<div class="tab1">
  <button id="antrianBtn" class="tablinks" onclick="openCity(event, 'antrian')">Antrian</button>
  <button id="semuaBtn" class="tablinks" onclick="openCity(event, 'semua')">Semua</button>
</div>

<div id="antrian" class="tabcontent">
  <h3>Antrian</h3>
</div>

<div id="semua" class="tabcontent">
  <h3>Semua</h3>
</div>


<style>

.tab1 {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f0ff1e;
  color: black;
}


/* Style the buttons inside the tab */

.tab1 button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}


/* Change background color of buttons on hover */

.tab1 button:hover {
  background-color: #ddd;
}


/* Create an active/current tablink class */

.tab1 button.active {
  background-color: #ccc;
}


/* Style the tab content */

.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

<script type="text/javascript">
	document.getElementById('antrian').className = '';
document.getElementsByClassName('tablinks')[0].className = 'active'
document.getElementById('antrian').className = 'active';

function openCity(event, city) {

  if (city === 'semua') {
    document.getElementById('antrian').className = 'tabcontent';
    document.getElementById('semua').className = '';
    document.getElementById('antrianBtn').className = '';
    document.getElementById('semuaBtn').className = 'active';
  }

  if (city === 'antrian') {
    document.getElementById('antrian').className = '';
    document.getElementById('semua').className = 'tabcontent';
    document.getElementById('antrianBtn').className = 'active';
    document.getElementById('semuaBtn').className = '';
  }

}
</script>	
@endsection
