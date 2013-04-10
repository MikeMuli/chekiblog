<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>


<!-- SET: FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="http://www.cheki.co.ke/skins/chekikenya/images/favicon.ico"">
<!-- END: FAVICON -->




<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- SET: STYLESHEET -->
<link href="<?php bloginfo('template_url'); ?>/css/fonts.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/slider.css" >
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

<!-- END: STYLESHEET -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.2.6.min.js"></script>

    <!-- SET: SCRIPTS -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/packed.js"></script>
<!-- END: SCRIPTS -->
    
<script> 
 
    $(document).ready(function() { 
    $('.nav ul li:last').addClass('last');

    }); 
 
</script>


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head(); ?>
			

</head>

<body>


  <!-- SET: CONTAINER -->
      <div class="container" id="top">
          
          <!-- SET: HEADER -->
              <div id="header">
                  <h1 id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="447" height="97" alt="logo"></a></h1> 
                  <?php dynamic_sidebar('Social-Icons Area '); ?>
                  <div id="nav">

<?php wp_nav_menu( array('menu' => 'top_menu', 'container'=>'','menu_class'      => ' ' )); ?>	

                  </div>                  
              </div>	
          <!-- END: HEADER -->
