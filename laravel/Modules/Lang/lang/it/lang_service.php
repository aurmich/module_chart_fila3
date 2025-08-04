<?php

return array (
  'fields' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'language' => 
    array (
      'label' => 'Lingua',
      'placeholder' => 'Seleziona la lingua',
      'help' => 'Lingua attualmente selezionata per l\'interfaccia',
    ),
    'available_languages' => 
    array (
      'label' => 'Lingue Disponibili',
      'placeholder' => 'Elenco lingue',
      'help' => 'Lingue disponibili per la selezione',
    ),
    'value' => 
    array (
      'description' => 'value',
      'helper_text' => 'value',
      'placeholder' => 'value',
      'label' => 'value',
=======
=======
    'id' => 
    array (
      'label' => 'ID',
      'placeholder' => 'Identificativo automatico',
      'help' => 'Identificativo univoco del record, generato automaticamente dal sistema',
      'helper_text' => '',
      'description' => '',
    ),
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    'created_at' => 
=======
    'created_at' =>
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
    'created_at' => 
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
    'created_at' =>
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)
=======
    'created_at' => 
>>>>>>> d23ba493 (add calendar)
    array (
      'label' => 'Data Creazione',
      'placeholder' => 'Seleziona data e ora',
      'help' => 'Data e ora di creazione del record nel sistema',
      'helper_text' => '',
      'description' => '',
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima Modifica',
      'placeholder' => 'Aggiornamento automatico',
      'help' => 'Data e ora dell\'ultima modifica apportata al record',
      'helper_text' => '',
      'description' => '',
    ),
    'deleted_at' => 
    array (
      'label' => 'Data Eliminazione',
      'placeholder' => 'Record attivo',
      'help' => 'Data di eliminazione logica, null se il record è ancora attivo',
    ),
    'created_by' => 
    array (
      'label' => 'Creato da',
      'placeholder' => 'Utente creatore',
      'help' => 'Utente che ha creato questo record',
    ),
    'updated_by' => 
    array (
      'label' => 'Modificato da',
      'placeholder' => 'Ultimo editore',
      'help' => 'Ultimo utente che ha modificato questo record',
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome completo',
      'help' => 'Nome identificativo dell\'elemento o della persona',
      'helper_text' => '',
      'description' => '',
    ),
    'description' => 
    array (
      'label' => 'Descrizione',
      'placeholder' => 'Fornisci una descrizione dettagliata',
      'help' => 'Descrizione completa per maggiori informazioni sull\'elemento',
    ),
    'email' => 
    array (
      'label' => 'Indirizzo Email',
      'placeholder' => 'nome@dominio.it',
      'help' => 'Indirizzo email valido per comunicazioni e accesso al sistema',
      'helper_text' => '',
      'description' => '',
    ),
    'password' => 
    array (
      'label' => 'Password',
      'placeholder' => '••••••••',
      'help' => 'Password di accesso al sistema, minimo 8 caratteri',
    ),
    'password_expires_at' => 
    array (
      'label' => 'Scadenza Password',
      'placeholder' => 'Data scadenza automatica',
      'help' => 'Data dopo la quale la password dovrà essere cambiata',
    ),
    'email_verified_at' => 
    array (
      'label' => 'Email Verificata',
      'placeholder' => 'Verifica in attesa',
      'help' => 'Data di conferma dell\'indirizzo email tramite link di verifica',
    ),
    'remember' => 
    array (
      'label' => 'Ricorda Accesso',
      'placeholder' => 'Mantieni sessione',
      'help' => 'Mantieni l\'utente collegato anche dopo la chiusura del browser',
    ),
    'telefono' => 
    array (
      'label' => 'Numero Telefono',
      'placeholder' => '+39 123 456 7890',
      'help' => 'Numero di telefono fisso per contatti diretti',
    ),
    'mobile' => 
    array (
      'label' => 'Cellulare',
      'placeholder' => '+39 333 123 4567',
      'help' => 'Numero di telefono mobile per comunicazioni urgenti',
    ),
    'fax' => 
    array (
      'label' => 'Numero Fax',
      'placeholder' => '+39 123 456 7891',
      'help' => 'Numero fax per comunicazioni formali e documenti',
    ),
    'indirizzo' => 
    array (
      'label' => 'Indirizzo Completo',
      'placeholder' => 'Via/Piazza, numero civico',
      'help' => 'Indirizzo completo di residenza o sede',
    ),
    'street_number' => 
    array (
      'label' => 'Numero Civico',
      'placeholder' => '123/A',
      'help' => 'Numero civico dell\'indirizzo specificato',
    ),
    'province' => 
    array (
      'label' => 'Provincia',
      'placeholder' => 'Seleziona provincia',
      'help' => 'Provincia di appartenenza dell\'indirizzo',
    ),
    'postal_code' => 
    array (
      'label' => 'Codice Postale',
      'placeholder' => '12345',
      'help' => 'CAP del comune di riferimento',
    ),
    'latitude' => 
    array (
      'label' => 'Latitudine',
      'placeholder' => '45.4642',
      'help' => 'Coordinata geografica latitudine per geolocalizzazione',
    ),
    'longitude' => 
    array (
      'label' => 'Longitudine',
      'placeholder' => '9.1900',
      'help' => 'Coordinata geografica longitudine per geolocalizzazione',
    ),
    'tax_code' => 
    array (
      'label' => 'Codice Fiscale',
      'placeholder' => 'RSSMRA80A01H501U',
      'help' => 'Codice fiscale italiano di 16 caratteri',
    ),
    'vat_number' => 
    array (
      'label' => 'Partita IVA',
      'placeholder' => '12345678901',
      'help' => 'Numero di partita IVA per attività commerciali',
    ),
    'identity_document' => 
    array (
      'label' => 'Documento Identità',
      'placeholder' => 'Carta d\'identità, patente, passaporto',
      'help' => 'Documento di identità valido per il riconoscimento',
    ),
    'health_card' => 
    array (
      'label' => 'Tessera Sanitaria',
      'placeholder' => 'Codice tessera sanitaria',
      'help' => 'Tessera sanitaria nazionale per prestazioni mediche',
    ),
    'isee_certificate' => 
    array (
      'label' => 'Certificato ISEE',
      'placeholder' => 'Carica certificato ISEE',
      'help' => 'Certificato ISEE per valutazione situazione economica',
    ),
    'pregnancy_certificate' => 
    array (
      'label' => 'Certificato Gravidanza',
      'placeholder' => 'Carica certificato medico',
      'help' => 'Certificato medico che attesta lo stato di gravidanza',
    ),
    'certifications' => 
    array (
      'label' => 'Certificazioni',
      'placeholder' => 'Elenca certificazioni possedute',
      'help' => 'Elenco delle certificazioni professionali e qualifiche',
    ),
    'company_name' => 
    array (
      'label' => 'Ragione Sociale',
      'placeholder' => 'Nome dell\'azienda o organizzazione',
      'help' => 'Denominazione ufficiale dell\'azienda o ente',
    ),
    'company_office' => 
    array (
      'label' => 'Sede Legale',
      'placeholder' => 'Indirizzo sede principale',
      'help' => 'Indirizzo della sede legale dell\'azienda',
    ),
    'activity' => 
    array (
      'label' => 'Attività Svolta',
      'placeholder' => 'Descrivi l\'attività principale',
      'help' => 'Descrizione dell\'attività professionale o commerciale',
    ),
    'business_closed' => 
    array (
      'label' => 'Attività Cessata',
      'placeholder' => 'Attività attualmente attiva',
      'help' => 'Indica se l\'attività commerciale è stata chiusa',
    ),
    'competent_health_unit' => 
    array (
      'label' => 'ASL Competente',
      'placeholder' => 'Seleziona ASL di riferimento',
      'help' => 'Azienda Sanitaria Locale di competenza territoriale',
    ),
    'value' => 
    array (
      'label' => 'Valore Singolo',
      'placeholder' => 'Inserisci un valore',
      'help' => 'Valore specifico per il campo corrente',
    ),
    'values' => 
    array (
      'label' => 'Valori Multipli',
      'placeholder' => 'Lista valori separati da virgola',
      'help' => 'Elenco di valori multipli associati all\'elemento',
    ),
    'notes' => 
    array (
      'label' => 'Note Aggiuntive',
      'placeholder' => 'Aggiungi note o commenti',
      'help' => 'Campo libero per note, commenti o osservazioni aggiuntive',
    ),
    'file' => 
    array (
      'label' => 'File Allegato',
      'placeholder' => 'Seleziona file da caricare',
      'help' => 'Carica un file dal tuo dispositivo',
    ),
    'icon' => 
    array (
      'label' => 'Icona',
      'placeholder' => 'heroicon-o-document',
      'help' => 'Icona identificativa per l\'elemento nell\'interfaccia',
    ),
    'isActive' => 
    array (
      'label' => 'Stato Attivo',
      'placeholder' => 'Elemento attivo',
      'help' => 'Indica se l\'elemento è attualmente attivo e visibile',
    ),
    'state' => 
    array (
      'label' => 'Stato Corrente',
      'placeholder' => 'Stato del workflow',
      'help' => 'Stato attuale dell\'elemento nel flusso di lavoro',
      'description' => 'state',
      'helper_text' => 'state',
    ),
    'newstate' => 
    array (
      'label' => 'Nuovo Stato',
      'placeholder' => 'Seleziona nuovo stato',
      'help' => 'Nuovo stato da assegnare all\'elemento',
    ),
    'layout' => 
    array (
      'label' => 'Layout',
      'placeholder' => 'Configurazione layout',
      'help' => 'Configurazione del layout di visualizzazione',
    ),
    'view' => 
    array (
      'label' => 'Modalità Vista',
      'placeholder' => 'Seleziona modalità di visualizzazione',
      'help' => 'Modalità di visualizzazione dei dati nell\'interfaccia',
    ),
    'data_scadenza' => 
    array (
      'label' => 'Data Scadenza',
      'placeholder' => 'Seleziona data di scadenza',
      'help' => 'Data limite entro cui completare l\'operazione',
    ),
    'data_inizio_esecuzione' => 
    array (
      'label' => 'Inizio Esecuzione',
      'placeholder' => 'Data e ora di inizio',
      'help' => 'Data e ora previste per l\'inizio dell\'esecuzione',
    ),
    'data_fine_esecuzione' => 
    array (
      'label' => 'Fine Esecuzione',
      'placeholder' => 'Data e ora di fine',
      'help' => 'Data e ora previste per il completamento dell\'esecuzione',
    ),
    'data_aggiudicazione' => 
    array (
      'label' => 'Data Aggiudicazione',
      'placeholder' => 'Data assegnazione',
      'help' => 'Data in cui è stata effettuata l\'aggiudicazione',
    ),
    'data_pagamento' => 
    array (
      'label' => 'Data Pagamento',
      'placeholder' => 'Data transazione',
      'help' => 'Data in cui è stato effettuato il pagamento',
    ),
    'toggleColumns' => 
    array (
      'label' => 'Gestione Colonne',
      'placeholder' => 'Personalizza tabella',
      'help' => 'Mostra o nascondi le colonne della tabella',
    ),
    'reorderRecords' => 
    array (
      'label' => 'Riordina Elementi',
      'placeholder' => 'Trascina per riordinare',
      'help' => 'Riordina manualmente gli elementi della lista',
    ),
    'resetFilters' => 
    array (
      'label' => 'Azzera Filtri',
      'placeholder' => 'Rimuovi tutti i filtri',
      'help' => 'Rimuove tutti i filtri applicati e mostra tutti i record',
    ),
    'applyFilters' => 
    array (
      'label' => 'Applica Filtri',
      'placeholder' => 'Filtra risultati',
      'help' => 'Applica i filtri selezionati per limitare i risultati',
    ),
    'openFilters' => 
    array (
      'label' => 'Pannello Filtri',
      'placeholder' => 'Apri opzioni filtro',
      'help' => 'Apre il pannello per configurare i filtri di ricerca',
    ),
    'user' => 
    array (
      'label' => 'Utente Associato',
      'placeholder' => 'Seleziona utente',
      'help' => 'Utente associato a questo elemento o operazione',
    ),
    'roles' => 
    array (
      'name' => 
      array (
        'label' => 'Nome Ruolo',
        'placeholder' => 'Inserisci nome del ruolo',
        'help' => 'Nome identificativo del ruolo nel sistema',
        'helper_text' => '',
        'description' => '',
      ),
    ),
    'attributes' => 
    array (
      'label' => 'Attributi Aggiuntivi',
      'placeholder' => 'Configurazione attributi',
      'help' => 'Attributi personalizzati per configurazioni avanzate',
    ),
    'changePassword' => 
    array (
      'label' => 'Cambia Password',
      'placeholder' => 'Richiedi cambio password',
      'help' => 'Forza l\'utente a cambiare la password al prossimo accesso',
    ),
    'session_id' => 
    array (
      'label' => 'ID Sessione',
      'placeholder' => 'Identificativo sessione',
      'help' => 'Identificativo univoco della sessione utente attiva',
    ),
    'recordId' => 
    array (
      'label' => 'ID Record',
      'placeholder' => 'Riferimento record',
      'help' => 'Identificativo del record associato all\'operazione',
    ),
    'workgroup' => 
    array (
      'denominazione' => 
      array (
        'label' => 'Gruppo di Lavoro',
        'placeholder' => 'Seleziona gruppo',
        'help' => 'Gruppo di lavoro responsabile dell\'attività',
      ),
    ),
    'determina' => 
    array (
      'label' => 'Numero Determina',
      'placeholder' => 'Inserisci numero determina',
      'help' => 'Numero della determina dirigenziale di riferimento',
    ),
    'radius' => 
    array (
      'label' => 'Raggio Ricerca',
      'placeholder' => 'Distanza in km',
      'help' => 'Raggio di ricerca in chilometri dal punto selezionato',
    ),
    'unit' => 
    array (
      'label' => 'Unità Misura',
      'placeholder' => 'km, m, mi',
      'help' => 'Unità di misura per distanze e dimensioni',
    ),
    'addresses' => 
    array (
      'label' => 'Indirizzi Strutture',
      'placeholder' => 'Gestisci indirizzi multipli',
      'help' => 'Elenco degli indirizzi delle strutture mediche associate',
    ),
    'schedule' => 
    array (
      'label' => 'Orario Servizio',
      'placeholder' => 'Configura orari apertura',
      'help' => 'Orari di apertura e disponibilità del servizio medico',
      'description' => '',
      'helper_text' => '',
    ),
    'schedule1' => 
    array (
      'label' => 'Orario Alternativo',
      'placeholder' => 'Orario secondario',
      'help' => 'Orario alternativo o di emergenza per il servizio',
    ),
    'selected_studio' => 
    array (
      'label' => 'Studio Selezionato',
      'placeholder' => 'Scegli studio medico',
      'help' => 'Studio medico attualmente selezionato per l\'operazione',
    ),
    'studio_selection' => 
    array (
      'label' => 'Studio',
      'placeholder' => 'Modalità selezione',
      'help' => 'Modalità di selezione dello studio medico',
    ),
    'studio_id' => 
    array (
      'label' => 'Studio Medico',
      'placeholder' => 'Identificativo studio',
      'help' => 'Identificativo univoco dello studio medico',
      'description' => '',
      'helper_text' => '',
    ),
    'selected_product_id' => 
    array (
      'label' => 'Servizio Selezionato',
      'placeholder' => 'ID servizio medico',
      'help' => 'Identificativo del servizio medico selezionato',
      'helper_text' => '',
    ),
    'availability' => 
    array (
      'label' => 'Disponibilità',
      'placeholder' => 'Verifica disponibilità',
      'help' => 'Stato di disponibilità per appuntamenti e servizi',
      'helper_text' => '',
    ),
    'appointment_date' => 
    array (
      'label' => 'Data Appuntamento',
      'placeholder' => 'Seleziona data',
      'help' => 'Data prescelta per l\'appuntamento medico',
      'description' => '',
      'helper_text' => '',
    ),
    'appointment_time' => 
    array (
      'label' => 'Ora Appuntamento',
      'placeholder' => 'Seleziona orario',
      'help' => 'Orario specifico per l\'appuntamento medico',
      'description' => '',
      'helper_text' => '',
    ),
    'polizza_convenzione_pratica_sconto' => 
    array (
      'label' => 'Sconto Convenzione',
      'placeholder' => 'Percentuale sconto applicata',
      'help' => 'Sconto applicato tramite polizza o convenzione attiva',
      'helper_text' => '',
    ),
    'polizza_convenzione_istanza' => 
    array (
      'polizza_convenzione' => 
      array (
        'compagnia_assicurativa' => 
        array (
          'nome' => 
          array (
            'label' => 'Compagnia Assicurativa',
            'placeholder' => 'Nome compagnia',
            'help' => 'Denominazione della compagnia assicurativa',
          ),
        ),
        'nome' => 
        array (
          'label' => 'Nome Polizza',
          'placeholder' => 'Descrizione polizza',
          'help' => 'Nome identificativo della polizza o convenzione',
        ),
      ),
    ),
    'stato_pratica' => 
    array (
      'descrizione' => 
      array (
        'label' => 'Stato Pratica',
        'placeholder' => 'Stato corrente',
        'help' => 'Descrizione dello stato attuale della pratica',
      ),
    ),
    'cliente' => 
    array (
      'nominativo' => 
      array (
        'label' => 'Nominativo Cliente',
        'placeholder' => 'Nome e cognome',
        'help' => 'Nome completo del cliente o paziente',
      ),
    ),
<<<<<<< HEAD
<<<<<<< HEAD
    'roles' => 
    array (
      'name' => 
      array (
        'label' => 'Nome ruolo',
      ),
    ),
    'competent_health_unit' => 
    array (
      'label' => 'Unità sanitaria competente',
    ),
    'tax_code' => 
    array (
      'label' => 'Codice fiscale',
    ),
    'vat_number' => 
    array (
      'label' => 'Partita IVA',
    ),
    'company_office' => 
    array (
      'label' => 'Sede aziendale',
    ),
    'business_closed' => 
    array (
      'label' => 'Attività chiusa',
    ),
    'company_name' => 
    array (
      'label' => 'Nome azienda',
    ),
    'street_number' => 
    array (
      'label' => 'Numero civico',
    ),
    'province' => 
    array (
      'label' => 'Provincia',
    ),
    'postal_code' => 
    array (
      'label' => 'CAP',
    ),
    'fax' => 
    array (
      'label' => 'Fax',
    ),
    'mobile' => 
    array (
      'label' => 'Cellulare',
    ),
    'notes' => 
    array (
      'label' => 'Note',
    ),
    'activity' => 
    array (
      'label' => 'Attività',
    ),
    'determina' => 
    array (
      'label' => 'Determina',
    ),
    'data_aggiudicazione' => 
    array (
      'label' => 'Data aggiudicazione',
    ),
    'updated_by' => 
    array (
      'description' => 'updated_by',
      'helper_text' => 'updated_by',
      'placeholder' => 'updated_by',
      'label' => 'updated_by',
    ),
    'created_by' => 
    array (
      'description' => 'created_by',
      'helper_text' => 'created_by',
      'placeholder' => 'created_by',
      'label' => 'created_by',
    ),
    'layout' => 
    array (
      'label' => 'layout',
    ),
    'newstate' => 
    array (
      'description' => 'newstate',
      'helper_text' => 'newstate',
      'placeholder' => 'newstate',
      'label' => 'newstate',
    ),
    'icon' => 
    array (
      'description' => 'icon',
      'label' => 'icon',
      'placeholder' => 'icon',
      'helper_text' => 'icon',
    ),
    'user' => 
    array (
      'label' => 'user',
    ),
    'attributes' => 
    array (
      'label' => 'attributes',
    ),
    '946595X2254X48249SQ01' => 
    array (
      'label' => '946595X2254X48249SQ01',
    ),
    '946595X2255X48257SQ01' => 
    array (
      'label' => '946595X2255X48257SQ01',
    ),
    '946595X2256X48262SQ01' => 
    array (
      'label' => '946595X2256X48262SQ01',
    ),
    '946595X2257X48264' => 
    array (
      'label' => '946595X2257X48264',
    ),
    '946595X2257X48265SQ01' => 
    array (
      'label' => '946595X2257X48265SQ01',
    ),
    '946595X2258X48268SQ01' => 
    array (
      'label' => '946595X2258X48268SQ01',
    ),
    '946595X2259X48269SQ01' => 
    array (
      'label' => '946595X2259X48269SQ01',
    ),
    '946595X2259X48843SQ01' => 
    array (
      'label' => '946595X2259X48843SQ01',
    ),
    '946595X2259X48847SQ01' => 
    array (
      'label' => '946595X2259X48847SQ01',
    ),
    '946595X2259X48270SQ01' => 
    array (
      'label' => '946595X2259X48270SQ01',
    ),
    '946595X2259X48850SQ01' => 
    array (
      'label' => '946595X2259X48850SQ01',
    ),
    '946595X2259X48852SQ01' => 
    array (
      'label' => '946595X2259X48852SQ01',
    ),
    '946595X2259X48271SQ01' => 
    array (
      'label' => '946595X2259X48271SQ01',
    ),
    '946595X2259X48869SQ01' => 
    array (
      'label' => '946595X2259X48869SQ01',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
    ),
    'state' => 
=======
=======
    'individuale_spread_money' => 
>>>>>>> 15cb84fb (fix collisions)
=======
    'individuale_spread_money' =>
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)
    array (
      'label' => 'individuale_spread_money',
=======
>>>>>>> d23ba493 (add calendar)
    ),
    'state' => 
    array (
      'label' => 'state',
      'description' => 'state',
      'helper_text' => 'state',
      'placeholder' => 'state',
    ),
    'changePassword' => 
    array (
      'label' => 'changePassword',
    ),
    'recordId' => 
    array (
      'description' => 'recordId',
      'label' => 'recordId',
      'placeholder' => 'recordId',
      'helper_text' => 'recordId',
    ),
    'session_id' => 
    array (
      'description' => 'session_id',
      'label' => 'session_id',
      'placeholder' => 'session_id',
      'helper_text' => 'session_id',
    ),
    'pregnancy_certificate' => 
    array (
      'label' => 'pregnancy_certificate',
    ),
    'isee_certificate' => 
    array (
      'label' => 'isee_certificate',
    ),
    'health_card' => 
    array (
      'label' => 'health_card',
    ),
    'identity_document' => 
    array (
      'label' => 'Documento di identità',
      'placeholder' => 'Inserisci documento di identità',
      'tooltip' => 'Documento di identità valido',
    ),
    'certifications' => 
    array (
      'label' => 'Certificazioni',
      'description' => 'Certificazioni',
      'helper_text' => 'Elenco delle certificazioni',
      'placeholder' => 'Inserisci le certificazioni',
    ),
    'schedule' => 
    array (
      'label' => 'Orario',
      'description' => 'Orario',
      'helper_text' => 'Orario di lavoro o appuntamento',
      'placeholder' => 'Inserisci l\'orario',
    ),
    'addresses' => 
    array (
      'label' => 'Indirizzi',
      'description' => 'Indirizzi',
      'helper_text' => 'Elenco degli indirizzi',
      'placeholder' => 'Inserisci gli indirizzi',
    ),
    'view' => 
    array (
      'label' => 'Vista',
      'description' => 'Vista',
      'helper_text' => 'Modalità di visualizzazione',
      'placeholder' => 'Seleziona la vista',
    ),
    'selected_studio' => 
    array (
      'description' => 'selected_studio',
      'helper_text' => 'selected_studio',
      'label' => 'selected_studio',
      'placeholder' => 'selected_studio',
    ),
    'studio_selection' => 
    array (
      'description' => 'studio_selection',
      'helper_text' => 'studio_selection',
      'placeholder' => 'studio_selection',
      'label' => 'studio_selection',
    ),
    'selected_product_id' => 
    array (
      'description' => 'selected_product_id',
      'helper_text' => 'selected_product_id',
      'placeholder' => 'selected_product_id',
      'label' => 'selected_product_id',
    ),
    'studio_id' => 
    array (
      'description' => 'studio_id',
      'helper_text' => 'studio_id',
      'placeholder' => 'studio_id',
      'label' => 'studio_id',
    ),
    'availability' => 
    array (
      'description' => 'availability',
    ),
    'schedule1' => 
    array (
      'description' => 'schedule1',
      'helper_text' => 'schedule1',
      'placeholder' => 'schedule1',
      'label' => 'schedule1',
    ),
    'appointment_date' => 
    array (
      'description' => 'appointment_date',
      'helper_text' => 'appointment_date',
      'placeholder' => 'appointment_date',
      'label' => 'appointment_date',
    ),
    'appointment_time' => 
    array (
      'description' => 'appointment_time',
      'helper_text' => 'appointment_time',
      'placeholder' => 'appointment_time',
      'label' => 'appointment_time',
    ),
    'change-password' => 
    array (
      'label' => 'change-password',
=======
    'certification' => 
    array (
<<<<<<< HEAD
      'label' => 'certification',
>>>>>>> b1a98c55 (✨ (fileupload-array-casting): add new rules for file upload array casting to prevent errors during registration)
=======
      'label' => 'Certificazione',
      'placeholder' => 'Carica certificazione',
      'help' => 'Documento di certificazione professionale',
      'helper_text' => '',
      'description' => '',
>>>>>>> 0cff2983 (📝 (docs): remove unused Blade file for appointments to clean up the codebase)
    ),
  ),
  'actions' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'change_language' => 
    array (
      'label' => 'Cambia Lingua',
      'success' => 'Lingua cambiata con successo',
      'error' => 'Errore durante il cambio lingua',
    ),
    'cancel' => 
    array (
      'label' => 'cancel',
    ),
    'save' => 
