<?php
/**
 * Default PAGE template.
 */


/* Begin processing info now */

get_header();
nectar_page_header($post->ID);

//full page
$fp_options = nectar_get_full_page_options();
extract($fp_options);
?>

<div class="container-wrap" >
	<div class="<?php if($page_full_screen_rows != 'on') echo 'container'; ?> main-content">

        <?php
            $page_id = get_the_ID();
        /**
         * Unwanted pages to filter displaying tech support link and
         * sections.
         * 2053 - Logout
         * 4277 - Successful Password Reset
         * 4262 - Confirm Password
         */

        $unwanted = array( 2053, 4262, 4277, 4346 );

        if( is_front_page() == false ): // is not home page?
          if(!in_array($page_id, $unwanted)): // id of logout page?
              include('tech-support-section.php');
            endif;
        endif;
        ?>
		<div class="row">
			
			<?php 
			 global $bp;
			  if($bp && !bp_is_blog_page()) echo '<h1>' . get_the_title() . '</h1>';
			
			 //fullscreen rows
			 if($page_full_screen_rows == 'on') echo '<div id="nectar_fullscreen_rows" data-animation="'.$page_full_screen_rows_animation.'" data-row-bg-animation="'.$page_full_screen_rows_bg_img_animation.'" data-animation-speed="'.$page_full_screen_rows_animation_speed.'" data-content-overflow="'.$page_full_screen_rows_content_overflow.'" data-dot-navigation="'.$page_full_screen_rows_dot_navigation.'" data-footer="'.$page_full_screen_rows_footer.'" data-anchors="'.$page_full_screen_rows_anchors.'">';

				 if(have_posts()) : while(have_posts()) : the_post(); 

                    the_content();
             ?>

                 <?php
				 endwhile;
                 endif;
				
			if($page_full_screen_rows == 'on') echo '</div>'; ?>
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>