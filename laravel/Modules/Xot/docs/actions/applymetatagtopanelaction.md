# ApplyMetatagToPanelAction

## Descrizione
L'azione `ApplyMetatagToPanelAction` è responsabile di applicare i metatag al panel Filament, configurando l'aspetto visivo dell'interfaccia amministrativa.

## Funzionalità
- Applica i colori del tema al panel
<<<<<<< HEAD
- Configura il logo del brand
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Configura il logo del brand utilizzando i metodi semantici
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> bead9c28 (fix case)
- Configura il logo del brand
=======
- Configura il logo del brand utilizzando i metodi semantici
>>>>>>> 54f4fa16 (.)
=======
- Configura il logo del brand
>>>>>>> 9df8f556 (fix .md)
>>>>>>> aurmich/dev
- Imposta il nome del brand
- Configura il logo per la modalità scura
- Imposta l'altezza del logo
- Configura il favicon

## Utilizzo
```php
use Modules\Xot\Actions\Panel\ApplyMetatagToPanelAction;

$panel = new Panel();
$action = new ApplyMetatagToPanelAction();
$panel = $action->execute($panel);
```

## Metodi

### execute(Panel $panel): Panel
Applica i metatag al panel Filament.

#### Parametri
- `$panel`: Il panel Filament da configurare

#### Return
- `Panel`: Il panel configurato con i metatag

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
## Esempio di Configurazione
```php
$panel
    ->brandName($metatag->getBrandName())           // Metodo semantico per il nome del brand
    ->brandLogo($metatag->getBrandLogo())           // Metodo semantico per il logo
    ->darkModeBrandLogo($metatag->getDarkModeBrandLogo()) // Metodo semantico per il logo dark
    ->brandLogoHeight($metatag->getBrandLogoHeight()) // Metodo semantico per l'altezza
    ->favicon($metatag->getFavicon());              // Metodo già semantico
```

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 9df8f556 (fix .md)
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> bead9c28 (fix case)
>>>>>>> aurmich/dev
## Gestione Errori
In caso di errore durante l'applicazione dei metatag:
- L'errore viene registrato nel log
- Il panel originale viene restituito senza modifiche
- L'applicazione continua a funzionare

<<<<<<< HEAD
## Collegamenti
- [MetatagData](../datas/MetatagData.md)
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
## Best Practices

1. **Utilizzo dei Metodi**:
   - Utilizzare sempre i metodi semantici (getBrand*)
   - Evitare l'accesso diretto alle proprietà
   - Verificare sempre la presenza dei loghi dark

2. **Configurazione**:
   - Mantenere coerenza tra logo chiaro e scuro
   - Verificare le dimensioni del logo
   - Testare il contrasto dei colori

3. **Manutenzione**:
   - Aggiornare regolarmente i metatag
   - Verificare la validità dei percorsi
   - Mantenere backup delle configurazioni

## Collegamenti
- [MetatagData](../datas/MetatagData.md)
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
- [Logo Resolution](../logo_resolution.md)
- [Color Management](../colors.md)
- [Semantic Methods](../philosophy/semantic_methods.md)
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
>>>>>>> bead9c28 (fix case)
## Collegamenti
- [MetatagData](../datas/MetatagData.md)
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
=======
## Best Practices

1. **Utilizzo dei Metodi**:
   - Utilizzare sempre i metodi semantici (getBrand*)
   - Evitare l'accesso diretto alle proprietà
   - Verificare sempre la presenza dei loghi dark

2. **Configurazione**:
   - Mantenere coerenza tra logo chiaro e scuro
   - Verificare le dimensioni del logo
   - Testare il contrasto dei colori

3. **Manutenzione**:
   - Aggiornare regolarmente i metatag
   - Verificare la validità dei percorsi
   - Mantenere backup delle configurazioni

## Collegamenti
- [MetatagData](../datas/MetatagData.md)
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
- [Logo Resolution](../logo_resolution.md)
- [Color Management](../colors.md)
- [Semantic Methods](../philosophy/semantic_methods.md)
>>>>>>> 54f4fa16 (.)
=======
## Collegamenti
- [MetatagData](../datas/MetatagData.md)
- [Filament Panel Documentation](https://filamentphp.com/docs/panels)
>>>>>>> 9df8f556 (fix .md)
>>>>>>> aurmich/dev

## Note
- Questa azione utilizza il trait `QueueableAction` di Spatie
- Tutti i metodi sono fortemente tipizzati per PHPStan livello 10
<<<<<<< HEAD
- La documentazione è mantenuta aggiornata nella cartella docs 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- La documentazione è mantenuta aggiornata nella cartella docs 
=======
=======
>>>>>>> 7440f060 (delete duplicate folder + add .md)
- La documentazione è mantenuta aggiornata nella cartella docs

## Collegamenti tra versioni di ApplyMetatagToPanelAction.md
* [ApplyMetatagToPanelAction.md](../../../Xot/docs/actions/ApplyMetatagToPanelAction.md)
* [ApplyMetatagToPanelAction.md](../../../Xot/docs/actions/panel/ApplyMetatagToPanelAction.md)


## Collegamenti tra versioni di applymetatagtopanelaction.md
* [applymetatagtopanelaction.md](panel/applymetatagtopanelaction.md)

<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 9df8f556 (fix .md)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> 7440f060 (delete duplicate folder + add .md)
=======
- La documentazione è mantenuta aggiornata nella cartella docs 
>>>>>>> bead9c28 (fix case)
>>>>>>> aurmich/dev
