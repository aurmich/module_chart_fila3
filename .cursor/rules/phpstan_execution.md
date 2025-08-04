<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
# Esecuzione di PHPStan in Laraxot <nome progetto>

## Comando Corretto

Per eseguire PHPStan in Laraxot <nome progetto>, è necessario utilizzare il seguente formato di comando:

```bash
cd /var/www/html/_bases/base_<nome progetto>_fila3/laravel
<<<<<<< HEAD
=======
=======
# Esecuzione di PHPStan in Laraxot PTVX
=======
# Esecuzione di PHPStan in Laraxot <nome progetto>
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)

## Comando Corretto

Per eseguire PHPStan in Laraxot <nome progetto>, è necessario utilizzare il seguente formato di comando:

```bash
<<<<<<< HEAD
cd /var/www/html/_bases/base_ptvx_fila3/laravel
>>>>>>> d23ba493 (add calendar)
=======
cd /var/www/html/_bases/base_<nome progetto>_fila3/laravel
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
./vendor/bin/phpstan analyse --level=9 --memory-limit=2G Modules/NomeModulo
```

## Importante: Notare il ./

È assolutamente necessario includere `./` prima di `vendor/bin/phpstan` per garantire che lo script venga eseguito correttamente.

## Analisi dei Risultati

Dopo l'esecuzione, PHPStan produrrà un elenco di errori che devono essere risolti seguendo le linee guida nei documenti:

- `laravel/Modules/Xot/docs/PHPSTAN-FIXES-SUMMARY.md`
- `laravel/Modules/Xot/docs/PHPSTAN-GENERIC-TYPES.md`
- `laravel/Modules/Xot/docs/PHPSTAN-IMPLEMENTATION-GUIDE.md`

## Script di Utilità

Per analizzare rapidamente tutti i moduli e salvare i risultati:

```bash
#!/bin/bash
<<<<<<< HEAD
cd /var/www/html/_bases/base_<nome progetto>_fila3/laravel
=======
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_<nome progetto>_fila3/laravel
=======
cd /var/www/html/_bases/base_ptvx_fila3/laravel
>>>>>>> d23ba493 (add calendar)
=======
cd /var/www/html/_bases/base_<nome progetto>_fila3/laravel
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
mkdir -p phpstan_results
for module in Modules/*; do
    if [ -d "$module" ]; then
        module_name=$(basename "$module")
        echo "Analisi di $module_name..."
        ./vendor/bin/phpstan analyse --level=9 --memory-limit=2G "$module" > "phpstan_results/${module_name}.txt"
    fi
done
```

## Correzione degli Errori

Per ogni modulo, seguire questo processo:

1. Eseguire PHPStan sul modulo
2. Categorizzare gli errori (namespace, modelli, relazioni, ecc.)
3. Correggere una categoria alla volta, partendo dalle più semplici
4. Verificare i progressi con esecuzioni incrementali
<<<<<<< HEAD
5. Documentare le soluzioni nella cartella docs del modulo 
=======
<<<<<<< HEAD
<<<<<<< HEAD
5. Documentare le soluzioni nella cartella docs del modulo 
=======
5. Documentare le soluzioni nella cartella docs del modulo 
>>>>>>> d23ba493 (add calendar)
=======
5. Documentare le soluzioni nella cartella docs del modulo 
>>>>>>> 8aab2e4a (📝 (route-service-provider.md): update documentation for route service provider to improve clarity and organization)
>>>>>>> aurmich/dev
