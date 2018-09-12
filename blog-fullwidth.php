<?php /* Template Name: Blog Page  */ get_header(); ?>
<main role="main">
	<h1 class="blog-headline"><?php wp_title(''); ?></h1>
       
       	<!-- search form -->
		<div class="search-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('search-widget-area')) ?>
		</div>	
	<!-- /search form -->
	
	<section class="posts">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- featured image -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="post-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('', array('data-rjs' => '2')); // Declare pixel size you need inside the array ?>
			</a>
			<?php endif; ?>

		     <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			 <span class="date"><?php the_time('F  j, Y'); ?></span>

				<div class="tags"><?php the_tags('', ''); ?></div>
				

			    <?php the_content(); ?>

			<br class="clear">

		</article>
		<br class="clear">
		<?php edit_post_link(); ?>
		
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
