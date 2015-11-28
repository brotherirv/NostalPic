<?php get_header(); ?>


<h1 class = "search-results-headline">Search Results For: <?php the_search_query();?></h1>

<?php 
  if (have_posts()) : while (have_posts()) : the_post(); 
?>

  <a href="<?php the_permalink() ?>">
      <img src="<?php the_field('image');?>" alt="">
      <?php the_title();?>
  </a>  
  <br> 

  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; wp_reset_postdata();?>

<?php get_footer(); ?>