<?php get_header();
/*
Template Name: Import Page
*/


$file = fopen(get_bloginfo('template_directory')."/images.csv","r");

while(! feof($file)){
  $row = fgetcsv($file);
  $title = $row[0];
  $image = $row[1];

  $photo = array(
    'post_title' => $title,
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type' => 'photo'
  );

  $photo_id = wp_insert_post( $photo );
  add_post_meta($photo_id, 'image',  $image , true);
}

fclose($file);


echo ' you have imported files!';





 get_footer(); ?>