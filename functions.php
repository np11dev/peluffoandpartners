<?php
$template_dir = get_template_directory();
include("$template_dir/functions/abovethefold.php");

function theme_name_scripts() {
    //SCRIPT
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-1.11.3.min.js', array(), '1.11.3', false);
    wp_register_script('slick-js', get_template_directory_uri() . '/slick/slick.min.js', array(), '1.6.0', false);
    wp_register_script('swipebox-js', get_template_directory_uri() . '/swipebox/js/jquery.swipebox.min.js', array(), '1.4.4', false);
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), time(), true);
    //wp_register_script('mmenu', get_template_directory_uri() . '/jquery.mmenu/jquery.mmenu.all.js', array(), '6.1.0', true);
    //wp_register_script('lazyload', get_template_directory_uri() . '/js/jquery.lazyload.min.js', array(), '1.9.3', true);
    wp_enqueue_script(array('jquery', 'scripts', 'slick-js', 'swipebox-js'));
    //CSS
    //wp_enqueue_style( 'style-owlcarousel', get_template_directory_uri() . '/owlcarousel/owl.carousel.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' ); //carica script e css solo frontend
/*
function prefix_add_footer_styles() {
    wp_enqueue_style( 'your-style-id', get_template_directory_uri() . '/stylesheets/somestyle.css' );
};
add_action( 'get_footer', 'prefix_add_footer_styles' );*/

function add_footer_styles() {
    wp_enqueue_style( 'PlayfairDisplay', 'https://fonts.googleapis.com/css?family=Playfair+Display' );
    wp_enqueue_style( 'OldStandardTT', 'https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700' );
    wp_enqueue_style( 'Oswald', 'https://fonts.googleapis.com/css?family=Oswald' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );
    wp_enqueue_style( 'swipebox', get_template_directory_uri() . '/swipebox/css/swipebox.min.css' );
    //wp_enqueue_style( 'mmenu', get_template_directory_uri() . '/jquery.mmenu/jquery.mmenu.all.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
    //wp_enqueue_style( 'video', get_template_directory_uri() . '/css/video.css?20170613' );
    wp_enqueue_style( 'style-default_base', get_template_directory_uri() . '/css/default_base.css', array(), '20201204' );
    wp_enqueue_style( 'style-default_480', get_template_directory_uri() . '/css/default_480.css', array(), '20201204' );
    wp_enqueue_style( 'style-default_768', get_template_directory_uri() . '/css/default_768.css', array(), '20201204' );
    wp_enqueue_style( 'style-default_992', get_template_directory_uri() . '/css/default_992.css', array(), '20201204' );
    wp_enqueue_style( 'style-default_1200', get_template_directory_uri() . '/css/default_1200.css', array(), '20201204' );
    wp_enqueue_style( 'style-default_1400', get_template_directory_uri() . '/css/default_1400.css', array(), '20201204' );
    wp_enqueue_style( 'style-default_1600', get_template_directory_uri() . '/css/default_1600.css', array(), '20201204' );
};
add_action( 'get_footer', 'add_footer_styles' );

function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

if(function_exists('register_nav_menus')){
	register_nav_menus(array('primary'=>__('Primary Menu'),));
  register_nav_menus(array('primary_left'=>__('Primary Menu Left'),));
  register_nav_menus(array('primary_right'=>__('Primary Menu Right'),));
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Sidebar Widgets',
        'id'   => 'sidebar-widgets',
        'description'   => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer-pagine',
        'id'   => 'footerpagine',
        'description'   => 'These are widgets for the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));/**/
}

add_theme_support( 'post-thumbnails' );
add_image_size('gallery_progetti', 1400, 980, false);
add_image_size('anteprima_notizie', 600, 450, true);  //205x120px CROP
add_image_size('main_img', 1600, 295, true);  //CROP
add_image_size('category_img_menu', 315, 185, true);  //CROP
//add_image_size('notizie_main', 300, 99999, false); //L.300px, altezza libera
//add_image_size('notizie_archivi', 90, 90, true); //90x90px CROP


