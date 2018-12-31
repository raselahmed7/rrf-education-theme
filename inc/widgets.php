<?php 

function rrf_education_widget_areas() {

	register_sidebar( array(
		'name' => __( 'Footer widgets', 'rrf-education' ),
		'id' => 'footer',
		'before_widget' => '<div class="%2$s col single-footer-wid">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

}
add_action('widgets_init', 'rrf_education_widget_areas');
