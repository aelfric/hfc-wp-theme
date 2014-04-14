<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="<?php language_attributes() ?>">
	<head profile="http://gmpg.org/xfn/11">  
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/reset.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="shortcut icon" href="http://www.hopeforchange.org/favicon.png" />
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri() ?>/js/slides.min.jquery.js"></script>
		<script>
		$(function(){
			$('#slides').slides({
				play: 8000, 
				preload: true,
				preloadImage: '<?php echo get_stylesheet_directory_uri() ?>/slideshow/loading.gif',
				gnerateNextPrev: false,
				pagination: false,
				generatePagination: false,
				crossfade: true,
				hoverpPause: true
			});
		});
	</script>
		<title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
	</head>
	<body scroll="auto">
		<div class="container">
			<div id="header" class="clearfix">
				<div class="pink">
					<a href="#" alt="Hope for Change" class="logo noselect">Hope for Change</a>
					<ul>
						<?php wp_list_pages('meta_key=top_menu&meta_value=true&sort_column=menu_order&title_li='); ?>
					</ul>
				</div>
				<div class="pinkcor noselect"></div>
