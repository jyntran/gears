<?php



/**

 * Add some love to the footer, of course you can replace that:

 * <code>

 * remove_action( 'required_credits', 'required_sample_credits' );

 * </code>

 */

add_action( 'required_slim_credits', 'required_slim_credits' );



function required_slim_credits() {

	_e( '<a href="http://themes.required.ch/" title="required+ Themes">Running on required+ Foundation</a>.', 'requiredfoundation' );

}



/* add a favicon to your site */

function blog_favicon() {

	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/favicon.png" />' . "\n";

}

add_action('wp_head', 'blog_favicon');


/* Menus */

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'yourtheme'),
    'secondary' => __( 'Secondary Menu', 'yourtheme' ),
 ) );




/*******

  CUSTOM STYLES 

 *******/


?>
