<?php

declare(strict_types=1);

namespace Modules\Chart\Models;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e4d163b (phpstan)
use Modules\Xot\Traits\Updater;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\ProfileContract;
use Modules\Xot\Actions\Factory\GetFactoryAction;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BaseModel.
 * 
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
=======
// ---------- traits
=======
>>>>>>> 8e4d163b (phpstan)
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BaseModel.
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
 * 
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
 *
>>>>>>> 8e4d163b (phpstan)
 */
abstract class BaseModel extends Model
{
    use HasFactory;

    // use Searchable;
    // use Cachable;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     */

    /** @var bool */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
    protected $connection = 'chart';

<<<<<<< HEAD
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
    /** @var array<string, string> */
    protected $casts = ['published_at' => 'datetime', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
>>>>>>> 54f4fa16 (.)

    /** @var string */
    protected $primaryKey = 'id';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory(): Factory
    {
        return app(GetFactoryAction::class)->execute(static::class);
    }
}
