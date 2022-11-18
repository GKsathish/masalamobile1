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
<link  rel="stylesheet"href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />

<meta name="robots" content="max-image-preview:large">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0, user-scalable=1">
<link rel="apple-touch-icon" href="https://mobilemasala.com/assets/front_end/images/logo.png" /> 
<title>Mobile Masala</title>
<meta property="og:image" content="https://mobilemasala.com/assets/front_end/images/logo.png" />
<meta name="description" content="Mobile Masala is a popular entertainment website in India. It is the one-stop site for trending film news, paparazzi videos, celeb gossip news, lifestyle tips, health advice, etc. The spectrum of content includes Bollywood News, Entertainment, Fashion, Celebrity Gossip, Movies, Music, Technology and Gadgets,  Food, Health and Wellness, Sports, Auto, Travel and Tourism, Indian Television, Regional Cinema, Movie Reviews, and more. Mobile Masala curates the best and most popular content in the form of text articles, images, paparazzi videos and visual stories." />
<meta name="keywords" content="Celebrity Gossips,Entertainment,Fashion,Visual Stories" />
<meta name="Author" content="https://mobilemasala.com/" />

<meta property="og:url" content="https://mobilemasala.com/" /> 
<meta property="og:title" content="@yield('title')">

<meta property="og:description" content="Read the latest business, financial news on Moneycontrol. Manage your finance with our online Investment Portfolio. Get Live Stock Price, Stock/Share market news, Sensex, Nifty Live, Commodity Market, IPO news, economy news, personal finance news Today." />
<meta property="og:image" content="https://mobilemasala.com/assets/front_end/images/logo.png" />


<meta property="og:url" content="https://mobilemasala.com/"> 
<meta property="og:description" content=" Mobile Masala is a popular entertainment website in India. It is the one-stop site for trending film news, paparazzi videos, celeb gossip news, lifestyle tips, health advice, etc. The spectrum of content includes Bollywood News, Entertainment, Fashion, Celebrity Gossip, Movies, Music, Technology and Gadgets,  Food, Health and Wellness, Sports, Auto, Travel and Tourism, Indian Television, Regional Cinema, Movie Reviews, and more. Mobile Masala curates the best and most popular content in the form of text articles, images, paparazzi videos and visual stories" /> 
<meta property="og:image" content="https://mobilemasala.com/assets/front_end/images/logo.png" />

<meta property="og:locale" content="en_us" />
<!-- Site Name, Title, and Description to be displayed -->


<!-- No need to change anything here -->
<meta property="og:type" content="website" />
<meta property="og:image:type" content="image/jpeg">

<!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">


<link as="script" rel="preload" href="https://cdn.ampproject.org/v0.js">

<meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  
 
<script src="https://cdn.ampproject.org/v0.js" async>
	
</script>
<script src="https://cdn.ampproject.org/v0/amp-video-0.1.js" custom-element="amp-video" async></script>
<script src="https://cdn.ampproject.org/v0/amp-audio-0.1.js" custom-element="amp-audio" async></script>
<script src="https://cdn.ampproject.org/v0/amp-story-1.0.js" custom-element="amp-story" async></script>
<script src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js" custom-element="amp-analytics" async></script>
<script src="https://cdn.ampproject.org/v0/amp-cache-url-0.1.js" custom-element="amp-cache-url" async></script>
<script src="https://cdn.ampproject.org/v0/amp-story-auto-ads-0.1.js" custom-element="amp-story-auto-ads" async></script>


    <link rel="canonical" href="https://amp.dev/documentation/examples/introduction/stories_in_amp/index.html">
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

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



<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js"></script>
<script>

