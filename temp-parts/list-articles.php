
	<?php
	$news_list = new WP_Query( array(
	'post_type' => 'news',
	'orderby' => 'ASC',
	'posts_per_page' => 6,
	'ignore_sticky_posts' => 1,
	
	) );
	?>

	<!-- article grid -->
	<div class="articles">
		<?php if( $news_list->have_posts() ) :  while( $news_list->have_posts() ) :
		$news_list->the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- featured image -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<a class="post-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('', array('data-rjs' => '2')); // Declare pixel size you need inside the array ?>
		</a>

		<?php endif; ?>
		<!-- /featured image -->

			<span class="date"><?php the_time('F  j, Y'); ?></span>
			<?php //the_title($post->post_content); //var_dump($post);?>
			<h1><?php the_title(); ?></h1>
			<div class="tags"><?php the_tags('', ''); ?></div>
			<br class="clear">
			<?php  html5wp_excerpt('html5wp_custom_excerpt') ?>
			<br class="clear">
			<div class="post-details-list">
				<span class="favs"><?php the_favorites_button($post_id, $site_id); ?><?php the_favorites_count(); ?><span class="text">favs</span></span>
				<br class="clear">
				<span class="comments"><i class="ic-comment"></i><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( '0 comments', 'unicorn' ), __( '0 comments',
						'comemments', 'unicorn'), __( '% Comments',
				'unicorn')); ?></span>
			</div>
		</article>
		<br class="clear">
		<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
		<?php else: ?>
	</div>		
	<!-- article grid -->

		<!-- article -->
		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'unicorn' ); ?></h2>
		</article>
		<!-- /article -->
		
    <?php endif; ?>

