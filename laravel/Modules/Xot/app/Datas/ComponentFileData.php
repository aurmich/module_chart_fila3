<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

/**
 * Undocumented class.
 */
class ComponentFileData extends Data
{
    public string $name;
<<<<<<< HEAD
    public string $class;
    public ?string $module = null;
    public ?string $path = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> d23ba493 (add calendar)
    public string $class;

    public ?string $module = null;

    public ?string $path = null;
<<<<<<< HEAD
=======
=======
>>>>>>> 54f4fa16 (.)

=======
>>>>>>> 15cb84fb (fix collisions)
    public string $class;
    public ?string $module = null;
    public ?string $path = null;
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 15cb84fb (fix collisions)
=======

>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
    public ?string $ns = null;

    public static function collection(EloquentCollection|Collection|array $data): DataCollection
    {
        return self::collect($data, DataCollection::class);
<<<<<<< HEAD
        
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
        
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
    }
}
