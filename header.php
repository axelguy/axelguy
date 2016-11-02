<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Axelguy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Proza+Libre:400,400i,700" rel="stylesheet">
<!-- Font-awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<?php
  if ( is_admin_bar_showing() ) echo '
  <style>
	  .dark-layer {
		  top: 32px !important;
	  }

	@media screen and (max-width: 767px) {
		.dark-layer {
			  top: 46px !important;
		  }
	}
  </style>
  ';
?>



<?php wp_head(); ?>
</head>

	<body>
		<div class="dark-layer"></div>

		<div class="wrapper">

			<div id="navigation-bar" class="container-fluid">
				<nav class="navbar navbar-default">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarhead" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Axelguy</a>
						</div>

						<div class="collapse navbar-collapse" id="navbarhead">
							<!-- display dynamic navigation menu -->
							<?php
							wp_nav_menu( $args = array(
								'theme_location' => 'header-menu',
								 'menu_class' 	  => 'nav navbar-nav'
							) );
							?>
						</div>

					</div> <!-- container -->
				</nav>
			</div> <!-- navigation-bar -->
