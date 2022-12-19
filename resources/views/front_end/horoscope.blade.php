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
/*.img-rep*/
/*{*/
 
  
  /*background: linear-gradient(to bottom, rgba(255,255,255,1) 50%,rgba(0,0,0,0) 30%);*/

  
/*}*/
.image{
   opacity:1;
}
amp-story-grid-layer {
    background: linear-gradient(0deg, #0c0707, transparent) !important;
}


.content-para
{
  overflow: auto !important;
  color:#fff !important;
  background:  !important;
  text-align:center ;

}
.content-para::-webkit-scrollbar {
    display: none;
    
}
.content-title
{
  font-size: 24px;
  font-weight: bold;
  font-family:monospace;
  text-align: center !important;
  color:#fff !important;
}
</style>
<script>
    $(document).ready(function(){
        $('.i-amphtml-story-unmute-audio-control').css("display", "none");
    })
    
</script>


<?php  $langnn = $_SERVER['REQUEST_URI'];?>
<?php $langn = (explode("&id=",$langnn)); 
	
	//var_dump($langn);
	
	 $lang = $langn['1'];?>
<div class="stories">
<amp-story standalone publisher-logo-src="assets/front_end/images/AMP-Brand-White-Icon.svg" poster-portrait-src="assets/front_end/images/cover.jpg">
  
  
  <!--@foreach($detailsmain as $main_cart)-->
  <!--<amp-story-page id="Page1">-->
  <!--      <amp-story-grid-layer template="fill">-->
  <!--        <amp-img src="<?php echo $main_cart->imagelink; ?>"-->
  <!--            width="720" height="1280"-->
  <!--            layout="responsive" class="img-rep" >-->
  <!--        </amp-img>-->
          <!--<amp-video autoplay loop-->
          <!--      width="720" height="1280"-->
          <!--      layout="responsive">-->
          <!--    <source src="#" type="video/mp4">-->
          <!--</amp-video>-->
  <!--      </amp-story-grid-layer>-->
        <!--<amp-story-grid-layer template="vertical" class="bottom">
  <!--      </amp-story-grid-layer>-->-->
  <!--      <amp-story-grid-layer template="vertical" class="bottom">-->
  <!--       <h3 class="content-title">{{$main_cart->storytitle}}</h3>-->
  <!--         <p class="content-para"><?php echo implode(' ', array_slice(explode(' ', $main_cart->description), 0)); ?></p>-->
  <!--      </amp-story-grid-layer>-->
  <!--    </amp-story-page>-->
  <!--    @endforeach-->
      @foreach ($details as $details)
      <amp-story-page id="Page1" >
        <amp-story-grid-layer template="fill">
          <amp-img src="<?php echo $details->t_imagelink; ?>"
              width="720" height="1280"
              layout="responsive" class="image" >
          </amp-img>
          <!--<amp-video autoplay loop-->
          <!--      width="720" height="1280"-->
          <!--      layout="responsive">-->
          <!--    <source src="#" type="video/mp4">-->
          <!--</amp-video>-->
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical" class="bottom">
        </amp-story-grid-layer>
        <amp-story-grid-layer template="vertical" class="bottom">

                 <h3 class="content-title">{{$details->t_title}}</h3>
           <p class="content-para"><?php echo implode(' ', array_slice(explode(' ', $details->t_description), 0)); ?></p>
          
            
       
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