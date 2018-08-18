<?php /* Template Name: Express Courses static */ get_header(); ?>

    <div class="max-width general-page">
        <div class="pure-g vmid">
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <div class="title">
                    <span>Get Started With</span>
                    <h2>Express Courses <img src="<?php echo get_template_directory_uri(); ?>/img/express_general.png"></h2>
                </div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repaatem.
                </p>
            </div>
             <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 vmid">
                <div class="sidebar">
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup" class="express-course-email-signup">
                    <form action="https://coincademy.us17.list-manage.com/subscribe/post?u=47b89435a286291726ebaf0ea&amp;id=0b0e7385e0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <h2>Delivered to your email</h2>
                        <p>Sign up to receive an express course delivered to your email each week!</p>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" autofocus>
                    </div>
                    <div style="display: none;" class="mc-field-group input-group">
                        <strong>Group </strong>
                        <ul><li><input type="checkbox" value="1" name="group[8119][1]" id="mce-group[8119]-8119-0" checked><label for="mce-group[8119]-8119-0">Express Courses</label></li>
                        </ul>
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_47b89435a286291726ebaf0ea_0b0e7385e0" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="green-btn green-btn-padding btn-large"></div>
                        </div>
                    </form>
                    </div>

                    <!--End mc_embed_signup-->
                </div>
            </div>
            <div class="pure-u-1 pure-u-md-1-1 pure-u-lg-1-1">
                <?php echo do_shortcode('[lifterlms_course_outline course_id="404"]'); ?>
            </div>
        </div>
        


    </div>

    <?php get_template_part( 'components/template', 'standard-courses-footer' ); ?>
        
<?php get_footer(); ?>
