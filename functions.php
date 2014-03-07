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
?>
