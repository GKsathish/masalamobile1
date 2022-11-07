function include(url)
{
  document.write('<script src="'+url+'"></script>');
  return false ;
}
/* DEVICE.JS
========================================================*/
include('js/device.min.js');

$(window).load(function() { 
  if ($('html').hasClass('desktop')) {
      $('#stuck_container').TMStickUp({
      })
  }
});

/* Easing library
========================================================*/
include('js/jquery.easing.js');


/* Orientation tablet fix
========================================================*/
$(function(){
// IPad/IPhone
	var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
	ua = navigator.userAgent,

	gestureStart = function () {viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";},

	scaleFix = function () {
		if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
			viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
			document.addEventListener("gesturestart", gestureStart, false);
		}
	};
	
	scaleFix();
	// Menu Android
	if(window.orientation!=undefined){
  var regM = /ipod|ipad|iphone/gi,
   result = ua.match(regM)
  if(!result) {
   $('.sf-menu li').each(function(){
    if($(">ul", this)[0]){
     $(">a", this).toggle(
      function(){
       return false;
      },
      function(){
       window.location.href = $(this).attr("href");
      }
     );
    } 
   })
  }
 }
});
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')

/*function responsiveMenu() {	
	$('.menuTitle').click(function () {
		$('.menu, .nav').slideToggle("slow");
		$('.menu, .nav').css({"max-height":"800px"});
	});
}

$(document).ready(function () {
	$(".menu, .nav").css({"display":"none","transition":"none","max-height":"inherit"});
	$("#toggleMenu").remove();
	responsiveMenu();
});*/

function myFunction(x){x.classList.toggle("change");}

$('.tumbnailcarousel').owlCarousel({
	items:4,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:10,
	nav:true,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:false,
	autoplayTimeout:3000,
	autoplayHoverPause:false,
	responsive: {
        0:{
          items: 1
        },
        480:{
          items: 2
        },
        769:{
          items: 3
        },
        960:{
          items: 4
        },
        1200:{
          items: 4
        }
    }
})
$('.slider-carousel').owlCarousel({
	items:1,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:0,
	nav:true,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:false,
	autoplayTimeout:3000,
	autoplayHoverPause:false
})
$('.slider-carousel-withdot').owlCarousel({
	items:1,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:5,
	nav:false,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:true,
	autoplayTimeout:3000,
	autoplayHoverPause:false
})
$('.single-article-carousel').owlCarousel({
	items:4,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:10,
	nav:true,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:false,
	autoplayTimeout:3000,
	autoplayHoverPause:false,
	responsive: {
        0:{
          items: 1
        },
        480:{
          items: 2
        },
        769:{
          items: 3
        },
        960:{
          items: 4
        },
        1200:{
          items: 4
        }
    }
})
$('.visual-stories-carousel').owlCarousel({
	items:5,
	merge:true,
	loop:true,
	lazyLoad:true,
	margin:10,
	nav:true,
	lazyLoad:true,
	center:false,
	autoplay:true,
	dots:false,
	autoplayTimeout:3000,
	autoplayHoverPause:false,
	responsive: {
        0:{
          items: 1
        },
        480:{
          items: 2
        },
        769:{
          items: 3
        },
        960:{
          items: 4
        },
        1200:{
          items: 5
        }
    }
})


function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();


//Visual Stories
function openVisualStories(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabVisualStories");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks_VS");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  
//  console.log("Button Text : " + $(this).text());
}

//updated date feed


// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpenvs").click();

$(window).load(function() 
{

//console.log("Button Text : " + $(".tablinks_VS:first-child").text());
	
$(".tablinks_VS:first-child").trigger("click");
$(".tablinks_VS:first-child").addClass(" active");
});	

//top
$(document).ready(function()
{ 
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
			
		});

document.getElementById("year").innerHTML = new Date().getFullYear();

function display_ct6() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('ct6').innerHTML = x1;
display_c6();
 }
 function display_c6(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct6()',refresh)
}
display_c6()

	