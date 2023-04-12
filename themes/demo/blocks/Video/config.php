<?php

return [
    'title' => 'Video',
    'category' => 'Layouts',
    'icon' => 'fa fa-play',

    "settings" => [
        "video_src" => [
            "type" => "video/mp4",
            "label" => "Video Src",
            "value" => "",
            "placeholder" => "Video Source Link",
        ],
        "width" => [
            "type" => "text",
            "label" => "Width",
            "value" => "320px"
        ],
        "autoplay" => [
            "type" => "yes_no",
            "label" => "Autoplay",
            "value" => "0"
        ],
        "controls" => [
            "type" => "yes_no",
            "label" => "Controls",
            "value" => "0"
        ],
        "loop" => [
            "type" => "yes_no",
            "label" => "Loop",
            "value" => "0"
        ],
        "mute" => [
            "type" => "yes_no",
            "label" => "Mute",
            "value" => "0"
        ],
        "height" => [
            "type" => "text",
            "label" => "height",
            "value" => "240px"
        ],
        'border' => [
            'type' => 'text',
            'label' => 'border',
            'value' => '0',
            'placeholder' => 'add % or px at end',
        ],

        'border_color' => [
            'type' => 'color',
            'label' => 'border color',
            'value' => '0',
        ],

        'border_type' => [
            'type' => 'select',
            'label' => 'border color',
            'type' => 'select',
            'label' => 'Select one of the following',
            'options' => ['dashed', 'solid', 'dotted']
        ],
        'top' => [
            'type' => 'number',
            'label' => 'Border Radius Top',
            'value' => '0',
        ],
        'right' => [
            'type' => 'number',
            'label' => 'Border Radius Right',
            'value' => '0',
        ],
        'bottom' => [
            'type' => 'number',
            'label' => 'Border Radius Bottom',
            'value' => '0',
        ],
        'left' => [
            'type' => 'number',
            'label' => 'Border Radius Left',
            'value' => '0',
        ],
       
    ]
];