//personalizzazione login
function my_login_logo() { ?>
    <style type="text/css">
        body.login {
            background-color: rgb(99, 99, 99);
        }
        body.login div#login h1 a {
            background-image: url('<?php echo get_bloginfo( 'template_directory' ) ?>/images/logo_negativo.svg');
            width:325px;
            background-size: 325px auto;
            margin: 0px;
            height: 50px;
        }
        .login h1 a {


        }
        .login #nav, .login #backtoblog {
            text-shadow:none;
        }
        .login #nav a, .login #backtoblog a {
            color: #FFFFFF !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );


/*http://www.sitepoint.com/create-a-wordpress-theme-settings-page-with-the-settings-api/
function add_theme_menu_item()
{
	add_menu_page("Theme Panel", "Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");


function theme_settings_page()
{
    ?>
	    <div class="wrap">
	    <h1>Theme Panel</h1>
	    <form method="post" action="options.php" id="themeform" style="border: 1px solid grey; padding:10px;">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");
	            submit_button();
	        ?>
	    </form>
		</div>
	<?php
}

function display_chiamaci()
{
	?>
    	<input type="text" name="chiamaci" id="chiamaci" value="<?php echo get_option('chiamaci'); ?>" style="vertical-align:top"/>
        <textarea rows="5" name="chiamacinfo" id="chiamacinfo" form="themeform"><?php echo get_option('chiamacinfo'); ?></textarea>
    <?php
}
function display_spedizione(){
    ?>
        <input type="text" name="costi_spedizione" id="costi_spedizione" value="<?php echo get_option('costi_spedizione'); ?>" style="vertical-align:top"/>
        <textarea rows="5" name="spedizione" id="spedizione" form="themeform"><?php echo get_option('spedizione'); ?></textarea>
    <?php
}
function display_testo(){
    ?>
        <textarea rows="5" name="testograssetto" id="testograssetto" form="themeform"><?php echo get_option('testograssetto');?></textarea>
        <textarea rows="5" name="testo" id="testo" form="themeform"><?php echo get_option('testo'); ?></textarea>
    <?php
}
function display_certificazioni(){
    ?>
        <textarea rows="5" name="certificazioni" id="certificazioni" form="themeform"><?php echo get_option('certificazioni');?></textarea>
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "Footer Settings", null, "theme-options");

	add_settings_field("chiamaci", "Chiamaci", "display_chiamaci", "theme-options", "section");
    add_settings_field("spedizione", "Spedizione", "display_spedizione", "theme-options", "section");
    add_settings_field("testo", "Testo Riga 3", "display_testo", "theme-options", "section");
    add_settings_field("certificazioni", "Testo certificazioni", "display_certificazioni", "theme-options", "section");

    register_setting("section", "chiamaci");
    register_setting("section", "chiamacinfo");
    register_setting("section", "costi_spedizione");
    register_setting("section", "spedizione");
    register_setting("section", "testograssetto");
    register_setting("section", "testo");
    register_setting("section", "certificazioni");
}

add_action("admin_init", "display_theme_panel_fields");*/

//TAGLIA IL TESTO TROPPO LUNGO
function TagliaStringa($stringa, $max_char){
    if(strlen($stringa)>$max_char){
        $stringa_tagliata=substr(strip_tags($stringa), 0,$max_char);
        $last_space=strrpos($stringa_tagliata," ");
        $stringa_ok=substr($stringa_tagliata, 0,$last_space);
        return $stringa_ok."[...]";
    }else{
        return $stringa;
    }
}

function print_rr ($string) {
    echo '<pre>';
        print_r($string);
    echo '</pre>';
}



/**
 * Disable responsive image support (test!)
 */
// Clean the up the image from wp_get_attachment_image()
//http://wordpress.stackexchange.com/questions/211375/how-do-i-disable-responsive-images-in-wp-4-4

add_filter( 'wp_get_attachment_image_attributes', function( $attr ) {
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );
    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );
    return $attr;
 }, PHP_INT_MAX );
/*// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );
// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );
// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );
*/
?>
