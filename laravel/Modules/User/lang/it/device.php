<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2140a80 (- continuo style landing page;)
return array (
  'navigation' => 
  array (
    'name' => 'Dispositivo',
    'plural' => 'Dispositivi',
    'group' => 
    array (
      'name' => 'Gestione Utenti',
      'description' => 'Gestione dei dispositivi degli utenti',
    ),
    'label' => 'device',
    'sort' => 20,
    'icon' => 'user-device',
  ),
  'fields' => 
  array (
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'id' => 
    array (
      'label' => 'id',
    ),
    'mobile_id' => 
    array (
      'label' => 'mobile_id',
    ),
    'device' => 
    array (
      'label' => 'device',
    ),
    'platform' => 
    array (
      'label' => 'platform',
    ),
    'browser' => 
    array (
      'label' => 'browser',
    ),
    'version' => 
    array (
      'label' => 'version',
    ),
    'is_robot' => 
    array (
      'label' => 'is_robot',
    ),
    'robot' => 
    array (
      'label' => 'robot',
    ),
    'is_desktop' => 
    array (
      'label' => 'is_desktop',
    ),
    'is_mobile' => 
    array (
      'label' => 'is_mobile',
    ),
    'is_tablet' => 
    array (
      'label' => 'is_tablet',
    ),
    'is_phone' => 
    array (
      'label' => 'is_phone',
    ),
    'logout_at' => 
    array (
      'label' => 'logout_at',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
    'login_at' => 
    array (
      'label' => 'login_at',
    ),
=======
>>>>>>> aurmich/dev
=======
>>>>>>> f2140a80 (- continuo style landing page;)
  ),
  'actions' => 
  array (
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
  ),
<<<<<<< HEAD
<<<<<<< HEAD
  'model' => 
  array (
    'label' => 'device.model',
  ),
=======
>>>>>>> aurmich/dev
);
=======
declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Dispositivo',
        'plural' => 'Dispositivi',
        'group' => [
            'name' => 'Gestione Utenti',
            'description' => 'Gestione dei dispositivi degli utenti',
        ],
        'label' => 'device',
        'sort' => 20,
        'icon' => 'user-device',
    ],
    'fields' => [
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'id' => [
            'label' => 'id',
        ],
        'mobile_id' => [
            'label' => 'mobile_id',
        ],
        'device' => [
            'label' => 'device',
        ],
        'platform' => [
            'label' => 'platform',
        ],
        'browser' => [
            'label' => 'browser',
        ],
        'version' => [
            'label' => 'version',
        ],
        'is_robot' => [
            'label' => 'is_robot',
        ],
        'robot' => [
            'label' => 'robot',
        ],
        'is_desktop' => [
            'label' => 'is_desktop',
        ],
        'is_mobile' => [
            'label' => 'is_mobile',
        ],
        'is_tablet' => [
            'label' => 'is_tablet',
        ],
        'is_phone' => [
            'label' => 'is_phone',
        ],
        'logout_at' => [
            'label' => 'logout_at',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
    ],
    'actions' => [
        'import' => [
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
        'create' => [
            'label' => 'create',
        ],
    ],
];
>>>>>>> 54f4fa16 (.)
=======
);
>>>>>>> f2140a80 (- continuo style landing page;)
