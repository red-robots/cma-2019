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

    
    $('h1.n2-ss-item-content').css('text-shadow', '2px 2px #333');
    
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