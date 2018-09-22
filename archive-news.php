



<?php get_header(); /* Single posts view */ ?>
<main role="main">
	<h1 class="blog-headline"><?php the_title(); ?></h1>

	<!-- section -->
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<!-- content -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			

			    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				  <?php the_post_thumbnail('', array('data-rjs' => '2')); // Declare pixel size you need inside the array ?>
			</a>
		

			<?php endif; ?>
			
			 <?php the_content(); ?>

			<br class="clear">

			<?php edit_post_link(); ?>
		</article>
		<!-- /content -->

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

<?php get_footer(); ?>