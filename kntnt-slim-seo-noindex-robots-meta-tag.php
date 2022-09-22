<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Slim SEO Noindex Robots Meta Tag
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Makes Slim SEO add noindex robots meta tag on archive pages, search result pages and attachemnt pages.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_filter( 'slim_seo_robots_index', function( $index ) {
    return is_archive() || is_search() || is_attachment() ? false : $index;
});
