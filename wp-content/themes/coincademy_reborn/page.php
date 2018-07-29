<?php get_header(); ?>

	<header class="article-header general">
        <div class="max-width">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3">
                    <h1 class="article-title" title="<?php the_title(); ?>"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </header>

	<main role="main">
		<!-- section -->
		<section class="max-width content-section">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
