<?php get_header(); if(have_posts()) : while(have_posts())  : the_post(); 
    if(get_post_meta($post->ID, 'ppm_quickstart_page_options', true)) {
        $page_meta = get_post_meta($post->ID, 'ppm_quickstart_page_options', true);
    } else {
        $page_meta = array();
    }



    if( function_exists( 'kc_is_using' ) && kc_is_using() ) {
        $king_composer_used = true;
        $page_inner_class = 'internal-content-kc';
    } else {
        $king_composer_used = false;
        $page_inner_class = 'internal-content-default';
    }
?> 



    <div class="internal-content-wrap <?php echo $page_inner_class; ?>">
        <?php if($king_composer_used == false) : ?>
        <h2 class="internal-page-title"><?php the_title(); ?></h2>
        <?php endif; ?>

        <?php if(empty(get_the_content())) : ?>
            <div class="row">
                <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type'=> 'page', 'post_parent' => $post->ID );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                 
                <div class="col-lg-3">
                    <a class="boxed-btn parent-page-btn" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i> <?php the_title(); ?></a>
                </div>
                <?php endforeach; wp_reset_query(); ?>
            </div>
        <?php else : ?>
            <?php the_content(); ?>
        <?php endif; ?>

        
    </div>

<?php endwhile; endif; get_footer(); ?>