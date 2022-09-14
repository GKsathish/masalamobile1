<?php
// if($metatitle == '')
// {
    $metatitle = '';
    $metadescription = '';
    $metaimage = '';
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="robots" content="max-image-preview:large">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=1">
<!-- <meta property="og:title" content="<?php //echo $metatitle; ?>" />
<meta property="og:description" content="<?php //echo strip_tags($metadescription); ?>" />
<meta property="og:url" content="https://mobilemasala.com" />
<meta property="og:image" content="<?php //echo $metaimage; ?>"/> -->
<!--<meta name="viewport" content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0" />-->
<!--<meta name="apple-mobile-web-app-capable" content="yes" />-->
<!--<meta name="mobile-web-app-capable" content="yes">-->
<!--<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />-->
<!--<meta name="description" content="@yield('description')">-->
<!--<meta property="og:title" content="@yield('title')" />-->
<!--<meta property="og:url" content="@yield('url')" />-->
<!--<meta property="og:description" content="@yield('description')">-->
<!--<meta property="og:image" content="@yield('image')">-->
<!--<meta property="og:type" content="article" />-->

<!-- fb & Whatsapp -->
<meta property="og:locale" content="en_us" />
<!-- Site Name, Title, and Description to be displayed -->
<meta property="og:site_name" content="@yield('title')">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="@yield('description')">

<!-- Image to display -->
<meta property="og:image" content="@yield('image')">

<!-- No need to change anything here -->
<meta property="og:type" content="website" />
<meta property="og:image:type" content="image/jpeg">

<!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">

<!-- Website to visit when clicked in fb or WhatsApp-->
<meta property="og:url" content="@yield('url')">



<link href="{{asset('assets/front_end/css/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/front_end/css/responsive.css')}}" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="{{asset('assets/front_end/images/favicon.png')}}">
<link rel="stylesheet" href="{{asset('assets/front_end/css/menu.css')}}" type="text/css"/>

<script type="text/javascript" src="{{asset('assets/front_end/js/menu.js')}}"></script>
<script type="text/javascript" src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>
<script type="text/javascript" src="{{asset('assets/front_end/js/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front_end/js/jquery.js')}}"></script>
<script src="{{asset('assets/front_end/js/v0.js')}}"></script>
<script src="{{asset('assets/front_end/js/amp-video-0.1.js')}}"></script>
<script src="{{asset('assets/front_end/js/amp-story-1.0.js')}}"></script>
<link href="{{asset('assets/front_end/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/front_end/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script async id="AV62382721bab93c441117d951" type="text/javascript" src="https://tg1.aniview.com/api/adserver/spt?AV_TAGID=62382721bab93c441117d951&AV_PUBLISHERID=6229e046286f660f8b1f0456"></script>
<script>function myFunction(x){x.classList.toggle("change");}</script>
<script>
    $(document).ready(function(){
        $('.i-amphtml-story-unmute-audio-control').css("display", "none");
    });
</script>

<!--Bi Changes-->
<script>
$(document).ready(function(){
  $(".fa-bell").click(function(){
    $(".Bi-model").toggle();
  });
  $(".fa-close").click(function(){
    $(".Bi-model").hide();
     $(".terms2").hide();
    
  });
   $(".more").click(function(){
    $(".terms2").toggle();
  });
});
</script>

