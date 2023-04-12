<?php

return [
    'title' => 'Divider',
    'category' => 'Layouts',
    'icon' => 'fa fa-minus-square-o',

    "settings" => [
        "color"=>[
            'type' => 'color',
            'label' => 'border color',
            'value' => '',
        ],
        "width" => [
            "type" => "text",
            "label" => "Width",
            "value" => "",
            'placeholder' => 'add % or px at end',
        ],
        'height' => [
            'type' => 'number',
            'label' => 'Height',
            'value' => '2',
        ],
        'opacity' => [
            'type' => 'number',
            'label' => 'Opacity',
            'value' => '1',
        ],
        'margin-top' => [
            'type' => 'text',
            'label' => 'Margin Top',
            'value' => '0',
        ],
        'margin-right' => [
            'type' => 'text',
            'label' => 'Margin Right',
            'value' => '0',
        ],
        'margin-bottom' => [
            'type' => 'text',
            'label' => 'Margin Bottom',
            'value' => '0',
        ],
        'margin-left' => [
            'type' => 'text',
            'label' => 'Margin Left',
            'value' => '0',
        ],
       
    ]
];

