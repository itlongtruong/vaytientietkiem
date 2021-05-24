<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Finance
 * @since Finance 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<!-- Favicons -->
    <link href="<?php echo get_template_directory_uri();?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  	<!-- Vendor CSS Files -->
  	<link href="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?php echo get_template_directory_uri();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<link href="<?php echo get_template_directory_uri();?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  	<link href="<?php echo get_template_directory_uri();?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  	<link href="<?php echo get_template_directory_uri();?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  	<link href="<?php echo get_template_directory_uri();?>/assets/vendor/aos/aos.css" rel="stylesheet">

  	<!-- Template Main CSS File -->
  	<link href="<?php echo get_template_directory_uri();?>/assets/css/style.css" rel="stylesheet">   
  	<link href="<?php echo get_template_directory_uri();?>/assets/css/custom.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-end fixed-top">
    <div class="container d-flex justify-content-end">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Rapid</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?php echo home_url(); ?>/" class="logo mr-auto"><img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="main-nav d-none d-lg-block">
        <ul>
		   <?php
			  $arrMenu  = wp_get_nav_menu_items('main-menu');
			  $id = 0;
			  foreach ($arrMenu as $menu) {                                    
			?>
			<?php  if($menu->menu_item_parent == 0){ ?> 
			 <li><a href="<?php echo $menu->url; ?>"><?php echo $menu->title;?></a></li>
			<?php  }else{ ?> 
			
			<?php  } ?>
         
		  <?php  } ?>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->

