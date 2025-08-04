<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
declare(strict_types=1);

return [
    'navigation' => [
        'name' => 'Menu',
        'plural' => 'Menu',
        'group' => [
            'name' => 'Gestione Menu',
            'description' => 'Gestione dei menu del sito',
        ],
        'label' => 'Menu',
        'sort' => 57,
        'icon' => 'heroicon-o-bars-3',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => 'ID del menu',
            'tooltip' => 'Identificatore univoco del menu',
            'description' => 'Chiave primaria del menu nel database',
            'helper_text' => '',
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Nome del menu',
            'tooltip' => 'Nome identificativo del menu',
            'description' => 'Nome visualizzato per il menu',
            'helper_text' => '',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Slug del menu',
            'tooltip' => 'Identificatore URL-friendly',
            'description' => 'Slug utilizzato negli URL per identificare il menu',
            'helper_text' => '',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Descrizione del menu',
            'tooltip' => 'Descrizione dettagliata del menu',
            'description' => 'Testo descrittivo del contenuto del menu',
            'helper_text' => '',
        ],
        'type' => [
            'label' => 'Tipo',
            'placeholder' => 'Tipo di menu',
            'tooltip' => 'Categoria del menu',
            'description' => 'Tipologia di menu (principale, footer, sidebar)',
            'helper_text' => '',
            'options' => [
                'main' => 'Principale',
                'footer' => 'Footer',
                'sidebar' => 'Barra laterale',
            ],
        ],
        'status' => [
            'label' => 'Stato',
            'placeholder' => 'Stato del menu',
            'tooltip' => 'Stato di pubblicazione del menu',
            'description' => 'Stato corrente del menu (attivo, inattivo, bozza)',
            'helper_text' => '',
            'options' => [
                'active' => 'Attivo',
                'inactive' => 'Inattivo',
                'draft' => 'Bozza',
            ],
        ],
        'toggleColumns' => [
            'label' => 'Mostra/Nascondi Colonne',
            'placeholder' => 'Gestisci visibilità colonne',
            'tooltip' => 'Controlla la visibilità delle colonne',
            'description' => 'Azione per mostrare o nascondere le colonne della tabella',
            'helper_text' => '',
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Inserisci un messaggio',
            'tooltip' => 'Messaggio informativo',
            'description' => 'Messaggio di sistema o comunicazione',
            'helper_text' => '',
        ],
        'openFilters' => [
            'label' => 'Apri Filtri',
            'placeholder' => 'Clicca per aprire i filtri',
            'tooltip' => 'Mostra i filtri disponibili',
            'description' => 'Azione per aprire il pannello dei filtri',
            'helper_text' => '',
        ],
        'applyFilters' => [
            'label' => 'Applica Filtri',
            'placeholder' => 'Clicca per applicare',
            'tooltip' => 'Applica i filtri selezionati',
            'description' => 'Azione per applicare i filtri configurati',
            'helper_text' => '',
        ],
        'resetFilters' => [
            'label' => 'Azzera Filtri',
            'placeholder' => 'Clicca per azzerare',
            'tooltip' => 'Rimuove tutti i filtri applicati',
            'description' => 'Azione per rimuovere tutti i filtri attivi',
            'helper_text' => '',
        ],
        'reorderRecords' => [
            'label' => 'Riordina Elementi',
            'placeholder' => 'Trascina per riordinare',
            'tooltip' => 'Riordina la sequenza degli elementi',
            'description' => 'Azione per modificare l\'ordine dei record',
            'helper_text' => '',
        ],
        'delete' => [
            'label' => 'Elimina',
            'placeholder' => 'Conferma eliminazione',
            'tooltip' => 'Rimuove definitivamente l\'elemento',
            'description' => 'Azione per eliminare il record selezionato',
            'helper_text' => '',
        ],
        'title' => [
            'label' => 'Titolo',
            'placeholder' => 'Inserisci il titolo',
            'tooltip' => 'Titolo del menu',
            'description' => 'Titolo principale del menu',
            'helper_text' => '',
        ],
    ],
    'actions' => [
        'create' => 'Crea Menu',
        'edit' => 'Modifica Menu',
        'delete' => 'Elimina Menu',
        'sort' => 'Ordina Voci',
        'add_item' => 'Aggiungi Voce',
    ],
    'messages' => [
        'created' => 'Menu creato con successo',
        'updated' => 'Menu aggiornato con successo',
        'deleted' => 'Menu eliminato con successo',
        'sorted' => 'Voci del menu ordinate con successo',
        'item_added' => 'Voce aggiunta con successo',
    ],
    'validation' => [
        'name_required' => 'Il nome è obbligatorio',
        'slug_unique' => 'Lo slug deve essere unico',
        'type_in' => 'Il tipo deve essere uno tra: main, footer, sidebar',
    ],
    'model' => [
        'label' => 'Modello Menu',
        'tooltip' => 'Modello dati del menu',
        'description' => 'Rappresentazione del modello del menu nel sistema',
    ],
];
<<<<<<< HEAD
=======
=======
return array (
  'navigation' => 
  array (
    'name' => 'Menu',
    'plural' => 'Menu',
    'group' => 
    array (
      'name' => 'Gestione Menu',
      'description' => 'Gestione dei menu del sito',
    ),
    'label' => 'Menu',
    'sort' => 57,
    'icon' => 'heroicon-o-bars-3',
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
      'placeholder' => 'ID del menu',
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Nome del menu',
    ),
    'slug' => 
    array (
      'label' => 'Slug',
      'placeholder' => 'Slug del menu',
    ),
    'description' => 
    array (
      'label' => 'Descrizione',
      'placeholder' => 'Descrizione del menu',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'placeholder' => 'Tipo di menu',
      'options' => 
      array (
        'main' => 'Principale',
        'footer' => 'Footer',
        'sidebar' => 'Barra laterale',
      ),
    ),
    'status' => 
    array (
      'label' => 'Stato',
      'placeholder' => 'Stato del menu',
      'options' => 
      array (
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
        'draft' => 'Bozza',
      ),
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'message' => 
    array (
      'label' => 'message',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'title' => 
    array (
      'label' => 'title',
    ),
  ),
  'actions' => 
  array (
    'create' => 'Crea Menu',
    'edit' => 'Modifica Menu',
    'delete' => 'Elimina Menu',
    'sort' => 'Ordina Voci',
    'add_item' => 'Aggiungi Voce',
  ),
  'messages' => 
  array (
    'created' => 'Menu creato con successo',
    'updated' => 'Menu aggiornato con successo',
    'deleted' => 'Menu eliminato con successo',
    'sorted' => 'Voci del menu ordinate con successo',
    'item_added' => 'Voce aggiunta con successo',
  ),
  'validation' => 
  array (
    'name_required' => 'Il nome è obbligatorio',
    'slug_unique' => 'Lo slug deve essere unico',
    'type_in' => 'Il tipo deve essere uno tra: main, footer, sidebar',
  ),
  'model' => 
  array (
    'label' => 'menu.model',
  ),
);
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
