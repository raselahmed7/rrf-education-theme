<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php 
            $logo_type = cs_get_option('logo_type');
            $custom_logo = cs_get_option('custom_logo');
            $iconic_logo = cs_get_option('logo_icon');
            $header_right_text = cs_get_option('header_right_text');
            wp_head(); 
        ?>
    </head>
    <body <?php body_class(); ?>>

    <div class="container">
    	<div class="row">
    		<div class="col">
    			<div class="site-wrapper">
    				<div class="header">
						<div class="row">
							<div class="col my-auto">
								<a href="<?php echo site_url(); ?>" class="logo">
                                    <div class="row">
                                    <?php if($logo_type != 'text_logo' && $logo_type != 'image_logo' && !empty($iconic_logo)) : ?>
                                    <div class="col-auto my-auto">
                                    <img src="<?php echo wp_get_attachment_image_url($iconic_logo, 'thumbnail'); ?>" alt="" class="iconic-logo">
                                    </div>
                                    <?php elseif($logo_type != 'text_logo' && $logo_type != 'iconic_logo' && !empty($custom_logo)) : ?>
                                    <div class="col">
                                    <img src="<?php echo wp_get_attachment_image_url($custom_logo, 'large'); ?>" alt="" class="image-logo">
                                    </div>
                                    <?php endif; ?>

                                    <?php if($logo_type != 'image_logo') : ?>
                                    <div class="col-auto my-auto">
                                    <span class="text-logo">
									<h2><?php echo bloginfo('title'); ?></h2>
									<?php echo bloginfo('description'); ?>
                                    </span>
                                    </div>
                                    <?php endif; ?>
                                    </div>
								</a>
							</div>
							<div class="col-auto my-auto">
								<?php echo wpautop($header_right_text); ?>
							</div>
						</div>
    				</div>

    				<div class="mainmenu">
    					<?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'nav')); ?>
    				</div>
