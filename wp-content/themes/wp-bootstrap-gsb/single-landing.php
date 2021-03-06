<?php /* Template Name: Landing */ ?>
<?php get_header(); ?>
	<section id="primary" class="content-area w-100">
		<main id="main" class="site-main" role="main">
	<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content-landing', get_post_format() );
			the_post_navigation();
	endwhile; // End of the loop.
	?>

		</main><!-- #main -->
	</section><!-- #primary -->
<?php
get_sidebar();
get_footer();
