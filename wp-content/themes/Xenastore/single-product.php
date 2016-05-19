<?php get_header(); ?>

<div id="left" >
	
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="post clearfix" id="post-<?php the_ID(); ?>">

<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<div class="postmeta"> <span><?php echo get_the_term_list( $post->ID, 'department', '', ', ', '' ); ?> </span></div>
</div>

	<?php $image_attr = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
		<div class="premig">
	<a href="<?php echo $image_attr[0]; ?>" class="largeprev" >
	<?php the_post_thumbnail( 'product_single', array('class' => 'prosingle') ); ?>
	</a>
	</div>

<div class="entry">


	<?php the_content('Read the rest of this entry &raquo;'); ?>
	<div class="clear"></div>
	<?php wp_link_pages(array('before' => '<p><strong>Pages: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

</div>

<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>