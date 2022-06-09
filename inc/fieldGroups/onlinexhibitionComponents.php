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
                'label' => __('Artist', 'flynt'),
                'name' => 'artist',
                'type' => 'text',
                'wrapper' => [
                    'width' => '100',
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
                'name' => 'exhibitionComponents',
                'label' => __('Exhibition Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    // Components\GridImageGallery\getACFLayout(),
                    // Components\GridImageText\getACFLayout(),
                    // Components\BlockImage\getACFLayout(),
                    // Components\BlockImageText\getACFLayout(),
                    // Components\BlockQaSidebar\getACFLayout(),
                    // Components\BlockSpacer\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    // Components\BlockWysiwygSidebar\getACFLayout(),
                    // Components\BlockSliderBanner\getACFLayout(),
                    // Components\SliderImagesCentered\getACFLayout(),
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
