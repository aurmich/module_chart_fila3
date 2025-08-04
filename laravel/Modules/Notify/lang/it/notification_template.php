<?php

return array (
<<<<<<< HEAD
<<<<<<< HEAD
  'navigation' => 
  array (
    'icon' => 'heroicon-o-document-text',
    'label' => 'Template Notifiche',
    'group' => 'Sistema',
    'sort' => 52,
  ),
  'fields' => 
  array (
    'name' => 
    array (
      'label' => 'Nome',
      'helper' => 'Nome univoco del template',
    ),
    'subject' => 
    array (
      'label' => 'Oggetto',
      'helper' => 'Oggetto della notifica',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'helper' => 'Tipo di notifica',
    ),
    'body_text' => 
    array (
      'label' => 'Testo Semplice',
      'helper' => 'Versione testo semplice della notifica',
    ),
    'body_html' => 
    array (
      'label' => 'HTML',
      'helper' => 'Versione HTML della notifica',
    ),
    'preview_data' => 
    array (
      'label' => 'Dati di Anteprima',
      'helper' => 'Dati JSON per l\'anteprima',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
  ),
  'columns' => 
  array (
    'name' => 'Nome',
    'subject' => 'Oggetto',
    'type' => 'Tipo',
    'created_at' => 'Creato il',
    'updated_at' => 'Aggiornato il',
  ),
  'actions' => 
  array (
    'preview' => 'Anteprima',
  ),
  'enums' => 
  array (
    'notification_type' => 
    array (
      'email' => 'Email',
      'sms' => 'SMS',
      'push' => 'Notifica Push',
=======
  'navigation' =>
=======
  'navigation' => 
>>>>>>> 15cb84fb (fix collisions)
  array (
    'icon' => 'icona-template-notifica',
    'sort' => 52,
    'group' => 'notification template.navigation',
    'label' => 'notification template.navigation',
  ),
  'fields' => 
  array (
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
>>>>>>> 54f4fa16 (.)
    ),
  ),
);
