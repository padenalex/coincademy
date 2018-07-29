<?php get_header(); ?>


	<header class="article-header general">
        <div class="max-width">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3">
                    <h1 class="article-title" title="<?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?>"><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
                </div>
            </div>
        </div>
    </header>

	<main role="main">
		<!-- section -->
		<section class="max-width content-section">

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
