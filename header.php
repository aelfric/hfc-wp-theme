<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="<?php language_attributes() ?>">
	<head profile="http://gmpg.org/xfn/11">  
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<?php wp_head(); ?>
		<link rel="shortcut icon" href="http://www.hopeforchange.org/favicon.png" />
		
		<script>
		jQuery(function(){
			jQuery('#slides').slides({
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
