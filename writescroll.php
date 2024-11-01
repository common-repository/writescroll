<?php
/*
 * Plugin name: WriteScroll
 * Plugin Author: Dougal Campbell
 * Plugin Version: 1.2
 * Author URI: http://dougal.gunters.org/
 * Plugin URI: http://dougal.gunters.org/plugins/writescroll
 * Description: Automatically scroll Write pages to good editing position.
 */


// Automatically scroll Write pages to a good position.
function writescroll() {
	global $pagenow;
	// Only do this on 'Write Post' or 'Write Page'
	if ('post-new.php' == $pagenow || 'page-new.php' == $pagenow || 'post.php' == $pagenow) {
	// Huzzah for jQuery!
	?>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		// element to scroll
		var b = jQuery('body');
		// position to scroll to
		var wraptop = jQuery('#titlediv').offset().top;
		var speed = 250; // ms
		b.animate({scrollTop: wraptop}, speed);
	});
	</script>
	<?php
	}
}

add_action('admin_head', 'writescroll');
?>
