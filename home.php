<?php 
/**
 * Template Name: Home Page Template
 *
 * @package WordPress
 * @subpackage blonay2017
 * @since blonay2017 1.0
 */
?>
<?php get_template_part('includes/header'); ?>

<!--=== Slider ===-->
    <div class="slider-inner">
      <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2><i>BLONAY</i> <br /> <i>CHARACTER PROFILER</i></h2>
          <div class="da-img"><img class="img-responsive" src="assets/plugins/parallax-slider/img/121.png" alt=""></div>
        </div>
        <div class="da-slide">
          <h2><i>RESPONSIVE VIDEO</i> <br /> <i>SUPPORT AND</i> <br /> <i>MANY MORE</i></h2>
          <div class="da-img">
            <iframe src="http://player.vimeo.com/video/47911018" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
          </div>
        </div>
        <div class="da-arrows">
          <span class="da-arrows-prev"></span>
          <span class="da-arrows-next"></span>
        </div>
      </div>
    </div><!--/slider-->
    <!--=== End Slider ===-->

    <!--=== Purchase Block ===-->
    <div class="purchase">
      <div class="container overflow-h">
        <div class="row">
          <?php get_template_part('includes/loops/content', 'page'); ?>
        </div>
      </div>
    </div>

    <!--=== Content Part ===-->
    <div class="container content-sm">
      <div class="row margin-bottom-30">
          <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('risky-strategy-book-container') ) : ?>
          <?php endif;?>
      </div>
    </div>

<?php get_template_part('includes/footer'); ?>

