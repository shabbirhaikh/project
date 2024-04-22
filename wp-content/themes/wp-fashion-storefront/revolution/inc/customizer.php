<?php
/**
 * WP Fashion Storefront Theme Customizer
 *
 * @package WP Fashion Storefront
 */

function wp_fashion_storefront_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'wp_fashion_storefront_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'wp_fashion_storefront_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_setting(
		'wp_fashion_storefront_logo_width',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '150',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_logo_width',
		array(
			'label'       => __('Logo Width in PX', 'wp-fashion-storefront'),
			'section'     => 'title_tagline',
			'type'        => 'number',
			'input_attrs' => array(
	            'min' => 100,
	             'max' => 300,
	             'step' => 1,
	         ),
		)
	);

	/*
    * Theme Options Panel
    */
	$wp_customize->add_panel('wp_fashion_storefront_panel', array(
		'priority' => 25,
		'capability' => 'edit_theme_options',
		'title' => __('WP Fashion Storefront Theme Options', 'wp-fashion-storefront'),
	));

	/*
	* Customizer top header section
	*/

	$wp_customize->add_setting(
		'wp_fashion_storefront_site_title_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_site_title_text',
		array(
			'label'       => __('Enable Title', 'wp-fashion-storefront'),
			'description' => __('Enable or Disable Title from the site', 'wp-fashion-storefront'),
			'section'     => 'title_tagline',
			'type'        => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'wp_fashion_storefront_site_tagline_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 0,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_site_tagline_text',
		array(
			'label'       => __('Enable Tagline', 'wp-fashion-storefront'),
			'description' => __('Enable or Disable Tagline from the site', 'wp-fashion-storefront'),
			'section'     => 'title_tagline',
			'type'        => 'checkbox',
		)
	);

	/*Top Header Options*/
	$wp_customize->add_section('wp_fashion_storefront_topbar_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Top Header Options', 'wp-fashion-storefront'),
		'panel'       => 'wp_fashion_storefront_panel',
	));


	/*Top Header Phone Text*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_header_info_phone',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_header_info_phone',
		array(
			'label'       => __('Edit Phone Text ', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_topbar_section',
			'type'        => 'text',
		)
	);

	/*Top Header Phone Text*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_header_info_email',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_header_info_email',
		array(
			'label'       => __('Edit Email Text ', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_topbar_section',
			'type'        => 'text',
		)
	);

	/*Top Header Text*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_header_topbar_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_header_topbar_text',
		array(
			'label'       => __('Edit Header Text ', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_topbar_section',
			'type'        => 'text',
		)
	);

	/*
	* Customizer main header section
	*/

	/*Main Header Options*/
	$wp_customize->add_section('wp_fashion_storefront_header_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Main Header Options', 'wp-fashion-storefront'),
		'panel'       => 'wp_fashion_storefront_panel',
	));

	/*currency switcher section enable*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_enable_currency_switcher',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 0,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_enable_currency_switcher',
		array(
			'label'       => __('Enable Currency Switcher', 'wp-fashion-storefront'),
			'description' => __('Checked to show the currency switcher.', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_header_section',
			'type'        => 'checkbox',
		)
	);

	/*google translator section enable*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_enable_google_translator',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 0,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_enable_google_translator',
		array(
			'label'       => __('Enable Google Translator', 'wp-fashion-storefront'),
			'description' => __('Checked to show the google translator.', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_header_section',
			'type'        => 'checkbox',
		)
	);

	/*Phone Number Text*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_phone_number_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_phone_number_text',
		array(
			'label'       => __('Edit Phone Text', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_header_section',
			'type'        => 'text',
		)
	);

	/*Phone Number*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_phone_number_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_phone_number_option',
		array(
			'label'       => __('Edit Phone Number', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_header_section',
			'type'        => 'text',
		)
	);



	/*
	* Customizer main slider section
	*/
	/*Main Slider Options*/
	$wp_customize->add_section('wp_fashion_storefront_slider_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Main Slider Options', 'wp-fashion-storefront'),
		'panel'       => 'wp_fashion_storefront_panel',
	));

	/*Main Slider Enable Option*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_enable_slider',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 0,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_enable_slider',
		array(
			'label'       => __('Enable Main Slider', 'wp-fashion-storefront'),
			'description' => __('Checked to show the main slider', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_slider_section',
			'type'        => 'checkbox',
		)
	);

	for ($i=1; $i <= 3; $i++) { 

		/*Main Slider Image*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_image'.$i,
			array(
				'capability'    => 'edit_theme_options',
		        'default'       => '',
		        'transport'     => 'postMessage',
		        'sanitize_callback' => 'esc_url_raw',
	    	)
	    );

		$wp_customize->add_control( 
			new WP_Customize_Image_Control( $wp_customize, 
				'wp_fashion_storefront_slider_image'.$i, 
				array(
			        'label' => __('Edit Slider Image ', 'wp-fashion-storefront') .$i,
			        'description' => __('Edit the slider image.', 'wp-fashion-storefront'),
			        'section' => 'wp_fashion_storefront_slider_section',
				)
			)
		);

		/*Main extra Slider Heading*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_xtra_heading'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'wp_fashion_storefront_slider_xtra_heading'.$i,
			array(
				'label'       => __('Edit Extra Heading Text ', 'wp-fashion-storefront') .$i,
				'description' => __('Edit the slider Extra heading text.', 'wp-fashion-storefront'),
				'section'     => 'wp_fashion_storefront_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Heading*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_heading'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'wp_fashion_storefront_slider_heading'.$i,
			array(
				'label'       => __('Edit Heading Text ', 'wp-fashion-storefront') .$i,
				'description' => __('Edit the slider heading text.', 'wp-fashion-storefront'),
				'section'     => 'wp_fashion_storefront_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Content*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'wp_fashion_storefront_slider_text'.$i,
			array(
				'label'       => __('Edit Content Text ', 'wp-fashion-storefront') .$i,
				'description' => __('Edit the slider content text.', 'wp-fashion-storefront'),
				'section'     => 'wp_fashion_storefront_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Button1 Text*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_button1_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'wp_fashion_storefront_slider_button1_text'.$i,
			array(
				'label'       => __('Edit Button #1 Text ', 'wp-fashion-storefront') .$i,
				'description' => __('Edit the slider button text.', 'wp-fashion-storefront'),
				'section'     => 'wp_fashion_storefront_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Button1 URL*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_button1_link'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'wp_fashion_storefront_slider_button1_link'.$i,
			array(
				'label'       => __('Edit Button #1 URL ', 'wp-fashion-storefront') .$i,
				'description' => __('Edit the slider button url.', 'wp-fashion-storefront'),
				'section'     => 'wp_fashion_storefront_slider_section',
				'type'        => 'url',
			)
		);

		/*Main Slider Button2 Text*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_button2_text'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control(
			'wp_fashion_storefront_slider_button2_text'.$i,
			array(
				'label'       => __('Edit Button #2 Text ', 'wp-fashion-storefront') .$i,
				'description' => __('Edit the slider button text.', 'wp-fashion-storefront'),
				'section'     => 'wp_fashion_storefront_slider_section',
				'type'        => 'text',
			)
		);

		/*Main Slider Button2 URL*/
		$wp_customize->add_setting(
			'wp_fashion_storefront_slider_button2_link'.$i,
			array(
				'capability'        => 'edit_theme_options',
				'transport'         => 'refresh',
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			'wp_fashion_storefront_slider_button2_link'.$i,
			array(
				'label'       => __('Edit Button #2 URL ', 'wp-fashion-storefront') .$i,
				'description' => __('Edit the slider button url.', 'wp-fashion-storefront'),
				'section'     => 'wp_fashion_storefront_slider_section',
				'type'        => 'url',
			)
		);
	}

		/*Enable Social Menu at the top*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_enable_top_social_menu',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_enable_top_social_menu',
		array(
			'label'       => __('Enable Top Social Menu', 'wp-fashion-storefront'),
			'description' => __('Checked to show the top social menu. Go to Dashboard >> Appearance >> Menus >> Create New Menu >> Add Custom Link >> Add Social Menu >> Checked Social Menu >> Save Menu.', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_slider_section',
			'type'        => 'checkbox',
		)
	);


	/*
	* Customizer About Us section
	*/
	/*About Us Options*/
	$wp_customize->add_section('wp_fashion_storefront_product_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Product Category Option', 'wp-fashion-storefront'),
		'panel'       => 'wp_fashion_storefront_panel',
	));

	/*Product Enable Option*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_enable_product',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 0,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_enable_product',
		array(
			'label'       => __('Enable Product Section', 'wp-fashion-storefront'),
			'description' => __('Select the category from dropdown', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_product_section',
			'type'        => 'checkbox',
		)
	);

	/*Event Heading*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_event_heading',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_event_heading',
		array(
			'label'       => __('Edit Section Heading', 'wp-fashion-storefront'),
			'description' => __('Edit product section heading', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_product_section',
			'type'        => 'text',
		)
	);

	/*Event Text*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_event_text',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_event_text',
		array(
			'label'       => __('Edit Section Text', 'wp-fashion-storefront'),
			'description' => __('Edit Event section text', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_product_section',
			'type'        => 'text',
		)
	);

	$args = array(
       'type'      => 'product',
        'taxonomy' => 'product_cat'
    );
	$categories = get_categories($args);
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('wp_fashion_storefront_best_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'wp_fashion_storefront_sanitize_choices',
	));
	$wp_customize->add_control('wp_fashion_storefront_best_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Product Category','wp-fashion-storefront'),
		'section' => 'wp_fashion_storefront_product_section',
	));

	/*
	* Customizer Footer Section
	*/
	/*Footer Options*/
	$wp_customize->add_section('wp_fashion_storefront_footer_section', array(
		'priority'       => 5,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Footer Options', 'wp-fashion-storefront'),
		'panel'       => 'wp_fashion_storefront_panel',
	));


	/*Footer Social Menu Option*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_footer_social_menu',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_footer_social_menu',
		array(
			'label'       => __('Enable Footer Social Menu', 'wp-fashion-storefront'),
			'description' => __('Checked to show the footer social menu. Go to Dashboard >> Appearance >> Menus >> Create New Menu >> Add Custom Link >> Add Social Menu >> Checked Social Menu >> Save Menu.', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_footer_section',
			'type'        => 'checkbox',
		)
	);	

	/*Go To Top Option*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_enable_go_to_top_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => 1,
			'sanitize_callback' => 'wp_fashion_storefront_sanitize_checkbox',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_enable_go_to_top_option',
		array(
			'label'       => __('Enable Go To Top', 'wp-fashion-storefront'),
			'description' => __('Checked to enable Go To Top option.', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_footer_section',
			'type'        => 'checkbox',
		)
	);

	/*Footer Copyright Text Enable*/
	$wp_customize->add_setting(
		'wp_fashion_storefront_copyright_option',
		array(
			'capability'        => 'edit_theme_options',
			'transport'         => 'refresh',
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'wp_fashion_storefront_copyright_option',
		array(
			'label'       => __('Edit Copyright Text', 'wp-fashion-storefront'),
			'description' => __('Edit the Footer Copyright Section.', 'wp-fashion-storefront'),
			'section'     => 'wp_fashion_storefront_footer_section',
			'type'        => 'text',
		)
	);
}
add_action( 'customize_register', 'wp_fashion_storefront_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wp_fashion_storefront_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wp_fashion_storefront_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_fashion_storefront_customize_preview_js() {
	wp_enqueue_script( 'wp-fashion-storefront-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), WP_FASHION_STOREFRONT_VERSION, true );
}
add_action( 'customize_preview_init', 'wp_fashion_storefront_customize_preview_js' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class WP_Fashion_Storefront_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/revolution/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'WP_Fashion_Storefront_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new WP_Fashion_Storefront_Customize_Section_Pro( $manager,'wp_fashion_storefront_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'WP Fashion Storefront', 'wp-fashion-storefront' ),
			'pro_text' => esc_html__( 'Buy Pro', 'wp-fashion-storefront' ),
			'pro_url'  => esc_url('https://www.revolutionwp.com/wp-themes/fashion-storefront-wordpress-theme/'),
		) )	);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'wp-fashion-storefront-customize-controls', trailingslashit( get_template_directory_uri() ) . '/revolution/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'wp-fashion-storefront-customize-controls', trailingslashit( get_template_directory_uri() ) . '/revolution/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
WP_Fashion_Storefront_Customize::get_instance();