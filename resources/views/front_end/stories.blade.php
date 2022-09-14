@extends('front_end.header')
@section('content')
<style>
body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}
.site-header, .site-footer, #stuck_container, .main-navigation
{
	display:none;
}
.i-amphtml-story-unmute-audio-control{
  display:none! important;
}
</style>
<script>
    $(document).ready(function(){
        $('.i-amphtml-story-unmute-audio-control').css("display", "none");
    })
    
</script>
<div class="stories">
<amp-story standalone publisher-logo-src="assets/front_end/images/AMP-Brand-White-Icon.svg" poster-portrait-src="assets/front_end/images/cover.jpg">
  
  
  @foreach($detailsmain as $main_cart)
  <amp-story-page id="Page1">
        <amp-story-grid-layer template="fill">
          <amp-img src="<?php echo $main_cart->imagelink; ?>"
              width="720" height="1280"
              layout="responsive" >
          </amp-img>
          <amp-video autoplay loop
                width="720" height="1280"
                layout="responsive">
              <source src="#" type="video/mp4">
          </amp-video>
        </amp-story-grid-layer>
        <!--<amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>-->
        <amp-story-grid-layer template="vertical" class="bottom">
          <h2>{{$main_cart->storytitle}}</h2>
           <p><?php echo implode(' ', array_slice(explode(' ', $main_cart->description), 0)); ?></p>
        </amp-story-grid-layer>
      </amp-story-page>
      @endforeach
      @foreach ($details as $details)
      <amp-story-page id="Page1" background-audio="assets/front_end/images/bird-singing.mp3">
        <amp-story-grid-layer template="fill">
          <amp-img src="<?php echo $details->t_imagelink; ?>"
              width="720" height="1280"
              layout="responsive" >
          </amp-img>
          <amp-video autoplay loop
                width="720" height="1280"
                layout="responsive">
              <source src="#" type="video/mp4">
          </amp-video>
        </amp-story-grid-layer>
        <!--<amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>-->
        <amp-story-grid-layer template="vertical" class="bottom">
          <h2>{{$details->t_title}}</h2>
           <p><?php echo implode(' ', array_slice(explode(' ', $details->t_description), 0)); ?></p>
        </amp-story-grid-layer>
      </amp-story-page>
	  @endforeach
    <!--   <amp-story-page id="Page1" background-audio="assets/front_end/images/bird-singing.mp3">
        <amp-story-grid-layer template="fill">
          <amp-img src="assets/front_end/images/cover.jpg"
              width="720" height="1280"
              layout="responsive">
          </amp-img>
          <amp-video autoplay loop
                width="720" height="1280"
                layout="responsive">
              <source src="assets/front_end/images/rabbit.mp4" type="video/mp4">
          </amp-video>
        </amp-story-grid-layer> -->
        <!--<amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>-->
        <!-- <amp-story-grid-layer template="vertical" class="bottom">
          <h2>The Joy of Pets</h2>
          <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </amp-story-grid-layer>
      </amp-story-page> -->
	  
      <!-- Bookend -->
      <amp-story-bookend src="bookend.json" layout="nodisplay"></amp-story-bookend>
</amp-story>
</div>
@endsection