<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
	<div class="content">
		<h1><?php echo  the_title(); ?></h1>
		<p><?php echo  the_content(); ?></p>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>