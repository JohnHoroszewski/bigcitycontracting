<?php 
function bigCity_master_customizer( $wp_customize ) {
	// Customizer Sections
	// Logo
	$wp_customize->add_section( 'bigCity_logo_section' , array(
	    'title'       => __( 'Company Logos', 'bigCity' ),
	    'priority'    => 10,
	    'description' => 'Add Company Logos',
	) );
	// Company Information
	$wp_customize->add_section( 'bigCity_companyinfo_section' , array(
	    'title'       => __( 'Company Information', 'bigCity' ),
	    'priority'    => 10,
	    'description' => 'Enter company information',
	) );
	// Social Media
	$wp_customize->add_section( 'bigCity_social_section' , array(
	    'title'       => __( 'Social Media', 'bigCity' ),
	    'priority'    => 30,
	    'description' => 'Add your social media links',
	) );
	// Page Banners
	$wp_customize->add_section( 'bigCity_page_banner_section' , array(
	    'title'       => __( 'Default Page Banners', 'bigCity' ),
	    'priority'    => 30,
	    'description' => 'Here you can set default page banners for the different page template types',
	) );
	// Privacy Policy
	$wp_customize->add_section( 'bigCity_privacy_section' , array(
	    'title'       => __( 'Privacy Policy', 'bigCity' ),
	    'priority'    => 30,
	    'description' => 'Add your Privacy Policy link here',
	) );
	// Remove default sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel( 'widgets' );
	// Customizer Settings
	// Logo Section
	$wp_customize->add_setting( 'bigCity_logo_section' );
	$wp_customize->add_setting( 'bigCity_logo', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_mark', array( 'default' => __( '' ), 'bigCity' ) );
	// Company Information
	$wp_customize->add_setting( 'bigCity_companyinfo_section', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_street', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_city', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_state', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_zip', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_country', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_gmap', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_phone', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_tollfree', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_fax', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_company_email', array( 'default' => __( '' ), 'bigCity' ) );
	// Social Media
	$wp_customize->add_setting( 'bigCity_social' );
	$wp_customize->add_setting( 'bigCity_social_facebook_link', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_social_twitter_link', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_social_gplus_link', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_social_linkedin_link', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_social_youtube_link', array( 'default' => __( '' ), 'bigCity' ) );
    $wp_customize->add_setting( 'bigCity_social_vimeo_link', array( 'default' => __( '' ), 'bigCity' ) );
    $wp_customize->add_setting( 'bigCity_social_instagram_link', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_social_pinterest_link', array( 'default' => __( '' ), 'bigCity' ) );
	// Privacy Policy
	$wp_customize->add_setting( 'bigCity_privacy_policy' );
	// Page Banners
    $wp_customize->add_setting( 'bigCity_page_banner_section' );
    $wp_customize->add_setting( 'bigCity_page_gallery', array( 'default' => __( '' ), 'bigCity' ) );
	$wp_customize->add_setting( 'bigCity_page_contact', array( 'default' => __( '' ), 'bigCity' ) );
    $wp_customize->add_setting( 'bigCity_page_general', array( 'default' => __( '' ), 'bigCity' ) );
    $wp_customize->add_setting( 'bigCity_posts_blog', array( 'default' => __( '' ), 'bigCity' ) );
    $wp_customize->add_setting( 'bigCity_post_single', array( 'default' => __( '' ), 'bigCity' ) );
	// Customizer Controls
	// Company Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bigCity_logo', array(
		'description' => __( 'Upload division logo here' ),
	    'label'    => __( 'Site Logo', 'bigCity' ),
	    'section'  => 'bigCity_logo_section',
	    'settings' => 'bigCity_logo',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bigCity_company_mark', array(
		'description' => __( 'Upload logo mark image' ),
	    'label'    => __( 'Company logo mark', 'bigCity' ),
	    'section'  => 'bigCity_logo_section',
	    'settings' => 'bigCity_company_mark',
	) ) );
	// Company Information
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_street', array(
	    'label'    => __( 'Street Address', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_street',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_city', array(
	    'label'    => __( 'City', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_city',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_state', array(
	    'label'    => __( 'State', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_state',
	    'type'     => 'select',
	    'choices'  => array(
	        'AL' => 'Alabama',
	        'AK' => 'Alaska',
	        'AZ' => 'Arizona',
	        'AR' => 'Arkansas',
	        'CA' => 'California',
	        'CO' => 'Colorado',
	        'CT' => 'Connecticut',
	        'DE' => 'Delaware',
	        'DC' => 'District of Columbia',
	        'FL' => 'Florida',
	        'GA' => 'Georgia',
	        'HI' => 'Hawaii',
	        'ID' => 'Idaho',
	        'IL' => 'Illinois',
	        'IN' => 'Indiana',
	        'IA' => 'Iowa',
	        'KS' => 'Kansas',
	        'KY' => 'Kentucky',
	        'LA' => 'Louisiana',
	        'ME' => 'Maine',
	        'MD' => 'Maryland',
	        'MA' => 'Massachusetts',
	        'MI' => 'Michigan',
	        'MN' => 'Minnesota',
	        'MS' => 'Mississippi',
	        'MO' => 'Missouri',
	        'MT' => 'Montana',
	        'NE' => 'Nebraska',
	        'NV' => 'Nevada',
	        'NH' => 'New Hampshire',
	        'NJ' => 'New Jersey',
	        'NM' => 'New Mexico',
	        'NY' => 'New York',
	        'NC' => 'North Carolina',
	        'ND' => 'North Dakota',
	        'OH' => 'Ohio',
	        'OK' => 'Oklahoma',
	        'OR' => 'Oregon',
	        'PA' => 'Pennsylvania',
	        'RI' => 'Rhode Island',
	        'SC' => 'South Carolina',
	        'SD' => 'South Dakota',
	        'TN' => 'Tennessee',
	        'TX' => 'Texas',
	        'UT' => 'Utah',
	        'VT' => 'Vermont',
	        'VA' => 'Virginia',
	        'WA' => 'Washington',
	        'WV' => 'West Virginia',
	        'WI' => 'Wisconsin',
	        'WY' => 'Wyoming' )
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_zip', array(
	    'label'    => __( 'Zip Code', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_zip',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_country', array(
	    'label'    => __( 'Country', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_country',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_gmap', array(
		'description' => __( 'Paste the Google Code Snippet Here starting with &lt;iframe&gt;. Please replace width to 100% and have the height set to at least 300.' ),
	    'label'    => __( 'Google Map', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_gmap',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_phone', array(
	    'label'    => __( 'Local Phone', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_phone',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_tollfree', array(
	    'label'    => __( 'Toll Free Phone', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_tollfree',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_fax', array(
	    'label'    => __( 'Fax', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_fax',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_company_email', array(
	    'label'    => __( 'Email', 'bigCity' ),
	    'section'  => 'bigCity_companyinfo_section',
	    'settings' => 'bigCity_company_email',
	) ) );
	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_social_facebook_link', array(
	    'label'    => __( 'Facebook Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => 'bigCity_social_facebook_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_social_twitter_link', array(
	    'label'    => __( 'Twitter Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => 'bigCity_social_twitter_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_social_gplus_link', array(
	    'label'    => __( 'Google Plus Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => 'bigCity_social_gplus_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_social_linkedin_link', array(
	    'label'    => __( 'LinkedIn Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => 'bigCity_social_linkedin_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_social_youtube_link', array(
	    'label'    => __( 'YouTube Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => 'bigCity_social_youtube_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_social_vimeo_link', array(
	    'label'    => __( 'Vimeo Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => 'bigCity_social_vimeo_link',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, ' bigCity_social_instagram_link', array(
	    'label'    => __( 'Instagram Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => ' bigCity_social_instagram_link',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_social_pinterest_link', array(
	    'label'    => __( 'Pinterest Link', 'bigCity' ),
	    'section'  => 'bigCity_social_section',
	    'settings' => 'bigCity_social_pinterest_link',
	) ) );
	// Page Banners
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bigCity_page_general', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'General Page', 'bigCity' ),
	    'section'  => 'bigCity_page_banner_section',
	    'settings' => 'bigCity_page_general',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bigCity_page_gallery', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Gallery Page', 'bigCity' ),
	    'section'  => 'bigCity_page_banner_section',
	    'settings' => 'bigCity_page_gallery',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bigCity_page_contact', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Contact Page', 'bigCity' ),
	    'section'  => 'bigCity_page_banner_section',
	    'settings' => 'bigCity_page_contact',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bigCity_posts_blog', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Blog Listing Page', 'bigCity' ),
	    'section'  => 'bigCity_page_banner_section',
	    'settings' => 'bigCity_posts_blog',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bigCity_post_single', array(
		'description' => __( 'Upload Image here' ),
	    'label'    => __( 'Single Post Page', 'bigCity' ),
	    'section'  => 'bigCity_page_banner_section',
	    'settings' => 'bigCity_post_single',
	) ) );
	// Privacy Policy
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'bigCity_privacy_policy', array(
	    'label'    => __( 'Privacy Policy Link', 'bigCity' ),
	    'section'  => 'bigCity_privacy_section',
	    'settings' => 'bigCity_privacy_policy',
	) ) );
}
add_action( 'customize_register', 'bigCity_master_customizer' );