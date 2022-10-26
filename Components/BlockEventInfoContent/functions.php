<?php

namespace Flynt\Components\BlockEventInfoContent;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockEventInfoContent',
        'label' => 'Block: Event Info + Content',
        'sub_fields' => [
            [
                'label' => __('Content', 'flynt'),
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'required' => 0,
            ]
        ]
    ];
}
