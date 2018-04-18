<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function yellow17_widgets_init() {

  register_sidebar( array(
    'name'          => 'Topo',
    'id'            => 'topo',
    'description'   => __( 'Appears in the footer section of the site.'),
    'before_widget' => '<div class="%2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => 'Destaque',
    'id'            => 'destaque',
    'description'   => __( 'Appears in the footer section of the site.'),
    'before_widget' => '<div class="%2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

	register_sidebar( array(
		'name'          => 'Lateral',
		'id'            => 'lateral',
		'description'   => __( 'Appears in the footer section of the site.'),
		'before_widget' => '<div class="well widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );

  register_sidebar( array(
    'name'          => 'Rodape',
    'id'            => 'rodape',
    'description'   => __( 'Appears in the footer section of the site.'),
    'before_widget' => '<div class="well widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

  register_sidebar( array(
    'name'          => 'Rodape Home',
    'id'            => 'rodape_home',
    'description'   => __( 'Appears in the footer section of the site.'),
    'before_widget' => '<div class="well widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5>',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'yellow17_widgets_init' );

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 36;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return ' [continua]';
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



add_theme_support( 'post-thumbnails' );
  
//add_image_size( 'thumb-destaque', 615, 300, true ); 
add_image_size('thumb-square', 450, 450, true); 

add_image_size('thumb-blog', 150, 150, true); 


?>