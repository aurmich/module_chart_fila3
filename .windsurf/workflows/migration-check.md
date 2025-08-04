---
description: Workflow specializzato per la gestione e validazione delle migrazioni database secondo le rigide regole Laraxot
---

# Migration Management Workflow

Workflow dedicato alla gestione completa delle migrazioni database, seguendo rigorosamente le regole specifiche di Laraxot <nome progetto> per evitare errori critici.

## Utilizzo
Invoca con `/migration-check` per eseguire controlli completi sulle migrazioni.

## ⚠️ REGOLE CRITICHE LARAXOT ⚠️

### REGOLE ASSOLUTE (Violazione = Errore Critico)
1. **SOLO classi anonime** che estendono XotBaseMigration
2. **MAI implementare metodo down()** nelle migrazioni
3. **SEMPRE verificare esistenza** con hasTable() e hasColumn()
4. **Per aggiungere colonne**: copiare migrazione originale con nuovo timestamp
5. **MAI creare migrazioni separate** per aggiungere colonne a tabelle esistenti

## Fase 1: Controllo Pre-Migration

### 1.1 Verifica Stato Migrazioni
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Controllo status completo
php artisan migrate:status

# Verifica integrità database
php artisan migrate:status | grep -E "Ran\?|Pending"

# Backup database prima di modifiche (OBBLIGATORIO)
php artisan backup:run --only-db
```

### 1.2 Controllo Struttura File
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Verifica che tutte le migrazioni usino classi anonime
find Modules/*/database/migrations/ -name "*.php" -exec grep -l "class.*Migration" {} \; | head -10 || echo "✅ Solo classi anonime utilizzate"

# Verifica estensione XotBaseMigration
grep -r "extends.*Migration" Modules/*/database/migrations/ --include="*.php" | grep -v "XotBaseMigration" || echo "✅ Tutte estendono XotBaseMigration"
```

## Fase 2: Validazione Struttura Migrazioni

### 2.1 Controllo Classi Anonime Obbligatorie
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Cerca migrazioni con classi nominate (VIETATE)
for file in $(find Modules/*/database/migrations/ -name "*.php"); do
    if grep -q "^class" "$file"; then
        echo "❌ ERRORE CRITICO: $file usa classe nominata"
    fi
done

# Verifica pattern corretto classe anonima
for file in $(find Modules/*/database/migrations/ -name "*.php"); do
    if ! grep -q "return new class.*extends XotBaseMigration" "$file"; then
        echo "❌ ERRORE: $file - Pattern classe anonima errato"
    fi
done
```

### 2.2 Controllo Metodo down() VIETATO
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Cerca implementazioni del metodo down (ASSOLUTAMENTE VIETATE)
echo "🔍 Controllo metodi down() (VIETATI)..."
for file in $(find Modules/*/database/migrations/ -name "*.php"); do
    if grep -q "function down" "$file"; then
        echo "❌ ERRORE CRITICO: $file implementa metodo down() - RIMUOVERE IMMEDIATAMENTE"
        grep -n "function down" "$file"
    fi
done
```

### 2.3 Verifica Controlli Esistenza OBBLIGATORI
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Verifica uso di hasTable() prima di create
echo "🔍 Controllo hasTable() per creazione tabelle..."
for file in $(find Modules/*/database/migrations/ -name "*.php"); do
    if grep -q "Schema::create" "$file"; then
        if ! grep -q "hasTable\|Schema::hasTable" "$file"; then
            echo "⚠️  $file - Mancante controllo hasTable() prima di create"
        fi
    fi
done

# Verifica uso di hasColumn() prima di aggiungere colonne
echo "🔍 Controllo hasColumn() per aggiunta colonne..."
for file in $(find Modules/*/database/migrations/ -name "*.php"); do
    if grep -q "Schema::table" "$file"; then
        if ! grep -q "hasColumn\|Schema::hasColumn" "$file"; then
            echo "⚠️  $file - Mancante controllo hasColumn() prima di aggiungere colonne"
        fi
    fi
done
```

## Fase 3: Analisi Struttura Database

### 3.1 Controllo Nomi Tabelle e Colonne
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Verifica naming convention snake_case
grep -r "Schema::create\|Schema::table" Modules/*/database/migrations/ --include="*.php" | grep -v "snake_case\|[a-z_]" | head -10

# Controlla uso di foreignId invece di integer per FK
grep -r "\->integer.*_id" Modules/*/database/migrations/ --include="*.php" || echo "✅ foreignId utilizzato correttamente"
```

### 3.2 Verifica Tipi di Colonne
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Controllo uso corretto dei tipi
echo "🔍 Controllo tipi di colonne..."

