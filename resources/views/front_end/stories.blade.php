@extends('front_end.header')
@section('content')
<style>
	.inner-align-end, .inner-align-middle,.inner-align-top 
{ 
	background: rgba(0,0,0,0);
}
.inner-align-end .ftr{ 
	text-align:right; padding:10px; font-size:12px;
	 }

.inner-align-end, .inner-align-middle, .inner-align-top
{
	padding:0px 0px;
}

.align-end { align-content: end; padding:68px 20px 32px;}
.align-end,amp-story-grid-layer,.align-top, .align-middle {padding:0;}



.photo_credit{padding:10px;font-size:10px; background:none; margin:0; width:100%;}
.inner-align-end h2, .inner-align-middle h2{
	font-size:19px; 
	font-family: 'Montserrat', sans-serif; color: rgba(255, 255, 255, 1); 
	line-height:1.6; 
	letter-spacing:1px; 
	padding:0 0 20px; 
	text-align:center; 
	position:relative; 
	margin-bottom:20px;
}

.cover .align-end{align-content:end;}
.inner-align-end h2:after, .inner-align-middle h2:after
{
	content:''; width:54px; 
	height:1px; background-color:#fff; position:absolute; left:50%; bottom:0; transform:translateX(-50%);}

.inner-align-end p.cta_link { text-align: center; padding: 10px; background: #f70307; max-width: 280px;  border-radius: 50px;}
.inner-align-end p.cta_link a{color: #fff !important; text-decoration: none; text-transform: uppercase;  font-size:15px; font-weight:bold}
.cover .inner-align-end{background-image:linear-gradient(transparent, rgba(0,0,0,0.7)); background-color:transparent; border-radius:0;}



.inner-align-end-next{ background: rgba(0,0,0,0); padding:20px 20px 170px 20px}
.inner-align-end-next h2{font-size:22px; font-family:"Montserrat"; color:rgba(255, 255, 255, 1); line-height:1.27; margin-bottom:10px;}
.inner-align-end-next .summary { font-size:16px; text-align:center; margin-bottom:10px;}

.summary{text-align:center; color:#fff; line-height:1.41; letter-spacing:1px; font-size:16px; padding:0 0 15px; font-family:'Montserrat', sans-serif; }
.summary.summary-shiftup{margin-bottom:30px;}

.summary + .ftr { float:right; font-size:10px; color:#eee; text-decoration:none; }

.summary  { text-align: center;
    color: #fff !important;
    line-height: 1.41;
    letter-spacing: 1px;
    font-size: 16px;
    padding:  15px;
    font-family: 'Montserrat', sans-serif;

    width: 100%;
    height: 100%;
   
	border-top-left-radius: 50% 75px;
    border-top-right-radius: 50% 75px;
    padding-bottom: 10%;
    top: -141%;
    background: #00000082;
    
    font-weight: bold;
    
    padding: 30px;}
 
.inner-align-end-next .summary { font-size:16px; text-align:center; margin-bottom:20px; }
.para{
    color:#fff;
    text-align:center;
}
.para1{
    color:#fff;
    font-size:20px;
    text-align:center;
    padding:20px;
}
.AV62382721bab93c441117d951{
    display:none;
}
.site-info {
    display:none;
}
</style>





<amp-story publisher-logo-src="assets/front_end/images/AMP-Brand-White-Icon.svg" poster-portrait-src="assets/front_end/images/cover.jpg" title="image" standalone >
@foreach($detailsmain as $main_cart)

<amp-story-page class="cover" auto-advance-after="" id="Page1">
		<amp-story-grid-layer template="fill">
			<amp-img tabindex="0" height="1024" width="768" class="image" layout="responsive" src="<?php echo $main_cart->imagelink; ?>" alt="imag" >
				
			</amp-img>
     
		</amp-story-grid-layer>
		
		<amp-story-grid-layer class="align-end" template="vertical">
			<div class="inner-align-end " >
		      
              <p class="para1"><?php echo implode(' ', array_slice(explode(' ', $main_cart->description), 0)); ?></p>
			
			</div>
		</amp-story-grid-layer>
	</amp-story-page>
  @endforeach
      @foreach ($details as $details)
      <amp-story-page class="slide" auto-advance-after="" id="page1">
              <amp-story-grid-layer template="fill">
              	<amp-img tabindex="0" height="1024" width="768" layout="fixed" src="<?php echo $details->t_imagelink; ?>"  alt="iamge">
              	</amp-img>
              </amp-story-grid-layer>
              <amp-story-grid-layer class="align-end" template="vertical">
            
              <div animate-in-duration="2s" animate-in-delay=".5s" class="inner-align-end " animate-in="fly-in-bottom">
				
        			 <div class="summary">
        			
        			  <p class="para"><?php echo implode(' ', array_slice(explode(' ', $details->t_description), 0)); ?></p>
        			 </div>
             </div>
		

            </amp-story-grid-layer>
          
          
</amp-story-page>

      @endforeach
               
 
</amp-story>
             
@endsection



