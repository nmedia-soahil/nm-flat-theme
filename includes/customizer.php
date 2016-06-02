<?php 

/**************************------theme customize block------********************************/

function flat_customize_register( $wp_customize ) {
             // Do stuff with $wp_customize, the WP_Customize_Manager object.

//=====================************** THEME COSTOMIZE *****************============
            /**
            ********************-----Top Bar section-----************************
            **/
            /**
            *** addding section
            **/
            $wp_customize->add_section( 'theme_layout', array(
              'title' => __( 'Top Bar Section' ),
              'description' => __( 'Set Top Bar Styling' ),
              'panel' => '', // Not typically needed.
              'priority' => 162,
              'capability' => 'edit_theme_options',
              'theme_supports' => '', // Rarely needed.
            ) );
            /**
            *** add settings for Social icons bg-color
            **/
             $wp_customize->add_setting( 'flat_bg_color', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for Socail icons bg-color
            **/
            $wp_customize->add_control( 'flat_bg_color', array(
              'label'   => __( 'Set Social Icons color', 'nm-flat' ),
              'type'    => 'color',
              'section' => 'theme_layout',
            ) );
            /**
            *** add settings for Social icons Size
            **/
             $wp_customize->add_setting( 'flat-Social-icons-Size', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for for Social icons Size
            **/
            $wp_customize->add_control( 'flat-Social-icons-Size', array(
              'label'   => __( 'Set Social Icons Size', 'nm-flat' ),
              'type'    => 'text',
              'section' => 'theme_layout',
            ) );
            /**
            *** add settings for Phone No
            **/
             $wp_customize->add_setting( 'flat-Phone-No', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for Phone No
            **/
            $wp_customize->add_control( 'flat-Phone-No', array(
              'label'   => __( 'Set Your Phone No', 'nm-flat' ),
              'type'    => 'number',
              'section' => 'theme_layout',
            ) );
            /**
            *** add settings for E.Mail Address
            **/
             $wp_customize->add_setting( 'flat-E.Mail-Address', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for E.Mail Address
            **/
            $wp_customize->add_control( 'flat-E.Mail-Address', array(
              'label'   => __( 'Set Your E.Mail Address', 'nm-flat' ),
              'type'    => 'Email',
              'section' => 'theme_layout',
            ) );
//=====================*********** GENERAL AREA COSTOMIZE ************============

            /**
            *** addd panel
            **/

            $wp_customize->add_panel( 'general_section', array(
              'title' => __( 'General Panel' ),
              'description' => $description, // Include html tags such as <p>.
              'priority' => 163, // Mixed with top-level-section hierarchy.
            ) );
            /**
            *** Add section for nested General section
            **/
            $wp_customize->add_section( 'general_section', array(
              'title' => 'General Settings',
              'description' => __( 'Set general theme options' ),
              'panel' => 'general_section', // Not typically needed.
              'priority' => 163,
              'capability' => 'edit_theme_options',
              'theme_supports' => '', // Rarely needed.
            ) );
           
            /**
            *** addding settings for theme background color
            **/
            $wp_customize->add_setting( 'flat_general_styling', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '#ff2525',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for theme background color
            **/
            $wp_customize->add_control( 'flat_general_styling', array(
              'label'   => __( 'Set theme background color', 'nm-flat' ),
              'type'    => 'color',
              'section' => 'general_section',
            ));
             /**
            *** add settings for theme layout
            **/
            $wp_customize->add_setting( 'flat-theme-layout', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '#ff2525',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for theme layout
            **/
            $wp_customize->add_control( 'flat-theme-layout', array(
              'label'   => __( 'Set theme Layout', 'nm-flat' ),
              'type'    => 'radio',
              'choices' => array(
                'Full Width' => 'Full Width',
                'Boxed'      => 'Boxed' ),
              'section' => 'general_section',
            ));
            /**
            *** add settings for theme background Image
            **/
            $wp_customize->add_setting( 'flat_theme-background-image', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for theme background Image
            **/
            $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'flat_theme-background-image', array(
              'label' => __( 'Set theme background Image', 'theme_textdomain' ),
              'section' => 'general_section',
              'mime_type' => 'image',
            ) ) );

//=====================*********** HEADER AREA COSTOMIZE ************============

            /**
            *** Section for header
            **/
            $wp_customize->add_section( 'header_section', array(
              'title' => __( 'Header Section' ),
              'description' => __( 'Set Header Styling' ),
              'panel' => '', // Not typically needed.
              'priority' => 160,
              'capability' => 'edit_theme_options',
              'theme_supports' => '', // Rarely needed.
            ) );
            /**
            *** add settings for Nav-bar-font-Size
            **/
            $wp_customize->add_setting( 'flat-Nav-bar-font-Size', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for Nav-bar-font-Size
            **/
            $wp_customize->add_control( 'flat-Nav-bar-font-Size', array(
              'label' => __( 'Set Navbar font Size', 'nm-fuzzy' ),
              'type' => 'text',
              'section' => 'header_section',
            ) );
            /**
            *** add settings for Nav-bar-Text-color
            **/
            $wp_customize->add_setting( 'flat-Nav-bar-Text-color', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for Nav-bar-Text-color
            **/
            $wp_customize->add_control( 'flat-Nav-bar-Text-color', array(
              'label' => __( 'Set Navbar Text Color', 'nm-fuzzy' ),
              'type' => 'color',
              'section' => 'header_section',
            ) );
            /**
            *** add settings for Nav-bar-Font-Family
            **/
            $wp_customize->add_setting( 'flat-Nav-bar-Font-Family', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for Nav-bar-Font-Family
            **/
            $wp_customize->add_control( 'flat-Nav-bar-Font-Family', array(
              'label' => __( 'Set Navbar Font-Family', 'nm-fuzzy' ),
              'type' => 'select',
              'choices' => array(
                'arial' => 'Arial',
                'Helvetica' => 'Helvetica',
                'sans-serif' => 'sans-serif',
                'Comic Sans MS' => 'Comic Sans MS'),
              'section' => 'header_section',
            ) );
            /**
            *** add settings for Header background Image
            **/
            $wp_customize->add_setting( 'flat_header-background-image', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
            /**
            *** add control for Header background Image
            **/
            $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'flat_header-background-image', array(
              'label' => __( 'Set Header background Image', 'theme_textdomain' ),
              'section' => 'header_section',
              'mime_type' => 'image',
            ) ) );
//   ===============*********** FOOTER AREA COSTOMIZE ************============

            /**
            *** section for footer
            **/
            $wp_customize->add_section( 'footer_section', array(
              'title' => __( 'Footer Section' ),
              'description' => __( 'Set footer Style' ),
              'panel' => '', // Not typically needed.
              'priority' => 164,
              'capability' => 'edit_theme_options',
              'theme_supports' => '', // Rarely needed.
            ) );
            
            /**
            *** addding settings
            **/
            $wp_customize->add_setting( 'flat_footer_styling', array(
              'type' => 'option',
              'capability' => 'manage_options',
              'default' => '',
              'sanitize_callback' => 'sanitize_hex_color',
            ) );
             
            
            /**
            *** control for footer
            **/
            $wp_customize->add_control( 'flat_footer_styling', array(
              'label' => __( 'Set footer columns', 'nm-flat' ),
              'type' => 'radio',
              'choices' => array(
                  'Radio 1' => '1 Column',
                  'Radio 2' => '2 Columns',
                  'Radio 3' => '3 Columns',
                  'Radio 4' => '4 Columns',),
              'section' => 'footer_section',
            ) );
            
        }
        add_action( 'customize_register', 'flat_customize_register' );

    /**
    ** ========== ENDS --- Theme customizer api block
    **/