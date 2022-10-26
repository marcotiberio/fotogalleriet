<?php

namespace Flynt\Components\BlockDigitalWysiwyg;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockDigitalWysiwyg',
        'label' => 'Digital Exhibition: Text Editor',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'required' => 1,
            ]
        ]
    ];
}
