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

<?php if($lang == "" ||$lang =="English"){?>

@isset($feed)
	<section class="container padding-top-none clear" style="padding:0;">
			<h2><a href="post-content&id=9"><span>Suggested Articles</span></a></h2>
			<div class="sidebarposts clear">
						<ul>
						@php 
							$entertainmentinfo = DB::table('post')->where('categoryid',$feed->categoryid)->where('language',$feed->language)->where('postid', '<>', $feed->postid)->where('status','Publish')->orderBy('created_at','desc')->take(4)->get(); 
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
                      @php 
					  $entertainmentinfo = DB::table('post')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)')->where('hitcount', '>',0)->where('status','Publish')->where('language',$feed->language)->take(10)->orderBy('hitcount','desc')->get();
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
					<li><a href="post-content&id=6&Health &amp; Wellness">Health &amp; Wellness</a></li>
					<!-- <li><a href="#">General Gossip</a></li> -->
					<li><a href="post-content&id=7&Technology &amp; Gadgets">Technology &amp; Gadgets</a></li>
					<!-- <li><a href="#">Believe It or Not</a></li> -->
					<li><a href="post-content&id=4&Movies">Movies</a></li>
					<!-- <li><a href="post-content&id=12">Horoscope</a></li> -->
					<li><a href="post-content&id=9&Sports">Sports</a></li>
					<!-- <li><a href="#">Hot Content</a></li> -->
					<li><a href="post-content&id=1&Fashion">Fashion</a></li>
					<li><a href="post-content&id=2&Celebrity Gossip">Celebrity Gossip</a></li>
					<!-- <li><a href="#">Fitness</a></li> -->
					<!-- <li><a href="post-content&id=9">Sports</a></li> -->
					<li><a href="post-content&id=8&Entertainment">Entertainment</a></li>
					<li><a href="post-content&id=5&Music">Music</a></li>
					<li><a href="post-content&id=10&Auto News">Auto News</a></li>
					<li><a href="post-content&id=11&Travel & Tourism">Travel & Tourism</a></li>
					<li><a href="post-content&id=17&More">More</a></li>
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
                        $entertainmentinfo = DB::table('post')->where('categoryid',$feed->categoryid)->where('language',$feed->language)->where('postid', '<>', $feed->postid)->where('status','Publish')->orderBy('created_at','desc')->take(4)->get(); 
                        @endphp
                        @foreach($entertainmentinfo as $entertainmentinfo1)
                            			<?php 
				$titlorl = $entertainmentinfo1->posttitle;
				$title = str_replace(" ","+",$titlorl);
				?>
                            <li>
                            <a href="post-single&id={{$entertainmentinfo1->postid}}&post=<?php echo $title;?>">
                                <figure><img src="{{$entertainmentinfo1->imagepath}}" alt=""></figure>
                                <h3>{{$entertainmentinfo1->posttitle}}</h3>
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
					$entertainmentinfo = DB::table('post')->where('status','Publish')->where('language',$feed->language)->orderBy('published_date','desc')->take(10)->get(); 
                    @endphp
                    @foreach($entertainmentinfo as $entertainmentinfo1)
                        			<?php 
				$titlorl = $entertainmentinfo1->posttitle;
				$title = str_replace(" ","+",$titlorl);
				?>
						<li>
						<a href="post-single&id={{$entertainmentinfo1->postid}}&post=<?php echo $title;?>">
							<figure><img src="{{$entertainmentinfo1->imagepath}}" alt=""></figure>
							<h3>{{$entertainmentinfo1->posttitle}}</h3>
						</a>
						</li>
                    @endforeach
					</ul>
				</div>
				<div id="Popular" class="tabcontent clear">
					  <ul>
                      @php 
					  $entertainmentinfo = DB::table('post')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)')->where('language',$feed->language)->where('hitcount', '>',0)->where('status','Publish')->take(10)->orderBy('hitcount','desc')->get();
                        @endphp
                        @foreach($entertainmentinfo as $entertainmentinfo1)
                            			<?php 
				$titlorl = $entertainmentinfo1->posttitle;
				$title = str_replace(" ","+",$titlorl);
				?>
                            <li>
                            <a href="post-single&id={{$entertainmentinfo1->postid}}&post=<?php echo $title;?>">
                                <figure><img src="{{$entertainmentinfo1->imagepath}}" alt=""></figure>
                                <h3>{{$entertainmentinfo1->posttitle}}</h3>
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

		 <!-- <li><a href="/"><i class="fa fa-home"></i></a></li> -->
            <li><a href="post-content&id=20&फैशन
"> फ़ैशन </a></li>
            <li><a href="post-content&id=21&सेलिब्रिटी गॉसिप ">  सेलिब्रिटी गॉसिप

  </a></li>
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
            <li><a href="post-content&id=22&मूवीज
"> मूवीज़ </a></li>
            <li><a href="post-content&id=23&म्यूजिक

"> म्यूज़िक</a></li>
                <!-- <ul class="sub-menu">
                    <li><a href="post-content&id=1">Movie Reviews</a></li>
                    <li><a href="post-content&id=1">New Movies (Trailers)</a></li>
                    <li><a href="post-content&id=1">Music Reviews</a></li>
                </ul> -->
            </li>
            <!-- <li><a href="#">Hot Content</a></li> -->
            <li><a href="post-content&id=24&हेल्थ & वैलनेस


">  हेल्थ & वैलनेस


  </a></li>
            <!-- <li><a href="#">Fitness</a></li>
            <li><a href="#">General Gossip</a></li> -->
            <li><a href="post-content&id=25&टेक्नोलॉजी & गैजेट्स

