<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

return [
    'model' => [
        'label' => 'Paziente',
        'plural' => 'Pazienti',
        'description' => 'Gestione anagrafica e informazioni cliniche dei pazienti',
        'icon' => 'heroicon-o-user-group',
    ],
    'navigation' => [
        'label' => 'Anagrafica Pazienti',
        'group' => 'Gestione Pazienti',
        'icon' => 'heroicon-o-users',
        'color' => 'blue',
        'sort' => 3,
        'tooltip' => 'Gestisci l\'anagrafica completa e le informazioni cliniche dei pazienti',
    ],
    'pages' => [
        'index' => [
            'title' => 'Elenco Pazienti Registrati',
            'subtitle' => 'Gestione anagrafica completa',
            'description' => 'Visualizza, modifica ed elimina le schede pazienti registrate nel sistema',
        ],
        'create' => [
            'title' => 'Registrazione Nuovo Paziente',
            'subtitle' => 'Inserimento dati anagrafico-sanitari',
            'description' => 'Compila il modulo guidato per registrare un nuovo paziente con tutti i dati necessari',
        ],
        'edit' => [
            'title' => 'Modifica Scheda Paziente',
            'subtitle' => 'Aggiornamento dati esistenti',
            'description' => 'Modifica le informazioni anagrafiche, sanitarie e documentali del paziente selezionato',
        ],
        'view' => [
            'title' => 'Dettagli Completi Paziente',
            'subtitle' => 'Visualizzazione scheda completa',
            'description' => 'Consulta tutti i dati anagrafici, sanitari e documentali registrati per questo paziente',
        ],
    ],
    'steps' => [
        'search_step' => [
            'label' => 'Ricerca Paziente',
            'description' => 'Cerca un paziente esistente o procedi con nuova registrazione',
            'icon' => 'heroicon-o-magnifying-glass',
            'color' => 'primary',
            'tooltip' => 'Ricerca paziente esistente o inizia nuova registrazione',
            'helper_text' => '',
        ],
        'personal_data_step' => [
            'label' => 'Dati Anagrafici',
            'description' => 'Inserisci nome, cognome, codice fiscale e data di nascita',
            'icon' => 'heroicon-o-identification',
            'color' => 'primary',
            'tooltip' => 'Dati anagrafici obbligatori del paziente',
            'helper_text' => 'Tutti i campi anagrafici sono obbligatori e devono corrispondere ai documenti ufficiali',
        ],
        'contacts' => [
            'label' => 'Recapiti e Contatti',
            'description' => 'Inserisci email, telefono e indirizzo di residenza',
            'icon' => 'heroicon-o-phone',
            'color' => 'info',
            'tooltip' => 'Dati di contatto per comunicazioni e appuntamenti',
            'helper_text' => 'I dati di contatto sono essenziali per comunicazioni e appuntamenti',
        ],
        'studio_step' => [
            'label' => 'Selezione Studio',
            'description' => 'Scegli lo studio medico dove ricevere le cure',
            'icon' => 'heroicon-o-building-office-2',
            'color' => 'success',
            'tooltip' => 'Selezione dello studio medico di riferimento',
            'helper_text' => '',
        ],
        'documents_step' => [
            'label' => 'Documenti Ufficiali',
            'description' => 'Carica tessera sanitaria, documento identità e certificati',
            'icon' => 'heroicon-o-document-text',
            'color' => 'success',
            'tooltip' => 'Documenti ufficiali per identificazione e agevolazioni',
            'helper_text' => 'I documenti devono essere in formato PDF, JPG o PNG con dimensione massima 5MB',
        ],
        'pre_visit_step' => [
            'label' => 'Informazioni Pre-Visita',
            'description' => 'Storia clinica e problemi dentali attuali',
            'icon' => 'heroicon-o-clipboard-document-list',
            'color' => 'warning',
            'tooltip' => 'Informazioni pre-visita per preparazione medica',
            'helper_text' => 'Queste informazioni aiutano il medico a preparare meglio la visita',
        ],
        'health' => [
            'label' => 'Stato Salute Generale',
            'description' => 'Patologie, allergie e informazioni mediche rilevanti',
            'icon' => 'heroicon-o-heart',
            'color' => 'danger',
            'tooltip' => 'Informazioni sanitarie per sicurezza del paziente',
            'helper_text' => 'Fornisci informazioni complete su allergie, patologie croniche e farmaci assunti',
        ],
        'date_step' => [
            'label' => 'Selezione Data',
            'description' => 'Scegli la data e l\'orario per il primo appuntamento',
            'icon' => 'heroicon-o-calendar',
            'color' => 'emerald',
            'tooltip' => 'Pianificazione del primo appuntamento',
            'helper_text' => '',
        ],
        'confirm_step' => [
            'label' => 'Conferma Registrazione',
            'description' => 'Rivedi tutti i dati inseriti e conferma la registrazione',
            'icon' => 'heroicon-o-check-circle',
            'color' => 'success',
            'tooltip' => 'Conferma finale della registrazione paziente',
            'helper_text' => 'Verifica che tutti i dati siano corretti prima di confermare',
        ],
        'privacy_step' => [
            'label' => 'Privacy e Consensi',
            'description' => 'Consenso al trattamento dati e comunicazioni marketing',
            'icon' => 'heroicon-o-shield-check',
            'color' => 'info',
            'tooltip' => 'Gestione consensi privacy e marketing',
            'helper_text' => 'Il consenso privacy è obbligatorio per legge, la newsletter è facoltativa',
        ],
    ],
    'fields' => [
        'id' => [
            'label' => 'ID Identificativo Paziente',
            'placeholder' => 'Codice numerico univoco generato automaticamente',
            'tooltip' => 'Identificativo univoco del paziente',
            'helper_text' => '',
            'description' => 'Identificativo univoco del paziente nel sistema',
        ],
        'name' => [
            'label' => 'Nome Completo Paziente',
            'placeholder' => 'Nome e cognome concatenati per visualizzazione',
            'tooltip' => 'Nome completo del paziente',
            'helper_text' => '',
            'description' => 'Nome e cognome completi del paziente',
        ],
        'first_name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome del paziente',
            'tooltip' => 'Nome anagrafico del paziente',
            'helper_text' => '',
            'description' => 'Nome anagrafico del paziente',
            'validation' => [
                'required' => 'Il nome è obbligatorio',
                'min' => 'Il nome deve contenere almeno 2 caratteri',
                'max' => 'Il nome non può superare i 50 caratteri',
                'alpha' => 'Il nome può contenere solo lettere',
            ],
        ],
        'last_name' => [
            'label' => 'Cognome',
            'placeholder' => 'Inserisci il cognome del paziente',
            'tooltip' => 'Cognome anagrafico del paziente',
            'helper_text' => '',
            'description' => 'Cognome anagrafico del paziente',
            'validation' => [
                'required' => 'Il cognome è obbligatorio',
                'min' => 'Il cognome deve contenere almeno 2 caratteri',
                'max' => 'Il cognome non può superare i 50 caratteri',
                'alpha' => 'Il cognome può contenere solo lettere',
            ],
        ],
        'fiscal_code' => [
            'label' => 'Codice Fiscale',
            'placeholder' => 'Inserisci 16 caratteri del codice fiscale (es. RSSMRA80A01H501U)',
            'tooltip' => 'Codice fiscale italiano del paziente',
            'helper_text' => '',
            'description' => 'Codice fiscale per identificazione univoca',
            'validation' => [
                'required' => 'Il codice fiscale è obbligatorio',
                'regex' => 'Il codice fiscale deve essere nel formato italiano corretto (16 caratteri)',
                'unique' => 'Questo codice fiscale è già registrato nel sistema',
            ],
        ],
        'birth_date' => [
            'label' => 'Data di Nascita',
            'placeholder' => 'Seleziona dal calendario la data di nascita',
            'tooltip' => 'Data di nascita del paziente',
            'helper_text' => '',
            'description' => 'Data di nascita per calcolo età e verifiche',
            'validation' => [
                'required' => 'La data di nascita è obbligatoria',
                'date' => 'Inserisci una data valida',
                'before' => 'La data di nascita deve essere anteriore alla data odierna',
                'after' => 'La data di nascita non può essere superiore a 120 anni fa',
            ],
        ],
        'gender' => [
            'label' => 'Genere Anagrafico',
            'placeholder' => 'Seleziona il genere dal menu a tendina',
            'tooltip' => 'Genere anagrafico del paziente',
            'helper_text' => '',
            'description' => 'Genere per statistiche e personalizzazione',
            'options' => [
                'M' => 'Maschio',
                'F' => 'Femmina',
                'X' => 'Non specificato/Altro',
            ],
            'validation' => [
                'required' => 'Il genere è obbligatorio',
                'in' => 'Seleziona un genere valido tra le opzioni disponibili',
            ],
        ],
        'nationality' => [
            'label' => 'Nazionalità',
            'placeholder' => 'Seleziona la nazionalità del paziente',
            'tooltip' => 'Nazionalità del paziente',
            'helper_text' => '',
            'description' => 'Nazionalità per documentazione e statistiche',
        ],
        'years_in_italy' => [
            'label' => 'Anni in Italia',
            'placeholder' => 'Inserisci il numero di anni di residenza in Italia',
            'tooltip' => 'Anni di residenza in Italia',
            'helper_text' => '',
            'description' => 'Anni di residenza per valutazioni ISEE',
        ],
        'email' => [
            'label' => 'Indirizzo Email',
            'placeholder' => 'Inserisci email valida (es. nome@dominio.it)',
            'tooltip' => 'Indirizzo email per comunicazioni',
            'helper_text' => '',
            'description' => 'Indirizzo email per comunicazioni e notifiche',
            'validation' => [
                'required' => 'L\'indirizzo email è obbligatorio',
                'email' => 'Inserisci un indirizzo email valido e funzionante',
                'unique' => 'Questo indirizzo email è già registrato per un altro paziente',
                'max' => 'L\'indirizzo email non può superare i 255 caratteri',
            ],
        ],
        'phone' => [
            'label' => 'Numero di Telefono',
            'placeholder' => 'Inserisci numero completo (es. +39 333 123 4567)',
            'tooltip' => 'Numero di telefono per contatti',
            'helper_text' => '',
            'description' => 'Numero di telefono per contatti urgenti',
            'validation' => [
                'required' => 'Il numero di telefono è obbligatorio',
                'regex' => 'Inserisci un numero di telefono italiano valido',
                'min' => 'Il numero deve contenere almeno 10 cifre',
            ],
        ],
        'address' => [
            'label' => 'Indirizzo Residenza',
            'placeholder' => 'Via/Piazza Nome della Strada, 123',
            'tooltip' => 'Indirizzo di residenza del paziente',
            'helper_text' => '',
            'description' => 'Indirizzo completo di residenza',
            'validation' => [
                'required' => 'L\'indirizzo di residenza è obbligatorio',
                'min' => 'L\'indirizzo deve contenere almeno 10 caratteri',
                'max' => 'L\'indirizzo non può superare i 200 caratteri',
            ],
        ],
        'city' => [
            'label' => 'Città di Residenza',
            'placeholder' => 'Inserisci nome della città',
            'tooltip' => 'Città di residenza del paziente',
            'helper_text' => '',
            'description' => 'Città di residenza per documentazione',
            'validation' => [
                'required' => 'La città è obbligatoria',
                'min' => 'Il nome della città deve contenere almeno 2 caratteri',
                'max' => 'Il nome della città non può superare i 100 caratteri',
            ],
        ],
        'postal_code' => [
            'label' => 'Codice Postale (CAP)',
            'placeholder' => 'Inserisci 5 cifre del CAP (es. 00100)',
            'tooltip' => 'Codice postale di residenza',
            'helper_text' => '',
            'description' => 'Codice postale per documentazione',
            'validation' => [
                'required' => 'Il CAP è obbligatorio',
                'regex' => 'Il CAP deve essere composto da esattamente 5 cifre',
                'numeric' => 'Il CAP deve contenere solo numeri',
            ],
        ],
        'province' => [
            'label' => 'Provincia di Residenza',
            'placeholder' => 'Seleziona la provincia (es. RM, MI, NA)',
            'tooltip' => 'Provincia di residenza del paziente',
            'helper_text' => '',
            'description' => 'Provincia per documentazione e statistiche',
            'validation' => [
                'required' => 'La provincia è obbligatoria',
                'size' => 'La sigla della provincia deve essere di esattamente 2 caratteri',
                'alpha' => 'La provincia deve contenere solo lettere',
            ],
        ],
        'country' => [
            'label' => 'Paese di Residenza',
            'placeholder' => 'Seleziona il paese dal menu',
            'tooltip' => 'Paese di residenza del paziente',
            'helper_text' => '',
            'description' => 'Paese di residenza per documentazione',
        ],
        'country_code' => [
            'label' => 'Codice Paese',
            'placeholder' => 'Codice ISO del paese (es. IT, FR, DE)',
            'tooltip' => 'Codice ISO del paese di residenza',
            'helper_text' => '',
            'description' => 'Codice ISO per documentazione internazionale',
        ],
        'isee_code' => [
            'label' => 'Codice Identificativo ISEE',
            'placeholder' => 'Inserisci codice univoco del certificato ISEE',
            'tooltip' => 'Codice identificativo del certificato ISEE',
            'helper_text' => '',
            'description' => 'Codice per identificazione certificato ISEE',
            'validation' => [
                'alpha_num' => 'Il codice ISEE deve contenere solo lettere e numeri',
                'max' => 'Il codice ISEE non può superare i 20 caratteri',
            ],
        ],
        'isee_value' => [
            'label' => 'Valore Indicatore ISEE',
            'placeholder' => 'Inserisci importo in euro (es. 15000.50)',
            'tooltip' => 'Valore ISEE per agevolazioni economiche',
            'helper_text' => '',
            'description' => 'Valore ISEE per determinazione agevolazioni',
            'validation' => [
                'numeric' => 'Il valore ISEE deve essere un numero valido',
                'min' => 'Il valore ISEE deve essere maggiore di 0',
                'max' => 'Il valore ISEE non può superare i 999999.99 euro',
            ],
        ],
        'isee_expiry_date' => [
            'label' => 'Data Scadenza Certificato ISEE',
            'placeholder' => 'Seleziona data di scadenza dal calendario',
            'tooltip' => 'Data di scadenza del certificato ISEE',
            'helper_text' => '',
            'description' => 'Data scadenza per validità agevolazioni',
            'validation' => [
                'date' => 'Inserisci una data di scadenza valida',
                'after' => 'La data di scadenza deve essere futura per accedere alle agevolazioni',
            ],
        ],
        'health_card' => [
            'label' => 'Scansione Tessera Sanitaria',
            'placeholder' => 'Carica file immagine o PDF della tessera sanitaria',
            'tooltip' => 'Tessera sanitaria per identificazione paziente',
            'helper_text' => '',
            'description' => 'Tessera sanitaria per identificazione e prestazioni',
            'validation' => [
                'required' => 'La tessera sanitaria è obbligatoria per identificazione paziente',
                'file' => 'Carica un file valido',
                'mimes' => 'Formati supportati: JPG, JPEG, PNG, PDF',
                'max' => 'Dimensione massima consentita: 5MB per file',
            ],
        ],
        'identity_document' => [
            'label' => 'Documento di Identità Valido',
            'placeholder' => 'Carica scansione documento identità in corso di validità',
            'tooltip' => 'Documento di identità per verifica anagrafica',
            'helper_text' => '',
            'description' => 'Documento di identità per verifiche anagrafiche',
            'validation' => [
                'required' => 'Il documento di identità è obbligatorio per verifica anagrafica',
                'file' => 'Carica un file valido',
                'mimes' => 'Formati supportati: JPG, JPEG, PNG, PDF',
                'max' => 'Dimensione massima consentita: 5MB per file',
            ],
        ],
        'isee_certificate' => [
            'label' => 'Certificato ISEE Completo',
            'placeholder' => 'Carica certificato ISEE per agevolazioni economiche',
            'tooltip' => 'Certificato ISEE per agevolazioni economiche',
            'helper_text' => '',
            'description' => 'Certificato ISEE per accesso agevolazioni',
            'validation' => [
                'file' => 'Carica un certificato ISEE valido',
                'mimes' => 'Formati supportati: JPG, JPEG, PNG, PDF',
                'max' => 'Dimensione massima consentita: 5MB per file',
            ],
        ],
        'pregnancy_certificate' => [
            'label' => 'Certificato Medico Gravidanza',
            'placeholder' => 'Carica certificato medico attestante stato gravidanza',
            'tooltip' => 'Certificato medico per stato di gravidanza',
            'helper_text' => '',
            'description' => 'Certificato medico per prestazioni speciali',
            'validation' => [
                'file' => 'Carica un certificato medico valido',
                'mimes' => 'Formati supportati: JPG, JPEG, PNG, PDF',
                'max' => 'Dimensione massima consentita: 5MB per file',
            ],
        ],
        'is_pregnant' => [
            'label' => 'Stato di Gravidanza Attuale',
            'placeholder' => 'Indica se la paziente è attualmente in gravidanza',
            'tooltip' => 'Stato di gravidanza per prestazioni speciali',
            'helper_text' => '',
            'description' => 'Stato di gravidanza per valutazioni mediche',
            'options' => [
                1 => 'Sì, attualmente in gravidanza',
                0 => 'No, non in gravidanza',
            ],
        ],
        'last_dental_visit' => [
            'label' => 'Data Ultima Visita Odontoiatrica',
            'placeholder' => 'Seleziona data approssimativa ultima visita dentale',
            'tooltip' => 'Data ultima visita odontoiatrica',
            'helper_text' => '',
            'description' => 'Data ultima visita per anamnesi',
            'validation' => [
                'date' => 'Inserisci una data valida',
                'before_or_equal' => 'La data dell\'ultima visita non può essere futura',
            ],
        ],
        'last_dental_visit_period' => [
            'label' => 'Quando è stata la tua ultima visita dentale?',
            'placeholder' => 'Seleziona il periodo temporale dell\'ultima visita dentale',
            'tooltip' => 'Periodo ultima visita odontoiatrica',
            'helper_text' => '',
            'description' => 'Periodo ultima visita per anamnesi',
        ],
        'dental_problems' => [
            'label' => 'Problemi Odontoiatrici Attuali',
            'placeholder' => 'Descrivi dolori, sensibilità o disturbi dentali attuali',
            'tooltip' => 'Problemi odontoiatrici attuali del paziente',
            'helper_text' => '',
            'description' => 'Problemi dentali per valutazione medica',
            'validation' => [
                'max' => 'La descrizione non può superare i 500 caratteri',
            ],
        ],
        'allergies' => [
            'label' => 'Allergie e Intolleranze',
            'placeholder' => 'Elenca farmaci, alimenti o sostanze che causano allergie',
            'tooltip' => 'Allergie e intolleranze del paziente',
            'helper_text' => '',
            'description' => 'Allergie per sicurezza del paziente',
            'validation' => [
                'max' => 'L\'elenco allergie non può superare i 1000 caratteri',
            ],
        ],
        'chronic_diseases' => [
            'label' => 'Patologie Croniche',
            'placeholder' => 'Indica diabete, ipertensione, cardiopatie o altre patologie croniche',
            'tooltip' => 'Patologie croniche del paziente',
            'helper_text' => '',
            'description' => 'Patologie croniche per valutazioni mediche',
            'validation' => [
                'max' => 'L\'elenco patologie non può superare i 1000 caratteri',
            ],
        ],
        'current_medications' => [
            'label' => 'Farmaci Attualmente Assunti',
            'placeholder' => 'Elenca tutti i farmaci con dosaggio e frequenza',
            'tooltip' => 'Farmaci attualmente assunti dal paziente',
            'helper_text' => '',
            'description' => 'Farmaci per valutazioni di sicurezza',
            'validation' => [
                'max' => 'L\'elenco farmaci non può superare i 1000 caratteri',
            ],
        ],
        'notes' => [
            'label' => 'Note Cliniche Aggiuntive',
            'placeholder' => 'Inserisci altre informazioni mediche rilevanti non specificate sopra',
            'tooltip' => 'Note cliniche aggiuntive del paziente',
            'helper_text' => '',
            'description' => 'Note aggiuntive per valutazioni mediche',
            'validation' => [
                'max' => 'Le note aggiuntive non possono superare i 1500 caratteri',
            ],
        ],
        'children_count' => [
            'label' => 'Figli',
            'placeholder' => 'Inserisci il numero di figli',
            'tooltip' => 'Numero di figli del paziente',
            'helper_text' => '',
            'description' => 'Numero figli per valutazioni ISEE',
        ],
        'privacy_acceptance' => [
            'label' => 'Consenso Trattamento Dati Personali',
            'placeholder' => 'Devo accettare il trattamento dei dati secondo GDPR',
            'tooltip' => 'Consenso al trattamento dei dati personali',
            'helper_text' => '',
            'description' => 'Consenso obbligatorio per GDPR',
            'validation' => [
                'accepted' => 'È obbligatorio accettare l\'informativa sulla privacy per procedere',
            ],
        ],
        'newsletter' => [
            'label' => 'Iscrizione Newsletter Informativa',
            'placeholder' => 'Desidero ricevere comunicazioni periodiche via email',
            'tooltip' => 'Iscrizione newsletter informativa',
            'helper_text' => '',
            'description' => 'Consenso newsletter informativa',
        ],
        'marketing_communications' => [
            'label' => 'Consenso Comunicazioni Marketing',
            'placeholder' => 'Accetto di ricevere offerte commerciali personalizzate',
            'tooltip' => 'Consenso comunicazioni marketing',
            'helper_text' => '',
            'description' => 'Consenso comunicazioni commerciali',
        ],
        'created_at' => [
            'label' => 'Data Registrazione Sistema',
            'placeholder' => 'Timestamp creazione record generato automaticamente',
            'tooltip' => 'Data di registrazione nel sistema',
            'helper_text' => '',
            'description' => 'Data di registrazione per audit trail',
        ],
        'updated_at' => [
            'label' => 'Ultimo Aggiornamento Dati',
            'placeholder' => 'Timestamp ultima modifica generato automaticamente',
            'tooltip' => 'Data ultimo aggiornamento',
            'helper_text' => '',
            'description' => 'Data ultimo aggiornamento per audit trail',
        ],
        'family_members' => [
            'label' => 'Componenti Nucleo Familiare',
            'placeholder' => 'Inserisci il numero di componenti del nucleo familiare',
            'tooltip' => 'Numero componenti nucleo familiare',
            'helper_text' => '',
            'description' => 'Componenti famiglia per valutazioni ISEE',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Registra Nuovo Paziente',
            'modal_heading' => 'Registrazione Paziente',
            'modal_description' => 'Compila tutti i campi obbligatori per registrare un nuovo paziente',
            'success' => 'Paziente registrato con successo nel sistema',
            'error' => 'Errore durante la registrazione del paziente',
        ],
        'edit' => [
            'label' => 'Modifica Dati',
            'modal_heading' => 'Modifica Informazioni Paziente',
            'modal_description' => 'Aggiorna le informazioni del paziente selezionato',
            'success' => 'Dati paziente aggiornati con successo',
            'error' => 'Errore durante l\'aggiornamento dei dati',
        ],
        'view' => [
            'label' => 'Visualizza Dettagli',
            'modal_heading' => 'Scheda Completa Paziente',
            'modal_description' => 'Visualizza tutti i dati del paziente selezionato',
        ],
        'delete' => [
            'label' => 'Elimina Paziente',
            'modal_heading' => 'Conferma Eliminazione',
            'modal_description' => 'Sei sicuro di voler eliminare definitivamente questo paziente?',
            'success' => 'Paziente eliminato dal sistema',
            'error' => 'Errore durante l\'eliminazione',
            'confirmation' => 'Questa operazione non può essere annullata',
        ],
        'approve' => [
            'label' => 'Approva Registrazione',
            'modal_heading' => 'Approva Paziente',
            'modal_description' => 'Conferma l\'approvazione di questa registrazione paziente',
            'success' => 'Registrazione paziente approvata',
            'error' => 'Errore durante l\'approvazione',
        ],
        'reject' => [
            'label' => 'Rifiuta Registrazione',
            'modal_heading' => 'Rifiuta Paziente',
            'modal_description' => 'Indica il motivo del rifiuto della registrazione',
            'success' => 'Registrazione paziente rifiutata',
            'error' => 'Errore durante il rifiuto',
        ],
    ],
    'widgets' => [
        'user_type_registrations_chart' => [
            'heading' => 'Registrazioni Pazienti nel Tempo',
            'description' => 'Grafico che mostra l\'andamento delle registrazioni pazienti',
            'label' => 'Nuove registrazioni',
            'tooltip' => 'Numero di pazienti registrati per periodo',
        ],
        'states_chart' => [
            'heading' => 'Distribuzione Stati Pazienti',
            'description' => 'Grafico che mostra la distribuzione degli stati dei pazienti',
            'label' => 'Stati pazienti',
            'tooltip' => 'Distribuzione dei pazienti per stato',
        ],
    ],
    'states' => [
        'active' => [
            'label' => 'Attivo',
            'description' => 'Paziente attivo nel sistema',
            'tooltip' => 'Il paziente è attivo e può prenotare appuntamenti',
            'color' => 'success',
            'icon' => 'heroicon-o-check-circle',
        ],
        'pending' => [
            'label' => 'In Attesa',
            'description' => 'Paziente in attesa di approvazione',
            'tooltip' => 'Il paziente è in attesa di essere approvato',
            'color' => 'warning',
            'icon' => 'heroicon-o-clock',
        ],
        'inactive' => [
            'label' => 'Non Attivo',
            'description' => 'Paziente non attivo nel sistema',
            'tooltip' => 'Il paziente è stato disattivato',
            'color' => 'danger',
            'icon' => 'heroicon-o-x-circle',
        ],
        'rejected' => [
            'label' => 'Rifiutato',
            'description' => 'Registrazione paziente rifiutata',
            'tooltip' => 'La registrazione del paziente è stata rifiutata',
            'color' => 'danger',
            'icon' => 'heroicon-o-x-mark',
        ],
        'suspended' => [
            'label' => 'Sospeso',
            'description' => 'Paziente sospeso temporaneamente',
            'tooltip' => 'Il paziente è stato sospeso temporaneamente',
            'color' => 'warning',
            'icon' => 'heroicon-o-pause',
        ],
        'integration_requested' => [
            'label' => 'Integrazione Richiesta',
            'description' => 'Richiesta integrazione documentale',
            'tooltip' => 'Il paziente deve integrare la documentazione',
            'color' => 'info',
            'icon' => 'heroicon-o-document-plus',
        ],
        'integration_completed' => [
            'label' => 'Integrazione Completata',
            'description' => 'Integrazione documentale completata',
            'tooltip' => 'Il paziente ha completato l\'integrazione della documentazione',
            'color' => 'success',
            'icon' => 'heroicon-o-document-check',
        ],
    ],
    'messages' => [
        'welcome' => 'Benvenuto nella gestione pazienti',
        'registration_success' => 'Registrazione completata con successo',
        'validation_errors' => 'Controlla i campi evidenziati e riprova',
        'document_uploaded' => 'Documento caricato con successo',
        'document_error' => 'Errore durante il caricamento del documento',
        'empty_state' => 'Nessun paziente registrato nel sistema',
        'search_no_results' => 'Nessun paziente trovato con i criteri di ricerca specificati',
    ],
];
=======
=======
>>>>>>> 54f4fa16 (.)
return array (
  'name' => 'Pazienti',
  'navigation' => 
  array (
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
    'label' => 'Anagrafica Pazienti',
    'group' => 'Pazienti',
    'icon' => 'heroicon-o-users',
    'color' => 'blue',
    'sort' => 3,
    'tooltip' => 'Gestisci l\'anagrafica e le informazioni dei pazienti',
<<<<<<< HEAD
  ),
  'fields' => 
  array (
    'first_name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Inserisci il nome completo',
      'helper_text' => 'Nome del paziente',
      'description' => 'Il nome anagrafico del paziente',
      'tooltip' => 'Deve corrispondere al nome sul documento d\'identità',
=======
    'label' => 'Pazienti',
    'group' => 'Gestione Utenti',
    'icon' => 'saluteora-patient',
    'color' => 'primary',
    'sort' => 7,
    'tooltip' => 'Gestione dei pazienti e delle loro informazioni anagrafiche',
=======
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
  ),
  'fields' => 
  array (
    'first_name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Inserisci il nome completo',
      'helper_text' => 'Nome del paziente',
<<<<<<< HEAD
      'description' => 'Il tuo nome anagrafico',
>>>>>>> 54f4fa16 (.)
=======
      'description' => 'Il nome anagrafico del paziente',
      'tooltip' => 'Deve corrispondere al nome sul documento d\'identità',
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    ),
    'last_name' => 
    array (
      'label' => 'Cognome',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> adac82bd (rebase)
      'description' => 'last_name',
      'helper_text' => 'last_name',
      'placeholder' => 'last_name',
    ),
    'fiscal_code' => 
    array (
      'label' => 'Codice fiscale',
<<<<<<< HEAD
      'placeholder' => 'Inserisci il codice fiscale',
      'help' => 'Codice fiscale come da tessera sanitaria',
      'description' => 'fiscal_code',
      'helper_text' => 'fiscal_code',
    ),
    'birth_date' => 
    array (
      'label' => 'Data di nascita',
      'placeholder' => 'Seleziona la data di nascita',
      'help' => 'Inserisci la data di nascita nel formato gg/mm/aaaa',
      'description' => 'Data di nascita come indicata sul documento d\'identità',
    ),
    'gender' => 
    array (
      'label' => 'Sesso',
      'placeholder' => 'Seleziona il sesso',
      'help' => 'Seleziona il sesso anagrafico',
    ),
    'is_pregnant' => 
    array (
      'label' => 'Gravidanza',
      'helper_text' => 'Indica se il paziente è in gravidanza',
      'description' => 'Seleziona se il paziente è attualmente in gravidanza',
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'Inserisci l\'email',
      'help' => 'Indirizzo email valido',
      'description' => 'email',
      'helper_text' => 'email',
<<<<<<< HEAD
    ),
    'phone' => 
    array (
      'label' => 'Telefono',
      'placeholder' => 'Inserisci il numero di telefono',
      'help' => 'Numero di telefono per contatti',
      'description' => 'phone',
      'helper_text' => 'phone',
=======
      'placeholder' => 'Inserisci il tuo cognome',
      'helper_text' => 'Cognome del paziente',
      'description' => 'Il tuo cognome anagrafico',
>>>>>>> 54f4fa16 (.)
=======
      'placeholder' => 'Inserisci il cognome',
      'helper_text' => 'Cognome del paziente',
      'description' => 'Il cognome anagrafico del paziente',
      'tooltip' => 'Deve corrispondere al cognome sul documento d\'identità',
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    ),
    'fiscal_code' => 
    array (
<<<<<<< HEAD
      'label' => 'Indirizzo',
<<<<<<< HEAD
      'placeholder' => 'Inserisci l\'indirizzo completo',
      'helper_text' => 'Via/Piazza, numero civico',
      'description' => 'Indirizzo di residenza del paziente',
      'tooltip' => 'Inserisci l\'indirizzo completo con numero civico',
=======
      'placeholder' => 'Inserisci il tuo indirizzo',
      'helper_text' => 'Indirizzo di residenza',
      'description' => 'Via/Piazza, numero civico',
>>>>>>> 54f4fa16 (.)
=======
      'label' => 'Codice Fiscale',
      'placeholder' => 'Inserisci il codice fiscale',
      'helper_text' => 'Codice fiscale del paziente',
      'description' => 'Codice fiscale come indicato sulla tessera sanitaria',
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    ),
    'birth_date' => 
    array (
<<<<<<< HEAD
      'label' => 'Città',
<<<<<<< HEAD
      'placeholder' => 'Inserisci la città',
      'helper_text' => 'Città di residenza',
      'description' => 'Città di residenza del paziente',
      'tooltip' => 'Inserisci la città di residenza attuale',
    ),
    'postal_code' => 
    array (
      'label' => 'CAP',
      'placeholder' => 'Inserisci il CAP',
      'helper_text' => 'Codice di avviamento postale',
      'description' => 'Inserisci il CAP della città di residenza',
    ),
    'province' => 
    array (
      'label' => 'Provincia',
      'placeholder' => 'Inserisci la provincia',
      'helper_text' => 'Provincia di residenza',
      'description' => 'Inserisci la provincia di residenza',
    ),
    'country' => 
    array (
      'label' => 'Paese',
      'placeholder' => 'Inserisci il paese',
      'helper_text' => 'Paese di residenza',
      'description' => 'Inserisci il paese di residenza',
      'default' => 'Italia',
    ),
    'isee_code' => 
    array (
      'label' => 'Codice ISEE',
      'placeholder' => 'Inserisci il codice ISEE',
      'helper_text' => 'Codice identificativo ISEE',
      'description' => 'Inserisci il codice identificativo del certificato ISEE',
    ),
    'isee_value' => 
    array (
      'label' => 'Valore ISEE',
      'placeholder' => 'Inserisci il valore ISEE',
      'helper_text' => 'Valore economico ISEE',
      'description' => 'Inserisci il valore economico del certificato ISEE',
    ),
    'isee_expiry_date' => 
    array (
      'label' => 'Scadenza ISEE',
      'placeholder' => 'Seleziona la data di scadenza',
      'helper_text' => 'Data di scadenza ISEE',
      'description' => 'Inserisci la data di scadenza del certificato ISEE',
=======
      'placeholder' => 'Inserisci la tua città',
      'helper_text' => 'Città di residenza',
      'description' => 'Comune di residenza',
=======
      'label' => 'Data di Nascita',
=======
      'placeholder' => 'Inserisci il codice fiscale',
      'help' => 'Codice fiscale come da tessera sanitaria',
    ),
    'birth_date' => 
    array (
      'label' => 'Data di nascita',
>>>>>>> d55a72aa (.)
      'placeholder' => 'Seleziona la data di nascita',
      'help' => 'Inserisci la data di nascita nel formato gg/mm/aaaa',
      'description' => 'Data di nascita come indicata sul documento d\'identità',
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    ),
    'gender' => 
    array (
      'label' => 'Sesso',
      'placeholder' => 'Seleziona il sesso',
      'help' => 'Seleziona il sesso anagrafico',
    ),
    'is_pregnant' => 
    array (
      'label' => 'Gravidanza',
      'helper_text' => 'Indica se il paziente è in gravidanza',
      'description' => 'Seleziona se il paziente è attualmente in gravidanza',
    ),
    'email' => 
    array (
      'label' => 'Email',
<<<<<<< HEAD
      'placeholder' => 'Inserisci l\'indirizzo email',
      'helper_text' => 'Indirizzo email valido',
      'description' => 'Email del paziente',
      'tooltip' => 'Verrà utilizzata per le comunicazioni importanti',
>>>>>>> 54f4fa16 (.)
=======
      'placeholder' => 'Inserisci l\'email',
      'help' => 'Indirizzo email valido',
>>>>>>> d55a72aa (.)
=======
>>>>>>> adac82bd (rebase)
    ),
    'phone' => 
    array (
      'label' => 'Telefono',
      'placeholder' => 'Inserisci il numero di telefono',
      'help' => 'Numero di telefono per contatti',
      'description' => 'phone',
      'helper_text' => 'phone',
    ),
    'address' => 
    array (
      'label' => 'Indirizzo',
      'placeholder' => 'Inserisci l\'indirizzo completo',
      'helper_text' => 'Via/Piazza, numero civico',
      'description' => 'Indirizzo di residenza del paziente',
      'tooltip' => 'Inserisci l\'indirizzo completo con numero civico',
    ),
    'city' => 
    array (
      'label' => 'Città',
      'placeholder' => 'Inserisci la città',
      'helper_text' => 'Città di residenza',
      'description' => 'Città di residenza del paziente',
      'tooltip' => 'Inserisci la città di residenza attuale',
    ),
    'postal_code' => 
    array (
      'label' => 'CAP',
      'placeholder' => 'Inserisci il CAP',
      'helper_text' => 'Codice di avviamento postale',
      'description' => 'Inserisci il CAP della città di residenza',
    ),
    'province' => 
    array (
      'label' => 'Provincia',
      'placeholder' => 'Inserisci la provincia',
      'helper_text' => 'Provincia di residenza',
      'description' => 'Inserisci la provincia di residenza',
    ),
    'country' => 
    array (
      'label' => 'Paese',
      'placeholder' => 'Inserisci il paese',
      'helper_text' => 'Paese di residenza',
      'description' => 'Inserisci il paese di residenza',
      'default' => 'Italia',
    ),
    'isee_code' => 
    array (
      'label' => 'Codice ISEE',
      'placeholder' => 'Inserisci il codice ISEE',
      'helper_text' => 'Codice identificativo ISEE',
      'description' => 'Inserisci il codice identificativo del certificato ISEE',
    ),
    'isee_value' => 
    array (
      'label' => 'Valore ISEE',
      'placeholder' => 'Inserisci il valore ISEE',
      'helper_text' => 'Valore economico ISEE',
      'description' => 'Inserisci il valore economico del certificato ISEE',
    ),
    'isee_expiry_date' => 
    array (
      'label' => 'Scadenza ISEE',
      'placeholder' => 'Seleziona la data di scadenza',
      'helper_text' => 'Data di scadenza ISEE',
      'description' => 'Inserisci la data di scadenza del certificato ISEE',
    ),
    'health_card' => 
    array (
      'label' => 'Tessera Sanitaria',
      'placeholder' => 'Carica la tessera sanitaria',
      'helper_text' => 'Carica una scansione/foto della tessera sanitaria',
      'description' => 'Tessera sanitaria del paziente',
      'tooltip' => 'Assicurati che il documento sia leggibile',
    ),
    'identity_document' => 
    array (
      'label' => 'Documento d\'Identità',
      'placeholder' => 'Carica il documento d\'identità',
      'helper_text' => 'Carica una scansione/foto del documento d\'identità',
      'description' => 'Documento d\'identità valido del paziente',
      'tooltip' => 'Carta d\'identità, patente o passaporto in corso di validità',
    ),
    'isee_certificate' => 
    array (
      'label' => 'Certificato ISEE',
      'placeholder' => 'Carica il certificato ISEE',
      'helper_text' => 'Carica una copia del certificato ISEE',
<<<<<<< HEAD
<<<<<<< HEAD
      'description' => 'Certificato ISEE valido',
=======
      'description' => 'Certificato ISEE in corso di validità',
>>>>>>> 54f4fa16 (.)
=======
      'description' => 'Certificato ISEE valido',
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
      'tooltip' => 'Necessario per accedere alle agevolazioni',
    ),
    'pregnancy_certificate' => 
    array (
      'label' => 'Certificato di Gravidanza',
      'placeholder' => 'Carica il certificato di gravidanza',
      'helper_text' => 'Se applicabile, carica il certificato di gravidanza',
      'description' => 'Certificato medico attestante lo stato di gravidanza',
      'tooltip' => 'Opzionale - Solo per pazienti in gravidanza',
    ),
    'last_dental_visit' => 
    array (
      'label' => 'Ultima Visita Dentistica',
      'placeholder' => 'Seleziona la data',
      'helper_text' => 'Data dell\'ultima visita dentistica',
      'description' => 'Quando hai fatto l\'ultima visita dal dentista?',
      'tooltip' => 'Indicare una data approssimativa se non si ricorda con precisione',
    ),
    'dental_problems' => 
    array (
      'label' => 'Problemi Dentali',
      'placeholder' => 'Descrivi eventuali problemi dentali',
      'helper_text' => 'Descrivi brevemente i problemi dentali attuali',
      'description' => 'Problemi dentali attuali o recenti',
      'tooltip' => 'Includi dolori, sensibilità o altri disturbi',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    'notes' => 
=======
    'notes' =>
>>>>>>> 2bcfd382 (fix Address)
=======
    'notes' => 
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
    array (
      'label' => 'Note',
      'placeholder' => 'Inserisci eventuali note',
      'helper_text' => 'Note aggiuntive',
      'description' => 'Inserisci eventuali note o informazioni aggiuntive',
    ),
    'privacy_acceptance' => 
    array (
      'label' => 'Accettazione Privacy',
      'placeholder' => 'Accetta l\'informativa sulla privacy',
      'helper_text' => 'Devi accettare l\'informativa sulla privacy',
      'description' => 'Accetto il trattamento dei dati personali secondo l\'informativa sulla privacy',
      'tooltip' => 'Leggi l\'informativa completa prima di accettare',
    ),
    'newsletter' => 
    array (
      'label' => 'Newsletter',
      'helper_text' => 'Ricevi aggiornamenti sulle nostre attività',
      'placeholder' => 'Seleziona se vuoi iscriverti alla newsletter',
      'description' => 'Iscriviti alla nostra newsletter per ricevere aggiornamenti e novità',
      'tooltip' => 'Puoi annullare l\'iscrizione in qualsiasi momento',
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
    'updated_at' => 
    array (
      'label' => 'updated_at',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
    'created_at' => 
=======
    'created_at' =>
>>>>>>> 2bcfd382 (fix Address)
    array (
      'label' => 'created_at',
    ),
<<<<<<< HEAD
=======
    'created_at' => 
    array (
      'label' => 'created_at',
    ),
<<<<<<< HEAD
    'surname' => 
    array (
      'label' => 'surname',
    ),
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    'id' => 
    array (
      'label' => 'id',
    ),
    'name' => 
    array (
      'label' => 'name',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
    'type' => 
    array (
      'label' => 'type',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
    'all_tenants' => 
    array (
      'label' => 'all_tenants',
    ),
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
=======
>>>>>>> be808045 (✨ (states.mdc): add new states configuration file to define state rules and transitions)
=======
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
=======
>>>>>>> 77f21bed (✨ (AddressResource.php): refactor address form schema to conditionally show the name field based on the number of addresses, enhancing user experience)
=======
>>>>>>> 86036e79 (✨ (CreateAdmin, EditAdmin, ListAdmins, CreateDoctor, EditDoctor, ListDoctors, CreatePatient, EditPatient, ListPatients): refactor admin, doctor, and patient resources to extend user resource classes for better code reuse and maintainability)
  ),
  'steps' => 
  array (
    'personal_data_step' => 
    array (
      'label' => 'Dati Personali',
<<<<<<< HEAD
<<<<<<< HEAD
      'description' => 'Inserisci i tuoi dati personali',
      'icon' => 'heroicon-o-user',
      'color' => 'primary',
    ),
    'contacts' => 
    array (
      'label' => 'Contatti',
      'description' => 'Inserisci i dati di contatto del paziente',
      'icon' => 'heroicon-o-phone',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
      'description' => 'Inserisci i tuoi dati anagrafici',
      'icon' => 'heroicon-o-user',
      'color' => 'primary',
    ),
>>>>>>> 54f4fa16 (.)
=======
      'description' => 'Inserisci i tuoi dati personali',
      'icon' => 'heroicon-o-user',
      'color' => 'primary',
    ),
    'contacts' => 
    array (
      'label' => 'Contatti',
      'description' => 'Inserisci i dati di contatto del paziente',
      'icon' => 'heroicon-o-phone',
    ),
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    'documents_step' => 
=======
    'documents_step' =>
>>>>>>> 2bcfd382 (fix Address)
=======
    'documents_step' => 
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
    array (
      'label' => 'Documenti',
      'description' => 'Carica i documenti richiesti',
      'icon' => 'heroicon-o-document',
      'color' => 'success',
    ),
    'pre_visit_step' => 
    array (
      'label' => 'Pre-Visita',
      'description' => 'Informazioni preliminari per la visita',
      'icon' => 'heroicon-o-clipboard-document-list',
      'color' => 'warning',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    'health' => 
=======
    'health' =>
>>>>>>> 2bcfd382 (fix Address)
=======
    'health' => 
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
    array (
      'label' => 'Stato di Salute',
      'description' => 'Inserisci le informazioni sullo stato di salute',
      'icon' => 'heroicon-o-heart',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
    'privacy_step' => 
=======
    'privacy_step' =>
>>>>>>> 2bcfd382 (fix Address)
=======
    'privacy_step' => 
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
    array (
      'label' => 'Privacy',
      'description' => 'Consensi e autorizzazioni',
      'icon' => 'heroicon-o-shield-check',
      'color' => 'info',
    ),
  ),
  'messages' => 
  array (
    'success' => 
    array (
      'created' => 'Paziente creato con successo',
      'updated' => 'Dati del paziente aggiornati con successo',
      'deleted' => 'Paziente eliminato con successo',
    ),
    'errors' => 
    array (
      'create' => 'Errore durante la creazione del paziente',
      'update' => 'Errore durante l\'aggiornamento dei dati',
      'delete' => 'Errore durante l\'eliminazione del paziente',
    ),
    'confirmations' => 
    array (
      'delete' => 'Sei sicuro di voler eliminare questo paziente?',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Nuovo Paziente',
      'tooltip' => 'Crea una nuova scheda paziente',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'tooltip' => 'Modifica i dati del paziente',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'tooltip' => 'Elimina la scheda paziente',
    ),
    'view' => 
    array (
      'label' => 'Visualizza',
      'tooltip' => 'Visualizza i dettagli del paziente',
    ),
  ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c8742f8 (feat(docs): add new documentation files for navigation translation rules, model states, and icon naming conventions to improve clarity and maintainability)
  'model' => 
=======
  'model' =>
>>>>>>> 2bcfd382 (fix Address)
=======
  'model' => 
>>>>>>> ba775c8f (📝 (address.php, lang_service.php, UserTypeEnum.php, PatientResource.php, UserResource.php, Admin.php, Patient.php, StudioUser.php, AdminStudio.php, PatientStudio.php, AdminPanelProvider.php, RegisterTenant.php, various lang files): update translation files to use short array syntax for consistency and readability; remove redundant code and comments to improve clarity and maintainability.)
  array (
    'label' => 'patient.model',
  ),
);
>>>>>>> aurmich/dev
=======
);
>>>>>>> 54f4fa16 (.)
