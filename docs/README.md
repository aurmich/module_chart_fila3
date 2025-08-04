<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
# 📚 Documentazione SaluteOra

## ⚠️ Regole Fondamentali

### Regola Critica: Naming Convention per Cartelle Docs
**NEI FILE E NELLE SOTTOCARTELLE DELLE CARTELLE DOCS NON DEVONO ESSERCI CARATTERI MAIUSCOLI, TRANNE PER README.md**

- ✅ `translation-standards.md`
- ✅ `filament-best-practices.md`
- ❌ `Translation_Standards.md`
- ❌ `Filament_Best_Practices.md`

Vedi: [docs_naming_convention.md](./docs_naming_convention.md)

### Regola Critica: Posizione Script
**GLI SCRIPT NON DEVONO MAI ESSERE POSIZIONATI NELLE CARTELLE DOCS**

- ✅ `bashscripts/fix_docs_naming_convention.sh`
- ✅ `Modules/NomeModulo/bashscripts/script.sh`
- ❌ `docs/check_naming.sh`
- ❌ `docs/utility_script.sh`

Vedi: [scripts_location_convention.md](./scripts_location_convention.md)

## 🚀 Collegamenti Rapidi

- 📑 **[Indice Completo](indice_documentazione.md)** - Navigazione completa di tutta la documentazione
- ⚡ **[Quick Reference](quick_reference.md)** - Comandi e snippet per sviluppo rapido  
- ❓ **[FAQ](faq.md)** - Risposte alle domande frequenti
- 👨‍💻 **[Guida Sviluppatore](guida_sviluppatore.md)** - Setup e sviluppo dettagliato
- 🏗️ **[Architettura Sistema](architettura_sistema.md)** - Overview architetturale

> **Policy di Memoria e Neutralità**: Questa documentazione segue regole rigorose per garantire memoria persistente, neutralità e prevenzione errori attraverso checklist operative e cross-link tra tutti i file chiave.

## 🎯 Quick Links

- 🚀 [Checklist di Ripartenza](checklist-di-ripartenza.md)
- 🐛 [Errori Comuni e Soluzioni](errori-comuni.md)
- 📋 [Standard di Documentazione](standards.md)
- 🗺️ [Roadmap Completa](roadmap.md)
- 💻 [Best Practices](best-practices.md)

## 📖 Introduzione

Benvenuti nella documentazione completa di SaluteOra, il sistema integrato per la gestione della salute orale. Questa documentazione è organizzata in modo modulare e interconnesso per facilitare la navigazione e la comprensione del sistema.

## 🗂️ Struttura della Documentazione

### 📋 Documentazione Core

#### Sistema e Architettura

- 🏗️ [Architettura Tecnica](architecture/README.md) - Panoramica dell'architettura del sistema
- ⚙️ [Configurazione](configuration.md) - Guide alla configurazione del sistema
- 🔧 [Installazione](installazione.md) - Processo di installazione step-by-step
- 🗄️ [Database](database-migrations.md) - Struttura e migrazioni del database

#### Moduli Principali

- 🔴 [Modulo Xot](../laravel/Modules/Xot/docs/README.md) - Framework core e funzionalità base
- 👤 [Modulo User](../laravel/Modules/User/docs/README.md) - Gestione utenti e autenticazione
- 🏢 [Modulo Tenant](../laravel/Modules/Tenant/docs/README.md) - Sistema multi-tenant
- 🌐 [Modulo Lang](../laravel/Modules/Lang/docs/README.md) - Gestione multilingua

#### Moduli Funzionali

- 👥 [Modulo Patient](../laravel/Modules/Patient/docs/README.md) - Gestione pazienti
- 👨‍⚕️ [Modulo Doctor](../laravel/Modules/Doctor/docs/README.md) - Gestione medici
- 🦷 [Modulo Dental](../laravel/Modules/Dental/docs/README.md) - Visite e trattamenti
- 📊 [Modulo Reporting](../laravel/Modules/Reporting/docs/README.md) - Report e statistiche

### 🎨 Frontend e UI

- 🎯 [Frontend Overview](frontend/README.md) - Architettura frontend
- 🧩 [Componenti](components/README.md) - Libreria componenti riutilizzabili
- 🎨 [Temi](../laravel/Modules/UI/docs/themes/README.md) - Sistema di temi
- 🖼️ [Asset Management](asset-management.md) - Gestione risorse statiche

### 👨‍💻 Sviluppo

#### Guide Essenziali

- 📏 [Convenzioni](conventions.md) - Standard di codice e naming
- 🔍 [PHPStan Level 9](phpstan/README.md) - Analisi statica del codice
- 🧪 [Testing](../laravel/Modules/Xot/docs/testing/README.md) - Test automatizzati
- 🔄 [Git Workflow](git.md) - Flusso di lavoro Git

#### Best Practices

- ✨ [Best Practices Generali](best-practices.md)
- 📦 [Creazione Moduli](modules/README.md)
- 🔌 [Service Providers](service-providers.md)
- 🎯 [Actions System](actions-system.md)

