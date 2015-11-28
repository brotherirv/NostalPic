<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>
  <div class="container">

  	<div class="row hd-nav">
  		<div class="col-xs-3 left-side">
  			<p>Photos | Illustrations</p>
  		</div>
  		<div class="col-xs-6 logo">
  			<img src="<?php bloginfo('template_directory'); ?>/images/logo.png"/> 
  		</div>
  		<div class="col-xs-3 right-side">
  			<p>Sign Up | Login | Pricing</p>
  		</div>
	</div><!-- end hd-nav -->

 	

 	<div class="row hd-image">
 		<div class="col-xs-12">
 			<div class="hd-search">
	  			<?php get_search_form();?>
	  		</div>
 		</div>
 	</div>