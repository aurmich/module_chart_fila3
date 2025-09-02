<<<<<<< HEAD

# 🚀 Toolkit di Automazione Git per Laraxot PTVX

[![PHPStan](https://img.shields.io/badge/PHPStan-Level%209-brightgreen.svg?style=for-the-badge&logo=php&logoColor=white)](../docs/phpstan/ANALISI_MODULI_PHPSTAN.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
# SaluteOra - Sistema di Gestione Salute Orale

## Requisiti di Sistema
- PHP 8.2 o superiore
- Composer
- Node.js 18+ e npm
- MySQL 8.0+
- Git

## Installazione

### 1. Clonare il Repository
```bash
git clone https://github.com/your-username/saluteora.git
cd saluteora
```

### 2. Installare le Dipendenze PHP
```bash
composer install
```

### 3. Installare le Dipendenze Node.js
```bash
npm install
```

### 4. Configurare l'Ambiente
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Configurare il Database
Modificare il file `.env` con le credenziali del database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=saluteora
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Eseguire le Migrazioni
```bash
php artisan migrate
```

### 7. Installare i Moduli
```bash
# Installare Laravel Modules
composer require nwidart/laravel-modules

# Pubblicare la configurazione dei moduli
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"

# Aggiungere il modulo Xot
git remote add -f xot https://github.com/crud-lab/xot.git
git subtree add --prefix Modules/Xot xot main --squash
```

### 8. Compilare gli Assets
```bash
npm run dev
```

### 9. Avviare il Server di Sviluppo
```bash
php artisan serve
```

## Struttura del Progetto

```
saluteora/
├── app/
├── config/
├── database/
├── Modules/
│   ├── Core/
│   ├── Patient/
│   ├── Dental/
│   └── Xot/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
└── docs/
    ├── roadmap/
    └── packages/
```

## Moduli Principali

### Core
- Gestione utenti e autenticazione
- Configurazione sistema
- Funzionalità base

### Patient
- Gestione pazienti
- Anamnesi
- Storico visite

### Dental
- Gestione trattamenti
- Calendario appuntamenti
- Documenti clinici

### Xot
- Framework base per i moduli
- Componenti riutilizzabili
- Funzionalità comuni

## Documentazione

La documentazione completa è disponibile nella directory `docs/`:
- [Roadmap del Progetto](docs/roadmap/README.md)
- [Documentazione dei Pacchetti](docs/packages/README.md)

## Sviluppo

### Comandi Utili
```bash
# Creare un nuovo modulo
php artisan module:make NomeModulo

# Generare componenti per un modulo
php artisan module:make-controller NomeController NomeModulo
php artisan module:make-model NomeModel NomeModulo
php artisan module:make-migration create_table NomeModulo

# Eseguire i test
php artisan test

# Aggiornare le dipendenze
composer update
npm update
```

### Best Practices
- Seguire le convenzioni PSR-4 per l'autoloading
- Utilizzare i namespace corretti per i moduli
- Documentare le modifiche nel CHANGELOG.md
- Mantenere i test aggiornati
- Verificare la compatibilità cross-browser

## Licenza
Questo progetto è sotto licenza MIT. Vedere il file [LICENSE](LICENSE) per i dettagli. 
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b0f37c83 (.)
=======
>>>>>>> b7907077 (.)
=======
>>>>>>> b1ca4c93 (Squashed 'bashscripts/' changes from c21599d..019cc70)
# 🚀 BashScripts Power Tools

>>>>>>> 5e5f2e85b (first)
[![Bash Version](https://img.shields.io/badge/Bash-5.0%2B-brightgreen.svg)](https://www.gnu.org/software/bash/)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://github.com/aurmich/bashscripts_fila3)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](http://makeapullrequest.com)

<div align="center">
  <img src="https://raw.githubusercontent.com/odb/official-bash-logo/master/assets/Logos/Icons/PNG/512x512.png" width="200" alt="Bash Logo"/>
  <br/>
  <strong>Potenti script Bash per la gestione avanzata dei subtree Git 🌳</strong>
</div>

## 🌟 Caratteristiche Principali

- 🔄 **Sincronizzazione Automatica** dei subtree Git
- 🛡️ **Gestione Robusta degli Errori**
- 🔍 **Logging Dettagliato**
- 🚦 **Controlli di Sicurezza** integrati
- 🔧 **Manutenzione Semplificata**

## 📚 Indice

- [Installazione](#-installazione)
- [Utilizzo](#-utilizzo)
<<<<<<< HEAD
- [Organizzazione Script](#-organizzazione-script)
=======
>>>>>>> 5e5f2e85b (first)
- [Script Disponibili](#-script-disponibili)
- [Esempi](#-esempi)
- [Risoluzione Problemi](#-risoluzione-problemi)
- [Contribuire](#-contribuire)

## 💻 Installazione

```bash
# Clona il repository
git clone git@github.com:aurmich/bashscripts_fila3.git

# Rendi gli script eseguibili
<<<<<<< HEAD
chmod +x scripts/**/*.sh
=======
chmod +x *.sh
>>>>>>> 5e5f2e85b (first)
```

## 🚀 Utilizzo

### Sincronizzazione Subtree
```bash
<<<<<<< HEAD
./scripts/git/git_sync_subtree.sh <path> <remote_repo>
=======
./git_sync_subtree.sh <path> <remote_repo>
>>>>>>> 5e5f2e85b (first)
```

Esempio:
```bash
<<<<<<< HEAD
./scripts/git/git_sync_subtree.sh modules/auth git@github.com:user/auth-module.git
```

## 📁 Organizzazione Script

Tutti gli script sono organizzati in sottocartelle per categoria:

### 🔧 **scripts/git/** - Gestione Git e Subtree
- `git_sync_subtree.sh` - Sincronizzazione principale
- `resolve_git_conflict.sh` - Risoluzione conflitti
- `init-subtrees.sh` - Inizializzazione subtree
- `reset_subtrees.sh` - Reset subtree
- `sync_submodules.sh` - Sincronizzazione submodule
- `rebase_keep_last_commits.sh` - Rebase con mantenimento commit

### 📝 **scripts/docs/** - Gestione Documentazione
- `docs-audit-dry-kiss.sh` - Audit documentazione
- `docs-consolidation.sh` - Consolidamento docs
- `docs-final-optimization.sh` - Ottimizzazione finale
- `fix-docs-naming.sh` - Correzione naming
- `organize_docs_structure.sh` - Organizzazione struttura
- `update_docs.sh` - Aggiornamento documentazione

### 🔍 **scripts/phpstan/** - Analisi Statiche
- `check_before_phpstan.sh` - Controlli pre-PHPStan
- `create_phpstan_readme.sh` - Generazione README PHPStan
- `generate_phpstan_summary.sh` - Riassunto PHPStan
- `phpstan_docs_generator.sh` - Generatore documentazione
- `fix-translations.php` - Correzione traduzioni

### 💾 **scripts/backup/** - Backup e Sincronizzazione
- `backup.sh` - Script di backup
- `sync_to_disk.sh` - Sincronizzazione su disco
- `copy_to_mono.sh` - Copia in repository monolitico

### 🔧 **scripts/fix/** - Correzioni e Riparazioni
- `fix_errors.sh` - Correzione errori
- `fix_structure.sh` - Correzione struttura
- `fix_directory_structure.sh` - Correzione struttura directory
- `fix-psr4-autoloading-violations.sh` - Correzione PSR-4

### 🧪 **scripts/testing/** - Test e Validazione
- `check_form_schema.php` - Controllo schema form
- `check_mysql.sh` - Controllo MySQL
- `test_parse.sh` - Test parsing
- `phpunit.xml` - Configurazione PHPUnit

### ⚙️ **scripts/config/** - Configurazioni
- `package.json` - Configurazione Node.js
- `postcss.config.js` - Configurazione PostCSS
- `tailwind.config.js` - Configurazione Tailwind
- `rector.php` - Configurazione Rector
- `mysql-db-connector.js` - Connettore MySQL

### 🛠️ **scripts/utils/** - Utility e Helper
- `parse_gitmodules_ini.sh` - Parsing gitmodules
- `check_mcp_config.php` - Controllo configurazione MCP
- `tips.txt` - Suggerimenti e trucchi
- `prompt.txt` - Prompt e template
- `organize_files.sh` - Organizzazione file

## 📜 Script Disponibili

### 1. Git Management (scripts/git/)
> 🎯 Script per la gestione Git e subtree
=======
./git_sync_subtree.sh modules/auth git@github.com:user/auth-module.git
```

## 📜 Script Disponibili

### 1. git_sync_subtree.sh
> 🎯 Script principale per la sincronizzazione dei subtree
>>>>>>> 5e5f2e85b (first)

**Caratteristiche:**
- Gestione automatica di push e pull
- Rimozione caratteri CR (^M)
- Gestione permessi automatica

<<<<<<< HEAD
### 2. Documentation Management (scripts/docs/)
> 📝 Script per la gestione della documentazione

**Funzionalità:**
- Audit automatico della documentazione
- Consolidamento e ottimizzazione
- Correzione naming conventions

### 3. PHPStan Analysis (scripts/phpstan/)
> 🔍 Script per analisi statiche

**Caratteristiche:**
- Controlli pre-PHPStan
- Generazione documentazione automatica
- Correzione traduzioni

### 4. Backup & Sync (scripts/backup/)
> 💾 Script per backup e sincronizzazione

**Funzionalità:**
- Backup automatico
- Sincronizzazione su disco
- Copia in repository monolitico

### 5. Fix & Repair (scripts/fix/)
> 🔧 Script per correzioni e riparazioni

**Caratteristiche:**
- Correzione errori automatica
- Riparazione struttura
- Correzione violazioni PSR-4
=======
### 2. git_push_subtree.sh
> 🔼 Gestisce le operazioni di push

**Funzionalità:**
- Push intelligente con fallback
- Gestione branch temporanei
- Rebase automatico

### 3. git_pull_subtree.sh
> 🔽 Gestisce le operazioni di pull

**Caratteristiche:**
- Pull con squash opzionale
- Gestione conflitti automatica
- Merge strategy personalizzabile
>>>>>>> 5e5f2e85b (first)

## 🎯 Esempi

### Sincronizzazione Modulo
```bash
# Sincronizza un modulo specifico
<<<<<<< HEAD
./scripts/git/git_sync_subtree.sh modules/users git@github.com:org/users.git

# Sincronizza con branch specifico
REMOTE_BRANCH=develop ./scripts/git/git_sync_subtree.sh modules/auth git@github.com:org/auth.git
```

### Audit Documentazione
```bash
# Esegui audit completo della documentazione
./scripts/docs/docs-audit-dry-kiss.sh

# Correggi naming conventions
./scripts/docs/fix-docs-naming.sh
```

### Analisi PHPStan
```bash
# Controlli pre-PHPStan
./scripts/phpstan/check_before_phpstan.sh

# Genera riassunto PHPStan
./scripts/phpstan/generate_phpstan_summary.sh
=======
./git_sync_subtree.sh modules/users git@github.com:org/users.git

# Sincronizza con branch specifico
REMOTE_BRANCH=develop ./git_sync_subtree.sh modules/auth git@github.com:org/auth.git
>>>>>>> 5e5f2e85b (first)
```

## ⚠️ Risoluzione Problemi

### Errori Comuni

1. **Prefix Option Mancante**
   ```bash
   fatal: you must provide the --prefix option
   ```
<<<<<<< HEAD
   **Soluzione**: Verifica che il path del subtree sia corretto

2. **Permessi Script**
   ```bash
   Permission denied
   ```
   **Soluzione**: Rendi eseguibili gli script
   ```bash
   chmod +x scripts/**/*.sh
   ```

3. **PHPStan Non Trovato**
   ```bash
   command not found: phpstan
   ```
   **Soluzione**: Installa PHPStan
   ```bash
   composer require --dev phpstan/phpstan
   ```

## 🔧 Manutenzione

### Aggiornamento Script
```bash
# Aggiorna tutti gli script
git pull origin main

# Rendi eseguibili i nuovi script
chmod +x scripts/**/*.sh
```

### Backup Configurazioni
```bash
# Backup configurazioni
./scripts/backup/backup.sh

# Sincronizza su disco
./scripts/backup/sync_to_disk.sh
```

## 📊 Statistiche

- **Script Git**: 7 script
- **Script Docs**: 15 script
- **Script PHPStan**: 6 script
- **Script Backup**: 3 script
- **Script Fix**: 5 script
- **Script Testing**: 4 script
- **Script Config**: 6 script
- **Script Utils**: 5 script

**Totale**: 51 script organizzati in 8 categorie

## 🤝 Contribuire

### Setup Sviluppo
1. Clona il repository
2. Installa le dipendenze
3. Configura l'ambiente
4. Esegui i test

### Convenzioni di Codice
- Seguire PSR-12 per script PHP
- Utilizzare shebang corretto per script Bash
- Documentare tutti gli script
- Testare prima del commit

### Processo di Pull Request
1. Crea un branch feature
2. Implementa le modifiche
3. Aggiungi i test
4. Aggiorna la documentazione
5. Crea la PR

## 📞 Supporto

- **Issues**: [GitHub Issues](https://github.com/aurmich/bashscripts_fila3/issues)
- **Documentazione**: [Wiki](https://github.com/aurmich/bashscripts_fila3/wiki)
- **Discussions**: [GitHub Discussions](https://github.com/aurmich/bashscripts_fila3/discussions)

## 📄 Licenza

Questo progetto è rilasciato sotto licenza MIT. Vedi il file [LICENSE](LICENSE) per i dettagli.

---

<div align="center">
  <strong>🚀 Potenzia il tuo workflow Git con questi script!</strong>
</div>
=======
   ✅ **Soluzione:** Verifica il path del subtree

2. **Push Rejected**
   ```bash
   ! [rejected] dev -> dev (non-fast-forward)
   ```
   ✅ **Soluzione:** Esegui prima un pull

## 🛠️ Best Practices

1. **Prima dell'Esecuzione**
   - ✔️ Commit/stash delle modifiche pendenti
   - ✔️ Verifica branch corrente
   - ✔️ Controllo stato repository

2. **Durante l'Esecuzione**
   - 👀 Monitora l'output
   - ⏳ Non interrompere gli script
   - 📝 Controlla i log

## 🤝 Contribuire

Le contribuzioni sono sempre benvenute! Ecco come puoi aiutare:

1. 🍴 Forka il repository
2. 🔧 Crea un branch per le tue modifiche
3. 💻 Committa le tue migliorie
4. 📤 Pusha al branch
5. 🔄 Apri una Pull Request

## 📝 Note sulla Manutenzione

- 🔄 Aggiornamenti regolari
- 🐛 Fix bug tempestivi
- 📚 Documentazione sempre aggiornata

## 📜 Licenza

Questo progetto è sotto licenza MIT - vedi il file [LICENSE](LICENSE) per i dettagli.

## 👥 Autori

- **Marco Sottana** - *Lavoro Iniziale* - [aurmich](https://github.com/aurmich)

## 🙏 Ringraziamenti

- 🌟 Tutti i contributori
- 📚 La comunità Git
- 🔧 Gli utenti che segnalano bug

---

<<<<<<< HEAD


> **Nota**: Questo README è in continuo aggiornamento. Se trovi errori o hai suggerimenti, apri pure una issue! 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bd5ca8f (.)
>>>>>>> b0f37c83 (.)
=======
>>>>>>> b7907077 (.)
=======
# 📣 Enhance Your App with the Fila3 Notify Module! 🚀

![GitHub issues](https://img.shields.io/github/issues/laraxot/module_notify_fila3)
![GitHub forks](https://img.shields.io/github/forks/laraxot/module_notify_fila3)
![GitHub stars](https://img.shields.io/github/stars/laraxot/module_notify_fila3)
![License](https://img.shields.io/badge/license-MIT-green)

Welcome to the **Fila3 Notify Module**! This powerful notification system is designed to streamline communication within your application. Whether you’re sending alerts, reminders, or updates, the Fila3 Notify Module has you covered with its versatile features and easy integration.

## 📦 What’s Inside?

The Fila3 Notify Module allows you to implement a robust notification system with minimal effort, featuring:

- **Real-time Notifications**: Send and receive notifications instantly to enhance user engagement.
- **Customizable Notification Types**: Tailor notifications to your needs, from alerts to success messages.
- **User-Specific Notifications**: Deliver targeted notifications to specific users based on their actions or preferences.
- **Persistent Notification Management**: Easily manage and store notifications for later access.

## 🌟 Key Features

- **Multi-format Support**: Create notifications with rich content, including text, images, and links.
- **Notification Queue**: Handle multiple notifications efficiently with a built-in queue system.
- **Event Listeners**: Integrate easily with your application’s events to trigger notifications automatically.
- **Custom Notification Channels**: Organize notifications into different channels to keep users informed about relevant updates.
- **Configurable Display Options**: Choose how and where notifications appear, from pop-ups to in-page alerts.
- **User Preferences Management**: Allow users to customize their notification settings for a personalized experience.
- **Integration with External APIs**: Seamlessly connect with third-party services to fetch or send notifications.

## 🚀 Why Choose Fila3 Notify?

- **Efficient & Lightweight**: Designed for high performance without slowing down your application.
- **Scalable Architecture**: Perfect for small applications and large-scale systems alike.
- **Active Community Support**: Join an engaged community of developers ready to assist and share insights.

## 🔧 Installation

Getting started with the Fila3 Notify Module is easy! Follow these steps to integrate it into your application:

1. Clone the repository:
   ```bash
   git clone https://github.com/laraxot/module_notify_fila3.git

Navigate to the project directory:
bash
Copia codice
cd module_notify_fila3
Install dependencies:
bash
Copia codice
npm install
Configure your settings in the config file to customize notification behavior.
Start your application and unleash the power of notifications!
📜 Usage Examples
Here are a few snippets to demonstrate how to use the Fila3 Notify Module in your application:

Sending a Notification
javascript
Copia codice
notify.send({
  title: "New Message!",
  message: "You have received a new message from John Doe.",
  type: "info", // options: success, error, warning, info
});
Listening for Notifications
javascript
Copia codice
notify.on('notificationReceived', (data) => {
  console.log("Notification:", data);
});
🤝 Contributing
We love contributions! If you have ideas, bug fixes, or enhancements, check out the contributing guidelines to get started.

📄 License
This project is licensed under the MIT License - see the LICENSE file for details.

👤 Author
Marco Sottana
Discover more of my work at marco76tv!
>>>>>>> 9e03a20f (Squashed 'laravel/Modules/Notify/' changes from 404426f9..02d5f061)
=======
> **Nota**: Questo README è in continuo aggiornamento. Se trovi errori o hai suggerimenti, apri pure una issue!

<div align="center">
  <sub>Built with ❤️ by the development team</sub>
</div>
>>>>>>> b1ca4c93 (Squashed 'bashscripts/' changes from c21599d..019cc70)
>>>>>>> 5e5f2e85b (first)
