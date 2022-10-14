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

<header class="entry-nav clear">
	<ul>
		<li><a href="/">Home</a></li>
      
		<li>Paparazzi</li>
       
	</ul>
</header>

<div class="entry-content">
	

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
          <iframe id="vid_frame" class="video" width="640" height="360" src="https://www.youtube.com/embed/<?php echo  $shortcode;  ?>	?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen="true" allowscriptaccess="always"></iframe>
        
            <div id ="hidemain" class="desc"><p class="descp2"><b>{{$feed->posttitle}}</b></p></div><br>
            <div id ="" class="desc"><p id="addtext" class="descp2"></p></div><br>
            
          @endforeach

        </div>

        <!-- THE PLAYLIST -->
        <div class="vid-list-container" id="vid-list">
          <ol id="vid-list">
            @php
            $entertainmentinfo = DB::table('paparazzi_post')->where('status','Publish')->where('cat_type','<>','Video_Stories')->where('cat_type','paparazzi')->orderBy('postid','desc')->inRandomOrder()->take(20)->get();
            @endphp
          	@foreach($entertainmentinfo->slice(1, 20) as $entertainmentinfo)
					
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
    </script>

		</div>
		<button class="more_pap_btn" onclick="location.href='paparazzi-details'">More Paparazzi</button>
	</section>


</div> 
@endsection



