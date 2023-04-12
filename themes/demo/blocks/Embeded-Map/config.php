<?php

return [
    'title' => 'Map',
    'category' => 'Layouts',
    'icon' => 'fa fa-map-o',

    "settings" => [
        "map_src" => [
            "type" => "text",
            "label" => "Embeded Map Source",
            "value" => "",
            "placeholder" => "Embeded Source Link",
        ],
        "map_title" => [
            "type" => "text",
            "label" => "Title",
            "value" => "Title",
            "placeholder" => "Title",
            'icon' => 'fa fa-map-o',
        ],
        'text_color' => [
            'type' => 'color',
            'label' => 'Text color',
            'value' => '',
        ],
        'top' => [
            'type' => 'text',
            'label' => 'Margin Top',
            'value' => '',
            'placeholder' => 'add % or px at end',
        ],
        'right' => [
            'type' => 'text',
            'label' => 'Margin Right',
            'value' => '',
            'placeholder' => 'add % or px at end',
        ],
        'bottom' => [
            'type' => 'text',
            'label' => 'Margin Bottom',
            'value' => '',
            'placeholder' => 'add % or px at end',
        ],
        'left' => [
            'type' => 'text',
            'label' => 'Margin Left',
            'value' => '',
            'placeholder' => 'add % or px at end',
        ],
        'text_align' => [
            'type' => 'select',
            'label' => 'Title Align',
            'type' => 'select',
            'options' => ['center', 'left', 'right','justify']
        ],
    ]
];