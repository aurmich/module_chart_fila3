<?php

declare(strict_types=1);

namespace Modules\Tenant\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model as EloquentModel;
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 54f4fa16 (.)
use Modules\Xot\Traits\Updater;

/**
 * Class BaseModel.
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
  */
abstract class BaseModel extends EloquentModel
=======
 */
abstract class BaseModel extends Model
>>>>>>> 54f4fa16 (.)
{
    use HasFactory;
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var bool */
    public $timestamps = true;

    /** @var int */
    protected $perPage = 30;

    /** @var string */
<<<<<<< HEAD
<<<<<<< HEAD
    protected $connection = 'tenant';
=======
    protected $connection = 'setting';
>>>>>>> aurmich/dev
=======
    protected $connection = 'setting';
>>>>>>> 54f4fa16 (.)

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @var list<string> */
    protected $hidden = [
        // 'password'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory()
    {
        return app(\Modules\Xot\Actions\Factory\GetFactoryAction::class)->execute(static::class);
    }

    /** @return array<string, string> */
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
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'published_at' => 'datetime',

            'verified_at' => 'datetime',

            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
}