### 🔐 Sicurezza e Compliance

- 🛡️ [Sicurezza](compliance/README.md) - Misure di sicurezza
- 🔒 [GDPR Compliance](compliance/gdpr-compliance.md) - Conformità GDPR
- 🔑 [Autenticazione](authentication/README.md) - Sistema di autenticazione
- 📜 [Privacy Policy](compliance/privacy-policy.md) - Politiche privacy

### 📱 Funzionalità Specifiche

- 📧 [Sistema Notifiche](notifications-system.md)
- 📤 [File Upload](filament-file-uploads.md)
- 🌐 [Traduzioni](translations/README.md)
- 📊 [Enumerazioni](enums.md)
- 🇬🇧 [Audit Traduzioni Inglesi](english_translation_audit.md)
- 🔍 [Audit Completezza Traduzioni](translation_completeness_audit.md)

## 🚦 Come Navigare la Documentazione

### Per Ruolo

#### 👨‍💻 Sviluppatori

1. Iniziare dalla [Panoramica Architettura](architecture/README.md)
2. Consultare le [Best Practices](best-practices.md)
3. Seguire le [Convenzioni di Codice](conventions.md)
4. Approfondire i [Moduli Specifici](modules/README.md)

#### 🎨 Designer

1. Consultare la [Documentazione UI](../laravel/Modules/UI/docs/README.md)
2. Esplorare i [Componenti](components/README.md)
3. Studiare il [Sistema di Temi](../laravel/Modules/UI/docs/themes/README.md)

#### 👔 Project Manager

1. Leggere la [Roadmap](roadmap.md)
2. Consultare lo [Stato Avanzamento](stato_avanzamenti_lavori_2025_05_28.md)
3. Verificare le [Stime](stime.md)

## 📂 Mappa delle Directory

```text
docs/
├── 📁 amministrazione/      # Documentazione amministrativa
├── 📁 analisi/             # Analisi funzionali e tecniche
├── 📁 architecture/        # Architettura del sistema
├── 📁 backend/            # Documentazione backend
├── 📁 compliance/         # Sicurezza e conformità
├── 📁 frontend/          # Documentazione frontend
├── 📁 implementazione/   # Guide implementative
├── 📁 moduli/           # Documentazione moduli
├── 📁 phpstan/          # Configurazione PHPStan
├── 📁 regole/          # Regole e linee guida
├── 📁 roadmap/         # Pianificazione progetto
├── 📁 standards/       # Standard di sviluppo
├── 📁 tecnico/        # Documentazione tecnica
└── 📄 README.md       # Questo file
```

## 🔄 Stato della Documentazione

| Sezione | Completamento | Ultimo Aggiornamento |
|---------|---------------|---------------------|
| Core Documentation | ✅ 95% | 2025-05-28 |
| Module Docs | ✅ 90% | 2025-05-27 |
| Frontend Docs | 🚧 80% | 2025-05-26 |
| API Reference | 🚧 70% | 2025-05-25 |
| Testing Guides | 🚧 75% | 2025-05-24 |

## 🤝 Contribuire alla Documentazione

### Linee Guida

1. **Struttura**: Mantenere la gerarchia esistente
2. **Formato**: Utilizzare Markdown con convenzioni stabilite
3. **Link**: Aggiornare sempre i collegamenti quando si spostano file
4. **Esempi**: Includere esempi pratici quando possibile
5. **Versioning**: Documentare le modifiche nel changelog

### Template per Nuovi Documenti

```markdown

# Titolo del Documento

## Panoramica
Breve descrizione del contenuto

## Prerequisiti
- Requisito 1
- Requisito 2

## Contenuto Principale
[Contenuto dettagliato]

## Esempi
[Esempi pratici]

## Riferimenti
- [Link 1](path/to/doc1.md)
- [Link 2](path/to/doc2.md)

## Changelog
- 2025-05-28: Creazione documento
```

## 🔗 Collegamenti Rapidi

### Documentazione Moduli

- [Xot Module](../laravel/Modules/Xot/docs/README.md)
- [User Module](../laravel/Modules/User/docs/README.md)
- [Tenant Module](../laravel/Modules/Tenant/docs/README.md)
- [Patient Module](../laravel/Modules/Patient/docs/README.md)
- [Doctor Module](../laravel/Modules/Doctor/docs/README.md)
- [Dental Module](../laravel/Modules/Dental/docs/README.md)

### Guide Tecniche

- [Database Schema](database-migrations.md)
- [API Documentation](backend/api-documentation.md)
- [Frontend Architecture](frontend/architecture.md)
- [Security Guidelines](compliance/security-guidelines.md)

### Risorse Utili

- [FAQ](faq.md)
- [Troubleshooting](troubleshooting/README.md)
- [Glossario](glossario.md)
- [Contatti](contatti.md)

## 📈 Metriche Documentazione

