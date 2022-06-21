<?php

namespace Flynt\Components\ListArtistsInvolved;

use Flynt\FieldVariables;
use Flynt\Utils\Asset;

function getACFLayout()
{
    return [
        'name' => 'ListArtistsInvolved',
        'label' => 'List: Artists Involved',
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
                'name' => 'preContentTitle',
                'type' => 'text'
            ],
            [
                'label' => __('Text', 'flynt'),
                'name' => 'textTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Text', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'textarea'
            ],
            [
                'label' => __('Link', 'flynt'),
                'name' => 'textLink',
                'type' => 'link',
                'return_format' => 'array'
            ],
            [
                'label' => __('Page Links', 'flynt'),
                'name' => 'pageLinksTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Page Links', 'flynt'),
                'type' => 'repeater',
                'name' => 'pageLinksRepeater',
                'layout' => 'table',
                'button_label' => __('Add Page Link', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('When', 'flynt'),
                        'name' => 'pageWhen',
                        'type' => 'text',
                    ],
                    [
                        'label' => __('Page Link', 'flynt'),
                        'name' => 'pageLink',
                        'type' => 'link',
                        'return_format' => 'array'
                    ],
                    [
                        'label' => __('Page Link Title', 'flynt'),
                        'name' => 'pageLinkTitle',
                        'type' => 'text',
                        'required' => 1
                    ]
                ]
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',
                'sub_fields' => [
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}
