<?php get_header(); ?>
<?php if (have_posts()) :?>
	<?php while (have_posts()) : the_post();?>
		<h2 class=""><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title();?></a>
		</h2>

		<?php the_content();?>

		<p class="left"><a class="more" href="<?php the_permalink() ?>">Read more &raquo;</a></p>

		<?php endwhile; ?>
		<?php else : ?>
			<h2 class="center">Not Found</h2>
			<p class="center">Sorry, but you are looking for
			something that isn't here.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>
<?php get_footer(); ?>
