<?php

namespace Flynt\Components\BlockWysiwygTwoCol;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockWysiwygTwoCol',
        'label' => 'Block: Wysiwyg Two Columns (4 blocks)',
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'socialTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Columns', 'flynt'),
                'name' => 'repeaterPanels',
                'type' => 'repeater',
                'layout' => 'block',
                'min' => 1,
                'button_label' => __('Add Row', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Column Left', 'flynt'),
                        'name' => 'panelColumnLeft',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'delay' => 0,
                        'media_upload' => 1,
                        'required' => 0,
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ],
                    [
                        'label' => __('Column Right', 'flynt'),
                        'name' => 'panelColumnRight',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual',
                        'delay' => 0,
                        'media_upload' => 1,
                        'required' => 0,
                        'wrapper' => [
                            'width' => '50',
                        ],
                    ]
                ],
            ],
            // [
            //     'label' => __('Content Left', 'flynt'),
            //     'name' => 'contentLeftTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0,
            // ],
            // [
            //     'label' => __('Content Left Top', 'flynt'),
            //     'name' => 'contentHtmlLeftTop',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual',
            //     'delay' => 1,
            //     'media_upload' => 1,
            //     'required' => 0,
            // ],
            // [
            //     'label' => __('Content Left Bottom', 'flynt'),
            //     'name' => 'contentHtmlLeftBottom',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual',
            //     'delay' => 1,
            //     'media_upload' => 1,
            //     'required' => 0,
            // ],
            // [
            //     'label' => __('Content Right', 'flynt'),
            //     'name' => 'contentRightTab',
            //     'type' => 'tab',
            //     'placement' => 'top',
            //     'endpoint' => 0,
            // ],
            // [
            //     'label' => __('Content Right Top', 'flynt'),
            //     'name' => 'contentHtmlRightTop',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual',
            //     'delay' => 1,
            //     'media_upload' => 1,
            //     'required' => 0,
            // ],
            // [
            //     'label' => __('Content Right Bottom', 'flynt'),
            //     'name' => 'contentHtmlRightBottom',
            //     'type' => 'wysiwyg',
            //     'tabs' => 'visual',
            //     'delay' => 1,
            //     'media_upload' => 1,
            //     'required' => 0,
            // ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColor',
                'type' => 'color_picker'
            ],
        ]
    ];
}