/* 
   const firebaseConfig = {
    apiKey: "AIzaSyDl1BNMw6BaBEAXQEtTDIddOgj8TlD4ZUc",
    authDomain: "fir-testing-89579.firebaseapp.com",
    projectId: "fir-testing-89579",
    storageBucket: "fir-testing-89579.appspot.com",
    messagingSenderId: "833792043931",
    appId: "1:833792043931:web:ec917a948a2cae90424f3e",
    measurementId: "G-J9K8FM9EVG"
};*/


  const firebaseConfig = {
    apiKey: "AIzaSyBzrnYvralPnN_Sc7X_7XsNaCj137aMcZk",
    authDomain: "mobilemasala-v2.firebaseapp.com",
    projectId: "mobilemasala-v2",
    storageBucket: "mobilemasala-v2.appspot.com",
    messagingSenderId: "187223718471",
    appId: "1:187223718471:web:72c8027b9ad9f8620ecf62",
    measurementId: "G-2T6SCLK222"
  };
  


    firebase.initializeApp(firebaseConfig);
    
    const messaging=firebase.messaging();

    function IntitalizeFireBaseMessaging() {
        messaging
            .requestPermission()
            .then(function () {
                // console.log("Notification Permission");
                return messaging.getToken();
            })
            .then(function (token) {
             
                console.log("Token : "+token);
                   const xhttp = new XMLHttpRequest();
                   
                   xhttp.open("post", "https://rbm.studio/get_token.php?token="+token);
                   xhttp.send();
                   
                // document.getElementById("token").innerHTML=token;
                // $.post("noti-token-send", {noti_token: token}, function(result){
                //     console.log(result);
                // });
                $.get("noti-token-send&id="+token, function(result){
                    console.log(result)
                });
                
                
            })
            .catch(function (reason) {
                console.log(reason);
            });
    }

    messaging.onMessage(function (payload) {
        console.log(payload);
        const notificationOption={
            body:payload.notification.body,
            icon:payload.notification.icon
        };

        if(Notification.permission==="granted"){
            var notification=new Notification(payload.notification.title,notificationOption);

            notification.onclick=function (ev) {
                ev.preventDefault();
                window.open(payload.notification.click_action,'_blank');
                notification.close();
            }
        }

    });
    messaging.onTokenRefresh(function () {
        messaging.getToken()
            .then(function (newtoken) {
                console.log("New Token : "+ newtoken);
            })
            .catch(function (reason) {
                console.log(reason);
            })
    })
    IntitalizeFireBaseMessaging();
</script>

<!-- GOOGLE NOTIFICATION ADDED BY Praveen  -->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KX27D98');</script>
<!-- End Google Tag Manager -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2T6SCLK222"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2T6SCLK222');
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
	width: 20%;
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
    	
    	
    	        .dropbtn {
  height:45px;
  width:45px;
  margin:5px;
  
  
  
  
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-left: 2px !important;

}
/*@media only screen and (max-width: 800px) {*/
/*.dropdown{*/
/*  display:none;   */
/*}*/
/*}*/

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000;
  min-width: 100px;
  box-shadow: 0px 8px 8px 0px rgba(0,0,0,0.2);
  z-index: 9;
  margin-left:-25px !important;
  text-align:center !important;
}

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align:center !important;
}

