<?php
/**
 * Template Name: Directories
 */

$FEUP = new FEUP_User;

get_header();

nectar_page_header($post->ID);

//full page
$fp_options = nectar_get_full_page_options();
extract($fp_options);

?>
<style>
   .tHead td{
        background-color: rgba(30, 41, 100, 0.56) !important;
        color: #fff !important;
        line-height: 11px !important;
        font-style: italic !important;
        font-size: 11px !important;
        text-align: left !important;
        padding: 5px 10px !important;

    }
    .testy{
        background-color: #d1d1d1;
    }

</style>

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
     <div class="vc_col-sm-8 pdf-links wpb_column column_container vc_column_container col no-extra-padding instance-7" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
         <div>

             <?php
             /**
              * Display child pages links for this page's parent
              */
            /*
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
             echo "<ul class='breadcrumb' style='margin-left:0; margin-bottom:0;'>";
             // List links, set styling for current page.
            foreach($pages as $mypage){
                 echo '<li><a ';
                 echo $mypage->ID === $post->ID ? 'id=current-page' : '' ;
                 echo ' href="' . get_page_link( $mypage->ID ).'">'. $mypage->post_title . '</a></li>';
             }
             echo "</ul>";
            */
             ?>

         </div>

                <div class="vc_column-inner" >
                    <div class="wpb_wrapper" >
                        <table width="100%" cellspacing="0" cellpadding="0" style="margin: 12px 0;">
                        <tbody>
                        <?php

                        /**
                         * Display Directory of Users Grouped by Location
                         */

                        $data = $FEUP->EWD_FEUP_Get_All_Users();

                        foreach($data as $key => $office){

                            echo "<tr><td colspan='4' valign='top' bgcolor='#d1d1d1'><h5>". $key ."</h5></td></tr>";
                            echo "<tr class='tHead'><td>Name</td><td>Designation</td><td>Phone</td><td>Email</td></tr>";

                            foreach($office as $userID => $UserDataPak){
                                    echo "<tr>";
                                    echo "<td align='left' valign='top' width='20%'>".  $UserDataPak['Name'] . "</td>";
                                    echo "<td align='left' valign='top' width='20%'>". $UserDataPak['Designation'] . "</td>";
                                    echo "<td align='left' valign='top' width='20%'>". $UserDataPak['Phone'] . "</td>";
                                    echo "<td align='left' valign='top' width='20%'><a href='mailto:". $UserDataPak['Email'] . "'>". $UserDataPak['Email'] ."</a></td>";
                                    echo "</tr>" . PHP_EOL;
                                }
                            }
                        ?>
                        </tbody>
                        </table>

                        <br /><br />

                   </div>
                </div>
            </div>
        </div>
    </div>
    </div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>