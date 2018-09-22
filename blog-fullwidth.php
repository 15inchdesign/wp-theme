<?php /* Template Name: Blog Page  */ get_header(); ?>
<main role="main">
	<div class="custom-headline">
		<h1 class="blog-headline"><?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-custom-heading-area')) ?></h1>
	</div>
	
	<!-- search form -->
	<div class="search-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('search-widget-area')) ?>
	</div>
	<!-- /search form -->
	<?php
	/*$news = new WP_Query( array(
	'post_type' => 'news',
	'orderby' => 'DESC',
	'posts_per_page' => 1,
	'ignore_sticky_posts' => 1,
	
	) );*/
	?>
	<section class="posts">
		
		<?php if( /*$news->*/have_posts() ) :  while( /*$news->*/have_posts() ) :
		/*$news->*/the_post(); ?>
		<!-- featured image -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<a class="post-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('', array('data-rjs' => '2')); // Declare pixel size you need inside the array ?>
		</a>
		<!-- /featured image -->
		<?php endif; ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<span class="date"><?php the_time('F  j, Y'); ?></span>
			<?php //the_title($post->post_content); //var_dump($post);?>
			<h1><?php the_title(); ?></h1>
			<div class="tags"><?php the_tags('', ''); ?></div>
			<br class="clear">
			<?php  html5wp_excerpt('html5wp_custom_post') ?>
			<br class="clear">
			<div class="post-tags">
				<span class="favs"><?php the_favorites_button($post_id, $site_id); ?><?php the_favorites_count(); ?><span class="text">favs</span></span>
				<br class="clear">
				<span class="comments"><i class="ic-comment"></i><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'unicorn' ), __( '1 comment', 'unicorn' ), __( '% comments', 'unicorn' )); ?></span>
			</div>
		</article>
		<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
		<?php else: ?>		
		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<!-- /article -->
		
		<?php endif; ?>
	</section>

	<!-- section article-listing -->
	 <section class="article-listing">
	 	<?php get_template_part( 'temp-parts/list-articles'); ?>
	 		<?php get_template_part('pagination'); ?>	
	 </section>
	<!-- /section article-listing -->

</main>
<?php get_footer(); ?>