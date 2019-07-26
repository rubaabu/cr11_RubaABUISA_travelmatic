<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <!-- <h4>About</h4>
    <p>
      A travel site for every one who wants to relax and find a great journy
    </p>
  </div> -->
  <?php
 if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
<!-- /.blog-sidebar -->