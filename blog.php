<?php /* Template Name: Blog Page  */ get_header(); ?>
<main role="main">

	<h1 class="blog-headline"><?php the_title(); ?></h1>

	<!-- section -->
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- search form -->
		    <div class="search-widget">
		       <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('search-widget-area')) ?>
	        </div>
		<!-- search form -->
		
		<!-- content -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

			    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array()); // Declare pixel size you need inside the array ?>
			</a>

			<?php endif; ?>

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
