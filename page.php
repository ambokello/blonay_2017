<?php get_template_part('includes/header'); ?>

<div class="main-body-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div id="content" role="main">
          <div class="main-body-text">
          <?php get_template_part('includes/loops/content', 'page'); ?>
        </div><!-- /#content -->
       </div>
      </div>
    </div><!-- /.row -->
  </div>
</div>

<?php get_template_part('includes/footer'); ?>