<?php

declare(strict_types=1);

return [
    'instructions' => [
<<<<<<< HEAD
        'title' => 'Configurazione Orari',
        'description' => 'Imposta gli orari di apertura per ogni giorno della settimana. Lascia vuoto per giorni di chiusura.',
=======
        'title' => 'Orari di Apertura',
        'description' => 'Configura gli orari di apertura per ogni giorno della settimana. Lascia vuoto per indicare giorno di chiusura.',
>>>>>>> aurmich/dev
    ],
    
    'headers' => [
        'day' => 'Giorno',
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
    ],
    
    'legend' => [
        'open' => 'Aperto',
        'closed' => 'Chiuso',
<<<<<<< HEAD
        'format' => 'Formato: HH:MM',
=======
        'format' => 'Formato: HH:MM-HH:MM',
>>>>>>> aurmich/dev
    ],
    
    'days' => [
        'monday' => 'Lunedì',
<<<<<<< HEAD
        'tuesday' => 'Martedì',
=======
        'tuesday' => 'Martedì', 
>>>>>>> aurmich/dev
        'wednesday' => 'Mercoledì',
        'thursday' => 'Giovedì',
        'friday' => 'Venerdì',
        'saturday' => 'Sabato',
        'sunday' => 'Domenica',
    ],
    
    'periods' => [
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
        'evening' => 'Sera',
    ],
    
    'labels' => [
<<<<<<< HEAD
        'morning' => 'Mattina',
        'afternoon' => 'Pomeriggio',
        'from' => 'Dalle',
        'to' => 'Alle',
        'closed' => 'Chiuso',
    ],
    
    'descriptions' => [
        'day_schedule' => 'Configura gli orari di apertura per questo giorno',
    ],
    
    'placeholders' => [
        'morning_hours' => 'Orario mattutino',
        'afternoon_hours' => 'Orario pomeridiano',
    ],
    
    'notes' => [
        'format_hint' => 'Utilizzare il formato 24 ore (es. 14:30 per le 2:30 del pomeriggio)',
        'empty_hint' => 'Lasciare vuoto significa "chiuso"',
=======
        'from' => 'Dalle',
        'to' => 'Alle',
    ],
    
    'placeholders' => [
        'morning' => '08:00-12:30',
        'afternoon' => '15:00-19:00',
        'evening' => '20:00-23:00',
    ],
    
    'notes' => [
        'format_hint' => 'Utilizzare il formato HH:MM-HH:MM (es. 08:30-12:00)',
        'empty_hint' => 'Lasciare vuoto per indicare che il periodo è chiuso',
        'validation_error' => 'L\'orario di apertura deve essere precedente all\'orario di chiusura',
        'overlap_error' => 'Gli orari non possono sovrapporsi nello stesso giorno',
>>>>>>> aurmich/dev
    ],
    
    'validation' => [
        'invalid_format' => 'Formato orario non valido. Utilizzare HH:MM-HH:MM',
        'invalid_time_range' => 'L\'orario di apertura deve essere precedente all\'orario di chiusura',
<<<<<<< HEAD
        'overlapping_hours' => 'Gli orari non possono sovrapporsi nello stesso giorno',
=======
        'overlapping_hours' => 'Gli orari di mattina e pomeriggio si sovrappongono',
>>>>>>> aurmich/dev
        'from_before_to' => 'L\'orario "Dalle" deve essere precedente all\'orario "Alle"',
        'to_after_from' => 'L\'orario "Alle" deve essere successivo all\'orario "Dalle"',
        'time_sequence' => 'L\'orario di inizio deve essere precedente a quello di fine',
    ],
]; 