/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {

	var slider_height = $('.n2-section-smartslider').height();
	console.log('Slider Height: ' + slider_height);
	$('.mobilemenu').height(slider_height + 'px');
	
	$('.gfield_html_formatted').css('padding-top', '20px');
	$('.ginput_container_email').css('margin-top', '-22px');
	
	if (window.matchMedia('(max-width: 768px)').matches) {
        $('.gform_button').css('width', '39%').css('margin', '0');
    }
	//

	$('.burger').on('click', function(){
		$(this).toggleClass('clicked');
		$('.mobilemenu').fadeToggle(500).toggleClass('hide');		
	});

	
	

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();	

});// END #####################################    END