<style type="text/css">
@media only screen and (max-width: 800px) {
		.Bi-model-box {
    width: 93% !important;
    margin: 0 auto !important;
    margin-top: 8% !important;
    margin-left: 2% !important;
}
.bell2{
  margin:0;
    	    float:right !important;
    	    margin-top:20px;
    	    display:block !important;
    	}
    
	}
	.Bi-model{
	background: #00000069;
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 99999;
    font-family: sans-serif;
	display:none;
   
	}

	.Bi-model-box{
	width: 30%;
    margin: 8% auto;
	}

	.Bi-form{
	padding: 10px;
    border: 1px solid #ccc;
    background: #fff;
    border-radius: 5px;
	}
	.bi-formdata{
		margin: 12px;
	}

	.bi-formdata label{
		margin: 12px;
			}
	.bi-formdata input{
    padding: 4px;
    border: 1px solid #a19f9f;
	}
	.bnt{
    width: 40%;
    background: #F04B4A;
    border: none;
    padding: 10px;
    color: #fff;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
	}
	.terms{
		font-size:12px;
        margin: 0 !important;
        font-family: 'Open Sans', sans-serif;
    	}
    	.more{
    		cursor: pointer;
    		color: #f04b4a;
    	}
    	.more:hover{
    		color: #f04b4a;
    	}
    	.terms2{
            text-align: justify;
            line-height: 19px;
            padding: 0 28px;
            padding-top: 0px;
            display: none;
            font-size: 12px;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        	}
    	.term{
    		float: left;
            margin-right: 9px;
            margin: 4px 8px;
            font-family: 'Open Sans', sans-serif;
    	}
    	.fa-bell{
    	    font-size: 26px;
    	    color: #B54F8D;
    	}
    	.bell{
            margin: 0;
            float: left;
            margin-top: 4px;
            margin-left: 72%;
    	}
    	
    	.bell2{
    	    margin:0;
    	    float:right;
    	    margin-top: 28px;
            margin-right: 21px;
    	    display:none;
    	}
    	label{
    	        font-family: 'Open Sans', sans-serif;
    	}
    	
    	.formtitle-bi{
    	    font-family: 'Open Sans', sans-serif;
    	    margin:22px 0;
    	}
    	.bi-link{
    	    text-decoration: underline;
            color: blue;
    	}
</style>
<!--Bi Changes-->
<body>
<link itemprop="thumbnailUrl" href="@yield('image')">
<span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
<link itemprop="url" href="@yield('image')">
</span>

    
<!--FORM BI-->
<div class="Bi-model">
	<div class="Bi-model-box">

		<div class="Bi-form">
			<i class="fa fa-close" style="font-size: 22px;color: #f04b4a;float:right;cursor: pointer;"></i>

			<center><h3>Subscribe to alerts and updates</h3></center>
			<form action="" method="GET" autocomplete="off">
			<div class="bi-formdata">
				<label>Mobile no.</label>
				<input type="number" name="mobile" pleaceholder="Please enter your mobile number">
			</div>
            <p style="font-size: 12px;
    text-align: center;">Please enter you mobile number with country code</p>
			<div class="bi-formdata" style="    margin: 0;">
			<input type="checkbox" name="terms" class="term" Checked><p class="terms">I have read and agree to the <a href="https://mobilemasala.com/terms-of-use">terms of use</a> and  <span class="more">More...</span>

				<p class="terms2">here by  provide my consent and authorise <a href="https://mobilemasala.com/">mobilemasala.com</a> to send customized information and updates via email, text, call or other means of delivery in reasonable sole discretion. 
By submitting this form, I hereby authorize <a href="https://mobilemasala.com/">mobilemasala.com</a> to do the following in connection with providing me the services. 
1. To use my user information for the purpose of promotional services and I understand that I shall have the option to opt out/unsubscribe from the service.
2. To receive customized recommendations and personalized offers of the content, promotional offers, third party promotions and services of mobilemasala and/or its business partners.</p>
			</p>
			</div>
			
			<center><button class="bnt" name="Submit" type="Submit">Submit</button></center>
			</form>
		</div>		
	</div>
</div>

<?php

if(isset($_GET['Submit'])){

$msisdn = $_GET['mobile'];
$mobile='+'.$msisdn;

$postData = array(
    'phone_number' => $mobile,
);

$ch = curl_init('http://3.108.200.14/sendMessage');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    CURLOPT_POSTFIELDS => json_encode($postData)
));

$response = curl_exec($ch);
curl_close($ch);

