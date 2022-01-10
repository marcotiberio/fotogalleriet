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
                'label' => __('Content Left', 'flynt'),
                'name' => 'contentLeftTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content Left Top', 'flynt'),
                'name' => 'contentHtmlLeftTop',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 1,
                'required' => 0,
            ],
            [
                'label' => __('Content Left Bottom', 'flynt'),
                'name' => 'contentHtmlLeftBottom',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 1,
                'required' => 0,
            ],
            [
                'label' => __('Content Right', 'flynt'),
                'name' => 'contentRightTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content Right Top', 'flynt'),
                'name' => 'contentHtmlRightTop',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 1,
                'required' => 0,
            ],
            [
                'label' => __('Content Right Bottom', 'flynt'),
                'name' => 'contentHtmlRightBottom',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'delay' => 1,
                'media_upload' => 1,
                'required' => 0,
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
