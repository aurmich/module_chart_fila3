<?php

return array (
  'resource' => 
  array (
    'name' => 'Invio Email',
    'plural' => 'Invio Email',
  ),
  'navigation' => 
  array (
    'name' => 'Invio Email',
    'plural' => 'Invio Email',
    'group' => 
    array (
      'name' => 'Sistema',
      'description' => 'Funzionalità per l\'invio di email attraverso il sistema di notifiche',
    ),
    'label' => 'Invio Email',
    'icon' => 'notify-email-animated',
    'sort' => 49,
  ),
  'fields' => 
  array (
    'object' => 
    array (
      'description' => 'Oggetto della email',
      'placeholder' => 'Inserisci l\'oggetto',
      'label' => 'Oggetto',
    ),
    'template_id' => 
    array (
      'description' => 'ID del template',
      'placeholder' => 'Seleziona il template email',
      'label' => 'Template ID',
    ),
    'to' => 
    array (
      'description' => 'Destinatario',
      'placeholder' => 'Inserisci l\'indirizzo email',
      'label' => 'Destinatario',
    ),
    'content' => 
    array (
      'description' => 'Contenuto email',
      'placeholder' => 'Inserisci il contenuto',
      'label' => 'Contenuto',
    ),
    'parameters' => 
    array (
      'description' => 'Parametri del template',
      'placeholder' => 'Inserisci i parametri',
      'label' => 'Parametri',
    ),
    'body_html' => 
    array (
<<<<<<< HEAD
      'description' => 'body_html',
<<<<<<< HEAD
=======
      'helper_text' => 'body_html',
<<<<<<< HEAD
>>>>>>> b2a39a21 (- update footer)
=======
      'placeholder' => 'body_html',
<<<<<<< HEAD
>>>>>>> 89a8313a (- update primary colors)
=======
      'label' => 'body_html',
>>>>>>> 85c2afe6 (✨ (SpatieEmail.php): add dynamic theme support for email layout path to enhance customization)
=======
      'description' => 'Contenuto HTML',
      'helper_text' => 'Contenuto HTML dell\'email',
      'placeholder' => 'Inserisci il contenuto HTML',
      'label' => 'Contenuto HTML',
>>>>>>> 67232898 (Resolve Git conflicts in User module and related files)
    ),
    'subject' => 
    array (
      'description' => 'Oggetto email',
      'helper_text' => 'Inserisci l\'oggetto dell\'email',
      'label' => 'Oggetto',
      'placeholder' => 'subject',
    ),
  ),
  'actions' => 
  array (
    'send' => 
    array (
      'label' => 'Invia',
      'tooltip' => 'Invia l\'email al destinatario',
      'success_message' => 'Email inviata con successo',
      'error_message' => 'Errore nell\'invio dell\'email',
    ),
    'preview' => 
    array (
      'label' => 'Anteprima',
      'tooltip' => 'Visualizza l\'anteprima dell\'email',
      'success_message' => 'Anteprima generata',
      'error_message' => 'Errore nella generazione dell\'anteprima',
    ),
    'emailFormActions' => 
    array (
      'label' => 'emailFormActions',
    ),
  ),
  'messages' => 
  array (
    'success' => 'Email inviata con successo',
    'error' => 'Si è verificato un errore durante l\'invio dell\'email',
    'confirmation' => 'Sei sicuro di voler inviare questa email?',
  ),
);
