<?php

/*********Remove parent fuctions**************/
function katlan_remove_parent_function() {
    remove_action( 'wp_enqueue_scripts', 'lakshmi_lite_styles' );
    remove_action( 'admin_menu', 'lakshmi_lite_about_theme' );
	remove_action( 'after_setup_theme', 'lakshmi_lite_custom_setup' );
	if ( ! defined( 'FW' ) ) {
		unregister_nav_menu( 'secondarymenu' );
		unregister_nav_menu( 'footermenu' );
	}
}
add_action( 'wp_loaded', 'katlan_remove_parent_function' );

function katlan_remove_custom( $wp_customize ) {
	remove_action( 'customize_register', 'lakshmi_lite_customize_register' );
}
add_action( 'after_setup_theme', 'katlan_remove_custom', 0 );

define('KATLAN_WEBZAKT_THEME_URL','http://webzakt.com/themes/katlan-multipurpose-wordpress-theme/','katlan');
define('KATLAN_WEBZAKT_AUTHOR_URL','http://webzakt.com/','katlan');
define('KATLAN_WEBZAKT_THEME_DOC','https://webzakt.com/docs/lakshmi-lite-robot-palette-katlan/','katlan');

/*********Add child theme styles**************/
add_action( 'wp_enqueue_scripts', 'katlan_enqueue_styles' );
function katlan_enqueue_styles() {
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', '', '', 'screen, all');
	wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider.css', '', '', 'screen, all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl-carousel.css', '', '', 'screen, all');
	wp_enqueue_style('prettyphoto-css', get_template_directory_uri().'/css/prettyPhoto.css', '', '', 'screen, all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' , array(), '4.4.0', 'all' );
	
    wp_enqueue_style( 'katlan-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('katlan-main-css', get_bloginfo( 'stylesheet_url' ), '', '', 'all');
	
	wp_enqueue_style('katlan-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:regular,300,600|Hind:300');
}

/*********Katlan Customizer**************/
function katlan_custom_setup() {
	if ( ! defined( 'FW' ) ) {
		add_theme_support( "custom-background",
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
				'default-repeat'     => 'repeat',
				'default-position-x' => 'center',
				'default-attachment' => 'scroll',
    			'wp-head-callback' => 'lakshmi_lite_custom_background_cb',
			)
		);
		
		add_theme_support( 'custom-logo', array(
			'height'      => 42,
			'width'       => 116,
			'flex-height' => true,
		) );

		add_theme_support( "custom-header",
			array(
				'default-image'          => '',
				'flex-height'            => false,
				'flex-width'             => false,
				'uploads'                => true,
				'random-default'         => false,
				'header-text'            => false,
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			)
		);
	}
}
add_action( 'after_setup_theme', 'katlan_custom_setup' );

