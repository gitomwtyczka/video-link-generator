<?php
/**
 * Plugin Name: Video Link Generator
 * Description: Wersja darmowa – automatyczne generowanie podstron z filmami z YouTube.
 * Version: 1.5.4
 * Author: Tomasz Brzozowski
 */

defined('ABSPATH') || exit;
define('VIDEO_LINK_GENERATOR_FREE_ACTIVE', true);

// NIE dodawaj panelu, jeśli działa wersja PRO
add_action('admin_menu', function () {
    if (defined('VLG_PRO_ACTIVE')) return; // ⛔ PRO aktywna – nie dodawaj strony ustawień
    add_options_page(
        'Video Link Generator (Free)',
        'Video Link Generator (Free)',
        'manage_options',
        'vlg-settings-free',
        'video_link_generator_render_settings_page'
    );
});

function video_link_generator_render_settings_page() {
    echo '<div class="wrap"><h1>Video Link Generator – Ustawienia (Free)</h1>';
    echo '<p>Ta wersja automatycznie generuje strony z filmami w tle.</p>';
    echo '</div>';
}
?>