=======
    'save' =>
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)
    array (
      'label' => 'save',
    ),
  ),
  'messages' => 
  array (
    'language_changed' => 'Lingua cambiata correttamente',
    'error' => 'Si è verificato un errore durante il cambio lingua',
  ),
  'validation' => 
  array (
    'language_required' => 'La lingua è obbligatoria',
    'language_valid' => 'La lingua selezionata non è valida',
=======
    'save' => 
=======
    'save' =>
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
    'save' => 
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
    'save' => 
>>>>>>> d23ba493 (add calendar)
    array (
      'label' => 'Salva',
      'tooltip' => 'Salva le modifiche',
    ),
    'cancel' => 
    array (
      'label' => 'Annulla',
      'tooltip' => 'Annulla le modifiche',
    ),
=======
  ),
  'actions' => 
  array (
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    'create' => 
    array (
      'label' => 'Crea Nuovo',
      'success' => 'Elemento creato con successo',
      'error' => 'Errore durante la creazione',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'success' => 'Elemento modificato con successo',
      'error' => 'Errore durante la modifica',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
<<<<<<< HEAD
      'tooltip' => 'Elimina questo elemento',
    ),
    'associate' => 
    array (
      'label' => 'Associa',
      'tooltip' => 'Associa ad un elemento esistente',
    ),
    'dissociate' => 
    array (
      'label' => 'Dissocia',
      'tooltip' => 'Rimuovi l\'associazione',
    ),
    'attach' => 
    array (
      'label' => 'Collega',
      'tooltip' => 'Collega ad un elemento esistente',
    ),
    'detach' => 
    array (
      'label' => 'Scollega',
      'tooltip' => 'Rimuovi il collegamento',
    ),
    'authenticate' => 
    array (
      'label' => 'Accedi',
      'tooltip' => 'Effettua l\'accesso',
    ),
    'downloadExample' => 
    array (
      'label' => 'Scarica esempio',
      'tooltip' => 'Scarica un file di esempio',
    ),
    'copy_from_last_year_' => 
    array (
      'label' => 'copy_from_last_year_',
    ),
    'win_action' => 
    array (
      'label' => 'win_action',
    ),
    'bet_action' => 
    array (
      'label' => 'bet_action',
    ),
    'export_xls' => 
    array (
      'label' => 'export_xls',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
<<<<<<< HEAD
=======
    'trova_esclusi' => 
=======
    'trova_esclusi' =>
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)
    array (
      'label' => 'trova_esclusi',
    ),
    'copy_valutatore_id_from_individuale' =>
    array (
      'label' => 'copy_valutatore_id_from_individuale',
    ),
    'populate_year' =>
    array (
      'label' => 'populate_year',
    ),
    'Carica/Aggiorna Dipendenti' =>
    array (
      'label' => 'Carica/Aggiorna Dipendenti',
    ),
    'import_valutatori_' =>
    array (
      'label' => 'import_valutatori_',
    ),
<<<<<<< HEAD
>>>>>>> ce1c80e (.)
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> 3bd2031f (📝 (documentation): resolve merge conflicts in multiple documentation files to ensure clarity and consistency across the project documentation. This improves the overall quality and accessibility of the documentation for future reference.)
=======
>>>>>>> d23ba493 (add calendar)
=======
    'register' => 
    array (
      'label' => 'register',
=======
      'success' => 'Elemento eliminato con successo',
      'error' => 'Errore durante l\'eliminazione',
      'confirmation' => 'Sei sicuro di voler eliminare questo elemento?',
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    ),
<<<<<<< HEAD
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======
    'view' => 
    array (
      'label' => 'Visualizza',
      'tooltip' => 'Visualizza dettagli completi',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 18569998 (✨ (StudioFilterWidget): introduce a new widget for selecting and displaying the current studio for doctors, enhancing user experience by allowing easy studio management)
=======
    'change-password' => 
=======
    'save' => 
>>>>>>> 83367146 (✨ (lang files): add new Italian language translations for appointment)
    array (
      'label' => 'Salva',
      'success' => 'Dati salvati correttamente',
      'error' => 'Errore durante il salvataggio',
    ),
    'cancel' => 
    array (
      'label' => 'Annulla',
      'tooltip' => 'Annulla l\'operazione corrente',
    ),
    'back' => 
    array (
      'label' => 'Indietro',
      'tooltip' => 'Torna alla pagina precedente',
    ),
    'next' => 
    array (
      'label' => 'Avanti',
      'tooltip' => 'Procedi al passo successivo',
    ),
    'previous' => 
    array (
      'label' => 'Precedente',
      'tooltip' => 'Torna al passo precedente',
    ),
    'submit' => 
    array (
      'label' => 'Invia',
      'success' => 'Dati inviati correttamente',
      'error' => 'Errore durante l\'invio',
    ),
    'reset' => 
    array (
      'label' => 'Ripristina',
      'tooltip' => 'Ripristina i valori originali',
      'confirmation' => 'Ripristinare i valori originali?',
    ),
    'search' => 
    array (
      'label' => 'Cerca',
      'placeholder' => 'Inserisci termini di ricerca',
      'tooltip' => 'Avvia la ricerca',
    ),
    'filter' => 
    array (
      'label' => 'Filtra',
      'tooltip' => 'Applica filtri di ricerca',
    ),
    'export' => 
    array (
      'label' => 'Esporta',
      'success' => 'Esportazione completata',
      'error' => 'Errore durante l\'esportazione',
    ),
    'import' => 
    array (
      'label' => 'Importa',
      'success' => 'Importazione completata',
      'error' => 'Errore durante l\'importazione',
    ),
    'refresh' => 
    array (
      'label' => 'Aggiorna',
      'tooltip' => 'Ricarica i dati',
    ),
    'upload' => 
    array (
      'label' => 'Carica File',
      'success' => 'File caricato con successo',
      'error' => 'Errore durante il caricamento',
    ),
    'download' => 
    array (
      'label' => 'Scarica',
      'tooltip' => 'Scarica il file',
    ),
<<<<<<< HEAD
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
=======
    'export_xls' => 
    array (
      'label' => 'Esporta Excel',
      'helper_text' => '',
      'description' => '',
    ),
    'createAnother' => 
    array (
      'label' => 'Crea Altro',
      'helper_text' => '',
      'description' => '',
    ),
<<<<<<< HEAD
>>>>>>> 98867c82 (translations)
=======
    'change-password' => 
    array (
      'label' => 'change-password',
    ),
>>>>>>> 12a79d3a (.)
  ),
  'messages' => 
  array (
    'welcome' => 'Benvenuto nel sistema',
    'loading' => 'Caricamento in corso...',
    'saving' => 'Salvataggio in corso...',
    'saved' => 'Dati salvati correttamente',
    'error' => 'Si è verificato un errore',
    'success' => 'Operazione completata con successo',
    'warning' => 'Attenzione: verificare i dati inseriti',
    'info' => 'Informazione importante',
    'no_data' => 'Nessun dato disponibile',
    'no_results' => 'Nessun risultato trovato',
    'confirm_delete' => 'Confermi l\'eliminazione?',
    'confirm_action' => 'Confermi di voler procedere?',
    'unsaved_changes' => 'Ci sono modifiche non salvate',
    'session_expired' => 'Sessione scaduta, effettua nuovamente l\'accesso',
    'unauthorized' => 'Non autorizzato ad accedere a questa risorsa',
    'forbidden' => 'Accesso negato',
    'not_found' => 'Risorsa non trovata',
    'server_error' => 'Errore del server, riprova più tardi',
    'validation_failed' => 'Errori di validazione nei dati inseriti',
    'operation_successful' => 'Operazione eseguita con successo',
    'operation_failed' => 'Operazione fallita, controllare i dati',
  ),
  'navigation' => 
  array (
    'dashboard' => 'Pannello di Controllo',
    'users' => 'Gestione Utenti',
    'settings' => 'Impostazioni',
    'profile' => 'Profilo Utente',
    'logout' => 'Disconnetti',
    'home' => 'Home',
    'back_to_dashboard' => 'Torna al Pannello',
    'administration' => 'Amministrazione',
    'reports' => 'Report e Statistiche',
    'help' => 'Aiuto e Supporto',
    'documentation' => 'Documentazione',
  ),
  'validation' => 
  array (
    'required' => 'Il campo :attribute è obbligatorio',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido',
    'min' => 'Il campo :attribute deve essere di almeno :min caratteri',
    'max' => 'Il campo :attribute non può superare :max caratteri',
    'unique' => 'Il valore del campo :attribute è già in uso',
    'confirmed' => 'La conferma del campo :attribute non corrisponde',
    'numeric' => 'Il campo :attribute deve essere un numero',
    'date' => 'Il campo :attribute deve essere una data valida',
    'file' => 'Il campo :attribute deve essere un file valido',
    'image' => 'Il campo :attribute deve essere un\'immagine valida',
    'mimes' => 'Il campo :attribute deve essere un file di tipo: :values',
    'size' => 'Il campo :attribute deve essere di :size MB',
  ),
);
