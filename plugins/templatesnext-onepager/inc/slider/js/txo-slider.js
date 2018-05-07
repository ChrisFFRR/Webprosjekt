
jQuery(document).ready(function($) {
	

	// slider
	$('#da-slider').each(function() {
		
		_this = $(this);
		var slider_speed = _this.data('slider-speed');
	
		_this.owlCarousel({
	 		
			navigation : true,
			autoPlay : slider_speed,
			paginationSpeed : 600,
			singleItem: true,
			rewindSpeed: 600,
			stopOnHover: true,
			navigationText: ['<span class="genericon genericon-leftarrow"></span>','<span class="genericon genericon-rightarrow"></span>'],
			addClassActive: true,
			theme : "owl-theme1",
			goToFirstSpeed : 1000,
			slideSpeed : 600,
			autoHeight: true			
	 
		});
	 
	});
	
	
	// Banner Parallax Effect	
	if ( $('.ibanner').length > 0 )
	{			
	
		var slider_parallax = $('#da-slider').data('slider-parallax');
		var slider_height = $('#da-slider').data('slider-height');
		//var slider_reduct = $('#da-slider').data('slider-reduct');
		var slider_reduct = 0;
		
		//slider_height = ( ($( window ).height()/100)*slider_height );
		slider_height = ( (($( window ).height()/100)*slider_height) - slider_reduct );
		
		$('.da-img').css( "height", slider_height );
		$('.owl-carousel .owl-wrapper-outer').css( "height", slider_height );
		
		if (slider_parallax == 1)
		{		
			var slidetop = parseInt($('.ibanner').offset().top);
			
			if( $( window ).width() > 999 )
			{	
				/*
				$(window).scroll(function(){
					var newvalue = parseInt($(this).scrollTop()*0.80);
					
					if ($(this).scrollTop() > slidetop)
					{
						$('.da-img').css('background-position', 'center '+newvalue+'px');	
					}
					
					if ($(this).scrollTop() <= slidetop)
					{
						var slideheight = $('.active .da-img').height();
						$('.da-img').css('background-position', 'center 0px');
						$('.owl-wrapper-outer').css('max-height', slideheight+'px');
					}
					
				});
				*/
				$(window).scroll(function(){
					//var newvalue = parseInt($(this).scrollTop()*0.25)-64;
					var newvalue = parseInt($(this).scrollTop()*0.70)-100;
					
					if ($(this).scrollTop() > slidetop)
					{
						//$('.da-img img').css('margin-top', newvalue+'px');
						$('.da-img').css('background-position', 'center '+newvalue+'px');	
					}
					
					if ($(this).scrollTop() <= slidetop)
					{
						var slideheight = $('.active .da-img').height();
						//$('.da-img img').css('margin-top', 0+'px');
						$('.da-img').css('background-position', 'center 0px');
						$('.owl-wrapper-outer').css('max-height', slideheight+'px');
					}		
					console.log('margin-top : '+newvalue+'px, ' + 'SlideTop : ' +slidetop+'px, ' + 'Scrolltop : ' +$(this).scrollTop()+'px');
				});
				
			}
		}

	}
	
	
		
});