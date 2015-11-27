<?php get_header(); ?>

<?php 

if (have_posts()) : while (have_posts()) : the_post(); 

?>

	<?php the_title();?>
	<br>
	<br>
	<img src="<?php the_field('image'); ?>" alt="">
     

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; wp_reset_postdata();?>

<?php get_footer(); ?>