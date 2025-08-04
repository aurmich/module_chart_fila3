<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Chart\Models;

use Modules\Xot\Traits\Updater;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Actions\Factory\GetFactoryAction;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BaseModel.
 * 
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
 */
abstract class BaseModel extends Model
{
    use HasFactory;

    // use Searchable;
    // use Cachable;
=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
namespace Modules\Geo\Models;

// use GeneaLabs\LaravelModelCaching\Traits\Cachable;
// //use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
 */
abstract class BaseModel extends Model
{
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
<<<<<<< HEAD
<<<<<<< HEAD
     */

    /** @var bool */
=======
     *
     * @var bool
     */
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
     *
     * @var bool
     */
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string */
    protected $connection = 'chart';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
    }
=======
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
    // use Searchable;
    // use Cachable;

    /** @var list<string> */
    protected $fillable = ['id'];

    /** @var array<string, string> */
    protected $casts = ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
<<<<<<< HEAD
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)

    /** @var string */
    protected $primaryKey = 'id';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }
=======
    protected $connection = 'geo';
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
=======
    protected $connection = 'geo';
>>>>>>> 8f11126c (Squashed 'laravel/Modules/Geo/' content from commit 9f987ec)
}
