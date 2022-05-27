<?php
/**
 * Cars Lite Theme Customizer
 *
 * @package Cars Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cars_lite_customize_register( $wp_customize ) {
	
	function cars_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
	
	$wp_customize->get_setting( 'blogname' )->tranport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->tranport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
	    'selector' => 'h1.site-title',
	    'render_callback' => 'cars_lite_customize_partial_blogname',
	) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => 'p.site-description',
	    'render_callback' => 'cars_lite_customize_partial_blogdescription',
	) );

	/***************************************
	** Color Scheme
	***************************************/
	$wp_customize->add_setting('color_scheme', array(
		'default' => '#e12b15',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','cars-lite'),
			'description' => __('Select color from here.','cars-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);

	$wp_customize->add_setting('cars_headerbg_color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'cars_headerbg_color',array(
			'label' => __('Header Background color','cars-lite'),
			'description'	=> __('Select background color for header.','cars-lite'),
			'section' => 'colors',
			'settings' => 'cars_headerbg_color'
		))
	);

	$wp_customize->add_setting('cars_footer_color', array(
		'default' => '#03080e',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'cars_footer_color',array(
			'label' => __('Footer Background Color','cars-lite'),
			'description' => __('Select background color for footer.','cars-lite'),
			'section' => 'colors',
			'settings' => 'cars_footer_color'
		))
	);

	/***************************************
	** Top Header
	***************************************/
	$wp_customize->add_section(
        'cars_top_bar',
        array(
            'title' => __('Setup Top Bar', 'cars-lite'),
            'priority' => null,
			'description'	=> __('Add information to header top here','cars-lite'),	
        )
    );
	
	$wp_customize->add_setting('cars_tpbr_phn',array(
			'sanitize_callback'	=> 'wp_filter_nohtml_kses'
	));
	
	$wp_customize->add_control('cars_tpbr_phn',array(
			'type'	=> 'text',
			'label'	=> __('Add Phone Number here.','cars-lite'),
			'section'	=> 'cars_top_bar'
	));

	$wp_customize->add_setting('cars_tpbr_mail',array(
			'sanitize_callback'	=> 'wp_filter_nohtml_kses'
	));
	
	$wp_customize->add_control('cars_tpbr_mail',array(
			'type'	=> 'text',
			'label'	=> __('Add Email Address here.','cars-lite'),
			'section'	=> 'cars_top_bar'
	));

	$wp_customize->add_setting('cars_tpbr_fb',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('cars_tpbr_fb',array(
			'type'	=> 'url',
			'label'	=> __('Add Facebook link here.','cars-lite'),
			'section'	=> 'cars_top_bar'
	));

	$wp_customize->add_setting('cars_tpbr_tw',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('cars_tpbr_tw',array(
			'type'	=> 'url',
			'label'	=> __('Add Twitter link here.','cars-lite'),
			'section'	=> 'cars_top_bar'
	));

	$wp_customize->add_setting('cars_tpbr_yt',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('cars_tpbr_yt',array(
			'type'	=> 'url',
			'label'	=> __('Add Youtube link here.','cars-lite'),
			'section'	=> 'cars_top_bar'
	));

	$wp_customize->add_setting('cars_tpbr_in',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('cars_tpbr_in',array(
			'type'	=> 'url',
			'label'	=> __('Add Linkedin link here.','cars-lite'),
			'section'	=> 'cars_top_bar'
	));

	$wp_customize->add_setting('cars_tpbr_pin',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('cars_tpbr_pin',array(
			'type'	=> 'url',
			'label'	=> __('Add Pinterest link here.','cars-lite'),
			'section'	=> 'cars_top_bar'
	));

	$wp_customize->add_setting('cars_tpbr_hide',array(
			'default' => true,
			'sanitize_callback' => 'cars_lite_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'cars_tpbr_hide', array(
		   'settings' => 'cars_tpbr_hide',
    	   'section'   => 'cars_top_bar',
    	   'label'     => __('Check this to hide Top Header.','cars-lite'),
    	   'type'      => 'checkbox'
     ));
	 
	/***************************************
	** Header Button
	***************************************/
	$wp_customize->add_section(
        'cars_cta_btn',
        array(
            'title' => __('Setup Header CTA Button', 'cars-lite'),
            'priority' => null,
			'description'	=> __('Add text and link for header cta button','cars-lite'),	
        )
    );
	
	$wp_customize->add_setting('cars_ctabtn_txt',array(
			'sanitize_callback'	=> 'wp_filter_nohtml_kses'
	));
	
	$wp_customize->add_control('cars_ctabtn_txt',array(
			'type'	=> 'text',
			'label'	=> __('Add header button text here','cars-lite'),
			'section'	=> 'cars_cta_btn'
	));

	$wp_customize->add_setting('cars_ctabtn_lnk',array(
			'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('cars_ctabtn_lnk',array(
			'type'	=> 'url',
			'label'	=> __('Add header button link here.','cars-lite'),
			'section'	=> 'cars_cta_btn'
	));

	/***************************************
	** Slider Section
	***************************************/
	$wp_customize->add_section(
        'cars_slider',
        array(
            'title' => __('Setup Slider', 'cars-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1600x900). Slider will work only when you select the static front page.','cars-lite'),	
        )
    );

    $wp_customize->add_setting('slide1',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slide1',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','cars-lite'),
			'section'	=> 'cars_slider'
	));

	$wp_customize->add_setting('slide2',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slide2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','cars-lite'),
			'section'	=> 'cars_slider'
	));

	$wp_customize->add_setting('slide3',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slide3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','cars-lite'),
			'section'	=> 'cars_slider'
	));

	$wp_customize->add_setting('slide_more',array(
		'default'	=> __('Read More','cars-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_more',array(
		'label'	=> __('Add slider link button text.','cars-lite'),
		'section'	=> 'cars_slider',
		'setting'	=> 'slide_more',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('hide_slider',array(
		'default' => true,
		'sanitize_callback' => 'cars_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'hide_slider', array(
	   'settings' => 'hide_slider',
	   'section'   => 'cars_slider',
	   'label'     => __('Check this to hide slider.','cars-lite'),
	   'type'      => 'checkbox'
    ));
	
	/***************************************
	** About Section
	***************************************/
	$wp_customize->add_section(
        'cars_about_section',
        array(
            'title' => __('Setup First Section', 'cars-lite'),
            'priority' => null,
			'description'	=> __('Select page for homepage first section. This section will be displayed only when you select the static front page.','cars-lite'),	
        )
    );
	
	$wp_customize->add_setting('cars_about_ttl',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cars_about_ttl',array(
		'type'	=> 'text',
		'label'	=> __('Add Section Sub Title Here','cars-lite'),
		'section'	=> 'cars_about_section'
	));

    $wp_customize->add_setting('about_sec',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('about_sec',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for this section','cars-lite'),
		'section'	=> 'cars_about_section'
	));

	$wp_customize->add_setting('about_more',array(
		'default'	=> __('','cars-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('about_more',array(
		'label'	=> __('Add read more button text.','cars-lite'),
		'section'	=> 'cars_about_section',
		'setting'	=> 'about_more',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('cars_hide_about',array(
		'default' => true,
		'sanitize_callback' => 'cars_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'cars_hide_about', array(
	   'settings' => 'cars_hide_about',
	   'section'   => 'cars_about_section',
	   'label'     => __('Check this to hide section.','cars-lite'),
	   'type'      => 'checkbox'
    ));

    /***************************************
	** Services Section
	***************************************/
	$wp_customize->add_section(
        'cars_ser_section',
        array(
            'title' => __('Setup Services Section', 'cars-lite'),
            'priority' => null,
			'description'	=> __('Select pages for homepage second section. This section will be displayed only when you select the static front page.','cars-lite'),	
        )
    );

    $wp_customize->add_setting('cars_ser_ttl',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('cars_ser_ttl',array(
		'type'	=> 'text',
		'label'	=> __('Add Section Title Here','cars-lite'),
		'section'	=> 'cars_ser_section'
	));

    $wp_customize->add_setting('ser1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('ser1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for first column','cars-lite'),
		'section'	=> 'cars_ser_section'
	));

	$wp_customize->add_setting('ser2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('ser2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for second column','cars-lite'),
		'section'	=> 'cars_ser_section'
	));

	$wp_customize->add_setting('ser3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('ser3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for third column','cars-lite'),
		'section'	=> 'cars_ser_section'
	));

	$wp_customize->add_setting('cars_ser_more',array(
		'default'	=> __('','cars-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('cars_ser_more',array(
		'label'	=> __('Add read more button text.','cars-lite'),
		'section'	=> 'cars_ser_section',
		'setting'	=> 'cars_ser_more',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('cars_hide_ser',array(
		'default' => true,
		'sanitize_callback' => 'cars_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'cars_hide_ser', array(
	   'settings' => 'cars_hide_ser',
	   'section'   => 'cars_ser_section',
	   'label'     => __('Check this to hide section.','cars-lite'),
	   'type'      => 'checkbox'
    ));
}
add_action( 'customize_register', 'cars_lite_customize_register' );

function cars_lite_css_func(){ ?>
<style>
	a,
	.tm_client strong,
	.postmeta a:hover,
	#sidebar ul li a:hover,
	.blog-post h3.entry-title,
	a.blog-more:hover,
	#commentform input#submit,
	input.search-submit,
	.blog-date .date,
	.sitenav ul li.current_page_item a,
	.sitenav ul li a:hover, 
	.sitenav ul li.current_page_item ul li a:hover{
		color:<?php echo esc_attr(get_theme_mod('color_scheme','#e12b15'));?>;
	}
	h3.widget-title,
	.nav-links .current,
	.nav-links a:hover,
	p.form-submit input[type="submit"],
	.read-more,
	.nivo-controlNav a,
	.header-btn a,
	.header-btn a:before,
	.service-thumb:before{
		background-color:<?php echo esc_attr(get_theme_mod('color_scheme','#e12b15'));?>;
	}
	.header-btn a:after{
		border-top-color:<?php echo esc_attr(get_theme_mod('color_scheme','#e12b15'));?>;
	}
	#header,
	.head-left,
	.sitenav ul li.menu-item-has-children:hover > ul,
	.sitenav ul li.menu-item-has-children:focus > ul,
	.sitenav ul li.menu-item-has-children.focus > ul{
		background-color:<?php echo esc_attr(get_theme_mod('cars_headerbg_color','#ffffff'));?>;
	}
	.head-left:after{
		border-bottom-color: <?php echo esc_attr(get_theme_mod('cars_headerbg_color','#ffffff'));?>;
	}
	.copyright-wrapper{
		background-color:<?php echo esc_attr(get_theme_mod('cars_footer_color','#03080e'));?>;
	}
</style>
<?php }
add_action('wp_head','cars_lite_css_func');

function cars_lite_customize_preview_js() {
	wp_enqueue_script( 'cars-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'cars_lite_customize_preview_js' );