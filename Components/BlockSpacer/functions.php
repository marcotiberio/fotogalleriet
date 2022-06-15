<?php

namespace Flynt\Components\BlockSpacer;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockSpacer',
        'label' => 'Divider',
        'sub_fields' => [
            [
                [
                    'label' => __('Spacer', 'flynt'),
                    'name' => 'message',
                    'type' => 'message',
                    'message' => __('The divider block add a black line between components.', 'flynt'),
                    'new_lines' => 'wpautop',
                    'esc_html' => 1
                ],
            ],
        ]
    ];
}
