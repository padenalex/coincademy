<?php /* Template Name: About static */ get_header(); ?>

    <div class="max-width section-first-no-header">
        <div class="pure-g vmid">
            <div class="pure-u-1 pure-u-md-1-1 pure-u-lg-1-1">
                <blockquote>
                    <p>Our goal is to provide an unparalleled financial education at zero cost to users worldwide.</p>
                    <p class="cite"> – The Coincademy Team</p>
                </blockquote>

            </div>
        </div>
    </div>

    <section class="section section-grey">
    <div class="pure-g vmid max-width no-side-padding">
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 section-desc">
            <div class="title">
                <span>Why we built Coincademy</span>
                <h2>Our Story</h2>
            </div>
            <p>
            At Coincademy our goal has never been investmenting or profit, but rather working to usher in a new world financial system. It is through this philosophy that we decided to open an all inclusive academy for cryptocurrency and blockchain development. We believe that because this technology is so radically different than previous financial innovations we feel it necessary to educate the average user on why the technology is important without overwhelming or complicating.
            </p>
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
    </section>
        <section class="section">
        <div class="pure-g vmid max-width">
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <div class="title">
                    <span>Who We Are</span>
                    <h2>The Coincademy Team</h2>
                </div>
                <p>
                As a team, Coincademy members have been actively engaged in cryptocurrency and blockchain technology since early 2011.
                </p>
            </div>
        </div>
        <div class="pure-u-1 vmid ex-st">
            <div class="pure-u-1 pure-u-lg-1-3 pure-u-md-1-3 type-tile">
                <div class="type-tile-bg  type-tile-standard">
                    <span>Mark Verhill</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="pure-u-1 pure-u-lg-1-3 pure-u-md-1-3 type-tile">
                <div class="type-tile-bg  type-tile-standard">
                    <span>Alex Paden</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
            </div>
            <div class="pure-u-1 pure-u-lg-1-3 pure-u-md-1-3 type-tile">
                <div class="type-tile-bg  type-tile-standard">
                    <span>Davis Smith</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
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
