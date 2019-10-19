/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	$('.gfield_html_formatted').css('padding-top', '20px');
	$('.ginput_container_email').css('margin-top', '-22px');

	$('.burger').on('click', function(){
		$(this).toggleClass('clicked');
		$('.mobilemenu').fadeToggle(500).toggleClass('show');		
	});
	

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

	/*
	$(document).on("click","#toggleMenu",function(){
		$(this).toggleClass('open');
		$('.mobile-navigation').toggleClass('open');
		$('body').toggleClass('open-mobile-menu');
		$('.site-header .logo').toggleClass('fixed');
		var parentdiv = $(".mobile-navigation").outerHeight();
		var mobile_nav_height = $(".mobile-main-nav").outerHeight();
		if(mobile_nav_height>parentdiv) {
			$('.mobile-navigation').addClass("overflow-height");
		}
	});
	*/

});// END #####################################    END