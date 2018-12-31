<?php

function rrf_education_shortcode_options( $options ) {
    $options = array();
    return $options;
}
add_filter( 'cs_shortcode_options', 'rrf_education_shortcode_options' );

function rrf_education_customize_options( $options ) {
    $options = array();
    return $options;
}
add_filter( 'cs_customize_options', 'rrf_education_customize_options' );

function rrf_education_framework_settings( $settings ) {
  
    $settings = array();    

    $settings           = array(
      'menu_title'      => esc_html__('Theme Options', 'rrf-education'),
      'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
      'menu_slug'       => 'rrf-theme-options',
      'ajax_save'       => true,
      'show_reset_all'  => true,
      'framework_title' => esc_html__('Theme Options', 'rrf-education'),
    );    


    return $settings;

}
add_filter( 'cs_framework_settings', 'rrf_education_framework_settings' );

function rrf_education_framework_options( $options ) {

    $options      = array(); // remove old options
    
    $options[]    = array(
        'name'      => 'header',
        'title'     => esc_html__('Header', 'rrf-education'),
        'icon'      => 'fa fa-cog',
        'fields'    => array(
            array(
                'id'       => 'logo_type',
                'type'     => 'select',
                'title'    => 'Logo type',
                'options'  => array(
                    'text_logo'  => 'Text logo only',
                    'iconic_logo'   => 'Logo icon and text',
                    'image_logo' => 'Image logo',
                ),
                'default'  => 'text_logo',
            ),
            array(
                'id'              => 'logo_icon',
                'type'            => 'image',
                'title'           => 'Upload logo icon',
                'dependency' => array( 'logo_type', '==', 'iconic_logo' )
            ),
            array(
                'id'              => 'custom_logo',
                'type'            => 'image',
                'title'           => 'Logo',
                'dependency' => array( 'logo_type', '==', 'image_logo' )
            ),
            array(
                'id'              => 'header_right_text',
                'type'            => 'textarea',
                'title'           => 'Header right text',
                'default' => 'ESTD: 1900, EIIN: 000000. E-mail: info@yoursite.com'
            ),

        )
    );
    
    $options[]    = array(
        'name'      => 'colors',
        'title'     => esc_html__('Colors', 'rrf-education'),
        'icon'      => 'fa fa-paint-brush',
        'fields'    => array(
            array(
                'id'       => 'color_1',
                'type'     => 'color_picker',
                'title'    => 'Color 1',
                'default'  => '#22D1AD',
            ),
            array(
                'id'       => 'color_2',
                'type'     => 'color_picker',
                'title'    => 'Color 2',
                'default'  => '#31CB71',
            ),
            array(
                'id'       => 'color_3',
                'type'     => 'color_picker',
                'title'    => 'Color 3',
                'default'  => '#3797DA',
            ),
            array(
                'id'       => 'color_4',
                'type'     => 'color_picker',
                'title'    => 'Color 4',
                'default'  => '#9A5AB4',
            ),
            array(
                'id'       => 'color_5',
                'type'     => 'color_picker',
                'title'    => 'Color 5',
                'default'  => '#E57D27',
            ),
            array(
                'id'       => 'color_6',
                'type'     => 'color_picker',
                'title'    => 'Color 6',
                'default'  => '#E64D3E',
            ),
            array(
                'id'       => 'color_7',
                'type'     => 'color_picker',
                'title'    => 'Color 7',
                'default'  => '#289EDA',
            ),
        )
    );

    $options[]    = array(
        'name'      => 'backup',
        'title'     => esc_html__('Backup', 'rrf-education'),
        'icon'      => 'fa fa-shield',
        'fields'    => array(
			array(
				'id'              => 'backup',
				'type'            => 'backup',
				'title'           => 'Backup',
			),

        )
    );
    
    
  	return $options;

}
add_filter( 'cs_framework_options', 'rrf_education_framework_options' );

function rrf_education_metabox_options( $options ) {

    $options      = array();

    $options[]    = array(
        'id'        => 'ppm_quickstart_page_options',
        'title'     => esc_html__('Page Options', 'rrf-education'),
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'  => 'rrf-education_page_meta_1',
                'fields' => array(
                    array(
                        'id'    => 'page_alternative_title',
                        'type'  => 'text',
                        'title' => esc_html__('Page alternative title', 'rrf-education'),
                    )
                )
            )
        )
    );

    return $options;

}
add_filter( 'cs_metabox_options', 'rrf_education_metabox_options' );