<?php /* Template Name: Homepage static */ get_header(); ?>

    <header class="homepage section-first-no-header">
        <div class="max-width">
            <div class="pure-g vmid">
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <h1 class="header-title">Learn everything you need to know about <strong>cryptocurrency</strong>.</h1>
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
                    Using Coincademy's unique learning environment we'll walk you through the latest in cryptocurrency and blockchain technology. Our courses are built to accomodate users of all backgrounds and experience levels.
                    </p>
                </div> 
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 vmid" data-relative-input="true" data-hover-only="true"  data-pointer-events="true" id="scene">
                  <a style="margin-left: 60%; opacity: .7;" data-depth="0.2" href="/course-category/investing/">
                      <div class="category-tile category-tile-green vmid">
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
                      <div class="category-tile category-tile-red vmid">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/developer-category.png" class="category-tile-img" />
                          <span class="category-tile-title">DEVELOPERS</span>
                      </div>
                    </a>
                </div>
                <div class="pure-u-1 vmid ex-st">
                    <div class="pure-u-1 pure-u-lg-1-2 pure-u-md-1-2 type-tile">
                         <div class="type-tile-bg type-tile-express">
                            <h3><strong><span>Express courses <img class="express-icon" src="<?php echo get_template_directory_uri(); ?>/img/express_general.png"></span></strong></h3>
                            <p>In a rush? Get started with our daily express courses. Each day, we'll send you a customized email with the most up-to-date information regarding cryptocurrency and blockchain technology. </p>
                            <a class="green-btn" href="/express-courses/">BROWSE COURSES</a>
                        </div>
                    </div>
                    <div class="pure-u-1 pure-u-lg-1-2 pure-u-md-1-2 type-tile">
                        <div class="type-tile-bg type-tile-standard">
                            <h3><strong><span>Standard courses</span></strong></h3>
                            <p>For those of you who want to gain a more in depth understanding of these topics, jump into one of our full fledged interactive courses. We'll walk you through everything you need to know, step by step.</p>
                            <a class="green-btn standard-green-btn" href="/standard-courses/">BROWSE COURSES</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section section-grey">
        	<div class="pure-g vmid max-width no-side-padding">
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 section-desc">
                    <div class="title">
                        <span>REWARDING EDUCATION</span>
                        <h2>Expand your horizons</h2>
                    </div>
                    <p>
                    In a time of rapidly evolving technology, the traditional methods for learning have become obsolete. Learning is becoming easier every day, with continuously tailored educational experiences. At Coincademy, we embrace this philosophy and aim to provide the most effective means for covering new technology. 
                    </p>
                    <a href="/standard-courses" class="green-btn green-btn-padding" style="margin-top: 20px;padding-left: 40px; padding-right: 40px;">SIGN UP FOR FREE TODAY</a>
                </div> 
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 section-desc">
                    <ul class="features-list">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Interactive environment</span><span class="sub-head">Experience sending your first transaction or smart contract.</span></div></li>
                    	
                    	
                    	<li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Peer networking</span><span class="sub-head">Discuss relevant topics and make new connections.</span></div></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Self-paced learning</span><span class="sub-head">Cover topics at your own rate that works for you.</span></div></li>
                    	<li><img src="<?php echo get_template_directory_uri(); ?>/img/cert-feature.png" class="feature-img"><div><span>Free resources</span><span class="sub-head">Utilize our network of free libraries, tools, and resources.</span></div></li>
                    	
                    </ul>
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
