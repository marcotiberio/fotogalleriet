<?php

namespace Flynt\Components\BlockQaSidebar;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockQaSidebar',
        'label' => 'Block: QA Sidebar',
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
                'label' => __('QA', 'flynt'),
                'name' => 'qaTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Q&A', 'flynt'),
                'name' => 'qaPanels',
                'type' => 'repeater',
                'layout' => 'row',
                'min' => 1,
                'button_label' => __('Add Q&A', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Question', 'flynt'),
                        'name' => 'panelQuestion',
                        'type' => 'text'
                    ],
                    [
                        'label' => __('Answer', 'flynt'),
                        'name' => 'panelAnswer',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1,
                    ],
                ],
            ],
        ]
    ];
}
