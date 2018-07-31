<?php /* Template Name: Standard Courses Template */ get_header(); ?>

    <div class="max-width general-page">
        <div class="pure-g vmid">
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <div class="title">
                    <span>Learn</span>
                    <h2>Standard Courses</h2>
                </div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repaatem.
                </p>
            </div>
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/img/header_cert.png">
            </div>
            <div class="pure-u-1 pure-u-md-1-1 pure-u-lg-1-1">
                <h2>General</h2>
                <h3>Bitcoin</h3>
                <?php echo do_shortcode("[lifterlms_courses category=\"bitcoin\" order=\"ASC\" orderby=\"date\"]"); ?>
                <h3>Ethereum</h3>
                <?php echo do_shortcode("[lifterlms_courses category=\"ethereum\" order=\"ASC\" orderby=\"date\"]"); ?>
                <h3>Monero</h3>
                <?php echo do_shortcode("[lifterlms_courses category=\"monero\" order=\"ASC\" orderby=\"date\"]"); ?>
                <h3>Mining</h3>
                <?php echo do_shortcode("[lifterlms_courses category=\"mining\" order=\"ASC\" orderby=\"date\"]"); ?>
                <h2>Investing</h2>
                <?php echo do_shortcode("[lifterlms_courses category=\"investing\" order=\"ASC\" orderby=\"date\"]"); ?>
                <h2>Developer</h2>
                <?php echo do_shortcode("[lifterlms_courses category=\"developer\" order=\"ASC\" orderby=\"date\"]"); ?>
            </div>
        </div>
    </div>

    <?php get_template_part( 'templates/template', 'express-courses-footer' ); ?>
        
        <!-- single page js / instead of registering functions -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
        <script>
            var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene);
        </script>

<?php get_footer(); ?>
