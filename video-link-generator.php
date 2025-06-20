<?php
/*
Plugin Name: Video Link Generator
Plugin URI: https://wordpress.org/plugins/video-link-generator/
Description: Darmowa wersja wtyczki do automatycznego tworzenia stron z filmami.
Version: 1.0.0
Author: Twoje Imię
License: GPL2
*/

defined('ABSPATH') or die('No script kiddies please!');

if (!defined('VLG_FREE_ACTIVE')) {
    define('VLG_FREE_ACTIVE', true);
}

add_action('admin_menu', function() {
    add_options_page('Video Link Generator', 'Video Link Generator', 'manage_options', 'video-link-generator', function() {
        echo '<div class="wrap"><h2>Video Link Generator (Free)</h2><p>Działa wtyczka darmowa.</p></div>';
    });
});
