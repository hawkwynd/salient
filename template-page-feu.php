<?php
/**
 * Template Name: Standard Layout
 */

$FEUP = new FEUP_User;

get_header();

nectar_page_header($post->ID);

//full page
$fp_options = nectar_get_full_page_options();
extract($fp_options);

?>

<div class="container-wrap" rel="<?php echo $post->ID;?>">
	
	<div class="<?php if($page_full_screen_rows != 'on') echo 'container'; ?> main-content">

    <?php

        // Trump wall for illegal immigrants
        if( !$FEUP->Is_Logged_In() ){
        echo "<div class='content-inner' style='height:500px;'><h5>Please <a href='/'>LOG IN</a> to view this content.</h5></div>";
        echo "</div><!-- container-->";
        echo "</div><!-- container-wrap -->";
        get_footer();
        exit();
    }

    $page_id = get_the_ID();
        /**
         * Unwanted pages to filter displaying tech support link and
         * sections.
         * 2053 - Logout
         * 4277 - Successful Password Reset
         * 4262 - Confirm Password
         * 4346 - company-resources2 (fix soon)
         */

        $unwanted = array( 2053, 4262, 4277, 4346 );

        if( is_front_page() === false ): // is not home page?
          if(!in_array($page_id, $unwanted)): // id of logout page?
                include('tech-support-section.php');
          endif;
        endif;
        ?>


    <div class="row">
    <div id="fws_58b5a5851b908"  data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-content vc_row-o-equal-height vc_row-flex  vc_row-o-content-top standard_section "
         style="padding-top: 0px; padding-bottom: 0px; ">
        <div class="row-bg-wrap"><div class="row-bg"  style="" data-color_overlay="" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div></div>
        <div class="col span_12 dark left">



	    <div style=" color: #828282;" class="vc_col-sm-3 wpb_column column_container vc_column_container col padding-3-percent" data-using-bg="true" data-bg-cover="" data-padding-pos="all" data-has-bg-color="true" data-bg-color="#e1e1e1" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
             <div class="vc_column-inner">
                <div class="wpb_wrapper">
	                <div class="wpb_text_column wpb_content_element  vc_custom_1483458152805" >
                        <div class="wpb_wrapper"><div id="sidebar">
                            <?php


                            /**
                             * Birthdays for the current month
                             */
                            echo '<div id="birthdays" style="margin-bottom: 0;">';


                                    echo "<h4>" . date('F'). " Employee Birthdays</h4>";

                                    foreach($FEUP->current_birthdays() as $name => $bday){
                                        echo "<div class='FEU_row'><span class='name'>". $name . "</span><span class='date'>" . $bday . "</span></div>";
                                        echo "<div class='clear'></div>";
                                    }

                            /**
                             * Anniversaries for the current month
                             */
                            echo '<div id="anniversaries" style="margin-top: 30px; margin-bottom: 0;">';
                                echo "<h4>" . date('F'). " Anniversaries</h4>";

                                foreach($FEUP->current_anniversaries() as $name => $adate){
                                    echo "<div class='FEU_row'><span class='name'>" . $name . "</span>";
                                    echo "<span class='date'>" . date('m/d/Y', strtotime($adate) ) . "</span>";
                                    echo "</div>";
                                    echo "<div class='clear'></div>";
                                }

                            ?>
                            </div>
                            <!-- end sidebar -->

                            <div id="sidebar-social" style="width: 100%; margin-top: 30px;">
                            <div style="width: 33%; float: left;">
                                <a href="https://www.facebook.com/ArgentFinancial?rf=139044939475959">
                                    <img style="display: block; margin: auto;" src="/wp-content/uploads/2016/09/facebook.png " alt="facebook " />
                                </a>
                            </div>
                            <div style="width: 33%; float: left;">
                                <a href="https://www.instagram.com/argentfinancial/">
                                    <img style="display: block; margin: auto;" src="/wp-content/uploads/2016/09/instagram.png " alt="instagram " />
                                </a>
                            </div>
                            <div style="width: 33%; float: left;">
                                <a href="https://twitter.com/ArgentFinancial">
                                    <img style="display: block; margin: auto;" src="/wp-content/uploads/2016/09/twitter.png " alt="twitter " />
                                </a>
                            </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>

<!-- right column content begins -->

        <div class="vc_col-sm-9 wpb_column vc_column_container col padding-5-percent"  style="overflow: auto;padding-top: 83px; padding-bottom: 83px;">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">

                    <!-- wpb_row -->

                    <div id="fws_58b5a581a1c19" class="wpb_row vc_row-fluid vc_row standard_section" style="padding-top: 0px; padding-bottom: 0px; ">
                        <div class="row-bg-wrap"><div class="row-bg" style=""></div> </div>
                        <div class="col span_12  left">
                            <div class="vc_col-sm-4 category-links wpb_column column_container vc_column_container col no-extra-padding instance-6" data-padding-pos="all" data-has-bg-color="false" data-bg-opacity="1" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1480440107828 category-links">
                                            <div class="wpb_wrapper">
                                            <?php
                                                /**
                                                 * Display child pages links for this page
                                                 */
                                                global $post;
                                                $current_page_parent = ( $post->post_parent ? $post->post_parent : $post->ID );
                                                $args = array(
                                                        'child_of'      => $current_page_parent,
                                                        'post_type'     => 'page',
                                                        'post_status'   => 'publish',
                                                        'sort_order'    => 'asc',
                                                        'sort_column'   => 'post_title'
                                                );
                                                 $pages = get_pages($args);
                                                echo "<p>";
                                                // List links, set styling for current page.
                                                foreach($pages as $mypage){
                                                    echo '<a ';
                                                    echo $mypage->ID === $post->ID ? 'id=current-page' : '' ;
                                                    echo ' href="' . get_page_link( $mypage->ID ).'">'. $mypage->post_title . '</a><br/>';
                                                }
                                                echo "</p>";
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                         <div class="vc_col-sm-8 pdf-links wpb_column column_container vc_column_container col no-extra-padding instance-7" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <?php
                                            /**
                                             * Display content of the page
                                             */
                                            if(have_posts()) : while(have_posts()) : the_post();
                                                the_content();

                                            endwhile;
                                            endif;
                                         ?>
                                   </div>
                                </div>
                            </div>
                        </div></div>
                </div>
            </div>
        </div>

<?php
        //fullscreen rows
        if($page_full_screen_rows == 'on') echo '<div id="nectar_fullscreen_rows" data-animation="'.$page_full_screen_rows_animation.'" data-row-bg-animation="'.$page_full_screen_rows_bg_img_animation.'" data-animation-speed="'.$page_full_screen_rows_animation_speed.'" data-content-overflow="'.$page_full_screen_rows_content_overflow.'" data-dot-navigation="'.$page_full_screen_rows_dot_navigation.'" data-footer="'.$page_full_screen_rows_footer.'" data-anchors="'.$page_full_screen_rows_anchors.'">';

				// if(have_posts()) : while(have_posts()) : the_post();
                //        the_content();
	    		//	 endwhile;
                // endif;
				
			if($page_full_screen_rows == 'on') echo '</div>'; ?>
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>