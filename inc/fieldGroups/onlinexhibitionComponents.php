<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'onlinexhibitionMeta',
        'title' => 'Online Exhibition Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Online Exhibition Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Exhibition Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Artist', 'flynt'),
                'name' => 'subtitle',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => __('Event Type', 'flynt'),
                'name' => 'postType',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => __('Date Start', 'flynt'),
                'name' => 'postDate',
                'type' => 'date_picker',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Date End', 'flynt'),
                'name' => 'postDateEnd',
                'type' => 'date_picker',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Time', 'flynt'),
                'name' => 'postTime',
                'type' => 'time_picker',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColor',
                'type' => 'color_picker',
                'wrapper' => [
                    'width' => '33',
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'onlinexhibition',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'onlinexhibitionComponents',
        'title' => 'Online Exhibition Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'onlinexhibitionComponents',
                'label' => __('Online Exhibition Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockDigitalHeroImage\getACFLayout(),
                    Components\BlockDigitalHeroText\getACFLayout(),
                    Components\BlockDigitalImageText\getACFLayout(),
                    Components\BlockDigitalVideoOembed\getACFLayout(),
                    Components\BlockDigitalWysiwyg\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\SliderImagesDigital\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'onlinexhibition',
                ],
            ],
        ],
    ]);
});
