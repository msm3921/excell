<?php
if ( ! function_exists ( 'understrap_setup' ) ) {

// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'footer' => __( 'Footer Menu', 'excell-contractors' ),
        ) );

}