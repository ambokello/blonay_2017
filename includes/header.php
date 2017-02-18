<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a href="<?php bloginfo( 'url' ); ?>" class="logo"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.jpg" class="img-responsive" alt="Logo"> </a>
				<!-- End Logo -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<?php wp_nav_menu( array( 
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'walker' => new wp_bootstrap_navwalker()
						));
						?>
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>