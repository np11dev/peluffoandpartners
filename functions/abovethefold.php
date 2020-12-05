<?php
function hook_css() {
?>
<style>
.menu_container {
	display: none;
}

</style>
<?php
}
 add_action('wp_head', 'hook_css');
 ?>
