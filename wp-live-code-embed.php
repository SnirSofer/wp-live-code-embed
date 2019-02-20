<?php
/**
 * Plugin Name: WP Live Code Embed
 * Plugin URI: https://waf.co.il/category/internet/wordpress/plugins/live-code-embed
 * Description: This plugin allow to you embed code snippets from pastebin, github gists, github profile, github repository and codepen.
 * Version: 1.0.0
 * Donate link: https://waf.co.il/donate
 * Author: Snir Sofer
 * Author URI: http://waf.co.il
 * Text Domain: wp-live-code-embed
 * License: Free
 * Tested up to: 5.0.3
*/

if ( ! defined( 'ABSPATH' ) ) {
	die();
}
wp_enqueue_script( 'wp-live-code-embed-gitcard', '//cdn.jsdelivr.net/github-cards/latest/widget.js', array(),false,true);
wp_enqueue_script( 'wp-live-code-embed-gists', '//cdnjs.cloudflare.com/ajax/libs/gist-embed/2.7.1/gist-embed.min.js', array(),false,true); //embed gists

/** Short codes **/
function embed_Pastebin_shortcode($atts)
{
    $params = shortcode_atts(['id' => 'BVZJapzw'],$atts);
    return '<iframe src="https://pastebin.com/embed_iframe/'.$params['id'].'" style="border:none;width:100%"></iframe>';
}
add_shortcode( 'pastebin', 'embed_Pastebin_shortcode' );


/* Github gists */
function embed_Github_gists_shortcode($atts)
{
    $params = shortcode_atts(['id' => 'b7a79710ac396bd874b1f14be8f5e3b3'],$atts);
    return '<code data-gist-id="'.$params['id'].'"></code>';
}
add_shortcode( 'gist', 'embed_Github_gists_shortcode' );

/* Github User Profile */
function embed_Github_UserProfile_shortcode($atts)
{
    $params = shortcode_atts(['username' => 'SnirSofer','theme' => 'default'],$atts);
    return '<div class="github-card" data-github="'.$params['username'].'" data-theme="'.$params['theme'].'"></div>';
}
add_shortcode( 'github_profile', 'embed_Github_UserProfile_shortcode' );



/* Github Repository */
function embed_Github_repo_shortcode($atts)
{
    $params = shortcode_atts(['id' => 'SnirSofer/PHP-Snippets','theme' => 'default'],$atts);
    return '<div class="github-card" data-github="'.$params['id'].'" data-theme="'.$params['theme'].'"></div>';
}
add_shortcode( 'github_repo', 'embed_Github_repo_shortcode' );

/* Codepen */
function embed_Codepen_shortcode($atts)
{
    $params = shortcode_atts(['id' => 'evsuw'],$atts);
    return '<iframe height="265" style="width: 100%;" scrolling="no" src="//codepen.io/wesbos/embed/'.$params['id'].'/?height=265&theme-id=light&default-tab=html,result" frameborder="no" allowtransparency="true" allowfullscreen="true"></iframe>';
}
add_shortcode( 'codepen', 'embed_Codepen_shortcode' );

