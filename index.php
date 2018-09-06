<?php get_header(); ?>
<?php //if ( is_home() && ! is_front_page() ) : ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( '', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
<?php //endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
