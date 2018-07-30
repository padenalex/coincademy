<?php /* Template Name: Express Courses static */ get_header(); ?>

    <div class="max-width general-page">
        <div class="pure-g vmid">
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <div class="title">
                    <span>Delivered to your inbox</span>
                    <h2>Express Courses</h2>
                </div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repaatem.
                </p>
                <!-- Begin MailChimp Signup Form -->
                <div id="mc_embed_signup">
                <form action="https://claritysquared.us14.list-manage.com/subscribe/post?u=ff6674079e649d6b6a3db4ad9&amp;id=2e073ea0e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                    <h2>Get started today</h2>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" autofocus>
                </div>
                <div class="mc-field-group input-group">
                    <strong>Choose courses</strong>
                    <ul class="checkbox-list">
                        <li><input class="styled-checkbox" type="checkbox" value="1" name="group[6427][1]" id="mce-group[6427]-6427-0"><label for="mce-group[6427]-6427-0">Bitcoin</label></li>
                        <li><input class="styled-checkbox" type="checkbox" value="2" name="group[6427][2]" id="mce-group[6427]-6427-1"><label for="mce-group[6427]-6427-1">Ethereum</label></li>
                        <li><input class="styled-checkbox" type="checkbox" value="4" name="group[6427][4]" id="mce-group[6427]-6427-2"><label for="mce-group[6427]-6427-2">Monero</label></li>
                    </ul>
                </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ff6674079e649d6b6a3db4ad9_2e073ea0e9" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="green-btn green-btn-padding btn-large"></div>
                    </div>
                </form>
                </div>

                <!--End mc_embed_signup-->
            </div>
             <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 vmid" data-relative-input="true" data-hover-only="true"  data-pointer-events="true" id="scene">
              <a style="margin-left: 60%; opacity: .7;" data-depth="0.2" href="/course-category/bitcoin/" >
                  <div class="category-tile vmid">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bitcoin.png" class="category-tile-img" />
                      <span class="category-tile-title">BITCOIN</span>
                  </div>
                </a>
                <a style="margin-left: 5%; opacity: .8;" data-depth="0.2" href="/course-category/ethereum/">
                  <div class="category-tile category-tile-red vmid">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ethereum.png" class="category-tile-img" />
                      <span class="category-tile-title">ETHEREUM</span>
                  </div>
                </a>
                <a style="margin-left: 30%; margin-top: 20%;" data-depth="1" href="/course-category/monero/">
                  <div class="category-tile category-tile-green vmid">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/monero.png" class="category-tile-img" />
                      <span class="category-tile-title">MONERO</span>
                  </div>
                </a>
            </div>
        </div>
    </div>
        
        
		<!-- single page js / instead of registering functions -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
		<script>
    		var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene);
		</script>

<?php get_footer(); ?>
