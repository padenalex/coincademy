<?php /* Template Name: Course Catalog static */ get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<?php
	$object_terms = wp_get_object_terms($post->ID, 'course_cat')[0];
	?>
	
	<header class="course-header <?php echo strtolower($object_terms->name); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);";>
		<div class="gradient-cover"></div>
        <div class="max-width">
                <div class="title">
                	<a href="<?php echo get_term_link( $object_terms->slug, 'course_cat' ); ?>"><span><?php echo strtoupper($object_terms->name); ?> <?php if(has_term('express', 'course_tag')) { echo 'EXPRESS '; }?></span></a>
                    <h1 class="" title="<?php the_title(); ?>"><?php the_title(); ?></h1>
                    <div class="desc"><?php echo get_post_meta( get_the_ID(), 'excerpt', true ); ?></div>
                    <div class="meta-features">
                    	<?php if ($course->get('length')) {?>
                    	<span class="meta-feature">Duration: <?php echo $course->get('length'); ?></span>
                    	<?php }
                    	if ($course->get_difficulty()) {?>
                    	<span class="meta-feature">Difficulty: <?php echo $course->get_difficulty(); ?></span>
                    	<?php }?>
                    </div>
                    <?php do_action('coincademy_enroll_action'); ?>
                </div>
        </div>
    </header>

    <section class="section no-bottom-margin">
        <div class="pure-g vmid max-width">
            <div class="pure-u-1 pure-u-md-1-1 pure-u-lg-1-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo strtolower($object_terms->name); ?>.svg" class="category-image-icon" />
            </div>
            <div class="pure-u-1 pure-u-md-1-1 pure-u-lg-1-2">
                <div class="title">
                    <span><?php the_title(); ?></span>
                    <h2>Course Overview</h2>
                </div>
                <div class="short">
                    <?php the_content(); // Dynamic Content ?>
                </div>
            </div>

        </div>
    </section>

    <section class="section section-grey">
        <div class="pure-g vmid max-width">
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <div class="title">
                    <span><?php the_title(); ?></span>
                    <h2>Syllabus</h2>
                </div>
                <?php echo do_shortcode('[lifterlms_course_outline course_id=\"the_ID();\"]'); ?>
            </div>
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <img class="pure-img" src="<?php echo get_template_directory_uri(); ?>/img/header_cert.png">
            </div>
            <div class="pure-u-1 pure-u-md-1 pure-u-lg-1">
                <?php do_action('coincademy_enroll_action'); ?>
            </div>
        </div>
    </section>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article class="max-width content-section">

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
