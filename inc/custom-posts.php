<?php 
add_action( 'init', 'rrf_education_theme_custom_post' );
function rrf_education_theme_custom_post() {
	register_post_type( 'cpt',
		array(
			'labels' => array(
				'name' => __( 'CPTs' ),
				'singular_name' => __( 'CPT' ),
				'add_new_item' => __( 'Add New CPT' )
			),
			'public' => false,
			'show_ui' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
	
    
	register_taxonomy(
		'cpt_cat',  
		'cpt', 
		array(
			'hierarchical'          => true,
			'label'                 => 'CPT Category', 
			'query_var'             => true,
			'show_admin_column'     => true,
			'rewrite'               => array(
				'slug'              => 'event-category', 
				'with_front'        => true 
				)
			)
	);    
}