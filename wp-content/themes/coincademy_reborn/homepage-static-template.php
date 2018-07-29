<?php /* Template Name: Homepage static */ get_header(); ?>

    <header class="homepage general-page">
        <div class="max-width">
            <div class="pure-g vmid">
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <span class="header-title">This is a placeholder for <strong>some cool ass title</strong></span>
                    <a class="arrow-btn" href="/standard-courses/">Get started on your first crypto course</a>
                </div>
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/img/header_cert.png">
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="max-width section no-side-padding">
        	<div class="pure-g vmid">
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 section-desc">
                    <div class="title">
                        <span>CHOOSE YOUR PATH</span>
                        <h2>Custom-tailored courses</h2>
                    </div>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repaatem.
                    </p>
                </div> 
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 vmid" data-relative-input="true" data-hover-only="true"  data-pointer-events="true" id="scene">
                  <a style="margin-left: 60%; opacity: .7;" data-depth="0.2" href="/course-category/investing/">
                      <div class="category-tile investor vmid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/investor-category.png" class="category-tile-img" />
                          <span class="category-tile-title">INVESTORS</span>
                      </div>
                    </a>
                    <a style="margin-left: 5%; opacity: .8;" data-depth="0.2" href="/standard-courses/">
                      <div class="category-tile vmid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/general-category.png" class="category-tile-img" />
                          <span class="category-tile-title">GENERAL</span>
                      </div>
                    </a>
                    <a style="margin-left: 30%; margin-top: 20%;" data-depth="1" href="/course-category/developer/">
                      <div class="category-tile developer vmid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/developer-category.png" class="category-tile-img" />
                          <span class="category-tile-title">DEVELOPERS</span>
                      </div>
                    </a>
                </div>
                <div class="pure-u-1 vmid ex-st">
                    <div class="pure-u-1 pure-u-lg-1-2 pure-u-md-1-2 type-tile">
                        <a href="/express-courses/"><div class="type-tile-bg type-tile-express">
                            <span>Express courses <img src="<?php echo get_template_directory_uri(); ?>/img/express_general.png"></span>
                            <p>Express courses in a few words. Keep it simple. Express courses in a f express courses in a few words. Keep it simple.</p>
                        </div></a>
                    </div>
                    <div class="pure-u-1 pure-u-lg-1-2 pure-u-md-1-2 type-tile">
                        <a href="/standard-courses/"><div class="type-tile-bg type-tile-standard">
                            <span>Standard courses</span>
                            <p>Express courses in a few words. Keep it simple. Express courses in a f express courses in a few words. Keep it simple.</p>
                        </div></a>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section section-grey">
        	<div class="pure-g vmid max-width no-side-padding">
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 section-desc">
                    <div class="title">
                        <span>CHOOSE YOUR PATH</span>
                        <h2>Custom-tailored courses</h2>
                    </div>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repaatem.
                    </p>
                    <a href="/standard-courses" class="green-btn green-btn-padding" style="margin-top: 20px;padding-left: 40px; padding-right: 40px;">SIGN UP FOR FREE TODAY</a>
                </div> 
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 section-desc">
                    <ul class="features-list">
                    	<li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Certificates wowzer</span><span class="sub-head">We will keep this free cause people are jews and we like jews. lol nope</span></div></li>
                    	<li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Certificates wowzer</span><span class="sub-head">We will keep this free cause people are not too bright</span></div></li>
                    	<li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Certificates wowzer</span><span class="sub-head">We will keep this free cause people are not too bright</span></div></li>
                    	<li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Certificates wowzer</span><span class="sub-head">We will keep this free cause people are not too bright</span></div></li>
                    	<li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Certificates wowzer</span><span class="sub-head">We will keep this free cause people are not too bright</span></div></li>
                    </ul>
                </div> 
            </div>
        </section>
        
        <section class="section max-width">
            <div class="title">
                <span>CHOOSE YOUR PATH</span>
                <h2>Custom-tailored courses</h2>
            </div>
			<?php echo do_shortcode('[lifterlms_courses category="zz-featured" posts_per_page="-1"]'); ?>
        </section>
        
        <section class="gradient-general" style="padding: 40px 20px;">
        	<div class="max-width">
        		<div class="cta-hold vmid" style="padding: 0px; background: none;">
                    <div class="pure-u-1" style="text-align: center; margin-bottom: 40px;">
                        <div class="heading">This is an example cta</div>
                        <div class="subheading">MOre example rejah</div>
                    </div>
                    <div class="pure-u-1 buttons" style="margin-top: 0px !important;">
                        <a href="#" class="cta-opaque"> wowzer </a>
                        <a href="#" class="cta-white">wowzer indeed</a>
                    </div>
            	</div>
        	</div>
        </section>
        
        
		<!-- single page js / instead of registering functions -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
		<script>
    		var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene);
		</script>

<?php get_footer(); ?>
