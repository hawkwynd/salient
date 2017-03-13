<?php

/**
 * incsub_wiki post type template for
 * single posts (wiki) posts
 * -hawkwynd
 */

$action = isset( $_GET['action']) ? $_GET['action'] : false;

$FEUP   = new FEUP_User();
$UserID = $FEUP->Get_User_ID();
global $post;
get_header();

?>
<!-- single-incsub_wiki.php start-->

<div class="container-wrap <?php echo ($fullscreen_header == true) ? 'fullscreen-blog-header': null; ?> <?php if($blog_type == 'std-blog-fullwidth' || $hide_sidebar == '1') echo 'no-sidebar'; ?>">
	<div class="container main-content">
        <?php if( !$FEUP->Is_Logged_In() ){
            echo "<div class='content-inner'><h5>Please <a href='/'>LOG IN</a> to view this content.</h5></div>";
            echo "</div><!-- container-->";
            echo "</div><!-- container-wrap -->";
            get_footer();
            exit();
        }

include('tech-support-section.php');

    if(have_posts()) : while(have_posts()) : the_post();
       echo '<div class="row" rel="incsub_wiki_template">';

     /*
     * Here we check FEUP status, and we need to know if they have 'Editor' capabilities before
      * displaying the edit link. Since the field is a string comprised of the wp_title + ' Editor'
      * we'll inspect the title with appended ' Editor' and check if that word exists within the
      * field Name for our user, and if it does, then we know they're an editor and display the link
     */


       if($action === false){
        echo  substr( strtoupper($FEUP->Get_Field_Value( $post->post_title . ' Editor') ), 0,1)  == "Y" ? '<div class="wiki_editor_btn"><a href="'. get_permalink($post->ID) .'?action=edit">Edit '. $post->post_title . '</a> <span class="wiki_editor_btn"><a href="/agendas">Back to Agendas</a></span></div>' : '<div class="wiki_editor_btn"><a href="/agendas">Back to Agendas</a></div>';
       }else{
           echo '<div class="wiki_editor_btn"><a href="/agendas">Back to Agendas</a></div>';
       }

endwhile;
endif;
?>
  <!--- WIKI TEMPLATE CALL START -->
<?php

        echo '<div id="post-area" class="col span_9" rel="'.floatval(get_bloginfo('version')) .'" post-format="'. get_post_format() .'">';
        echo $action == false ? "<h3>" . $post->post_title. "</h3>" : '';

         if(have_posts()) : while(have_posts()) : the_post();
					
            if ( floatval(get_bloginfo('version')) < "3.6" ) {
                //old post formats before they got built into the core
                get_template_part( 'includes/post-templates-pre-3-6/entry', get_post_format() );
            } else {
                //WP 3.6+ post formats -- this one is the one we're using
                 get_template_part( 'includes/post-templates/entry', get_post_format() );
            }

         endwhile; endif;
    ?>
        <!--- WIKI TEMPLATE CALL END -->

        </div><!--/span_9-->
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->
	
<?php get_footer(); ?>

<!-- single-incsub_wiki.php end -->