if ( ! function_exists ('katlan_customize_register') ):
function katlan_customize_register( $wp_customize ) {
	if ( ! defined( 'FW' ) ) {

		$wp_customize->add_section( 'lakshmi_lite_header_settings' , array(
			'title'      => __( 'Header Settings', 'katlan' ),
			'priority'   => 50,
		) );
		
		$wp_customize->add_setting( 'header_title_text' , array(
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_header_text', array(
			'label'        => __( 'Top Header Text', 'katlan' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'header_title_text',
			'description'   => __( 'Add Your text to the top header', 'katlan' ),
		) ) );
		
		$wp_customize->add_setting( 'feautered_blog_posts' , array(
			'default'     => __( 'off', 'katlan' ),
			'transport'   => 'refresh',
			'sanitize_callback' => 'lakshmi_lite_sanitize_onoff',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'feautered_blog_posts', array(
			'label'        => __( 'Featured Blog Posts', 'katlan' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'feautered_blog_posts',
			'type'           => 'radio',
            'choices'        => array(
                'on'   => __( 'on', 'katlan' ),
                'off'  => __( 'off', 'katlan' )
            ),
			'description'   => __( 'Featured posts on blog page.', 'katlan' ),
		) ) );
		
		$wp_customize->add_setting( 'header_button_text' , array(
			'default'     => __( 'Lakshmi', 'katlan' ),
			'transport'   => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_text', array(
			'label'        => __( 'Header Button Text', 'katlan' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'header_button_text',
			'description'   => __( 'Add Your text or leave empty.', 'katlan' ),
		) ) );
		
		$wp_customize->add_setting( 'header_button_link' , array(
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_link', array(
			'label'        => __( 'Header Button Link', 'katlan' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'header_button_link',
			'description'   => __( 'Add Your link.', 'katlan' ),
		) ) );
	}
}
endif;
add_action( 'customize_register', 'katlan_customize_register' );

/*********Katlan About Theme**************/
//about theme info
add_action( 'admin_menu', 'katlan_about_theme' );
function katlan_about_theme() {  
	global $katlan_about_theme_page; 	
	$katlan_about_theme_page = add_theme_page( __('About Theme', 'katlan'), __('About Theme', 'katlan'), 'edit_theme_options', 'katlan_guide', 'katlan_guide');   
} 

//guidline for about theme
function katlan_guide() { 
?>

<div class="wrapper-info">
	<div class="col-left">
   		   <div class="about-title">
			  <h1><?php esc_html_e('About Katlan Theme', 'katlan'); ?></h1>
		   </div>
           <p><?php esc_html_e('Description: Katlan - Multipurpose WordPress Theme is a child theme of Lakshmi Lite with all features You need. With Unyson and Lakshmi features plugins, You can create sliders, use customizer options, unique shortcodes with page builder and import the premade demo with one click. Imagine Your website and build it with Katlan. Build Your site with the highly customizable responsive elements. If You would make something big, try Katlan Pro with more elements and special functions.', 'katlan'); ?></p>
           <p><?php esc_html_e('If You want to know more about Katlan, please read the', 'katlan'); ?> <a href="<?php echo esc_url(KATLAN_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'katlan'); ?></a>.</p>
           <h2><?php esc_html_e('How to use Katlan', 'katlan'); ?></h2>
		  <p><?php esc_html_e('1. If You want to use all Katlan features install the Lakshmi Lite parent theme and activate the 3 recommended plugins: Unyson, Lakshmi Features, Contact Form 7.', 'katlan'); ?></p>
          <p><?php esc_html_e('2. Install the Katlan child theme and activate it.', 'katlan'); ?></p>
          <p><?php esc_html_e('3. Install the demo contents at Tools -> Demo Content Install. (This step is optional.)', 'katlan'); ?></p>
          <p><?php esc_html_e('4. Use the customizer to setup Your site and build Your pages and blog posts with the page builder. If You prefer the default editor, You can call the Lakshmi elements with the "editor shortcodes" button.', 'katlan'); ?></p>
          <p><?php esc_html_e('5. Have fun!', 'katlan'); ?></p>
          
          <h4><?php esc_html_e('If You need more info, please read the', 'katlan'); ?> <a href="<?php echo esc_url(KATLAN_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('documentation', 'katlan'); ?></a>.</h4><br />
           <h2><?php esc_html_e('About Katlan Pro', 'katlan'); ?></h2>
          <p><?php esc_html_e('Do You want more? Extend Katlan Theme! You can download', 'katlan'); ?> <a href="<?php echo esc_url(KATLAN_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Katlan - Multipurpose WordPress Theme', 'katlan'); ?></a> <?php esc_html_e('pro version from Webzakt.', 'katlan'); ?></p>
          <div class="description free-and-pro"><a href="<?php echo esc_url(KATLAN_WEBZAKT_THEME_URL); ?>" class="webzakt-button webzakt-button-pro" target="_blank"><?php esc_html_e('More about Pro Version', 'katlan'); ?></a><a href="<?php echo esc_url(KATLAN_WEBZAKT_AUTHOR_URL); ?>" class="webzakt-button webzakt-button-more" target="_blank"><?php esc_html_e('More about Webzakt', 'katlan'); ?></a></div>
          <p><?php esc_html_e('Pro version includes above the lite features:', 'katlan'); ?></p>
          
          <h3><?php esc_html_e('Customizable Colors & Fonts, WooCommerce & Give Donation Plugin support with page builder elemnts, Events & Portfolio post types with page builder elemnts, Breadcrumbs, Lakshmi Widgets (Contact, Event, Flickr, Popular Posts, Quote), 4 Blog Style, Social share function, Animations, Nice sroll, Back to top, Sticky header, 7 Header style, Countdown, Counter, Map-fullwidth, Member, Pricing-table, Progress, Tabs, Toggle, Calendar, Extra Post carousel and much more...', 'katlan'); ?></h3>
	</div><!-- .col-left -->
	
	<div class="col-right">			
			<div class="about-donate">
				<hr />
				<a href="<?php echo esc_url(KATLAN_WEBZAKT_THEME_URL); ?>" target="_blank"><?php esc_html_e('Demo', 'katlan'); ?></a> | 
				<a href="<?php echo esc_url(KATLAN_WEBZAKT_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'katlan'); ?></a> | 
				<a href="<?php echo esc_url(KATLAN_WEBZAKT_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'katlan'); ?></a>
                <div class="about-space"></div>
				<hr />
                <p><?php esc_html_e('Katlan - Multipurpose WordPress Theme is free, and I hope that you find it useful.','katlan'); ?></p>
			<hr />
            <div class="about-title">
				<?php esc_html_e('Credits', 'katlan'); ?>
            </div>
            <p><?php esc_html_e('I`ve used the following scripts as listed. See the source of the images in the documentation.', 'katlan'); ?></p>
                        
            <ul>
                <li><?php esc_html_e('Bootstrap', 'katlan'); ?></li>
                <li><?php esc_html_e('jQuery easing', 'katlan'); ?></li>
                <li><?php esc_html_e('prettyPhoto', 'katlan'); ?></li>
                <li><?php esc_html_e('Flexslider', 'katlan'); ?></li>
                <li><?php esc_html_e('OwlCarousel', 'katlan'); ?></li>
                <li><?php esc_html_e('Nivo Slider', 'katlan'); ?></li>
                <li><?php esc_html_e('jQuery Directional Hover', 'katlan'); ?></li>
                <li><?php esc_html_e('Font Awesome', 'katlan'); ?></li>
                <li><?php esc_html_e('Google Fonts', 'katlan'); ?></li>
                <li><?php esc_html_e('Unyson', 'katlan'); ?></li>
            </ul>
		</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php }

function katlan_about_theme_style($hook) {
	global $katlan_about_theme_page;
	if( $hook != $katlan_about_theme_page ) { 
		return;
	}
	wp_enqueue_style('katlan-about-theme-style-css', get_stylesheet_directory_uri().'/admin/css/about-theme.css');
}
add_action( 'admin_enqueue_scripts', 'katlan_about_theme_style' );