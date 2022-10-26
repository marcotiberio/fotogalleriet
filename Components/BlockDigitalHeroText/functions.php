<?php

namespace Flynt\Components\BlockDigitalHeroText;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockDigitalHeroText',
        'label' => 'Digital Exhibition: Hero Text',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0,
            ],
            [
                'label' => __('Text', 'flynt'),
                'name' => 'content',
                'type' => 'text'
            ],
            [
                'label' => __('Link', 'flynt'),
                'name' => 'linklink',
                'type' => 'link',
                'return_format' => 'array'
            ],
        ]
    ];
}
