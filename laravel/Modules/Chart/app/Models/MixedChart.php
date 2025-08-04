<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Chart\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Relations\MorphMany;
=======
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> 8e4d163b (phpstan)
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\Relation;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
use Illuminate\Database\Eloquent\Relations\MorphMany;
>>>>>>> 8e4d163b (phpstan)

/**
 * Modules\Chart\Models\MixedChart.
 *
 * @property Collection<int, \Modules\Chart\Models\Chart> $charts
 * @property int|null $charts_count
 * @method static \Modules\Chart\Database\Factories\MixedChartFactory factory($count = null, $state = [])
 * @method static Builder|MixedChart newModelQuery()
 * @method static Builder|MixedChart newQuery()
 * @method static Builder|MixedChart query()
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
=======
 * @property-read \Modules\Blog\Models\Profile|null $creator
 * @property-read \Modules\Blog\Models\Profile|null $updater
>>>>>>> 54f4fa16 (.)
=======
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
>>>>>>> 8e4d163b (phpstan)
 * @mixin \Eloquent
 */
class MixedChart extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'name',
    ];

    // ---- relations

    public function charts(): MorphMany
    {
<<<<<<< HEAD
        /**
         * @phpstan-ignore argument.type
         */
=======
>>>>>>> 54f4fa16 (.)
        Relation::morphMap([
            'question_chart' => 'Modules\Quaeris\Models\QuestionChart',
            'mixed_chart' => self::class,
        ]);

        return $this->morphMany(Chart::class, 'post');
    }
}
