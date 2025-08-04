# BaseModel del Modulo Notify

## Panoramica

BaseModel è la classe base astratta per tutti i modelli nel modulo Notify. Estende `XotBaseModel` e implementa funzionalità comuni per i modelli del modulo.

## Struttura

```php
namespace Modules\Notify\Models;

use Modules\Xot\Models\XotBaseModel;

abstract class BaseModel extends XotBaseModel
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function casts(): array
=======
    public function casts(): array
>>>>>>> 54f4fa16 (.)
=======
    protected function casts(): array
>>>>>>> 2099645a (.)
=======
    public function casts(): array
>>>>>>> 15cb84fb (fix collisions)
=======
    protected function casts(): array
>>>>>>> d23ba493 (add calendar)
    {
        return array_merge(parent::casts(), [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ]);
    }
}
```

## Best Practices Seguite

1. **Estensione Corretta**
   - Estende `XotBaseModel` dal modulo Xot
   - Dichiarata come `abstract`
   - Segue le convenzioni di namespace

2. **Gestione Cast**
   - Utilizza il metodo `casts()` invece della proprietà `$casts`
   - Mantiene i cast del modello base con `parent::casts()`
   - Definisce tipi appropriati per i timestamp

3. **Struttura Namespace**
   - Segue la struttura standard dei moduli
   - Non include `app` nel namespace
   - Mantiene coerenza con altri modelli

## Utilizzo

```php
namespace Modules\Notify\Models;

class NotificationTemplate extends BaseModel
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function casts(): array
=======
    public function casts(): array
>>>>>>> 54f4fa16 (.)
=======
    protected function casts(): array
>>>>>>> 2099645a (.)
=======
    public function casts(): array
>>>>>>> 15cb84fb (fix collisions)
=======
    protected function casts(): array
>>>>>>> d23ba493 (add calendar)
    {
        return array_merge(parent::casts(), [
            'preview_data' => 'array',
            'body_html' => 'string',
            'body_text' => 'string',
        ]);
    }
}
```

## Collegamenti Bidirezionali

### Collegamenti nella Root
- [Architettura dei Modelli](../../../../docs/architecture/models.md)
- [Gestione Notifiche](../../../../docs/architecture/notifications.md)

### Collegamenti ai Moduli
- [XotBaseModel](../../Xot/docs/XotBaseModel.md)
- [Modelli Notify](./models.md)

## Note Importanti

1. Tutti i modelli del modulo devono estendere questo BaseModel
2. I cast sono gestiti tramite il metodo `casts()`
3. Il namespace non include il segmento `app`
4. Le funzionalità comuni vanno implementate qui
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
5. La documentazione va mantenuta aggiornata 
=======
5. La documentazione va mantenuta aggiornata 
>>>>>>> 54f4fa16 (.)
=======
5. La documentazione va mantenuta aggiornata 
>>>>>>> 2099645a (.)
=======
5. La documentazione va mantenuta aggiornata 
>>>>>>> 15cb84fb (fix collisions)
=======
5. La documentazione va mantenuta aggiornata 
>>>>>>> d23ba493 (add calendar)
