<?php /* Template Name: Dashboard static */ get_header(); ?>

<div class="max-width general-page">
        <div class="pure-g vmid">
            <div class="pure-u-1 pure-u-md-1-1 pure-u-lg-1-1">
                <?php echo do_shortcode('[lifterlms_my_account]'); ?>
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