- **Documenti Totali**: 250+
- **Guide Step-by-Step**: 45
- **Esempi di Codice**: 180+
- **Diagrammi**: 35
- **Video Tutorial**: In pianificazione

---

**Ultimo aggiornamento**: 2025-05-28  
**Versione**: 2.0.0  
**Maintainer**: Team SaluteOra

# Documentazione Base SaluteOra

Documentazione centrale per il progetto SaluteOra basato su Laraxot.

## Documentazione Tecnica

### Componenti UI e Performance
- **[InlineDatePicker: Ottimizzazione con Livewire](./inline-date-picker-optimization.md)** - Analisi comparativa tra approccio payload e Livewire per validazione date, con strategia ibrida consigliata.

### Architettura e Patterns
- [Laraxot Conventions](./laraxot_conventions.md) - Convenzioni e best practice del framework
- [Module Structure](./module-structure.md) - Struttura e organizzazione dei moduli
- [Data Objects Pattern](./data-objects-pattern.md) - Utilizzo di Spatie Laravel Data

### Testing e Quality Assurance
- [PHPStan Integration](./phpstan-integration.md) - Configurazione e utilizzo di PHPStan
- [Testing Guidelines](./testing-guidelines.md) - Linee guida per test automatizzati

## Documentazione Moduli

### SaluteMo (Modulo Principale)
- [Modulo SaluteMo README](../Modules/SaluteMo/docs/README.md)
- [InlineDatePicker Implementazione Specifica](../Modules/SaluteMo/docs/inline-date-picker-livewire-optimization.md)

### Altri Moduli
- [Modulo User](../Modules/User/docs/)
- [Modulo UI](../Modules/UI/docs/)
- [Modulo Xot](../Modules/Xot/docs/)

## Guide di Sviluppo

### Setup e Configurazione
- [Configurazione Ambiente](./environment-setup.md)
- [Database e Migrazioni](./database-migrations.md)
- [Asset e Build Process](./assets-build.md)

### Best Practices
- [Coding Standards](./coding-standards.md)
- [Security Guidelines](./security-guidelines.md)
- [Performance Optimization](./performance-optimization.md)

## Risoluzione Problemi

### Errori Comuni
- [Troubleshooting Guide](./troubleshooting.md)
- [Error Handling](./error-handling.md)
- [Debug Techniques](./debug-techniques.md)

### Performance Issues
- [Performance Monitoring](./performance-monitoring.md)
- [Caching Strategies](./caching-strategies.md)
- [Database Optimization](./database-optimization.md)

## Aggiornamenti e Maintenance

- [Deployment Guidelines](./deployment.md)
- [Update Procedures](./update-procedures.md)
- [Backup and Recovery](./backup-recovery.md)

---

**Nota**: Questa documentazione segue le convenzioni Laraxot e viene aggiornata regolarmente. Per contribuire, seguire le [linee guida di contribuzione](./contributing.md).
<<<<<<< HEAD
=======
=======
# Policy di Memoria e Neutralità
=======
# 📚 Documentazione SaluteOra
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)

## 🚀 Collegamenti Rapidi

- 📑 **[Indice Completo](INDICE_DOCUMENTAZIONE.md)** - Navigazione completa di tutta la documentazione
- ⚡ **[Quick Reference](QUICK_REFERENCE.md)** - Comandi e snippet per sviluppo rapido  
- ❓ **[FAQ](FAQ.md)** - Risposte alle domande frequenti
- 👨‍💻 **[Guida Sviluppatore](GUIDA_SVILUPPATORE.md)** - Setup e sviluppo dettagliato
- 🏗️ **[Architettura Sistema](ARCHITETTURA_SISTEMA.md)** - Overview architetturale

> **Policy di Memoria e Neutralità**: Questa documentazione segue regole rigorose per garantire memoria persistente, neutralità e prevenzione errori attraverso checklist operative e cross-link tra tutti i file chiave.

## 🎯 Quick Links

- 🚀 [Checklist di Ripartenza](checklist-di-ripartenza.md)
- 🐛 [Errori Comuni e Soluzioni](errori-comuni.md)
- 📋 [Standard di Documentazione](standards.md)
- 🗺️ [Roadmap Completa](roadmap.md)
- 💻 [Best Practices](best-practices.md)

## 📖 Introduzione

Benvenuti nella documentazione completa di SaluteOra, il sistema integrato per la gestione della salute orale. Questa documentazione è organizzata in modo modulare e interconnesso per facilitare la navigazione e la comprensione del sistema.

## 🗂️ Struttura della Documentazione

### 📋 Documentazione Core

#### Sistema e Architettura

- 🏗️ [Architettura Tecnica](architecture/README.md) - Panoramica dell'architettura del sistema
- ⚙️ [Configurazione](configuration.md) - Guide alla configurazione del sistema
- 🔧 [Installazione](installazione.md) - Processo di installazione step-by-step
- 🗄️ [Database](database-migrations.md) - Struttura e migrazioni del database

#### Moduli Principali

