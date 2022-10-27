@foreach ($details as $feed)
    @php
    $hitcount_value = DB::table('paparazzi_post')->where('postlink', $feed->postlink)->take(1)->get();
    @endphp
    @foreach ($hitcount_value as $hitcount)
    @php
    DB::table('paparazzi_post')->where('postlink', $feed->postlink)->take(1)->update(['hitcount' => $hitcount->hitcount + 1]);
    @endphp
    @endforeach

    @extends('front_end.header')
    @section('content')
    <style>
        .post-content .left {
            width: 50% !important;
        }

        .sidebarpost .clear {
            width: 40% !important;
        }
    </style>
    <header class="entry-nav clear">
        <ul>
            <li><a href="/">Home</a></li>

            <li>Trailers & Teasers</li>

        </ul>
    </header>

    <div class="entry-content">
        <div class="ads">
            <!-- <img src="assets/front_end/images/g8.jpg" /> -->
            <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
            <div id="gpt-passback-mobilemasala.com.Banner0.1638192042">
                <script>
                    window.googletag = window.googletag || {
                        cmd: []
                    };
                    googletag.cmd.push(function() {
                        googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638192042', [
                            [300, 250],
                            [250, 250],
                            [336, 280],
                            [360, 300],
                            [320, 280],
                            [320, 50],
                            [320, 100],
                            [300, 100],
                            [300, 50]
                        ], 'gpt-passback-mobilemasala.com.Banner0.1638192042').addService(googletag.pubads());
                        googletag.enableServices();
                        googletag.display("gpt-passback-mobilemasala.com.Banner0.1638192042");
                    });
                </script>
            </div>
        </div>

        <div class="container post-content left">
            <div class="post-content-inner clear">
                <h1>{{$feed->posttitle}}</h1>
                <?php
                $video = $feed->videopath . "?autoplay=1";


                $vidoeurl = explode("https://www.youtube.com/embed/", $video);
                //var_dump($vidoeurl);
                $shortcode = $vidoeurl['1'];

                ?>
                <figure>


                    <iframe id="vid_frame2"   class="video"width="100%" height="700" src="{{$video}}" id="mob_paparazzi_main" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                </figure>

                <div class="clear"></div>


                <!-- <div class="ads"><img src="assets/front_end/images/g8.jpg" /></div>	 -->
            </div>
            <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
            <div id="gpt-passback-mobilemasala.com.Banner0.1638192133">
                <script>
                    window.googletag = window.googletag || {
                        cmd: []
                    };
                    googletag.cmd.push(function() {
                        googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638192133', [
                            [300, 250],
                            [250, 250],
                            [336, 280],
                            [360, 300],
                            [320, 280],
                            [320, 50],
                            [320, 100],
                            [300, 100],
                            [300, 50]
                        ], 'gpt-passback-mobilemasala.com.Banner0.1638192133').addService(googletag.pubads());
                        googletag.enableServices();
                        googletag.display("gpt-passback-mobilemasala.com.Banner0.1638192133");
                    });
                </script>
            </div>

        </div>
        @endforeach
        <aside id="secondary" class="container post-sidebar widget-area right">
            <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
            <div id="gpt-passback-MRATF001">
                <script>
                    window.googletag = window.googletag || {
                        cmd: []
                    };
                    googletag.cmd.push(function() {
                        googletag.defineSlot('/22387492205,22578111928/ad-masalamobile.com-bsnl(pyro)-banner-300x250-atf', [
                            [360, 300],
                            [250, 250],
                            [336, 280],
                            [300, 250],
                            [300, 280]
                        ], 'gpt-passback-MRATF001').addService(googletag.pubads());
                        googletag.enableServices();
                        googletag.pubads().set('page_url', 'masalamobile.com');
                        googletag.display('gpt-passback-MRATF001');
                    });
                </script>
            </div>

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
                            $entertainmentinfo = DB::table('paparazzi_post')->where('status','Publish')->orderBy('published_date','desc')->take(6)->get();
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
                    <div id="Popular" class="tabcontent clear">
                        <ul>
                            @php
                            $entertainmentinfo = DB::table('paparazzi_post')->where('hitcount', '>',0)->where('status','Publish')->orderBy('hitcount','desc')->take(6)->get();
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




        </aside>

    </div>
    <script async='async' src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
    <div id='sticky' style='position: fixed; right: 0px; bottom: 0px; margin: 0 auto;width: 100%; background-color: rgba(255, 255, 255, 0.8); border-top: 2px solid rgba(225, 225, 225, 0.8); visibility: hidden; z-index:99999999;'><button id='ad_close' style='color:#000; background-color: hsla(0,0%,100%,.8); border: hsla(0,0%,100%,.8); position:absolute; left : 0px; top : -45px;'>x</button>
        <div id='gpt-passback-Sticky' style='min-width: 300px; min-height: 50px;text-align: center; display: flex; justify-content:center;'>
            <script>
                window.googletag = window.googletag || {
                    cmd: []
                };
                googletag.cmd.push(function() {
                    googletag.defineSlot('/22387492205,22578111928/mobilemasala.com.Banner0.1638181911', [
                        [320, 50],
                        [320, 100],
                        [300, 100],
                        [300, 50]
                    ], 'gpt-passback-Sticky').addService(googletag.pubads());
                    googletag.enableServices();
                    googletag.pubads().set('page_url', 'mobilemasala.com');
                    googletag.display('gpt-passback-Sticky');
                    googletag.pubads().addEventListener('slotOnload', function(event) {
                        var slotId = event.slot.getSlotElementId();
                        if (slotId == "gpt-passback-Sticky") {
                            document.getElementById("sticky").style.visibility = 'visible';
                            document.getElementById("ad_close").onclick = function() {
                                document.getElementById("sticky").remove();
                            }
                        }
                    });
                });
            </script>
        </div>
    </div>
    <style>
        @media only screen and (max-width:768px) {
            #mob_paparazzi_main {
                height: 250px;
            }

        }
    </style>




    @endsection