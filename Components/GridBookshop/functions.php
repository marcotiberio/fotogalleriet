<?php

namespace Flynt\Components\GridBookshop;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'GridBookshop',
        'label' => 'Grid: Bookshop',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'text',
                'media_upload' => 0,
                'instructions' => __('Want to add a headline? And a paragraph? Go ahead! Or just leave it empty and nothing will be shown.', 'flynt'),
                'delay' => 1,
            ],
            [
                'label' => __('Images', 'flynt'),
                'name' => 'imageslTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'collapsed' => '',
                'layout' => 'block',
                'button_label' => 'Add',
                'sub_fields' => [
                    [
                        'label' => __('Image', 'flynt'),
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => __('Image-Format: JPG, PNG.', 'flynt'),
                        'mime_types' => 'jpg,jpeg,png',
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                    [
                        'label' => __('Page Link', 'flynt'),
                        'name' => 'contentLink',
                        'type' => 'link',
                        'return_format' => 'url',
                        'wrapper' => [
                            'width' => 50
                        ],
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'contentTitle',
                        'type' => 'text',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                    [
                        'label' => __('Author', 'flynt'),
                        'name' => 'contentAuthor',
                        'type' => 'text',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                    [
                        'label' => __('Price', 'flynt'),
                        'name' => 'contentPrice',
                        'type' => 'text',
                        'tabs' => 'visual',
                        'media_upload' => 0,
                        'delay' => 1,
                        'wrapper' => [
                            'width' => 33
                        ],
                    ],
                ]
            ]
        ]
    ];
}
