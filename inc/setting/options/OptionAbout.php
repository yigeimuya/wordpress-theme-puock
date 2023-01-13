<?php

namespace Puock\Theme\setting\options;

class OptionAbout extends BaseOptionItem
{

    function get_fields(): array
    {
        return [
            'key' => 'about',
            'label' => '关于主题及指引',
            'icon' => 'czs-label-info',
            'fields' => [
                [
                    'id' => 'about_readme',
                    'type' => 'md',
                    'tips' => file_get_contents(PUOCK_ABS_DIR.'/README.md'),
                    'md'=>[
                        'baseUrl'=>'https://raw.githubusercontent.com/Licoy/wordpress-theme-puock/master/',
                    ]
                ]
            ]
        ];
    }
}