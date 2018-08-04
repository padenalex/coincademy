<?php /* Template Name: Contact static */ get_header(); ?>

<div class="max-width general-page">
    <section class="section">
        <div class="pure-g vmid max-width">
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <div class="title">
                    <span>Have Questions? Ideas?</span>
                    <h2>Get In Touch</h2>
                </div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repaatem.
                </p>
                <div class="contact-info">
                    <a href="mailto:contact@coincademy.com">contact@coincademy.com</a>
                </div>
            </div> 
        </div>
    </section>
</div>


        <!-- single page js / instead of registering functions -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
        <script>
            var scene = document.getElementById('scene');
            var parallaxInstance = new Parallax(scene);
        </script>

<?php get_footer(); ?>