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
	<div id="top-header" class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
		<div class="top-contact pull-right">
		  <ul>
<?php wp_nav_menu( array(
	'theme_location' => 'top-right-menu',
	'container' => false,
	'items_wrap' => '%3$s',
	'menu_class' => 'top-right-menu',
	'walker' => new wp_bootstrap_navwalker()
 ) ); ?>
		  </ul>
		  <p><b class="free_12">Call:</b> <span>0203 146 5555</span> </p>
		</div>
	  </div>
	  <nav class="nav_10">
		<div class="container">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</button>
			<a href="<?php bloginfo( 'url' ); ?>" class="navbar-brand"><img id="bsme_logo" src="<?php echo get_bloginfo('template_directory');?>/images/logo.png" class="img-responsive" alt="#"> </a> </div>
		  <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
<?php wp_nav_menu( array( 
	'theme_location' => 'primary',
	'container' => false,
	'menu_class' => 'nav navbar-nav',
	'walker' => new wp_bootstrap_navwalker()
));
?>

<?php wp_nav_menu( array( 
'theme_location' => 'primary-mobile',
'depth' => 1,
'container' => false,
'menu_class' => 'nav navbar-nav nav-menu-mobile',
'walker' => new wp_bootstrap_navwalker()
) );
?>
			</ul>
		  </div>
		</div>
	  </nav>
	</div>


