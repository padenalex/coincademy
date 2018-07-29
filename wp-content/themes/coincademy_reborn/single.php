<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<header class="article-header">
        <div class="max-width">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3">
                    <h1 class="article-title" title="<?php the_title(); ?>"><?php the_title(); ?></h1>
                    <!-- <button class="arrow-btn">Get started on your first crypto course</button>  -->
                </div>
            </div>
        </div>
    </header>
    


	<main role="main">
    	<article id="post-<?php the_ID(); ?>" <?php post_class('max-width content-section'); ?>>
        	<?php the_content(); // Dynamic Content ?>
        	
        	<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
    
    			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
        </article>
	<section>




	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
