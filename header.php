<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="format-detection" content="telephone=no">
<title><?php wp_title('|','true','right'); ?><?php // bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="https://www.peluffoandpartners.com/favicon.ico" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3ZRZVPF5ZJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3ZRZVPF5ZJ');
</script>
</head>


<body <?php body_class(); ?>>
<?php $templ_dir = get_template_directory_uri(); ?>

<div class="menu_container">
	<div class="home-menu">
		<span class="home-menu-line"></span>
		<?php
		wp_nav_menu( array( 
			'theme_location'  => 'primary_home',
			'items_wrap'      => '<nav>%3$s</nav>',
			'depth' => 2,
			'container' => ''
		) );
		?>
	</div>
</div>

<div class="topbar">
    <div class="logo">
    	<div class="logoimg"><a href="<?php echo get_home_url(); ?>"></a></div>
    </div>
    <div class="menu_btn">
    	<!--<div class="menu_btn_img"></div>-->
    	<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
    </div>
    <div class="sel_lingua">
			<?php
				foreach (pll_the_languages(array('display_name_as'=>'slug', 'hide_current'=>1, 'raw'=> 1)) as $lang) {
					$lingua = ($lang['slug'] != 'en') ? $lang['slug'] : 'ENG';
					echo '<a href="'.$lang['url'].'">'.$lingua.'</a>';
				};
			?>
		</div>
</div>
