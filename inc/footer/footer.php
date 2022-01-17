<!--footer-widgets-->
<?php  
$footer_widget1_column = get_theme_mod('funiro_footer_widget1_column', esc_html('3', 'funiro'));
$footer_widget2_column = get_theme_mod('funiro_footer_widget2_column', esc_html('2', 'funiro'));
$footer_widget3_column = get_theme_mod('funiro_footer_widget3_column', esc_html('2', 'funiro')); 
$footer_widget4_column = get_theme_mod('funiro_footer_widget4_column', esc_html('2', 'funiro')); 
$footer_widget5_column = get_theme_mod('funiro_footer_widget5_column', esc_html('3', 'funiro')); 
?>
<div class="col-xl-<?php echo $footer_widget1_column; ?> col-lg-6 col-sm-12">
  <?php dynamic_sidebar('footer-sidebar-1'); ?>
</div>

<div class="col-xl-<?php echo $footer_widget2_column; ?> col-lg-3 col-sm-12">
  <?php dynamic_sidebar('footer-sidebar-2'); ?>
</div>

<div class="col-xl-<?php echo $footer_widget3_column; ?> col-lg-3 col-sm-12">
  <?php dynamic_sidebar('footer-sidebar-3'); ?>
</div>

<div class="col-xl-<?php echo $footer_widget4_column; ?> col-lg-6 col-sm-12">
  <?php dynamic_sidebar('footer-sidebar-4'); ?>
</div>

<div class="col-xl-<?php echo $footer_widget5_column; ?> col-lg-6 col-sm-12">
<?php dynamic_sidebar('footer-sidebar-5'); ?>
</div>

