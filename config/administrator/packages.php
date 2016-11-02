<?php
use App\Package;

return [

    'title' => 'Packages',
    'heading' => 'Packages Managing',
    'single' => 'Packages',
    'model' => Package::class,

    'columns' => [
        'id' => array(
            'title' => 'Id',
            'editable' => false,
        ),
        'title' => [
            'Title' => 'Title',
        ],
        'description' => [
            'description' => 'Description',
        ],
        'features' => [
            'features' => 'Feature',
        ],
        'video_url' => [
            'video_url' => 'Video',
        ],
        'pic_url' => [
            'pic_url' => 'Image',
        ],
        'price' => [
            'price' => 'Price',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'title' => array(
            'type' => 'text', 
            'title' => 'Title',
            'limit' => 50, 
        ),
        'description' => array(
            'type' => 'textarea',
            'title' => 'Description',
            'limit' => 400, 
            'height' => 50, 
        ),
        
        'price' => array(
            'type' => 'number',
            'title' => 'Price',
            'symbol' => '$', 
            'decimals' => 2, 
            'thousands_separator' => ',', 
            'decimal_separator' => '.', 
        ),
        'video_url' => array(
            'type' => 'textarea', 
            'title' => 'Video URL',
            'limit' => 300, 
            'height' => 50,
        ),
        'features' => array(
            'type' => 'textarea',
            'title' => 'Features',
            'limit' => 300, 
            'height' => 200, 
        ),
        'pic_url' => array(
            'title' => 'Image',
            'type' => 'image',
            'naming' => 'random',
            'location' => public_path().'/uploads/',
            'size_limit' => 2
        ),
        
    ],

    'filters' => [
        'title' => [
            'title' => 'title',
        ],
    ],

];