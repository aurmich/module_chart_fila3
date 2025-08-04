# Regole per la Documentazione Generica nei Moduli

## Principio di Neutralità del Progetto

MAI utilizzare il nome specifico del progetto nella documentazione dei moduli. I moduli sono progettati per essere riutilizzabili in diversi progetti, quindi la documentazione deve essere neutrale rispetto al contesto di utilizzo.

### Termini Corretti da Utilizzare
- "il sistema"
- "l'applicazione"
- "la piattaforma"
- "questo modulo"

### Termini da Evitare
<<<<<<< HEAD
- Nomi specifici di progetti (es. "<nome progetto>", "ProjectX", ecc.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- Nomi specifici di progetti (es. "<nome progetto>", "ProjectX", ecc.)
=======
- Nomi specifici di progetti (es. "SaluteOra", "ProjectX", ecc.)
>>>>>>> 54f4fa16 (.)
=======
- Nomi specifici di progetti (es. "<nome progetto>", "ProjectX", ecc.)
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
- Riferimenti a domini specifici associati a un singolo progetto
- Nomi di organizzazioni specifiche

## Motivazione
Mantenere la documentazione dei moduli generica consente di:
1. Massimizzare la riusabilità dei moduli
2. Prevenire accoppiamenti inappropriati
3. Facilitare la manutenzione e l'aggiornamento
4. Mantenere una chiara separazione delle responsabilità

## Esempi

### ❌ Errato
<<<<<<< HEAD
"Il modulo Notify gestisce tutte le notifiche e le comunicazioni via email del sistema <nome progetto>."
=======
<<<<<<< HEAD
<<<<<<< HEAD
"Il modulo Notify gestisce tutte le notifiche e le comunicazioni via email del sistema <nome progetto>."
=======
"Il modulo Notify gestisce tutte le notifiche e le comunicazioni via email del sistema SaluteOra."
>>>>>>> 54f4fa16 (.)
=======
"Il modulo Notify gestisce tutte le notifiche e le comunicazioni via email del sistema <nome progetto>."
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev

### ✅ Corretto
"Il modulo Notify gestisce tutte le notifiche e le comunicazioni via email del sistema."

## Procedura di Verifica
Prima di committare qualsiasi modifica alla documentazione nei moduli:
1. Verificare l'assenza di nomi di progetto specifici
2. Sostituire eventuali riferimenti con termini generici
3. Assicurarsi che il modulo rimanga concettualmente indipendente
