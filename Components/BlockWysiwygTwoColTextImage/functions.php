<?php

namespace Flynt\Components\BlockWysiwygTwoColTextImage;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockWysiwygTwoColTextImage',
        'label' => 'Block: Wysiwyg Two Columns (Text/Image)',
        'sub_fields' => [
            [
                'label' => __('Content Left', 'flynt'),
                'name' => 'contentLeftTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content Left', 'flynt'),
                'name' => 'contentHtmlLeft',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 0,
                'media_upload' => 0,
                'required' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, SVG.', 'flynt'),
                'required' => 1,
                'mime_types' => 'jpg,jpeg,png,svg',
                'wrapper' => [
                    'width' => '50',
                ]
            ],
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
