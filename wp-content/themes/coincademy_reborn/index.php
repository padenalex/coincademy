<?php get_header(); ?>

	<header class="article-header <?php echo strtolower($object_terms->name); ?>">
        <div class="max-width">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3">
                    <h1 class="article-title" title="<?php _e( 'Latest Posts', 'html5blank' ); ?>"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
                    <!-- <button class="arrow-btn">Get started on your first crypto course</button>  -->
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