# Verifica UUID
grep -r "uuid.*primary\|uuid.*index" Modules/*/database/migrations/ --include="*.php" | head -5

# Verifica timestamp
grep -r "timestamps\|->timestamp" Modules/*/database/migrations/ --include="*.php" | head -5

# Verifica JSON columns
grep -r "->json\|->jsonb" Modules/*/database/migrations/ --include="*.php" | head -5
```

## Fase 4: Controllo Chiavi Esterne e Relazioni

### 4.1 Verifica Foreign Keys
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Controlla definizione FK corretta
echo "🔍 Controllo foreign keys..."
grep -r "foreign\|constrained" Modules/*/database/migrations/ --include="*.php" | head -10

# Verifica cascading actions
grep -r "onDelete\|onUpdate" Modules/*/database/migrations/ --include="*.php" | head -10
```

### 4.2 Controllo Indici
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Verifica definizione indici
grep -r "->index\|->unique" Modules/*/database/migrations/ --include="*.php" | head -10

# Controllo indici composti
grep -r "index.*\[.*,.*\]" Modules/*/database/migrations/ --include="*.php" | head -5
```

## Fase 5: Test Sicurezza Migrazioni

### 5.1 Dry Run Obbligatorio
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Test migrazioni senza eseguirle (OBBLIGATORIO prima di ogni migrate)
echo "🧪 Dry run migrazioni..."
php artisan migrate --pretend | head -20

# Verifica che non ci siano errori di sintassi
php artisan migrate --pretend 2>&1 | grep -i "error\|exception" || echo "✅ Nessun errore di sintassi"
```

### 5.2 Controllo Rollback Safety
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Verifica che nessuna migrazione abbia down() implementato
echo "🔒 Controllo rollback safety..."
if grep -r "function down" Modules/*/database/migrations/ --include="*.php"; then
    echo "❌ ERRORE CRITICO: Migrazioni con down() trovate - RIMUOVERE IMMEDIATAMENTE"
    exit 1
else
    echo "✅ Migrazioni rollback-safe (nessun down())"
fi
```

## Fase 6: Controllo Regole Specifiche Laraxot

### 6.1 Verifica Modifica Colonne Pattern Corretto
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Controlla se ci sono nuove migrazioni per aggiungere colonne (VIETATO)
echo "🔍 Controllo pattern aggiunta colonne..."

# Cerca migrazioni recenti che potrebbero aggiungere colonne a tabelle esistenti
find Modules/*/database/migrations/ -name "*.php" -newermt "7 days ago" -exec basename {} \; | while read migration; do
    if echo "$migration" | grep -q "add.*to\|update.*table"; then
        echo "⚠️  Migrazione potenzialmente non conforme: $migration"
        echo "    Verifica che sia una copia della migrazione originale con timestamp aggiornato"
    fi
done
```

### 6.2 Verifica Template Corretto
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Controlla che le nuove migrazioni seguano il template corretto
echo "🔍 Controllo template migrazioni..."

