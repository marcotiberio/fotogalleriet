<?php

namespace Flynt\Components\BlockTempClosed;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockTempClosed',
        'label' => 'Block: Temporarily Closed',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Image', 'flynt'),
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => __('Image-Format: JPG, PNG, GIF.', 'flynt'),
                'required' => 1,
                'mime_types' => 'gif,jpg,jpeg,png'
            ],
        ]
    ];
}
