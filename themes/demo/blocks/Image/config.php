<?php
return [

    'title' => 'Image',
    'category' => 'Layouts',
    'icon' => 'fa fa-image',

    "settings" => [
        "background-image" => [
            "type" => "image",
            "label" => "Image",
            "value" => ""
        ],
        "width" => [
            "type" => "text",
            "label" => "Width",
            "value" => "",
            'placeholder' => 'add % or px at end',
        ],
        'border' => [
            'type' => 'text',
            'label' => 'border',
            'value' => '0',
           
        ],

        'border_color' => [
            'type' => 'color',
            'label' => 'border color',
            'value' => '0',
        ],

        'border_type' => [
            'type' => 'select',
            'label' => 'Border Type (Select one of the following)',
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
        'margin-top' => [
            'type' => 'number',
            'label' => 'Margin Top',
            'value' => '0',
        ],
        'margin-right' => [
            'type' => 'number',
            'label' => 'Margin Right',
            'value' => '0',
        ],
        'margin-bottom' => [
            'type' => 'number',
            'label' => 'Margin Bottom',
            'value' => '0',
        ],
        'margin-left' => [
            'type' => 'number',
            'label' => 'Margin Left',
            'value' => '0',
        ],
       
    ]
];
