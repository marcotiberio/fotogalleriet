<?php

// use ACFComposer\ACFComposer;
// use Flynt\Components;

// add_action('Flynt/afterRegisterComponents', function () {
//     ACFComposer::registerFieldGroup([
//         'name' => 'pageMeta',
//         'title' => 'Page Meta',
//         'style' => '',
//         'menu_order' => 1,
//         'position' => 'side',
//         'fields' => [
//             [
//                 'label' => __('Page Options', 'flynt'),
//                 'name' => 'optionsTab',
//                 'type' => 'tab',
//                 'placement' => 'top',
//                 'endpoint' => 0
//             ],
//             [
//                 'label' => __('Page Background', 'flynt'),
//                 'name' => 'pageBackground',
//                 'type' => 'color_picker',
//                 'return_format'  => 'string'
//             ],
//             [
//                 'label' => __('Menu Background', 'flynt'),
//                 'name' => 'menuBackground',
//                 'type' => 'color_picker',
//                 'return_format'  => 'string'
//             ]
//         ],
//         'location' => [
//             [
//                 [
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'post'
//                 ],
//             ],
//             [
//                 [
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'artist'
//                 ],
//             ],
//             [
//                 [
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'page'
//                 ],
//             ],
//         ],
//     ]);
// });
