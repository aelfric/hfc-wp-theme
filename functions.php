<?php
	// FUNCTIONS
	function generate_teal_bar($id) {
		
		switch($id) {
			case 19:
				$ret = "the hope players";
				break;
			
			default:
				$ret = "a unique organization dedicated to breast cancer research";
		}
		
		return $ret;
		
	}
	
	function get_the_cat_slug() {

		if(is_category()) {
			$cat = get_query_var('cat');
			$ret_cat = get_category($cat);
			
			return $ret_cat->slug;
		}

	}

    function theme_name_scripts() {
        wp_enqueue_style( 'reset', get_stylesheet_directory_uri()."/reset.css");
        wp_enqueue_style( 'main', get_stylesheet_uri() );
        wp_enqueue_script( 'easing', "http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js", 
            array('jquery'));
        wp_enqueue_script( 'slideshow', get_stylesheet_directory_uri()."/js/slides.min.jquery.js",
            array('jquery', 'easing'));
    }

    add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

?>
