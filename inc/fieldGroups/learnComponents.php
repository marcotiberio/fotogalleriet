<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'learnMeta',
        'title' => 'Learn Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Learn Info', 'flynt'),
                'name' => 'infoTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Intro', 'flynt'),
                'name' => 'intro',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'wrapper' => [
                    'width' => '100',
                ]
            ],
            [
                'label' => __('News', 'flynt'),
                'name' => 'news',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => __('Artists Involved', 'flynt'),
                'name' => 'artistsInvolved',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ]
            ],
            [
                'label' => __('Collaborations', 'flynt'),
                'name' => 'collaborations',
                'type' => 'text',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Learn Options', 'flynt'),
                'name' => 'learnOptions',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColor',
                'type' => 'color_picker',
                'wrapper' => [
                    'width' => '100',
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'learn',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'learnComponents',
        'title' => 'Learn Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'learnComponents',
                'label' => __('Learn Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockQaSidebar\getACFLayout(),
                    Components\BlockSpacer\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwygSidebar\getACFLayout(),
                    Components\GridImageGallery\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\GridPostsSelector\getACFLayout(),
                    Components\ListArtistsInvolved\getACFLayout(),
                    Components\ListLogos\getACFLayout(),
                    Components\ListPageLinks\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'learn',
                ],
            ],
        ],
    ]);
});