- 🔴 [Modulo Xot](../laravel/Modules/Xot/docs/README.md) - Framework core e funzionalità base
- 👤 [Modulo User](../laravel/Modules/User/docs/README.md) - Gestione utenti e autenticazione
- 🏢 [Modulo Tenant](../laravel/Modules/Tenant/docs/README.md) - Sistema multi-tenant
- 🌐 [Modulo Lang](../laravel/Modules/Lang/docs/README.md) - Gestione multilingua

#### Moduli Funzionali

- 👥 [Modulo Patient](../laravel/Modules/Patient/docs/README.md) - Gestione pazienti
- 👨‍⚕️ [Modulo Doctor](../laravel/Modules/Doctor/docs/README.md) - Gestione medici
- 🦷 [Modulo Dental](../laravel/Modules/Dental/docs/README.md) - Visite e trattamenti
- 📊 [Modulo Reporting](../laravel/Modules/Reporting/docs/README.md) - Report e statistiche

### 🎨 Frontend e UI

- 🎯 [Frontend Overview](frontend/README.md) - Architettura frontend
- 🧩 [Componenti](components/README.md) - Libreria componenti riutilizzabili
- 🎨 [Temi](../laravel/Modules/UI/docs/themes/README.md) - Sistema di temi
- 🖼️ [Asset Management](asset-management.md) - Gestione risorse statiche

### 👨‍💻 Sviluppo

#### Guide Essenziali

- 📏 [Convenzioni](conventions.md) - Standard di codice e naming
- 🔍 [PHPStan Level 9](phpstan/README.md) - Analisi statica del codice
- 🧪 [Testing](../laravel/Modules/Xot/docs/testing/README.md) - Test automatizzati
- 🔄 [Git Workflow](git.md) - Flusso di lavoro Git

#### Best Practices

- ✨ [Best Practices Generali](best-practices.md)
- 📦 [Creazione Moduli](modules/README.md)
- 🔌 [Service Providers](service-providers.md)
- 🎯 [Actions System](actions-system.md)

### 🔐 Sicurezza e Compliance

- 🛡️ [Sicurezza](compliance/README.md) - Misure di sicurezza
- 🔒 [GDPR Compliance](compliance/gdpr-compliance.md) - Conformità GDPR
- 🔑 [Autenticazione](authentication/README.md) - Sistema di autenticazione
- 📜 [Privacy Policy](compliance/privacy-policy.md) - Politiche privacy

### 📱 Funzionalità Specifiche

- 📧 [Sistema Notifiche](notifications-system.md)
- 📤 [File Upload](filament-file-uploads.md)
- 🌐 [Traduzioni](translations/README.md)
- 📊 [Enumerazioni](enums.md)

## 🚦 Come Navigare la Documentazione

### Per Ruolo

#### 👨‍💻 Sviluppatori

1. Iniziare dalla [Panoramica Architettura](architecture/README.md)
2. Consultare le [Best Practices](best-practices.md)
3. Seguire le [Convenzioni di Codice](conventions.md)
4. Approfondire i [Moduli Specifici](modules/README.md)

#### 🎨 Designer

1. Consultare la [Documentazione UI](../laravel/Modules/UI/docs/README.md)
2. Esplorare i [Componenti](components/README.md)
3. Studiare il [Sistema di Temi](../laravel/Modules/UI/docs/themes/README.md)

#### 👔 Project Manager

1. Leggere la [Roadmap](roadmap.md)
2. Consultare lo [Stato Avanzamento](stato_avanzamenti_lavori_2025_05_28.md)
3. Verificare le [Stime](stime.md)

## 📂 Mappa delle Directory

```text
docs/
├── 📁 amministrazione/      # Documentazione amministrativa
├── 📁 analisi/             # Analisi funzionali e tecniche
├── 📁 architecture/        # Architettura del sistema
├── 📁 backend/            # Documentazione backend
├── 📁 compliance/         # Sicurezza e conformità
├── 📁 frontend/          # Documentazione frontend
├── 📁 implementazione/   # Guide implementative
├── 📁 moduli/           # Documentazione moduli
├── 📁 phpstan/          # Configurazione PHPStan
├── 📁 regole/          # Regole e linee guida
├── 📁 roadmap/         # Pianificazione progetto
├── 📁 standards/       # Standard di sviluppo
├── 📁 tecnico/        # Documentazione tecnica
└── 📄 README.md       # Questo file
```

## 🔄 Stato della Documentazione

| Sezione | Completamento | Ultimo Aggiornamento |
|---------|---------------|---------------------|
| Core Documentation | ✅ 95% | 2025-05-28 |
| Module Docs | ✅ 90% | 2025-05-27 |
| Frontend Docs | 🚧 80% | 2025-05-26 |
| API Reference | 🚧 70% | 2025-05-25 |
| Testing Guides | 🚧 75% | 2025-05-24 |

## 🤝 Contribuire alla Documentazione

### Linee Guida

