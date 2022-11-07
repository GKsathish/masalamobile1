/*
Responsive Mobile Toggle Menu v1.0
Description: JS enhances CSS response time and menu caching but not required
Author: Danielle Vautier
*/

function responsiveMenu() {	
	$('.menuTitle').click(function () {
		$('.menu, .main-navigation').slideToggle("slow");
		$('.menu, .main-navigation').css({"max-height":"800px"});
	});
}

$(document).ready(function () {
	$(".menu, .main-navigation").css({"display":"none","transition":"none","max-height":"inherit"});
	$("#toggleMenu").remove();
	responsiveMenu();
});