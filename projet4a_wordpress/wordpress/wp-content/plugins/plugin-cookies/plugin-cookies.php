<?php
/**
* Plugin Name: plugin barre cookies
*/


add_action('wp_enqueue_scripts','load_style_cookies');
add_action("wp_footer","add_cookies_bar");

function load_style_cookies(){
	wp_enqueue_style('style_cookies',plugin_dir_url(__FILE__).'css/style_cookies.css');
	wp_enqueue_script('script_cookies',plugin_dir_url(__FILE__).'js/script_cookies.js',null,null,false);

}
function add_cookies_bar(){
	?>
	<div class="cookie_bar">
    <p>Ce site utilise des cookies à des fins statistiques. </p>
    	<div class="right_block">
        	<button class="accept">J'accepte</button>
       	 <button class="refuse">Je refuse</button>
   		</div>
	</div>

  <?php
}

?>