<?php
/**
 * Template for all single courses in a category
 *
 * utilized by both courses and memberships
 *
 * @author 		LifterLMS
 * @package 	LifterLMS/Templates
 * @since       1.0.0
 * @version     3.14.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<?php get_header( 'llms_loop' ); ?>

<?php do_action( 'lifterlms_before_main_content' ); ?>

<?php if ( apply_filters( 'lifterlms_show_page_title', true ) ) : ?>

	<header class="article-header <?php ob_start();
	lifterlms_page_title();
	$title = ob_get_contents();
	ob_end_clean();
	echo strtolower($title);
	?>">
        <div class="max-width">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3 title">
                	<span>CATEGORY</span>
                    <h1 class="article-title" title="<?php lifterlms_page_title(); ?>"><?php lifterlms_page_title(); ?></h1>
                </div>
            </div>
        </div>
    </header>

<?php endif; ?>

<?php do_action( 'lifterlms_archive_description' ); ?>

<section class="max-width content-section">
<?php
	/**
	 * lifterlms_loop
	 * @hooked lifterlms_loop - 10
	 */
	do_action( 'lifterlms_loop' );
?>
</section>

<?php do_action( 'lifterlms_after_main_content' ); ?>
<?php get_template_part( 'templates/template', 'express-courses-footer' ); ?>

<?php do_action( 'lifterlms_sidebar' ); ?>

<?php get_footer(); ?>