1. **Struttura**: Mantenere la gerarchia esistente
2. **Formato**: Utilizzare Markdown con convenzioni stabilite
3. **Link**: Aggiornare sempre i collegamenti quando si spostano file
4. **Esempi**: Includere esempi pratici quando possibile
5. **Versioning**: Documentare le modifiche nel changelog

### Template per Nuovi Documenti

```markdown
# Titolo del Documento

## Panoramica
Breve descrizione del contenuto

## Prerequisiti
- Requisito 1
- Requisito 2

## Contenuto Principale
[Contenuto dettagliato]

## Esempi
[Esempi pratici]

## Riferimenti
- [Link 1](path/to/doc1.md)
- [Link 2](path/to/doc2.md)

## Changelog
- 2025-05-28: Creazione documento
```

## 🔗 Collegamenti Rapidi

### Documentazione Moduli

- [Xot Module](../laravel/Modules/Xot/docs/README.md)
- [User Module](../laravel/Modules/User/docs/README.md)
- [Tenant Module](../laravel/Modules/Tenant/docs/README.md)
- [Patient Module](../laravel/Modules/Patient/docs/README.md)
- [Doctor Module](../laravel/Modules/Doctor/docs/README.md)
- [Dental Module](../laravel/Modules/Dental/docs/README.md)

### Guide Tecniche

- [Database Schema](database-migrations.md)
- [API Documentation](backend/api-documentation.md)
- [Frontend Architecture](frontend/architecture.md)
- [Security Guidelines](compliance/security-guidelines.md)

### Risorse Utili

- [FAQ](faq.md)
- [Troubleshooting](troubleshooting/README.md)
- [Glossario](glossario.md)
- [Contatti](contatti.md)

## 📈 Metriche Documentazione

- **Documenti Totali**: 250+
- **Guide Step-by-Step**: 45
- **Esempi di Codice**: 180+
- **Diagrammi**: 35
- **Video Tutorial**: In pianificazione

---

<<<<<<< HEAD
# Documentazione Saluteora

## Introduzione
Benvenuti nella documentazione di Saluteora. Questo repository contiene la documentazione completa del sistema, organizzata in modo modulare e interconnesso.

## Struttura della Documentazione

### Documentazione Principale
- [Documentazione del Modulo Xot](xot-module-documentation.md)
  - Panoramica completa del modulo Xot
  - Sistema di gestione delle icone Blade
  - Best practices e guide

- [Architettura Tecnica](technical-architecture.md)
  - Architettura del sistema
  - Componenti e integrazioni
  - Flussi di dati e processi

### Documentazione dei Moduli
- [Panoramica delle Blade Icons](laravel/Modules/Xot/docs/blade-icons-overview.md)
- [Registrazione delle Blade Icons](laravel/Modules/Xot/docs/registerBladeIcons.md)
- [Implementazione delle Icone Personalizzate](laravel/Modules/Xot/docs/custom-icons-implementation.md)

## Come Navigare la Documentazione

### Per Sviluppatori
1. Iniziare dalla [Documentazione del Modulo Xot](xot-module-documentation.md) per una comprensione generale
2. Consultare l'[Architettura Tecnica](technical-architecture.md) per i dettagli implementativi
3. Approfondire con la documentazione specifica dei moduli

