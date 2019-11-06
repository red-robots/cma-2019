/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	$('.gfield_html_formatted').css('padding-top', '20px');
	$('.ginput_container_email').css('margin-top', '-22px');
	if (window.matchMedia('(max-width: 767px)').matches) {
        $('.gform_button').css('width', '39%').css('margin', '0');
    }

    var header_height = $('.n2-section-smartslider').height();
    //console.log(header_height);

    if(header_height){
    	$('.mobilemenu').height(header_height);
    } else {
    	$('.mobilemenu').height(562);
    }

    $('.n2-style-9f06581096b62fd6b924817df32eb12e-heading').css('right', '47px');

    
	//

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