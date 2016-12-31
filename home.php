<?php 
/**
 * Template Name: Home Page Template
 *
 * @package WordPress
 * @subpackage bsme2016
 * @since bsme2016 1.0
 */
?>
<?php get_template_part('includes/header'); ?>
<div class="clearfix"></div>
<div class="slider_main" >
  <div class="container">
    <div class="carousel-caption_1">
      <h3>Drive Maximum Value From Every Property</h3>
      <p>Today's Fast Changing Business Environment Necessitates a Flexible, <br>
        Responsive Approach to Serviced Office Space</p>
      <a href="http://new.bsme.london/services/" class="btn btn-default">Find out more</a> </div>
  </div>
</div>

<div class="clearfix"></div>
<div class="panel-a1">
  <div class="container">
		<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('homepagepanel1') ) : ?>
		<?php endif;?>
	</div>
</div>

<div class="clearfix"></div>
<div class="main-body-container">
	<div class="container">
		<?php get_template_part('includes/loops/content', 'page'); ?>
	</div>
</div>

<div class="panel-A2-1">
    <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('panel-A2-1') ) : ?>
    <?php endif;?>
</div>

<div class="panel-A2">
  <div class="container">
		<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('panel-A2') ) : ?>
		<?php endif;?>
	</div>
</div>

<div class="clearfix"></div>
<section id="footer-top">
  <div class="container">
		<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-top') ) : ?>
		<?php endif;?>
  </div>
</section>
<?php get_template_part('includes/footer'); ?>

