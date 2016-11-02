<?php
use App\Order;

return [

    'title' => 'Order',
    'heading' => 'Order Managing',
    'single' => 'Order',
    'model' => Order::class,

    'columns' => [
        'id' => array(
            'title' => 'Id',
            'editable' => false,
        ),
        'name' => [
            'name' => 'Name',
        ],
        'phone' => [
            'phone' => 'Phone',
        ],
        'hand' => [
            'hand' => 'Hand',
        ],
        'email' => [
            'email' => 'email',
        ],
        'book_block' => [
            'book_block' => 'book_block',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'book_block' => array(
            'type' => 'datetime',
            'title' => 'Booked block',
            'date_format' => 'yy-mm-dd', //optional, will default to this value
            'time_format' => 'HH:00',    //optional, will default to this value
        )
        ,
        'hand' => array(
            'type' => 'enum',
            'title' => 'Hand',
            'options' => array('R', 'L'), //must be an array
        )
    ],

    'filters' => [
        'name' => [
            'name' => 'name',
        ],
        'email' => [
            'email' => 'email',
        ],
        'date' => [
            'date' => 'date',
            'type' => 'datetime'
        ],
    ],

];