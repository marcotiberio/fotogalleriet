<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockFeaturedPost\getACFLayout(),
                    Components\BlockImage\getACFLayout(),
                    Components\BlockImageText\getACFLayout(),
                    Components\BlockShortcode\getACFLayout(),
                    Components\BlockTempClosed\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                    Components\GridArchive\getACFLayout(),
                    Components\GridBookshop\getACFLayout(),
                    Components\GridImageText\getACFLayout(),
                    Components\GridPostsLatest\getACFLayout(),
                    Components\GridLearnSelector\getACFLayout(),
                    Components\GridPostsSelector\getACFLayout(),
                    Components\GridVisitorsSelector\getACFLayout(),
                    Components\SliderImages\getACFLayout(),
                    Components\BlockWysiwygSidebar\getACFLayout(),
                    Components\BlockWysiwygTwoCol\getACFLayout(),
                    Components\BlockWysiwygTwoColTextImage\getACFLayout(),
                    Components\FormContactForm7\getACFLayout(),
                    Components\FormNewsletter\getACFLayout(),
                    Components\SliderImagesCentered\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page'
                ]
            ]
        ]
    ]);
});
