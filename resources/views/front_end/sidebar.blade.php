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
	<?php
	$lang =$feed->language; ?>

<?php if($lang == ""){?>

@isset($feed)
	<section class="container padding-top-none clear" style="padding:0;">
			<h2><a href="post-content&id=9"><span>Suggested Articles</span></a></h2>
			<div class="sidebarposts clear">
						<ul>
						@php 
							$entertainmentinfo = DB::table('post')->where('categoryid',$feed->categoryid)->where('language',$feed->language)->where('postid', '<>', $feed->postid)->where('status','Publish')->orderBy('created_at','desc')->take(4)->get(); 
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
			<div class="sidebarposts clear">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Recent')" id="defaultOpen">Recent</button>
					<button class="tablinks" onclick="openCity(event, 'Popular')">Popular</button>
				</div>				
				<div id="Recent" class="tabcontent clear">
					<ul>
                    @php 
					$entertainmentinfo = DB::table('post')->where('status','Publish')->where('language',$feed->language)->orderBy('published_date','desc')->take(10)->get(); 
                    @endphp
                    @foreach($entertainmentinfo as $entertainmentinfo)
						<li>
						<a href="post-single&id={{$entertainmentinfo->postid}}">
							<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
						</a>
						</li>
                    @endforeach
					</ul>
				</div>
				<div id="Popular" class="tabcontent clear">
					  <ul>
                      @php 
					  $entertainmentinfo = DB::table('post')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)')->where('hitcount', '>',0)->where('status','Publish')->take(10)->orderBy('hitcount','desc')->get();
                        @endphp
                        @foreach($entertainmentinfo as $entertainmentinfo)
                            <li>
                            <a href="post-single&id={{$entertainmentinfo->postid}}">
                                <figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
                                <h3>{{$entertainmentinfo->posttitle}}</h3>
                            </a>
                            </li>
                        @endforeach
					</ul>
				</div>	
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
@endisset
<?php }?>
<?php if($lang =="Hindi"){?>

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
@isset($feed)
   <section class="container padding-top-none clear" style="padding:0;">
 		<h2><a href="post-content&id=9"><span>सुग्गेस्टेड   आर्टिकल्स </span></a></h2>
		 <div class="sidebarposts clear">
					  <ul>
                      @php 
                        $entertainmentinfo = DB::table('post')->where('categoryid',$feed->categoryid)->where('language','Hindi')->where('postid', '<>', $feed->postid)->where('status','Publish')->orderBy('created_at','desc')->take(4)->get(); 
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
			<div class="sidebarposts clear">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'Recent')" id="defaultOpen">रीसेंट</button>
					<button class="tablinks" onclick="openCity(event, 'Popular')">पॉपुलर</button>
				</div>				
				<div id="Recent" class="tabcontent clear">
					<ul>
                    @php 
					$entertainmentinfo = DB::table('post')->where('status','Publish')->where('language','Hindi')->orderBy('published_date','desc')->take(10)->get(); 
                    @endphp
                    @foreach($entertainmentinfo as $entertainmentinfo)
						<li>
						<a href="post-single&id={{$entertainmentinfo->postid}}">
							<figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
							<h3>{{$entertainmentinfo->posttitle}}</h3>
						</a>
						</li>
                    @endforeach
					</ul>
				</div>
				<div id="Popular" class="tabcontent clear">
					  <ul>
                      @php 
					  $entertainmentinfo = DB::table('post')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)')->where('language','Hindi')->where('hitcount', '>',0)->where('status','Publish')->take(10)->orderBy('hitcount','desc')->get();
                        @endphp
                        @foreach($entertainmentinfo as $entertainmentinfo)
                            <li>
                            <a href="post-single&id={{$entertainmentinfo->postid}}">
                                <figure><img src="{{$entertainmentinfo->imagepath}}" alt=""></figure>
                                <h3>{{$entertainmentinfo->posttitle}}</h3>
                            </a>
                            </li>
                        @endforeach
					</ul>
				</div>	
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
				<h2>काटेगोरिएस
                </h2>
				<ul>

				<li><a href="post-content&id=1&Fashion"> फ़ैशन </a></li>
            <li><a href="post-content&id=2&Celebrity Gossip">  गपशप  </a></li>
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
            <li><a href="post-content&id=4&Movies"> मूवीज़ </a>
            <li><a href="post-content&id=5&Music"> म्यूज़िक</a></li>
                <!-- <ul class="sub-menu">
                    <li><a href="post-content&id=1">Movie Reviews</a></li>
                    <li><a href="post-content&id=1">New Movies (Trailers)</a></li>
                    <li><a href="post-content&id=1">Music Reviews</a></li>
                </ul> -->
            </li>
            <!-- <li><a href="#">Hot Content</a></li> -->
            <li><a href="post-content&id=6&Health_Wellness">  हेल्थ और फिटनेस  </a></li>
            <!-- <li><a href="#">Fitness</a></li>
            <li><a href="#">General Gossip</a></li> -->
            <li><a href="post-content&id=7&Technology&Gadgets"> टेक्नोलॉजी </a></li>
            <li><a href="post-content&id=8&Entertainment"> मनोरंजन </a></li>
            <li><a href="post-content&id=9&Sports">खेल</a></li>
            <li><a href="post-content&id=10&Auto_News">  ऑटो न्यूज़  </a></li>
            <li><a href="post-content&id=11&Travel & Tourism ">  ट्रेवल & टूरिज़म   </a></li>
					
					<li><a href="post-content&id=17&More">  स्पेशल</a></li>
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
			
			
@endisset
<?php }?>