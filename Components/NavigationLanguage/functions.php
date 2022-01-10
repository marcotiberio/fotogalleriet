<?php

namespace Flynt\Components\NavigationLanguage;

use Flynt\Utils\Asset;
use Timber\Menu;

add_action('init', function () {
    register_nav_menus([
        'navigation_language' => __('Navigation Language', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=NavigationLanguage', function ($data) {
    $data['menu'] = new Menu('navigation_language');
    $data['logo'] = [
        'src' => get_theme_mod('custom_header_logo') ? get_theme_mod('custom_header_logo') : Asset::requireUrl('Components/NavigationLanguage/Assets/logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});
