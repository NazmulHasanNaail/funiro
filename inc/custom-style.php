<?php
add_action('wp_head','funiro_custom_style');	 
function funiro_custom_style(){
?>
	<style type="text/css"> 
    :root{

        --primary : <?php echo esc_html(get_theme_mod( 'funiro_primary_color', '#e89f71' )) ?>;
        --heading : <?php echo esc_html( get_theme_mod( 'funiro_heading_color', '#3a3a3a' )) ?>;
        --body-color : <?php echo esc_html( get_theme_mod( 'funiro_body_color', '#898989' )) ?>;
    }
    </style>
<?php
}