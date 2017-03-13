<!-- tech-support section <?php echo $page_id; ?> -->

<div id="tech-support" data-midnight="" data-bg-mobile-hidden="" class="row" style="text-align:center;padding-top: 15px; padding-bottom: 0px;">
    <div class="row-bg-wrap">
        <div class="row-bg" style=""></div>
    </div>
    <div class="col span_12  left">
        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding instance-3"
             data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color=""
             data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p><span id="tech-support-question">Are you on the phone with a technician now?</span>
                                <a id="on-phone" class="technician-buttons">yes</a><a id="not-on-phone" class="technician-buttons">no</a>
                                <a id="tech-support-go-back" class="technician-buttons">Cancel</a>
                            </p>
                        </div>
                    </div>
                    <div class="divider-wrap"><div style="height: 60px;" class="divider"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- download link section -->
<div id="download-lmi-rescue-link" data-midnight="" data-bg-mobile-hidden="" class="row" style="text-align:center;padding-top: 15px; padding-bottom: 0px;">
    <div class="row-bg-wrap">
        <div class="row-bg" style=""></div>
    </div>
    <div class="col span_12  left">
        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding instance-4" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p><a id="download-lmi-rescue" class="technician-buttons" href="/wp-content/uploads/2016/09/LMIRescue.pkg_.zip">Download LMI Rescue</a>
                                <a id="download-go-back" class="technician-buttons">Cancel</a>
                            </p>
                        </div>
                    </div>
                    <div class="divider-wrap">
                        <div style="height: 60px;" class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tech-support-contact-form section -->
<div id="tech-support-contact-form" data-midnight="" data-bg-mobile-hidden="" class="row" style="margin: auto 30%;padding-top: 15px; padding-bottom: 0px;width:40%;float:left;">
    <div class="row-bg-wrap">
        <div class="row-bg" style=""></div>
    </div>
    <div class="col span_12  left">
        <div class="vc_col-sm-12 wpb_column column_container vc_column_container col no-extra-padding instance-5"
             data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
             data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">

            <?php //echo do_shortcode( '[contact-form-7 id="2722" title="Contact form 1"]'); ?>
            <div>Some information about this form will populate here, for now, it's not working.</div>
            <form name="channel1928520474" action="https://secure.logmeinrescue.com/Customer/Download.aspx" method="post">
                <table>
                    <tr><td>Please enter your name: </td><td><input type="text" name="name" maxlength="64" /></td></tr>
                    <tr><td>Your telephone Number: </td><td><input type="text" name="comment1" maxlength=512" /></td></tr>
                    <tr style="vertical-align: top;"><td>Description of Problem:</td><td><textarea name="description" cols=40 rows=10></textarea></td></tr>
                </table>
                <input type="submit" value="Rescue Me" />
                <input type="hidden" name="EntryID" value="1928520474" />
                <input type="hidden" name="tracking0" maxlength="64" /> <!-- optional -->
                <input type="hidden" name="language" maxlength="5" /> <!-- optional -->
            </form>


            <a id="cancel-contact-form" class="technician-buttons">Cancel</a>
        </div>
    </div>
</div>