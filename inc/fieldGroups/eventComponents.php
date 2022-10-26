<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventMeta',
        'title' => 'Event Meta',
        'style' => '',
        'menu_order' => 1,
        'position' => 'acf_after_title',
        'fields' => [
            [
                'label' => __('Event Info', 'flynt'),
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
                'label' => __('Location', 'flynt'),
                'name' => 'postLocation',
                'type' => 'link',
                'return_format' => 'array',
                'wrapper' => [
                    'width' => '33',
                ],
            ],
            [
                'label' => __('Date', 'flynt'),
                'name' => 'postDate',
                'type' => 'date_picker',
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Time', 'flynt'),
                'name' => 'postTime',
                'type' => 'time_picker',
                'wrapper' => [
                    'width' => '50',
                ],
            ],
            [
                'label' => __('Register Button', 'flynt'),
                'name' => 'postRegisterbutton',
                'type' => 'link',
                'return_format' => 'array',
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
                    'value' => 'event',
                ],
            ],
        ],
    ]);
    ACFComposer::registerFieldGroup([
        'name' => 'eventComponents',
        'title' => 'Event Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventComponents',
                'label' => __('Event Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\GridImageGallery\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\BlockEventInfoContent\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockQaSidebar\getACFLayout(),
                    Components\BlockSpacer\getACFLayout(),
                    Components\BlockVideoOembed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\BlockWysiwygSidebar\getACFLayout(),
                    // Components\BlockSliderBanner\getACFLayout(),
                    Components\SliderImagesCentered\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ],
            ],
        ],
    ]);
});
