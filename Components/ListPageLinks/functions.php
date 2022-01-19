<?php

namespace Flynt\Components\ListPageLinks;

use Flynt\FieldVariables;
use Flynt\Utils\Asset;

function getACFLayout()
{
    return [
        'name' => 'ListPageLinks',
        'label' => 'List: Page Links',
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
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
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
                        'label' => __('Page Link', 'flynt'),
                        'name' => 'pageLink',
                        'type' => 'page_link',
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