### Per Designer
1. Consultare la [Panoramica delle Blade Icons](laravel/Modules/Xot/docs/blade-icons-overview.md)
2. Seguire la [Guida all'Implementazione](laravel/Modules/Xot/docs/custom-icons-implementation.md)

## Struttura delle Directory
```
docs/
├── README.md (questo file)
├── xot-module-documentation.md
├── technical-architecture.md
└── laravel/
    └── Modules/
        └── Xot/
            └── docs/
                ├── blade-icons-overview.md
                ├── registerBladeIcons.md
                └── custom-icons-implementation.md
```

## Contribuire alla Documentazione
1. Seguire la struttura esistente
2. Mantenere i link tra i documenti
3. Aggiornare questo README quando si aggiungono nuovi file
4. Utilizzare il formato Markdown per la formattazione

## Best Practices
1. **Organizzazione**
   - Mantenere una struttura gerarchica chiara
   - Utilizzare nomi di file descrittivi
   - Aggiornare i link quando si spostano i file

2. **Contenuto**
   - Scrivere in modo chiaro e conciso
   - Includere esempi pratici
   - Mantenere la documentazione aggiornata

3. **Manutenzione**
   - Verificare periodicamente i link
   - Aggiornare la documentazione con le nuove funzionalità
   - Rimuovere la documentazione obsoleta

## Risorse Aggiuntive
- [Documentazione Laravel](https://laravel.com/docs)
- [Documentazione Blade](https://laravel.com/docs/blade)
- [Documentazione SVG](https://developer.mozilla.org/en-US/docs/Web/SVG)

# Documentazione SaluteOra

## Struttura della Documentazione

### Documentazione Principale
- [README.md Principale](README.md)
- [README.md Moduli](modules/README.md)
- [README.md Implementazione](implementazione/README.md)
- [README.md Amministrazione](amministrazione/README.md)

### Documentazione Moduli
- [README.md Xot](../../laravel/Modules/Xot/docs/README.md)
- [README.md User](../../laravel/Modules/User/docs/README.md)
- [README.md Lang](../../laravel/Modules/Lang/docs/README.md)
- [README.md Patient](../../laravel/Modules/Patient/docs/README.md)
- [README.md Dental](../../laravel/Modules/Dental/docs/README.md)
- [README.md Activity](../../laravel/Modules/Activity/docs/README.md)
- [README.md Chart](../../laravel/Modules/Chart/docs/README.md)
- [README.md Gdpr](../../laravel/Modules/Gdpr/docs/README.md)
- [README.md Media](../../laravel/Modules/Media/docs/README.md)
- [README.md Notify](../../laravel/Modules/Notify/docs/README.md)
- [README.md Reporting](../../laravel/Modules/Reporting/docs/README.md)
- [README.md Tenant](../../laravel/Modules/Tenant/docs/README.md)

### Documentazione PHPStan
- [README.md PHPStan](phpstan/README.md)
- [README.md PHPStan Xot](../../laravel/Modules/Xot/docs/phpstan/README.md)
- [README.md PHPStan User](../../laravel/Modules/User/docs/phpstan/README.md)
- [README.md PHPStan Gdpr](../../laravel/Modules/Gdpr/docs/phpstan/README.md)
- [README.md PHPStan Notify](../../laravel/Modules/Notify/docs/phpstan/README.md)
- [README.md PHPStan UI](../../laravel/Modules/UI/docs/phpstan/README.md)
- [README.md PHPStan Lang](../../laravel/Modules/Lang/docs/phpstan/README.md)
- [README.md PHPStan Job](../../laravel/Modules/Job/docs/phpstan/README.md)
- [README.md PHPStan Media](../../laravel/Modules/Media/docs/phpstan/README.md)
- [README.md PHPStan Tenant](../../laravel/Modules/Tenant/docs/phpstan/README.md)
- [README.md PHPStan Activity](../../laravel/Modules/Activity/docs/phpstan/README.md)

### Documentazione Temi
- [README.md Tema One](../../laravel/Themes/One/docs/README.md)
- [README.md Tema Two](../../laravel/Themes/Two/docs/README.md)

### Documentazione CMS
- [README.md CMS](../../laravel/Modules/Cms/docs/README.md)
- [README.md Blocchi CMS](../../laravel/Modules/Cms/docs/blocks/README.md)
- [README.md Contenuti CMS](../../laravel/Modules/Cms/docs/content/README.md)
- [README.md Frontoffice CMS](../../laravel/Modules/Cms/docs/frontoffice/README.md)
- [README.md Componenti CMS](../../laravel/Modules/Cms/docs/components/README.md)

### Documentazione UI
- [README.md UI](../../laravel/Modules/UI/docs/README.md)
- [README.md Temi UI](../../laravel/Modules/UI/docs/themes/README.md)
- [README.md Componenti UI](../../laravel/Modules/UI/docs/components/README.md)

### Documentazione Implementazione
- [README.md API](implementazione/api/README.md)
- [README.md Testing](implementazione/testing/README.md)
- [README.md Pazienti](implementazione/pazienti/README.md)
- [README.md UI](implementazione/ui/README.md)
- [README.md Dental](implementazione/dental/README.md)
- [README.md Core](implementazione/core/README.md)
- [README.md Reporting](implementazione/reporting/README.md)
- [README.md ISEE](implementazione/isee/README.md)

### Documentazione Amministrazione
- [README.md Backup](amministrazione/backup/README.md)
- [README.md Monitoraggio](amministrazione/monitoraggio/README.md)
- [README.md Deployment](amministrazione/deployment/README.md)

## Note
- Tutti i collegamenti sono relativi
- La documentazione è mantenuta in italiano
- I collegamenti sono bidirezionali quando appropriato
- Ogni sezione ha il suo README.md specifico

## Contribuire
Per contribuire alla documentazione, seguire le [Linee Guida](linee-guida-documentazione.md) e le [Regole dei Collegamenti](regole_collegamenti_documentazione.md).

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](README_links.md).

## Contatti
Per domande o chiarimenti sulla documentazione, contattare il team di sviluppo.

## Collegamenti tra versioni di README.md
* [README.md](../bashscripts/docs/README.md)
* [README.md](../bashscripts/docs/it/README.md)
* [README.md](laravel-app/phpstan/README.md)
* [README.md](laravel-app/README.md)
* [README.md](moduli/struttura/README.md)
* [README.md](moduli/README.md)
* [README.md](moduli/manutenzione/README.md)
* [README.md](moduli/core/README.md)
* [README.md](moduli/installati/README.md)
* [README.md](moduli/comandi/README.md)
* [README.md](phpstan/README.md)
* [README.md](module-links/README.md)
* [README.md](troubleshooting/git-conflicts/README.md)
* [README.md](tecnico/laraxot/README.md)
* [README.md](modules/README.md)
* [README.md](conventions/README.md)
* [README.md](amministrazione/backup/README.md)
* [README.md](amministrazione/monitoraggio/README.md)
* [README.md](amministrazione/README.md)
* [README.md](amministrazione/deployment/README.md)
* [README.md](translations/README.md)
* [README.md](roadmap/README.md)
* [README.md](ide/cursor/README.md)
* [README.md](implementazione/api/README.md)
* [README.md](implementazione/README.md)
* [README.md](implementazione/testing/README.md)
* [README.md](implementazione/pazienti/README.md)
* [README.md](implementazione/ui/README.md)
* [README.md](implementazione/dental/README.md)
* [README.md](implementazione/core/README.md)
* [README.md](implementazione/reporting/README.md)
* [README.md](implementazione/isee/README.md)
* [README.md](it/README.md)
* [README.md](../laravel/vendor/mockery/mockery/docs/README.md)
* [README.md](../laravel/Modules/Chart/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Chart/docs/README.md)
* [README.md](../laravel/Modules/Reporting/docs/README.md)
* [README.md](../laravel/Modules/Gdpr/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Gdpr/docs/README.md)
* [README.md](../laravel/Modules/Notify/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Notify/docs/README.md)
* [README.md](../laravel/Modules/Xot/docs/filament/README.md)
* [README.md](../laravel/Modules/Xot/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Xot/docs/exceptions/README.md)
* [README.md](../laravel/Modules/Xot/docs/README.md)
* [README.md](../laravel/Modules/Xot/docs/standards/README.md)
* [README.md](../laravel/Modules/Xot/docs/conventions/README.md)
* [README.md](../laravel/Modules/Xot/docs/development/README.md)
* [README.md](../laravel/Modules/Dental/docs/README.md)
* [README.md](../laravel/Modules/User/docs/phpstan/README.md)
* [README.md](../laravel/Modules/User/docs/README.md)
* [README.md](../laravel/Modules/User/resources/views/docs/README.md)
* [README.md](../laravel/Modules/UI/docs/phpstan/README.md)
* [README.md](../laravel/Modules/UI/docs/README.md)
* [README.md](../laravel/Modules/UI/docs/standards/README.md)
* [README.md](../laravel/Modules/UI/docs/themes/README.md)
* [README.md](../laravel/Modules/UI/docs/components/README.md)
* [README.md](../laravel/Modules/Lang/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Lang/docs/README.md)
* [README.md](../laravel/Modules/Job/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Job/docs/README.md)
* [README.md](../laravel/Modules/Media/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Media/docs/README.md)
* [README.md](../laravel/Modules/Tenant/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Tenant/docs/README.md)
* [README.md](../laravel/Modules/Activity/docs/phpstan/README.md)
* [README.md](../laravel/Modules/Activity/docs/README.md)
* [README.md](../laravel/Modules/Patient/docs/README.md)
* [README.md](../laravel/Modules/Patient/docs/standards/README.md)
* [README.md](../laravel/Modules/Patient/docs/value-objects/README.md)
* [README.md](../laravel/Modules/Cms/docs/blocks/README.md)
* [README.md](../laravel/Modules/Cms/docs/README.md)
* [README.md](../laravel/Modules/Cms/docs/standards/README.md)
* [README.md](../laravel/Modules/Cms/docs/content/README.md)
* [README.md](../laravel/Modules/Cms/docs/frontoffice/README.md)
* [README.md](../laravel/Modules/Cms/docs/components/README.md)
* [README.md](../laravel/Themes/Two/docs/README.md)
* [README.md](../laravel/Themes/One/docs/README.md)

# Documentazione Modulare - Regole di Continuità

## Memoria Persistente
- Non usare mai riferimenti a nomi di progetto nei file `.md` o `.mdc`
- Aggiornare sempre la documentazione PRIMA di ogni modifica tecnica
- Ogni file `.md` e `.mdc` deve avere almeno 5 collegamenti bidirezionali
- Usare solo esempi generici e riutilizzabili
- Seguire la struttura standard per ogni modulo e regola
- Documentare ogni errore e la relativa soluzione
- Aggiornare la checklist di ripartenza dopo ogni intervento importante

## Errori da NON ripetere
- Non usare nomi di progetto nei file o negli esempi
- Non lasciare file `.mdc` senza cross-link e checklist
- Non ignorare la documentazione prima di modificare il codice
- Non trascurare la sezione "Errori Comuni" e "Soluzioni"
- Non dimenticare di aggiornare la memoria e la checklist dopo ogni fix

## Cosa fare dopo il riavvio
1. Leggere la [checklist di ripartenza](checklist-di-ripartenza.md)
2. Verificare che tutte le regole `.mdc` siano aggiornate e senza riferimenti a progetti
3. Aggiornare la documentazione PRIMA di ogni intervento tecnico
4. Usare sempre la checklist e i cross-link per evitare errori già discussi
5. In caso di dubbio, consultare la sezione "Errori da NON ripetere" in ogni file chiave

## Collegamenti correlati
- [Filament Best Practices](../.windsurf/rules/filament-best-practices.mdc)
- [Validation Rules](../.windsurf/rules/validation.mdc)
- [Migration Best Practices](../.windsurf/rules/migrations.mdc)
- [Error Handling](../.windsurf/rules/error-handling.mdc)
- [Documentation Standards](../.windsurf/rules/documentation.mdc)
- [Checklist di Ripartenza](checklist-di-ripartenza.md)

# AVVISO IMPORTANTE: Regole Fondamentali e Checklist di Ripartenza (Globale)

> **Prima di ogni sviluppo o dopo ogni riavvio:**
> - Consulta la [checklist di ripartenza](../laravel/Modules/Xot/docs/checklist-di-ripartenza.md) o la versione locale se presente
> - Applica SEMPRE le [Filament Best Practices](../laravel/Modules/Patient/docs/filament-best-practices.md)
> - Ricorda: nessun riferimento a progetti/brand nelle doc dei moduli
> - Non duplicare mai trait già presenti nei modelli base
> - Usa solo ValidationException::withMessages per errori custom
> - Aggiorna la doc PRIMA di ogni modifica
> - Se trovi un warning o errore, aggiorna subito la doc e segnala la regola

## Collegamenti rapidi
- [Filament Best Practices](../laravel/Modules/Patient/docs/filament-best-practices.md)
- [Neutralità documentazione](../laravel/Modules/Patient/docs/module-documentation-neutrality.md)
- [Ereditarietà modelli](../laravel/Modules/Patient/docs/model-inheritance-best-practices.md)
- [Checklist di ripartenza](../laravel/Modules/Xot/docs/checklist-di-ripartenza.md)

>>>>>>> 54f4fa16 (.)
=======
**Ultimo aggiornamento**: 2025-05-28  
**Versione**: 2.0.0  
**Maintainer**: Team SaluteOra
<<<<<<< HEAD
>>>>>>> 01fbabcb (docs(README.md): update README with initial content and add a placeholder for future development)
=======

# Documentazione Base SaluteOra

Documentazione centrale per il progetto SaluteOra basato su Laraxot.

## Documentazione Tecnica

### Componenti UI e Performance
- **[InlineDatePicker: Ottimizzazione con Livewire](./inline-date-picker-optimization.md)** - Analisi comparativa tra approccio payload e Livewire per validazione date, con strategia ibrida consigliata.

### Architettura e Patterns
- [Laraxot Conventions](./laraxot_conventions.md) - Convenzioni e best practice del framework
- [Module Structure](./module-structure.md) - Struttura e organizzazione dei moduli
- [Data Objects Pattern](./data-objects-pattern.md) - Utilizzo di Spatie Laravel Data

### Testing e Quality Assurance
- [PHPStan Integration](./phpstan-integration.md) - Configurazione e utilizzo di PHPStan
- [Testing Guidelines](./testing-guidelines.md) - Linee guida per test automatizzati

## Documentazione Moduli

### SaluteMo (Modulo Principale)
- [Modulo SaluteMo README](../Modules/SaluteMo/docs/README.md)
- [InlineDatePicker Implementazione Specifica](../Modules/SaluteMo/docs/inline-date-picker-livewire-optimization.md)

### Altri Moduli
- [Modulo User](../Modules/User/docs/)
- [Modulo UI](../Modules/UI/docs/)
- [Modulo Xot](../Modules/Xot/docs/)

## Guide di Sviluppo

### Setup e Configurazione
- [Configurazione Ambiente](./environment-setup.md)
- [Database e Migrazioni](./database-migrations.md)
- [Asset e Build Process](./assets-build.md)

### Best Practices
- [Coding Standards](./coding-standards.md)
- [Security Guidelines](./security-guidelines.md)
- [Performance Optimization](./performance-optimization.md)

## Risoluzione Problemi

### Errori Comuni
- [Troubleshooting Guide](./troubleshooting.md)
- [Error Handling](./error-handling.md)
- [Debug Techniques](./debug-techniques.md)

### Performance Issues
- [Performance Monitoring](./performance-monitoring.md)
- [Caching Strategies](./caching-strategies.md)
- [Database Optimization](./database-optimization.md)

## Aggiornamenti e Maintenance

- [Deployment Guidelines](./deployment.md)
- [Update Procedures](./update-procedures.md)
- [Backup and Recovery](./backup-recovery.md)

---

**Nota**: Questa documentazione segue le convenzioni Laraxot e viene aggiornata regolarmente. Per contribuire, seguire le [linee guida di contribuzione](./contributing.md).
>>>>>>> ce78fe45 (translations + middleware + field on patientresource + openinghoursfield su relationsmanager)
>>>>>>> aurmich/dev
