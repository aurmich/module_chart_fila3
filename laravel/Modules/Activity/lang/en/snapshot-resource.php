<?php

return [
    'fields' => [
        'id' => [
            'label' => 'ID',
<<<<<<< HEAD
            'tooltip' => 'Unique identifier of the snapshot',
        ],
        'aggregate_uuid' => [
            'label' => 'Aggregate UUID',
            'tooltip' => 'Unique identifier of the aggregate',
        ],
        'aggregate_version' => [
            'label' => 'Aggregate Version',
            'tooltip' => 'Version number of the aggregate',
        ],
        'state' => [
            'label' => 'State',
            'tooltip' => 'Current state of the snapshot',
        ],
        'created_at' => [
            'label' => 'Created At',
            'tooltip' => 'Date and time when the snapshot was created',
        ],
=======
            'tooltip' => 'Unique identifier of the snapshot'
        ],
        'aggregate_uuid' => [
            'label' => 'Aggregate UUID',
            'tooltip' => 'Unique identifier of the aggregate'
        ],
        'aggregate_version' => [
            'label' => 'Aggregate Version',
            'tooltip' => 'Version number of the aggregate'
        ],
        'state' => [
            'label' => 'State',
            'tooltip' => 'Current state of the snapshot'
        ],
        'created_at' => [
            'label' => 'Created At',
            'tooltip' => 'Date and time when the snapshot was created'
        ]
>>>>>>> fb6fbaa2 (move resources/lang to lang)
    ],
    'actions' => [
        'view' => [
            'label' => 'View',
<<<<<<< HEAD
            'tooltip' => 'View snapshot details',
=======
            'tooltip' => 'View snapshot details'
>>>>>>> fb6fbaa2 (move resources/lang to lang)
        ],
        'delete' => [
            'label' => 'Delete',
            'tooltip' => 'Delete this snapshot',
<<<<<<< HEAD
            'confirmation' => 'Are you sure you want to delete this snapshot?',
        ],
=======
            'confirmation' => 'Are you sure you want to delete this snapshot?'
        ]
>>>>>>> fb6fbaa2 (move resources/lang to lang)
    ],
    'filters' => [
        'date' => [
            'label' => 'Date',
<<<<<<< HEAD
            'tooltip' => 'Filter by creation date',
        ],
        'state' => [
            'label' => 'State',
            'tooltip' => 'Filter by state',
        ],
    ],
];
=======
            'tooltip' => 'Filter by creation date'
        ],
        'state' => [
            'label' => 'State',
            'tooltip' => 'Filter by state'
        ]
    ]
]; 
>>>>>>> fb6fbaa2 (move resources/lang to lang)