"> टेक्नोलॉजी & गैजेट्स

 </a></li>
            <li><a href="post-content&id=26&मनोरंजन"> मनोरंजन </a></li>
            <li><a href="post-content&id=27&खेल">खेल</a></li>
            <li><a href="post-content&id=28&ऑटो न्यूज़  ">  ऑटो न्यूज़  </a></li>
            <li><a href="post-content&id=29&ट्रेवल & टूरिज़म  ">  ट्रेवल & टूरिज़म   </a></li>
            <!--<li><a href="post-content&id=17&Others">अधिक</a></li>-->
            <!-- <li><a href="post-content&id=12">Horoscope</a></li> -->
					
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

<?php if($lang =="Telugu"){?>

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
 		<h2><a href="post-content&id=9"><span> సుగ్గెస్తెదఆర్టికల్స్
 </span></a></h2>
		 <div class="sidebarposts clear">
					  <ul>
                      @php 
                        $entertainmentinfo = DB::table('post')->where('categoryid',$feed->categoryid)->where('language',$feed->language)->where('postid', '<>', $feed->postid)->where('status','Publish')->orderBy('created_at','desc')->take(4)->get(); 
                        @endphp
                        @foreach($entertainmentinfo as $entertainmentinfo2)
                            			<?php 
				$titlorl = $entertainmentinfo2->posttitle;
				$title = str_replace(" ","+",$titlorl);
				?>
                            <li>
                            <a href="post-single&id={{$entertainmentinfo2->postid}}&post=<?php echo $title;?>">
                                <figure><img src="{{$entertainmentinfo2->imagepath}}" alt=""></figure>
                                <h3>{{$entertainmentinfo2->posttitle}}</h3>
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
					<button class="tablinks" onclick="openCity(event, 'Recent')" id="defaultOpen"> రీసెంట్ </button>
				
					<button class="tablinks" onclick="openCity(event, 'Popular')">  పాపులర్
      </button>
				</div>				
				<div id="Recent" class="tabcontent clear">
					<ul>
                    @php 
					$entertainmentinfo = DB::table('post')->where('status','Publish')->where('language',$feed->language)->orderBy('published_date','desc')->take(10)->get(); 
                    @endphp
                    @foreach($entertainmentinfo as $entertainmentinfo2)
                                			<?php 
				$titlorl = $entertainmentinfo2->posttitle;
				$title = str_replace(" ","+",$titlorl);
				?>
						<li>
						<a href="post-single&id={{$entertainmentinfo2->postid}}&post=<?php echo $title;?>">
							<figure><img src="{{$entertainmentinfo2->imagepath}}" alt=""></figure>
							<h3>{{$entertainmentinfo2->posttitle}}</h3>
						</a>
						</li>
                    @endforeach
					</ul>
				</div>
				<div id="Popular" class="tabcontent clear">
					  <ul>
                      @php 
					  $entertainmentinfo = DB::table('post')->whereRaw('DATE(published_date) >= DATE_SUB(CURDATE(), INTERVAL 6 DAY)')->where('language',$feed->language)->where('hitcount', '>',0)->where('status','Publish')->take(10)->orderBy('hitcount','desc')->get();
                        @endphp
                        @foreach($entertainmentinfo as $entertainmentinfo2)
                                    			<?php 
				$titlorl = $entertainmentinfo2->posttitle;
				$title = str_replace(" ","+",$titlorl);
				?>
                            <li>
                            <a href="post-single&id={{$entertainmentinfo2->postid}}&posttitle={{$entertainmentinfo2->posttitle}}">
                                <figure><img src="{{$entertainmentinfo2->imagepath}}" alt=""></figure>
                                <h3>{{$entertainmentinfo2->posttitle}}</h3>
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
				<h2>  చతెగొరిఎస్  </h2>
				
				<ul>

			           <li><a href="post-content&id=30&ఫాషన్
"> ఫాషన్

 </a></li>
             
             <li><a href="post-content&id=31&సెలబ్రిటీ గాసిప్స్
                ">
                సెలబ్రిటీ గాసిప్స్
                
                </a></li>
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
          <li><a href="post-content&id=32&సినిమా">
                సినిమా
            
            </a></li>

            <li><a href="post-content&id=33& సంగీతం
            "> 
             సంగీతం
            
            </a></li>
                <!-- <ul class="sub-menu">
                    <li><a href="post-content&id=1">Movie Reviews</a></li>
                    <li><a href="post-content&id=1">New Movies (Trailers)</a></li>
                    <li><a href="post-content&id=1">Music Reviews</a></li>
                </ul> -->
            </li>
            <!-- <li><a href="#">Hot Content</a></li> -->
            <li><a href="post-content&id=34&హెల్త్ & వెల్నెస్

">  హెల్త్ & వెల్నెస్

  </a></li>
            
            <!-- <li><a href="#">Fitness</a></li>
            <li><a href="#">General Gossip</a></li> -->
            <li><a href="post-content&id=35&టెక్నాలజీ&గాడ్జెట్స్
">టెక్నాలజీ&గాడ్జెట్స్

 </a></li>
            
              <li><a href="post-content&id=36&ఎంటర్టైన్మెంట్

"> ఎంటర్టైన్మెంట్</a>

            <li><a href="post-content&id=37&క్రీడలు"> క్రీడలు</a></li>
            
            <li><a href="post-content&id=38&ఆటో న్యూస్

">  ఆటో న్యూస్  </a></li>
          
            <li><a href="post-content&id=39&ట్రావెల్ & టూరిజం
 "> ట్రావెల్ & టూరిజం   </a></li>
          
          <li> <a href="post-content&id=17&మరిన్ని"> మరిన్ని</a>
                        </li>
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
