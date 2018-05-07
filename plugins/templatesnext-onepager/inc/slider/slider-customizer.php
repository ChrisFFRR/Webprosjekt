<?php

/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'txo_add_Slider_panels_and_sections' ); 
function txo_add_Slider_panels_and_sections( $wp_customize ) {
	
	$wp_customize->add_panel( 'slider', array(
		'priority'    => 140,
		'title'       => __( 'Slider', 'i-one' ),
		'description' => __( 'Slides details', 'i-one' ),
	));	
	
	$wp_customize->add_section('slides', array(
        'title'    => __('Slides', 'i-one'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));	
	
	$wp_customize->add_section('slidersettings', array(
        'title'    => __('Slide Settings', 'i-one'),
        'description' => '',
        'panel' => 'slider',		
        'priority' => 140,
    ));			
}


function txo_slider_custom_setting( $controls ) {	

	// Slider

	$controls[] = array(
		'type'        => 'slider',
		'settings'     => 'itrans_sliderspeed', // txo-slider
		'label'       => __( 'Slide Duration', 'i-one' ),
		'description' => __( 'Slide visibility in second', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 6,
		'priority'    => 1,
		'choices'     => array(
			'min'  => 1,
			'max'  => 30,
			'step' => 1
		),
	);

	// Parallax Effect
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'itrans_sliderparallax', //txo-slider
		'label'       => __( 'Parallax Effect', 'i-one' ),
		'description' => __( 'Turn ON/OFF Parallax Effect', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,			
		'priority'    => 4,
	);
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_overlay', //txo-slider
		'label'       => __( 'Turn Off Slider Overlay Layer', 'i-one' ),
		'description' => __( 'Turn Off/on the dotted slider overlay layer', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,
		'priority'    => 4,
	);	
	
	$controls[] = array(
		'type'        => 'switch',
		'settings'     => 'slider_ubar', //txo-slider
		'label'       => __( 'Turn On/Off Top Utilitybar', 'i-one' ),
		'description' => __( 'Turn Off/on the top utilitybar containing email/phone and socoal icon links', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 1,
		'priority'    => 5,
	);	
	
	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_height', //txo-slider
		'label'       => __( 'Slider Height (in %)', 'i-one' ),
		'section'     => 'slidersettings',
		'default'     => 72,
		'choices'     => array(
			'min'  => '0',
			'max'  => '100',
			'step' => '20',
		),
	);				

	$controls[] = array(
		'type'        => 'slider',
		'settings'    => 'slider_reduction', //txo-slider
		'label'       => __( 'Reduction In px', 'i-one' ),
		'section'     => 'slidersettings',
		'description' => __( 'Amount of pixels to be reduced from % of slider height', 'i-one' ),		
		'default'     => 0,
		'choices'     => array(
			'min'  => '0',
			'max'  => '240',
			'step' => '1',
		),
	);	
	
	// slides 	
	$controls[] = array(
		'type'        => 'repeater',
		'label'       => __( 'Slides', 'i-one' ),
		'section'     => 'slides',
		'priority'    => 10,
		'settings'    => 'ione_slides', //txo-slider
		'row_label'   => array( 
			'type' => 'text', 
			'value' => __( 'Slide', 'i-one' ),
		),
		'choices' 	  => array(
			'limit' => 4,
		),		
		'default'     => array(
			array(
				'itrans_slide_title' => __( 'Install & Use Ready Layouts', 'i-one' ),
				'itrans_slide_desc'  => __( 'Extensively Supports WooCommerce', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide1.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'Responsive & Touch Ready', 'i-one' ),
				'itrans_slide_desc'  => __( 'i-one is 100% responsive and touch ready.', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide2.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'One Page WordPress Theme', 'i-one' ),
				'itrans_slide_desc'  => __( 'Extremely powerful and flexible one-page multi-purpose WordPress theme', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide3.jpg',												
			),
			array(
				'itrans_slide_title' => __( 'Easy to Customize', 'i-one' ),
				'itrans_slide_desc'  => __( 'All controls in one place, Setup your busines website in minutes..', 'i-one' ),
				'itrans_slide_linktext'  => __( 'Know More', 'i-one' ),
				'itrans_slide_linkurl'  => '',
				'itrans_slide_image'  =>  get_template_directory_uri() . '/images/slide4.jpg',												
			),									
		),
		'fields' => array(

			'itrans_slide_title' => array(
				'type'     => 'text',
				'label'    => __( 'Title', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_desc' => array(
				'type'     => 'text',
				'label'    => __( 'Subtitle', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_linktext' => array(
				'type'     => 'text',
				'label'    => __( 'Link text', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_linkurl' => array(
				'type'     => 'text',
				'label'    => __( 'Link URL', 'i-one' ),
				'default'  => '',
			),
			'itrans_slide_image' => array(
				'type'     => 'image',
				'label'    => __( 'Image', 'i-one' ),
				'default'  => '',
			),		
				
		)
	);		

	
    return $controls;
}
add_filter( 'kirki/controls', 'txo_slider_custom_setting' );	