echo "<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Subscription Added Successfully')
        window.location.href='https://mobilemasala.com/';
        </SCRIPT>";

}
?>
    
<!--FORM BI-->
    
<div class="wrapper">
<header class="site-header clear">
	<div class="site-branding left">
		<a href="/"><img src="assets/front_end/images/logo.png" alt="Mobile Masala" /></a>
	</div><p class="bell2"><i class="fa fa-bell"></i></p> 
	<!-- <aside class="header-search right">
    	<form role="search" method="get" class="search-form" action="#">
			<label>
                <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
			</label>
			<input type="submit" class="search-submit" value="Search" />
		</form>
	</aside> -->
	<aside class="header-right right">
		<div class="dateandtime" style="font-size:15px;margin-bottom: 30px;">
		    <i class="fa fa-clock-o"></i> <span id='ct6'></span>
		    <p class="bell"><i class="fa fa-bell"></i></p> 
		    </div>
		<!--<div class="whatsapp">-->
		<!--	<a href="https://web.whatsapp.com/send?phone=98844555446&amp;text=Hello!%20I%27m%20interested" target="_blank" title="Whatsapp" rel="noopener">+91-988445 55446</a>-->
  <!--      </div>-->
	</aside>
</header>
<div id="stuck_container">
	<nav class="main-navigation clear">
		<label for="toggleMenu" class="menuTitle">
            <div onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </label>
		<input type="checkbox" id="toggleMenu" />
        <ul class="menu">
            <!-- <li><a href="/"><i class="fa fa-home"></i></a></li> -->
            <li><a href="post-content&id=1">Fashion</a></li>
            <li><a href="post-content&id=2">Celebrity Gossip</a></li>
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
            <li><a href="post-content&id=4">Movies</a>
            <li><a href="post-content&id=5">Music</a></li>
                <!-- <ul class="sub-menu">
                    <li><a href="post-content&id=1">Movie Reviews</a></li>
                    <li><a href="post-content&id=1">New Movies (Trailers)</a></li>
                    <li><a href="post-content&id=1">Music Reviews</a></li>
                </ul> -->
            </li>
            <!-- <li><a href="#">Hot Content</a></li> -->
            <li><a href="post-content&id=6">Health &amp; Wellness</a></li>
            <!-- <li><a href="#">Fitness</a></li>
            <li><a href="#">General Gossip</a></li> -->
            <li><a href="post-content&id=7">Technology &amp; Gadgets</a></li>
            <li><a href="post-content&id=8">Entertainment</a></li>
            <li><a href="post-content&id=9">Sports</a></li>
            <li><a href="post-content&id=10">Auto News</a></li>
            <li><a href="post-content&id=11">Travel &amp; Tourism</a></li>
            <li><a href="post-content&id=17">More</a></li>
            <!-- <li><a href="post-content&id=12">Horoscope</a></li> -->
            <li><a href="search"><i class="fa fa-search" aria-hidden="true"></i> Search</a></li>
            <!-- <li class="subarrow"><a href="#">More</a> -->
                <ul class="sub-menu">
                    <!-- <li><a href="#">Believe It or Not</a></li> -->
                    <!-- <li><a href="post-content&id=1">Auto News</a></li>
                    <li><a href="post-content&id=1">Travel &amp; Tourism</a></li> -->
                    <!-- <li><a href="#">App. Reviews</a></li> -->
                    <!-- <li><a href="post-content&id=1">Horoscope</a></li> -->
                    <!-- <li><a href="#">Shopping</a></li> -->
                    <!-- <li><a href="post-content&id=12">Entertainment</a></li>
                    <li><a href="post-content&id=1">Sports</a></li> -->
                </ul>
            </li>

            <div>
                <button>language</button>
             <div>
                <a>English</a>
                <a>Telugu</a>
                <a>Hindi</a>

             </div>
            </div>
		</ul>
    </nav>
</div>
@yield('content')
@extends('front_end.footer')
