<?php

<<<<<<< HEAD
return array (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  'navigation' => 
=======
  'navigation' =>
>>>>>>> d23ba493 (add calendar)
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
=======
declare(strict_types=1);

return [
    'navigation' => [
        'icon' => 'heroicon-o-document-text',
        'label' => 'Template Notifiche',
        'group' => 'Sistema',
        'sort' => 52,
    ],
    
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'helper' => 'Nome univoco del template',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'helper' => 'Oggetto della notifica',
        ],
        'type' => [
            'label' => 'Tipo',
            'helper' => 'Tipo di notifica',
        ],
        'body_text' => [
            'label' => 'Testo Semplice',
            'helper' => 'Versione testo semplice della notifica',
        ],
        'body_html' => [
            'label' => 'HTML',
            'helper' => 'Versione HTML della notifica',
        ],
        'preview_data' => [
            'label' => 'Dati di Anteprima',
            'helper' => 'Dati JSON per l\'anteprima',
        ],
    ],
    
    'columns' => [
        'name' => 'Nome',
        'subject' => 'Oggetto',
        'type' => 'Tipo',
        'created_at' => 'Creato il',
        'updated_at' => 'Aggiornato il',
    ],
    
    'actions' => [
        'preview' => 'Anteprima',
    ],
    
    'enums' => [
        'notification_type' => [
            'email' => 'Email',
            'sms' => 'SMS',
            'push' => 'Notifica Push',
        ],
    ],
];
>>>>>>> 61a631a5 (✨ (lang_service.php, PreviewAttachment.php, IconMediaColumn.php, NotificationType.php, SpatieEmail.php, NotificationTemplateResource.php, ListMailTemplates.php, PreviewNotificationTemplate.php, NotificationTemplate.php, RecordNotification.php, notification-templates.md): add new features including language support for new document types, a preview attachment page, and notification templates with improved structure and functionality)
