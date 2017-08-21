<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

    
    add_filter( "the_title",function($title){
    return $title." "."In Todays News";
});
    
    function wpc_my_hook(){
?>
    <button type="button" class="btn">LIKE</button>
    <?php
}
add_action('wpc_my','wpc_my_hook');

};
?> 

