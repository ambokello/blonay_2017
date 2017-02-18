<?php 
/**
 * Template Name: Profiler Page Template
 *
 * @package WordPress
 * @subpackage blonay2017
 * @since blonay2017 1.0
 */
?>
<?php get_template_part('includes/header'); ?>
    
    <div id="blonay_profiler_header">
        <div class="container">
            <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('profiler_header') ) : ?>
            <?php endif;?>
        </div>
    </div>

    <div class="purchase">
      <div class="container overflow-h">
        <div class="row">
          <?php get_template_part('includes/loops/content', 'page'); ?>
        </div>
      </div>
    </div>

<?php get_template_part('includes/footer'); ?>

