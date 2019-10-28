/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {

	var slider_height = $('.n2-section-smartslider').height();
	//console.log('Slider Height: ' + slider_height);
	if( slider_height > 0 ){
		$('.mobilemenu').height(slider_height + 'px');
	} 
	
	
	$('.gfield_html_formatted').css('padding-top', '20px');
	$('.ginput_container_email').css('margin-top', '-22px');

	if (window.matchMedia('(max-width: 768px)').matches) {
        $('.gform_button').css('width', '26%').css('margin', '0');
        $('.n2-ss-item-content img').css('width', '120px');
    }
	//

	$('h1.n2-ss-item-content').class('font-family', 'open_sanslight').class('font-size', '2.25em');

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

});// END #####################################    END