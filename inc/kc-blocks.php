<?php
 
add_action('init', 'rrf_education_theme_kc_blocks', 99 );
 
function rrf_education_theme_kc_blocks() {
 
	if (function_exists('kc_add_map')) 
	{ 
	    kc_add_map(
	        array(

	            'kc_icon' => array(
	                'name' => 'Icon',
	                'description' => __('Display single icon', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'Content',
	                'params' => array(
	                    array(
	                        'name' => 'icon',
	                        'label' => 'Select Icon',
	                        'type' => 'icon_picker',
	                        'admin_label' => true,
	                    ),
	                    array(
	                        'name' => 'icon_size',
	                        'label' => 'Icon Size',
	                        'type' => 'text',
	                        'admin_label' => true,
	                        'description' => __('Enter font-size for icon such as: 15px, 1em ..etc..', 'KingComposer')
	                    ),
	                    array(
	                        'name' => 'icon_color',
	                        'label' => 'Icon Color',
	                        'type' => 'color_picker',
	                        'admin_label' => true,
	                        'description' => __('Set color for icon', 'KingComposer')
	                    )
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map

	    kc_add_map(
	        array(

	            'kc_icon2' => array(
	                'name' => 'Icon2',
	                'description' => __('Display single icon', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'Content',
	                'params' => array(
	                    array(
	                        'name' => 'icon',
	                        'label' => 'Select Icon',
	                        'type' => 'icon_picker',
	                        'admin_label' => true,
	                    ),
	                    array(
	                        'name' => 'icon_size',
	                        'label' => 'Icon Size',
	                        'type' => 'text',
	                        'admin_label' => true,
	                        'description' => __('Enter font-size for icon such as: 15px, 1em ..etc..', 'KingComposer')
	                    ),
	                    array(
	                        'name' => 'icon_color',
	                        'label' => 'Icon Color',
	                        'type' => 'color_picker',
	                        'admin_label' => true,
	                        'description' => __('Set color for icon', 'KingComposer')
	                    )
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map
	
	} // End if

}  
 
?>