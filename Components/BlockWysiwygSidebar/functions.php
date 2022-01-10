<?php

namespace Flynt\Components\BlockWysiwygSidebar;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockWysiwygSidebar',
        'label' => 'Block: Wysiwyg Sidebar',
        'sub_fields' => [
            [
                'label' => __('Sidebar', 'flynt'),
                'name' => 'sidebarTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Sidebar', 'flynt'),
                'name' => 'sidebarHtml',
                'type' => 'wysiwyg',
                'media_upload' => 1,
                'required' => 0,
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'media_upload' => 1,
                'required' => 0,
            ]
        ]
    ];
}
