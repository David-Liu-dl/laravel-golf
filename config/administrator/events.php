<?php
use App\Event;

return [

    'title' => 'Event',
    'heading' => 'Event Managing',
    'single' => 'Event',
    'model' => Event::class,

    'columns' => [
        'id' => array(
            'title' => 'Id',
            'editable' => false,
        ),
        'title' => [
            'title' => 'Title',
        ],
        'price' => [
            'price' => 'Price',
        ],
        'address' => [
            'address' => 'Address',
        ],
        'introduction' => [
            'introduction' => 'Introduction',
        ],
        'availability' => [
            'availability' => 'Availability',
        ],
        'date' => [
            'date' => 'Date',
        ],
        'created_at',
        'cover' => array(
            'title' => 'Cover',
            'output' => '<img src="/uploads/(:value)" width="200"/>',
        ),
        'picture' => array(
            'title' => 'Picture',
            'output' => '<img src="/uploads/(:value)" width="200" />',
        ),
//        'body' => [
//            'title' => 'Content',
//            'sortable' => false,
//            'output' => function($value)
//            {
//                return str_limit($value);
//            },
//        ],
//        'user_name' => [
//            'title' => "Author",
//            'relationship' => 'user', //this is the name of the Eloquent relationship method!
//            'select' => "(:table).name",
//        ],
//        'created_at',
//
//        'operation' => [
//            'title'  => '管理',
//            'output' => function ($value, $model) {
//                return $value;
//            },
//            'sortable' => false,
//        ],
    ],

    'edit_fields' => [
        'price' => array(
            'type' => 'number',
            'title' => 'Price',
            'symbol' => '$', //optional, defaults to ''
            'decimals' => 2, //optional, defaults to 0
            'thousands_separator' => ',', //optional, defaults to ','
            'decimal_separator' => '.', //optional, defaults to '.'
        ),
        'availability' => array(
            'type' => 'bool',
            'title' => 'Availability',
        ),
        'date' => array(
            'type' => 'date',
            'title' => 'Date',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
        ),
        'cover' => array(
            'title' => 'Cover',
            'type' => 'image',
            'location' => public_path() . '/uploads/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'display_raw_value' => false,
        ),
        'picture' => array(
            'title' => 'Image',
            'type' => 'image',
            'location' => public_path() . '/uploads/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'display_raw_value' => false,
        ),




    ],

    'filters' => [
        'title' => [
            'title' => 'Tittle',
        ],
        'availability' => [
            'title' => 'Availability',
            'type' => 'bool'
        ]
    ],

];