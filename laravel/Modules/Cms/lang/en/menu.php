<?php

return [
    'navigation' => [
        'name' => 'Menu',
        'plural' => 'Menus',
        'group' => [
            'name' => 'Menu Management',
            'description' => 'Manage website menus',
        ],
        'label' => 'Menus',
<<<<<<< HEAD
        'sort' => '57',
=======
<<<<<<< HEAD
        'sort' => '57',
=======
        'sort' => 57,
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
        'icon' => 'heroicon-o-bars-3',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Menu ID',
        ],
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Menu name',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Menu slug',
        ],
        'description' => [
            'label' => 'Description',
            'placeholder' => 'Menu description',
        ],
        'type' => [
            'label' => 'Type',
            'placeholder' => 'Menu type',
            'options' => [
                'main' => 'Main',
                'footer' => 'Footer',
                'sidebar' => 'Sidebar',
            ],
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Menu status',
            'options' => [
                'active' => 'Active',
                'inactive' => 'Inactive',
                'draft' => 'Draft',
            ],
        ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'message' => [
            'label' => 'message',
        ],
        'openFilters' => [
            'label' => 'openFilters',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'delete' => [
            'label' => 'delete',
        ],
        'title' => [
            'label' => 'title',
        ],
<<<<<<< HEAD
=======
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
    ],
    'actions' => [
        'create' => 'Create Menu',
        'edit' => 'Edit Menu',
        'delete' => 'Delete Menu',
        'sort' => 'Sort Items',
        'add_item' => 'Add Item',
    ],
    'messages' => [
        'created' => 'Menu created successfully',
        'updated' => 'Menu updated successfully',
        'deleted' => 'Menu deleted successfully',
        'sorted' => 'Menu items sorted successfully',
        'item_added' => 'Item added successfully',
    ],
    'validation' => [
        'name_required' => 'The name is required',
        'slug_unique' => 'The slug must be unique',
        'type_in' => 'The type must be one of: main, footer, sidebar',
    ],
<<<<<<< HEAD
    'model' => [
        'label' => 'menu.model',
    ],
=======
<<<<<<< HEAD
    'model' => [
        'label' => 'menu.model',
    ],
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
];
