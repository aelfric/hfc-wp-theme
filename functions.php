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

    function hfc_side_bar(){
       $args = array(
          'name'          => 'Sidebar',
          'id'            => "sidebar",
          'description'   => '',
          'class'         => '',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
             'after_widget'  => "</div>\n",
          'before_title'  => '<h2 class="widgettitle">',
             'after_title'   => "</h2>\n",
       );

       register_sidebar($args);

    }

    add_action('init', 'hfc_side_bar');

    function email_button_shortcode($attributes, $content = nil){
	    return render_theme_html_snippet('email_button.html',
			    array('URL' => $attributes['url'],
				    'TEXT' => $attributes['text'],));
    }
    add_shortcode('hfc_email_button', 'email_button_shortcode');

    function render_theme_html_snippet($html_file, $vars) {
	    $template = file_get_contents(get_stylesheet_directory().'/'.$html_file);
	    foreach($vars as $key => $value){
		    $template = str_replace("{{".$key."}}", $value, $template);
	    }
	    return $template;
    }

?>