.dropdown-content a:hover {background-color: #000;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#a83299;}
.dropd{
    display:none;
}

    
    @media only screen and (max-width:900px){
        
        .dropdown {
   display:none;
  
}
.dropd{
    display:block;
    float:right;
    
}
    .dropdbtn1{
         height:45px;
         width:45px;
         margin:5px;
  
    }
    
    .dropdcontent1 {
  display: none;
  position: absolute;
  background-color: #000;
  min-width: 100px;
  box-shadow: 0px 8px 8px 0px rgba(0,0,0,0.2);
  z-index: 9;
  margin-left:-30px !important;
  text-align:center !important;
}

.dropdcontent1 a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align:center !important;
}

.dropdcontent1 a:hover {background-color: #000;}

.dropd:hover .dropdcontent1 {display: block;}

.dropd:hover .dropdbtn1 {background-color:#a83299;}
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
				<label>Gmail ID</label>
				<input type="text" name="gmail" pleaceholder="Please enter your Gmail" required>
			</div>
            <p style="font-size: 12px;
    text-align: center;">Please enter you Gmail</p>
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

$gmail = $_GET['gmail'];

$urlgmail = "https://rbm.studio/mm_emails/get_emails.php?gmail=".$gmail;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$urlgmail);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($ch);

if($output == 'success'){
    
echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Thank you for subscribing to Mobile Masala');window.location.href='https://mobilemasala.com/';</SCRIPT>";




    
}else{
    
       echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Thank you for subscribing to Mobile Masala');window.location.href='https://mobilemasala.com/';</SCRIPT>";

}

}
?>
    
<!--FORM BI-->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KX27D98"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
	<!--<aside class="header-right right">
		<div class="dateandtime" style="font-size:15px;margin-bottom: 30px;">
		    <i class="fa fa-clock-o"></i> <span id='ct6'></span>
		    <p class="bell"><i class="fa fa-bell"></i></p> 
		    </div>
		<!--<div class="whatsapp">-->
		<!--	<a href="https://web.whatsapp.com/send?phone=98844555446&amp;text=Hello!%20I%27m%20interested" target="_blank" title="Whatsapp" rel="noopener">+91-988445 55446</a>-->
  <!--      </div>-->
	<!--</aside>-->
	
	
	 <aside class="header-right right">
        <div class="dateandtime" style="font-size:15px;margin-bottom: 30px;">
             <span><?php echo $date =  date("d/m/Y") ?> </span><i class="fa fa-clock-o"></i>
            <p class="bell"><i class="fa fa-bell"></i></p> 
            </div>
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
         
         <li class="dropd">
               <img src="{{asset('assets/front_end/images/adimage/A Icon1.png')}}"   class="dropdbtn1">
              <ul class="dropdcontent1">
              <a href="/Hindi"> हिन्दी  </a>
               <a href="/Telugu"> తెలుగు </a>
              
              <a href="/">English</a>
              
              
              </ul>
         </li>
        
		<input type="checkbox" id="toggleMenu" />
		
	
			
<?php  $lang = $feed->language;?>

<?php 


if (empty($lang)) {
  
   $langnn = $_SERVER['REQUEST_URI'];
   $langn = (explode("&lang=",$langnn)); 
    $lang = $langn['1'];
   
   
}

?>
	
	
	
<?php if(($lang == "") || ($lang == "English")){ ?>
	<ul class="menu">
        
            <!-- <li><a href="/"><i class="fa fa-home"></i></a></li> -->
            <li><a href="post-content&id=1&lang=English">Fashion</a></li>
            <li><a href="post-content&id=2&lang=English">Celebrity Gossip</a></li>
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
            <li><a href="post-content&id=4&lang=English">Movies</a></li>
            <li><a href="post-content&id=5&lang=English">Music</a></li>
               
            <!-- <li><a href="#">Hot Content</a></li> -->
            <li><a href="post-content&id=6&lang=English">Health &amp; Wellness</a></li>
            <!-- <li><a href="#">Fitness</a></li>
            <li><a href="#">General Gossip</a></li> -->
            <li><a href="post-content&id=7&lang=English">Technology &amp; Gadgets</a></li>
            <li><a href="post-content&id=8&lang=English">Entertainment</a></li>
            <li><a href="post-content&id=9&lang=English">Sports</a></li>
            <li><a href="post-content&id=10&lang=English">Auto News</a></li>
            <li><a href="post-content&id=11&lang=English">Travel &amp; Tourism</a></li>

            <li><a href="post-content&id=17&lang=English">More</a></li>
            
            <!-- <li><a href="post-content&id=12">Horoscope</a></li> -->
            <li><a href="search?lang=English"><i class="fa fa-search" aria-hidden="true"></i> Search</a></li>
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
             <li class="dropdown" >
              <img src="{{asset('assets/front_end/images/adimage/A Icon1.png')}}"   class="dropbtn">
              <ul class="dropdown-content">
              <a href="/Hindi">हिन्दी </a>
               <a href="/Telugu">తెలుగు</a>
              
              </ul>
              
            </li>
        
		</ul>
		   
	<?php }?>




<?php if($lang == "Hindi"){ ?>
	<ul class="menu">
      <!-- <li><a href="/"><i class="fa fa-home"></i></a></li> -->
            <li><a href="post-content&id=1&lang=Hindi
"> फ़ैशन </a></li>
            <li><a href="post-content&id=2&lang=Hindi">  सेलिब्रिटी गॉसिप

  </a></li>
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
            <li><a href="post-content&id=4&lang=Hindi
"> मूवीज़ </a></li>
            <li><a href="post-content&id=5&lang=Hindi

"> म्यूज़िक</a></li>
               
            <!-- <li><a href="#">Hot Content</a></li> -->
            <li><a href="post-content&id=6&lang=Hindi


">  हेल्थ & वैलनेस


  </a></li>
            <!-- <li><a href="#">Fitness</a></li>
            <li><a href="#">General Gossip</a></li> -->
            <li><a href="post-content&id=7&lang=Hindi

"> टेक्नोलॉजी & गैजेट्स

 </a></li>
            <li><a href="post-content&id=8&lang=Hindi"> मनोरंजन </a></li>
            <li><a href="post-content&id=9&lang=Hindi">खेल</a></li>
            <li><a href="post-content&id=10&lang=Hindi">  ऑटो न्यूज़  </a></li>
            <li><a href="post-content&id=11&lang=Hindi">  ट्रेवल & टूरिज़म   </a></li>
            <!--<li><a href="post-content&id=17&Others">अधिक</a></li>-->
            <!-- <li><a href="post-content&id=12">Horoscope</a></li> -->
            <li><a href="search?lang=Hindi"><i class="fa fa-search" aria-hidden="true"></i>  खोज </a></li>
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
             <li class="dropdown">
               <img src="{{asset('assets/front_end/images/adimage/A Icon1.png')}}"   class="dropbtn">
              <ul class="dropdown-content">
              <!--<a href="/Hindi"> हिन्दी  </a>-->
               <a href="/Telugu"> తెలుగు </a>
              
              <a href="/">English</a>
              </ul>
            </li>
        
		</ul>
		
	


<?php }?>

	<?php if($lang == "Telugu"){ ?>
        <ul class="menu">
        
          
           <li><a href="post-content&id=1&lang=Telugu
"> ఫాషన్

 </a></li>
             
             <li><a href="post-content&id=2&lang=Telugu
                ">
                సెలబ్రిటీ గాసిప్స్
                
                </a></li>
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
          <li><a href="post-content&id=4&lang=Telugu">
                సినిమా
            
            </a></li>

            <li><a href="post-content&id=5&lang=Telugu
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
            <li><a href="post-content&id=6&lang=Telugu

">  హెల్త్ & వెల్నెస్

  </a></li>
            
            <!-- <li><a href="#">Fitness</a></li>
            <li><a href="#">General Gossip</a></li> -->
<!--            <li><a href="post-content&id=7&lang=Telugu-->
<!--">టెక్నాలజీ&గాడ్జెట్స్-->

<!-- </a></li>-->
            
              <li><a href="post-content&id=8&lang=Telugu

"> ఎంటర్టైన్మెంట్</a>

</li>
<!--<li><a href="post-content&id=9&lang=Telugu-->
<!--"> క్రీడలు</a></li>-->
            
<!--            <li><a href="post-content&id=10&lang=Telugu-->

<!--">  ఆటో న్యూస్  </a></li>-->
          
<!--            <li><a href="post-content&id=11&lang=Telugu-->
<!-- "> ట్రావెల్ & టూరిజం   </a></li>-->
          
          
            <!-- <li><a href="post-content&id=3">New Movies</a></li> -->
            
         
            <!--<li><a href="post-content&id=17&Others">-->
                
            <!--    మరింత-->
            <!--</a></li>-->
            <!-- <li><a href="post-content&id=12">Horoscope</a></li> -->
            <li><a href="search?lang=Telugu"><i class="fa fa-search" aria-hidden="true"></i> 
            వెతకండి
            </a></li>
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
            
           <li class="dropdown" >
              <img src="{{asset('assets/front_end/images/adimage/A Icon1.png')}}" class="dropbtn" >
              <ul class="dropdown-content">
              <a href="/Hindi">हिन्दी  </a>
               <!--<a href="/Telugu"> తెలుగు  </a>-->
              
             <a href="/">English</a>
              </ul>
            </li>
        
		</ul>
		
		<?php }?>
		
		
		

    </nav>
</div>
@yield('content')
@extends('front_end.langFooter')