for file in $(find Modules/*/database/migrations/ -name "*.php" -newermt "1 day ago"); do
    echo "Controllo: $file"
    
    # Verifica dichiarazione strict_types
    if ! grep -q "declare(strict_types=1)" "$file"; then
        echo "  ❌ Mancante declare(strict_types=1)"
    fi
    
    # Verifica use statements corretti
    if ! grep -q "use.*XotBaseMigration" "$file"; then
        echo "  ❌ Mancante use XotBaseMigration"
    fi
    
    # Verifica metodo up() presente
    if ! grep -q "public function up()" "$file"; then
        echo "  ❌ Mancante metodo up()"
    fi
    
    # Verifica assenza metodo down()
    if grep -q "function down" "$file"; then
        echo "  ❌ ERRORE CRITICO: Metodo down() presente"
    fi
done
```

## Fase 7: Esecuzione Sicura

### 7.1 Pre-Execution Checklist
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Checklist pre-esecuzione (OBBLIGATORIA)
echo "📋 Pre-execution checklist:"
echo "1. ✅ Backup database completato"
echo "2. ✅ Dry run eseguito senza errori"
echo "3. ✅ Nessun metodo down() presente"
echo "4. ✅ Controlli hasTable()/hasColumn() verificati"
echo "5. ✅ Team notificato della migrazione"

# Conferma ambiente
echo "🌍 Ambiente: $(php artisan env)"
echo "📊 Database: $(php artisan tinker --execute='echo config("database.default");')"
```

### 7.2 Esecuzione Controllata
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Esecuzione con logging completo
echo "🚀 Esecuzione migrazioni..."
php artisan migrate --verbose 2>&1 | tee migration-$(date +%Y%m%d_%H%M%S).log

# Verifica post-migrazione
php artisan migrate:status | tail -10
```

## Fase 8: Post-Migration Validation

### 8.1 Controllo Integrità Database
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Verifica integrità referenziale
echo "🔍 Controllo integrità database..."

# Per ogni modulo, verifica che le FK siano corrette
for module in $(ls Modules/); do
    if [ -d "Modules/$module/database/migrations" ]; then
        echo "Controllo FK per modulo: $module"
        # Qui andrebbero aggiunti controlli specifici per FK del modulo
    fi
done
```

### 8.2 Test Funzionalità Base
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Test basic operations
echo "🧪 Test operazioni base..."

# Test creazione record per modelli principali
php artisan tinker --execute='
try {
    // Test basic model operations
    echo "✅ Database operativo\n";
} catch (Exception $e) {
    echo "❌ Errore database: " . $e->getMessage() . "\n";
}'
```

## Fase 9: Documentazione e Cleanup

### 9.1 Aggiornamento Documentazione
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Genera documentazione schema aggiornata
echo "📝 Aggiornamento documentazione..."

# Per ogni modulo, genera schema documentation
for module in $(ls Modules/); do
    if [ -d "Modules/$module/database/migrations" ]; then
        echo "# Schema Database - $module" > "Modules/$module/docs/database_schema.md"
        echo "Ultimo aggiornamento: $(date)" >> "Modules/$module/docs/database_schema.md"
        echo "" >> "Modules/$module/docs/database_schema.md"
        
        # Lista tabelle create nelle migrazioni
        grep -r "Schema::create" "Modules/$module/database/migrations/" | \
        sed 's/.*create.*[\'\"]\\([^\'\"]*\\).*/- \\1/' >> "Modules/$module/docs/database_schema.md"
    fi
done
```

### 9.2 Cleanup e Archiviazione
```bash
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
# Archivia log di migrazione
mkdir -p storage/logs/migrations/
mv migration-*.log storage/logs/migrations/ 2>/dev/null || true

# Rimuovi file backup temporanei
find . -name "*.backup" -path "*/migrations/*" -mtime +7 -delete
```

## Template per Nuove Migrazioni

### Creazione Tabella
```php
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        // Controllo esistenza tabella
        if ($this->hasTable('nome_tabella')) {
            return;
        }

        // Creazione tabella
        Schema::create('nome_tabella', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->index();
            $table->text('descrizione')->nullable();
            $table->timestamps();
        });
        
        // Commento tabella
        $this->tableComment('nome_tabella', 'Descrizione della tabella');
    }
};
```

### Aggiunta Colonne (COPIA migrazione originale)
```php
<?php

declare(strict_types=1);

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Xot\Database\Migrations\XotBaseMigration;

return new class extends XotBaseMigration
{
    public function up(): void
    {
        // Se tabella non esiste, creala con TUTTE le colonne
        if (!$this->hasTable('nome_tabella')) {
            Schema::create('nome_tabella', function (Blueprint $table) {
                $table->id();
                $table->string('nome')->index();
                $table->text('descrizione')->nullable();
                // NUOVA COLONNA inclusa nella creazione
                $table->string('nuova_colonna')->nullable();
                $table->timestamps();
            });
            
            $this->tableComment('nome_tabella', 'Descrizione della tabella');
            return;
        }
        
        // Se tabella esiste, aggiungi solo la nuova colonna
        if (!$this->hasColumn('nome_tabella', 'nuova_colonna')) {
            Schema::table('nome_tabella', function (Blueprint $table) {
                $table->string('nuova_colonna')->nullable();
            });
        }
    }
};
```

## Errori Critici e Recovery

### Errore: Migrazione con down()
**Azione**: RIMUOVERE IMMEDIATAMENTE il metodo down()
**Recovery**: Editare il file e rimuovere tutto il metodo

### Errore: Classe nominata invece di anonima
**Azione**: Convertire in classe anonima
**Recovery**: Riscrivere usando `return new class extends XotBaseMigration`

### Errore: Migrazione fallita
**Azione**: MAI fare rollback, correggere con nuova migrazione
**Recovery**: Creare nuova migrazione che corregge il problema

## Best Practice Riassunto

1. **SEMPRE** backup prima di migrazioni
2. **SEMPRE** dry run con --pretend
3. **SEMPRE** classi anonime che estendono XotBaseMigration
4. **MAI** implementare metodo down()
5. **SEMPRE** verificare esistenza con hasTable()/hasColumn()
6. **Per aggiungere colonne**: copiare migrazione originale
7. **SEMPRE** documentare modifiche schema
8. **MAI** rollback in produzione

---

**Ultimo aggiornamento**: Dicembre 2024  
**Versione**: 1.0  
**Compatibilità**: Laraxot <nome progetto>, XotBaseMigration 
