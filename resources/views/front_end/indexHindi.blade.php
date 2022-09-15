@extends('front_end.header')
@section('content')
<div class="entry-content">
    <!--Trending Now-->
	<section class="container clear">
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
 		<h2><span>Trending Now</span></h2>
        <div class="tumbnailcarousel owl-carousel owl-theme clear">
			@php 
			$entertainmentinfo = DB::select(DB::raw('SELECT * FROM (select  * from post WHERE trending_now="Trending Now" AND language="Hindi" AND status="Publish" ORDER BY `published_date` DESC LIMIT 15) AS temptable ORDER BY RAND() LIMIT 8'));
			@endphp
			@foreach($entertainmentinfo as $entertainmentinfo)
            <div class="item clear">
				<a href="post-single&id={{$entertainmentinfo->postlink}}">   
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
        </div>
	</section>
	
	<!--Entertainment & Sports-->
	<section class="container equal-height padding-top-none clear">
    	<aside class="content left">
            <div class="slider-carousel owl-carousel owl-theme clear" id="slider-carousel-enter">
				@php 
					$entertainmentinfo = DB::table('post')->where('categoryid',8)->where('status','Publish')->where('language','Hindi')->take(8)->orderBy('published_date','desc')->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
					
				<div class="item clear">
					<a href="post-single&id={{$entertainmentinfo->postlink}}">
                        <img src="{{$entertainmentinfo->imagepath}}" alt="">
                        <figcaption>
							<h5>Entertainment</h5>
							<h1>{{$entertainmentinfo->posttitle}}</h1>
                        </figcaption>
					</a>
				</div>
				
				@endforeach
            </div>
        </aside>
        <aside class="sidebar right">
            <div class="slider-carousel-withdot owl-carousel owl-theme clear" id="slider-carousel-sport">
			@php 
					$entertainmentinfo = DB::table('post')->where('categoryid',9)->where('status','Publish')->where('language','Hindi')->take(4)->orderBy('published_date','desc')->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<div class="item clear">
					<a href="post-single&id={{$entertainmentinfo->postlink}}" style="background-image:url(<?php echo $entertainmentinfo->imagepath ?>)">
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
	</section>
	<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
    <div id="gpt-passback-mobilemasala.com.Banner0.1638182812">
    <script>
    window.googletag = window.googletag || {cmd: []};
    googletag.cmd.push(function() {
      googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638182812', [[300,250],[250,250],[336,280],[360,300],[320,280],[320,50],[320,100],[300,100],[300,50]], 'gpt-passback-mobilemasala.com.Banner0.1638182812').addService(googletag.pubads());
        googletag.enableServices();
        googletag.display("gpt-passback-mobilemasala.com.Banner0.1638182812");
      });
      </script>
      </div>
      <!--Celebrity Gossip-->
	<section class="container padding-top-none clear">
    	<aside class="content left">
 			<h2><a href="post-content&id=2" class="text-dark"><span>Celebrity Gossip</span></a></h2>
            <div class="single-article clear">
            	<ul>
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',2)->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->take(3)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
					
                	<li>
						<a href="post-single&id={{$entertainmentinfo->postlink}}">
						<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
						<figcaption>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
							<h5>Celebrity Gossip</h5>
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
			$get_vs1 = DB::table('v_stories')->where('categoryid',1)->get();
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
    <!--Random Posts-->
	<section class="container random-posts padding-top-none clear">
 		<h2><span>Random Posts</span></h2>
		<div id="randomposts">
			<ul class="clear">
				@php 
				$entertainmentinfo = DB::table('post')->where('status','Publish')->where('language','Hindi')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)')->inRandomOrder()->take(5)->orderBy('published_date','desc')->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<li>
				<button style="float:right; position: relative;cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
	<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
	</svg></button>
					<a href="post-single&id={{$entertainmentinfo->postlink}}" title="">
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
	<!--Movies-->
	<section class="container padding-top-none clear">
    	<aside class="content left">
 			<h2><a href="post-content&id=4"><span>Movies</span></a></h2>
            <div class="grid clear">
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid',4)->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->take(3)->get(); 
                    @endphp
                    @foreach($entertainmentinfo as $entertainmentinfo)
				<article>
					<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
				<a href="https://play.google.com/store/apps/details?id=com.beeinnovations.zing" target="_blank"><img src="{{asset('image/zing_ad_1.jpg')}}" style="margin-top:20px;width:100%"></a>
				<a href="https://play.google.com/store/apps/details?id=com.beeinnovations.zing" target="_blank"><img src="{{asset('image/zing_ad_2.jpg')}}" style="margin-top:20px;width:100%"></a>
			</div>
        </aside>
	</section>
	
	<!--Paparazzi-->
	
	<section class="container random-posts padding-top-none clear">
 		<h2><a href="paparazzi-details"><span>Paparazzi</span></a></h2>
		<div id="randomposts">
		<ul class="clear">
				@php 
				$entertainmentinfo = DB::table('paparazzi_post')->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->inRandomOrder()->take(10)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<li>
				
					<a href="paparazzi-post&id={{$entertainmentinfo->postlink}}" title="">
				
                    	<h5>Paparazzi</h5>
					
						
						<figure>
							<!-- <iframe src="{{$entertainmentinfo->videopath}}" frameborder="0"></iframe> -->
							<iframe width="100%" height="315" src="{{$entertainmentinfo->videopath}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</figure>
						<h3>{{$entertainmentinfo->posttitle}}</h3>
					</a>
					
				</li>
				@endforeach
			</ul> 
		</div>
		<button class="more_pap_btn" onclick="location.href='paparazzi-details'">More Paparazzi</button>
	</section>
	
	<!--Fashion and Autonews & Sidebar-->
	<section class="container random-posts padding-top-none clear">
 		<h2><a href="post-content&id=1"><span>Fashion</span></a></h2>
		<div id="randomposts">
			<ul class="clear">
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',1)->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->inRandomOrder()->take(10)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<li>
				<button style="float:right; position: relative;cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
	<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
	</svg></button>
					<a href="post-single&id={{$entertainmentinfo->postlink}}" title="">
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

	
	<!--Technology & Gadgets-->
	
	<section class="container padding-top-none clear">
    	<aside class="content left">
 			<h2><a href="post-content&id=7"><span>Technology & Gadgets</span></a></h2>
            <div class="single-article clear">
            	<ul>
				@php 
			$entertainmentinfo = DB::table('post')->where('categoryid',7)->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->take(6)->get(); 
			@endphp
			@foreach($entertainmentinfo as $entertainmentinfo)
                	<li>
					<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
            <div class="hot-pick slider-carousel-withdot owl-carousel owl-theme clear" style="height:250px;">
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',8)->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->skip(8)->take(5)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<div class="item clear">
					<a href="post-single&id={{$entertainmentinfo->postlink}}">
                        <figcaption style="background-image:url('<?php echo $entertainmentinfo->imagepath; ?>'); background-size:cover;">
                            <h5>Entertainment</h5>
                            <h1>{{$entertainmentinfo->posttitle}}</h1>
                        </figcaption>
					</a>
				</div>
				@endforeach
            </div>
        	<div class="ads">
        	    <a href="https://play.google.com/store/apps/details?id=com.beeinnovations.zing" target="_blank"><img src="{{asset('image/zing-ad.jpg')}}"></a>
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
 		<h2><a href="post-content&id=6"><span>Health & Wellness</span></a></h2>
		<div class="single-article-carousel owl-carousel owl-theme clear">
			@php 
			$entertainmentinfo = DB::table('post')->where('categoryid',6)->where('status','Publish')->where('language','Hindi')->take(8)->orderBy('published_date','desc')->get(); 
			@endphp
			@foreach($entertainmentinfo as $entertainmentinfo)
			<div class="item clear">
				<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
 		<h2><a href="post-content&id=9"><span>Sports</span></a></h2>
        <div class="tumbnailcarousel owl-carousel owl-theme clear">
			@php 
			$entertainmentinfo = DB::table('post')->where('categoryid',9)->where('language','Hindi')->where('status','Publish')->orderBy('published_date','desc')->skip(4)->take(8)->get(); 
			@endphp
			@foreach($entertainmentinfo as $entertainmentinfo)
			<div class="item clear">
				<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
 		<h2><a href="post-content&id=5"><span>Music</span></a></h2>
		<div class="single-article-carousel owl-carousel owl-theme clear">
			@php 
			$entertainmentinfo = DB::table('post')->where('categoryid',5)->where('language','Hindi')->where('status','Publish')->take(8)->orderBy('published_date','desc')->get(); 
			@endphp
			@foreach($entertainmentinfo as $entertainmentinfo)
			<div class="item clear">
				<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
 		<h2><a href="post-content&id=11"><span>Travel & Tourism</span></a></h2>
		<div id="randomposts">
			<ul class="clear">
				@php 
				$entertainmentinfo = DB::table('post')->where('categoryid',11)->where('language','Hindi')->where('status','Publish')->orderBy('published_date','desc')->inRandomOrder()->take(5)->get(); 
				@endphp
				@foreach($entertainmentinfo as $entertainmentinfo)
				<li>
				<button style="float:right; position: relative;cursor: pointer; border: none;" class="open" value="{{$entertainmentinfo->postid}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
	<path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
	</svg></button>
					<a href="post-single&id={{$entertainmentinfo->postlink}}" title="">
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
		<!--Fashion and Autonews & Sidebar-->
	
		<section class="container equal-height padding-top-none clear">
	
			<aside class="content left">
			<h2><span><a href="post-content&id=10">Autonews</a></span></h2>
				<article class="single-article-box clear">
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid', 10)->where('language','Hindi')->where('status','Publish')->orderBy('published_date','desc')->take(1)->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					<aside>
						<a href="post-single&id={{$entertainmentinfo->postlink}}">
							<figure style="background-image:url('<?php echo $entertainmentinfo->imagepath; ?>');"></figure>
							<figcaption>
								<h5>Autonews</h5>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
							</figcaption>
						</a>
					</aside>
					@endforeach
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid', 10)->where('language','Hindi')->where('status','Publish')->orderBy('published_date','desc')->skip(1)->take(1)->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					<aside>
						<img src="{{asset('assets/front_end/images/adimage/adimg6.jpg')}}">
						<!-- <a href="post-single&id={{$entertainmentinfo->postlink}}">
							<figure style="background-image:url(<?php echo $entertainmentinfo->imagepath; ?>)"></figure>
							<figcaption>
								<h5>Autonews</h5>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
							</figcaption>
						</a> -->
						<!-- <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
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
						</div> -->
					</aside>
					@endforeach
				</article>
				<article class="single-article-box clear">
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid', 10)->where('language','Hindi')->where('status','Publish')->orderBy('published_date','desc')->skip(1)->take(1)->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					<aside>
						<a href="post-single&id={{$entertainmentinfo->postlink}}">
							<figure style="background-image:url('<?php echo $entertainmentinfo->imagepath; ?>')"></figure>
							<figcaption>
								<h5>Autonews</h5>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
							</figcaption>
						</a>
					</aside>
					@endforeach
					@php 
					$entertainmentinfo = DB::table('post')->where('categoryid', 10)->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->skip(2)->take(1)->get(); 
					@endphp
					@foreach($entertainmentinfo as $entertainmentinfo)
					<aside>
						<a href="post-single&id={{$entertainmentinfo->postlink}}">
							<figure style="background-image:url('<?php echo $entertainmentinfo->imagepath; ?>')"></figure>
							<figcaption>
								<h5>Autonews</h5>
								<h3>{{$entertainmentinfo->posttitle}}</h3>
							</figcaption>
						</a>
					</aside>
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
						$entertainmentinfo = DB::table('post')->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->take(7)->get(); 
						@endphp
						@foreach($entertainmentinfo as $entertainmentinfo)
							<li>
							<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
								<li>
								<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
 		<h2><a href="post-content&id=17"><span>More</span></a></h2>
        <div class="tumbnailcarousel owl-carousel owl-theme clear">
			@php 
			$entertainmentinfo = DB::table('post')->where('categoryid',17)->where('language','Hindi')->where('status','Publish')->orderBy('published_date','desc')->take(8)->get(); 
			@endphp
			@foreach($entertainmentinfo as $entertainmentinfo)
			<div class="item clear">
				<a href="post-single&id={{$entertainmentinfo->postlink}}">
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
            <div class="modal-footer">
				<label class="copylabel"></label>
                <div class="row"> <input class="col-10 ur" type="url"  id="myInput" aria-describedby="inputGroup-sizing-default" style="height: 40px;width: 70%; margin-top:7px;"> <button class="cpy" onclick="myFunction()"><i class="far fa-clone"></i></button> </div>
            </div>
        </div>
		</div>

@endsection
