<?php if ( function_exists('dynamic_sidebar')) {
	
	global $post;
	global $woocommerce; 

	$posttype = get_post_type($post);
	
	if( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post') ) {

		//dynamic_sidebar('Blog Sidebar');

        echo '<style>
                .FEU_row{display:block; clear:both;}
                .FEU_row .date{float:right}
                .FEU_row .name{float: left}
                #birthdays, #anniversaries{font-weight: 700;color: #646464;}
            </style>';
                            /**
                             * Birthdays for the current month
                             */
                            $FEUP = new FEUP_User;
                            echo '<div id="birthdays" style="margin-bottom: 0;">';
                            echo "<h4>" . date('F'). " Employee Birthdays</h4>";

                            foreach($FEUP->current_birthdays() as $name => $bday){
                                echo "<div class='FEU_row'><span class='name'>". $name . "</span><span class='date'>" . $bday . "</span></div>";
                                echo "<div class='clear'></div>";
                            }
                            echo '</div>';
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
                            echo '</div>';
        ?>
        <div id="sidebar-social" style="width: 100%; margin-top: 30px;">
            <div style="width: 33%; float: left;">
                <a href="https://www.facebook.com/ArgentFinancial?rf=139044939475959" ">
                <img src="/wp-content/uploads/2016/09/facebook.png " alt="facebook " style="display: block; margin: auto; " />
                </a>
            </div>
            <div style="width: 33%; float: left; ">
                <a href="https://www.instagram.com/argentfinancial/" >
                    <img src="/wp-content/uploads/2016/09/instagram.png " alt="instagram " style="display: block; margin: auto; " />
                </a>
            </div>
            <div style="width: 33%; float: left; ">
                <a href="https://twitter.com/ArgentFinancial">
                    <img src="/wp-content/uploads/2016/09/twitter.png " alt="twitter " style="display: block; margin: auto; "/>
                </a>
            </div>
        </div><!-- sidebar-social -->
<?php

	}
	elseif($woocommerce && is_shop() || $woocommerce && is_product_category() || $woocommerce && is_product_tag() || $woocommerce && is_product()){
		dynamic_sidebar('WooCommerce Sidebar');
	}
	else {
		dynamic_sidebar('Page Sidebar');
	}
	
} ?>
    
