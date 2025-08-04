<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
    'model' => [
        'label' => 'Dashboard',
        'plural' => 'Dashboard',
    ],
<<<<<<< HEAD
    
    'navigation' => [
        'label' => 'Dashboard',
        'group' => 'Dashboard',
        'icon' => 'heroicon-o-home',
        'sort' => 1,
    ],
    
    'pages' => [
        'index' => [
            'title' => 'Dashboard SaluteMo',
            'subtitle' => 'Panoramica del modulo mobile per medici e pazienti',
            'description' => 'Gestione completa dell\'applicazione mobile SaluteMo per la connessione tra medici e pazienti',
        ],
    ],
    
=======
    'title' => 'Dashboard SaluteMo',
    'subtitle' => 'Panoramica del modulo mobile per medici e pazienti',
    'description' => 'Gestione completa dell\'applicazione mobile SaluteMo per la connessione tra medici e pazienti',
=======
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
    
    'navigation' => [
        'label' => 'Dashboard',
        'group' => 'Dashboard',
        'icon' => 'heroicon-o-home',
        'sort' => 1,
    ],
    
<<<<<<< HEAD
>>>>>>> f3e4ec66 (.)
=======
    'pages' => [
        'index' => [
            'title' => 'Dashboard SaluteMo',
            'subtitle' => 'Panoramica del modulo mobile per medici e pazienti',
            'description' => 'Gestione completa dell\'applicazione mobile SaluteMo per la connessione tra medici e pazienti',
        ],
    ],
    
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
    'sections' => [
        'overview' => [
            'title' => 'Panoramica Generale',
            'description' => 'Statistiche principali dell\'app mobile',
        ],
        'users' => [
            'title' => 'Gestione Utenti',
            'description' => 'Medici e pazienti registrati',
        ],
        'appointments' => [
            'title' => 'Appuntamenti',
            'description' => 'Sistema di prenotazione visite',
        ],
        'analytics' => [
<<<<<<< HEAD
<<<<<<< HEAD
            'title' => 'Analitiche',
=======
            'title' => 'Analytics',
>>>>>>> f3e4ec66 (.)
=======
            'title' => 'Analitiche',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
            'description' => 'Analisi utilizzo e performance',
        ],
        'notifications' => [
            'title' => 'Notifiche',
            'description' => 'Sistema di comunicazione push',
        ],
        'system' => [
            'title' => 'Sistema',
            'description' => 'Stato e monitoraggio infrastruttura',
        ],
    ],
    
    'quick_actions' => [
        'add_doctor' => [
            'label' => 'Aggiungi Medico',
            'icon' => 'heroicon-o-user-plus',
<<<<<<< HEAD
<<<<<<< HEAD
            'tooltip' => 'Aggiungi un nuovo medico al sistema',
=======
>>>>>>> f3e4ec66 (.)
=======
            'tooltip' => 'Aggiungi un nuovo medico al sistema',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
            'route' => 'filament.admin.resources.doctors.create',
        ],
        'add_patient' => [
            'label' => 'Aggiungi Paziente',
            'icon' => 'heroicon-o-user-plus',
<<<<<<< HEAD
<<<<<<< HEAD
            'tooltip' => 'Aggiungi un nuovo paziente al sistema',
=======
>>>>>>> f3e4ec66 (.)
=======
            'tooltip' => 'Aggiungi un nuovo paziente al sistema',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
            'route' => 'filament.admin.resources.patients.create',
        ],
        'send_notification' => [
            'label' => 'Invia Notifica',
            'icon' => 'heroicon-o-bell',
<<<<<<< HEAD
<<<<<<< HEAD
            'tooltip' => 'Invia una notifica agli utenti',
            'action' => 'send-notification',
        ],
        'view_analytics' => [
            'label' => 'Visualizza Analitiche',
            'icon' => 'heroicon-o-chart-pie',
            'tooltip' => 'Visualizza le analitiche del sistema',
            'route' => 'filament.admin.pages.analytics',
        ],
        'system_health' => [
            'label' => 'Stato del Sistema',
            'icon' => 'heroicon-o-cog-6-tooth',
            'tooltip' => 'Visualizza lo stato del sistema',
=======
=======
            'tooltip' => 'Invia una notifica agli utenti',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
            'action' => 'send-notification',
        ],
        'view_analytics' => [
            'label' => 'Visualizza Analitiche',
            'icon' => 'heroicon-o-chart-pie',
            'tooltip' => 'Visualizza le analitiche del sistema',
            'route' => 'filament.admin.pages.analytics',
        ],
        'system_health' => [
            'label' => 'Stato del Sistema',
            'icon' => 'heroicon-o-cog-6-tooth',
<<<<<<< HEAD
>>>>>>> f3e4ec66 (.)
=======
            'tooltip' => 'Visualizza lo stato del sistema',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
            'route' => 'filament.admin.pages.system-health',
        ],
    ],
    
    'widgets' => [
        'stats_overview' => [
            'title' => 'Statistiche Generali',
            'description' => 'Panoramica numerica principale',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
            'cards' => [
                'total_doctors' => 'Totale Medici',
                'total_patients' => 'Totale Pazienti',
                'active_appointments' => 'Appuntamenti Attivi',
                'pending_verifications' => 'Verifiche in Attesa',
            ],
<<<<<<< HEAD
=======
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
        ],
        'appointments_chart' => [
            'title' => 'Grafico Appuntamenti',
            'description' => 'Trend degli appuntamenti nel tempo',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
            'filters' => [
                'daily' => 'Giornaliero',
                'weekly' => 'Settimanale',
                'monthly' => 'Mensile',
            ],
<<<<<<< HEAD
=======
>>>>>>> f3e4ec66 (.)
=======
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
        ],
        'user_distribution' => [
            'title' => 'Distribuzione Utenti',
            'description' => 'Medici e pazienti per area geografica',
        ],
        'recent_activities' => [
            'title' => 'Attività Recenti',
            'description' => 'Ultime azioni nell\'app mobile',
<<<<<<< HEAD
<<<<<<< HEAD
            'view_all' => 'Vedi Tutte',
=======
>>>>>>> f3e4ec66 (.)
=======
            'view_all' => 'Vedi Tutte',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
        ],
        'verification_queue' => [
            'title' => 'Coda Verifiche',
            'description' => 'Medici in attesa di approvazione',
<<<<<<< HEAD
<<<<<<< HEAD
            'view_all' => 'Gestisci Verifiche',
=======
>>>>>>> f3e4ec66 (.)
=======
            'view_all' => 'Gestisci Verifiche',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
        ],
    ],
    
    'messages' => [
        'welcome' => 'Benvenuto nella dashboard SaluteMo',
<<<<<<< HEAD
<<<<<<< HEAD
        'welcome_back' => 'Bentornato, :name!',
=======
>>>>>>> f3e4ec66 (.)
=======
        'welcome_back' => 'Bentornato, :name!',
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
        'loading' => 'Caricamento dati in corso...',
        'error_loading' => 'Errore nel caricamento dei dati',
        'no_data' => 'Nessun dato disponibile',
        'last_updated' => 'Ultimo aggiornamento: :timestamp',
<<<<<<< HEAD
<<<<<<< HEAD
        'select_date_range' => 'Seleziona intervallo date',
=======
        'select_date_range' => 'Seleziona intervallo date',
    ],
    
    'actions' => [
        'refresh' => [
            'label' => 'Aggiorna',
            'icon' => 'heroicon-o-arrow-path',
            'tooltip' => 'Aggiorna i dati della dashboard',
        ],
        'export' => [
            'label' => 'Esporta',
            'icon' => 'heroicon-o-arrow-down-tray',
            'tooltip' => 'Esporta i dati correnti',
        ],
>>>>>>> 304589c8 (✨ (bashscripts): add ORGANIZATION.md to document the structure and organization of bash scripts for better maintainability and navigation)
    ],
    
    'actions' => [
        'refresh' => [
            'label' => 'Aggiorna',
            'icon' => 'heroicon-o-arrow-path',
            'tooltip' => 'Aggiorna i dati della dashboard',
        ],
        'export' => [
            'label' => 'Esporta',
            'icon' => 'heroicon-o-arrow-down-tray',
            'tooltip' => 'Esporta i dati correnti',
        ],
    ],
=======
    'title' => 'Dashboard',
    'description' => 'Panoramica del modulo SaluteMo',
>>>>>>> 3a74d92c (✨ (SaluteMo): introduce SaluteMo module with complete structure and functionality for managing mobile-specific features, including API endpoints, dashboard, and widgets for patient management.)
=======
    ],
>>>>>>> f3e4ec66 (.)
];
