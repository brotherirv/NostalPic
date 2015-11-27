<?php get_header(); ?>

<?php

if (have_posts()) : while (have_posts()) : the_post();
?>

<h2>
      	<a href="<?php the_permalink() ?>">
			<?php the_title(); ?>
      	</a>
      </h2>

 <?php endwhile; else: ?>
      <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?>






<?php 

$args = array ('post_type' => 'photo',
			   'posts_per_page' => '20'
);

$photo = new WP_Query( $args );


if ($photo -> have_posts()) : while ($photo -> have_posts()) : $photo -> the_post(); 

?>
<div class="row">
	<div class="col-xs-12">
      
      	<a href="<?php the_permalink() ?>">
      		<img src="<?php the_field('image');?>" alt="">
      		<br>
      		<?php the_title();?>
      	</a>
      
 		
 	</div>
</div>
 <?php endwhile; else: ?>
      <p>Sorry, no pages matched your criteria.</p>
    <?php endif; wp_reset_postdata();?>

<?php get_footer(); ?>