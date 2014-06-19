<?php
	$styles = array(
		/***************************************************/
		/* Enter the name and filename of your style here! */
		/***************************************************/
		"default" => "default/style.css",
		"brushed_metal" => "an/brushed_metal/style.css",
	
	);
	
	/*******************************************/
	/* Don't worry about all of this stuff. :D */
	/*******************************************/
	$css_file = $styles['default'];
	if ( isset($_GET['style']) ) {
		if ( array_key_exists($_GET['style'], $styles) ) {
			$style_name = $_GET['style'];
			$css_file = $styles[$style_name];
		}
	}
	
	echo $css_file;
?>