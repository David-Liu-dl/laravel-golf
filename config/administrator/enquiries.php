<?php
use App\Enquiry;

return [

    'title' => 'Enquiry',
    'heading' => 'Enquiry Managing',
    'single' => 'Enquiry',
    'model' => Enquiry::class,

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
        'email' => [
            'email' => 'Email',
        ],
        'types' => [
            'types' => 'Type',
        ],
        'comment' => [
            'comment' => 'Comment',
        ],
        'created_at',
    ],

    'edit_fields' => [
        'types',
    ],

    'filters' => [
        'name' => [
            'name' => 'name',
        ],
        'email' => [
            'email' => 'email',
        ],
    ],

];