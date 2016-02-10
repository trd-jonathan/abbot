<?php get_header(); ?>
	<div class="content">
		<?php while(have_posts()) : the_post(); ?>
			<h1 class="the-title"><a href="<?php echo post_permalink(); ?>"><?php the_title(); ?></a></h1><h6><?php the_date(); ?></h6>		 
		 	<p><?php the_content(); ?></p>
		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>


