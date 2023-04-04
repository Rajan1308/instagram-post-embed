<?php
/**
 * Plugin Name: Instagram Post embed
 * Plugin URI:  https://github.com/Rajan1308/instagram-post-embed
 * Description: Instagram Post Embed plugin is a useful tool that allows users to easily embed Instagram posts into their WordPress website.
 * Version:     1.0
 * Author:      Rajan Gupta
 * Author URI:  https://github.com/Rajan1308/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-ipe
 * Domain Path: /languages
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function instagram_post_embed_block_init() {
  wp_register_script(
    'instagram-block',
    plugins_url( 'block.js', __FILE__ ),
	array( 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n', 'wp-editor' ),
    filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
  );

  register_block_type( 'my-plugin/instagram-block', array(
    'editor_script' => 'instagram-block',
  ) );
}
add_action( 'init', 'instagram_post_embed_block_init' );


