<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Chart\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Relations\MorphMany;
<<<<<<< HEAD
=======
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
>>>>>>> aurmich/dev

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
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property-read \Modules\Blog\Models\Profile|null $creator
 * @property-read \Modules\Blog\Models\Profile|null $updater
>>>>>>> 54f4fa16 (.)
=======
 * @property-read ProfileContract|null $creator
 * @property-read ProfileContract|null $updater
>>>>>>> 8e4d163b (phpstan)
=======
 * @phpstan-type MixedChartArray array{id: int|null, name: string|null, charts: Collection<int, \Modules\Chart\Models\Chart>}
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
>>>>>>> aurmich/dev
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
        Relation::morphMap([
            'question_chart' => 'Modules\Quaeris\Models\QuestionChart',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /**
         * @phpstan-ignore argument.type
         */
=======
>>>>>>> 54f4fa16 (.)
=======
        /**
         * @phpstan-ignore-next-line
         */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
        Relation::morphMap([
            'question_chart' => 'Modules\Quaeris\Models\QuestionChart',
=======
        /** @var array<string, class-string<\Illuminate\Database\Eloquent\Model>> $morphMap */
        $morphMap = [
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
        Relation::morphMap([
            'question_chart' => 'Modules\Quaeris\Models\QuestionChart',
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
>>>>>>> aurmich/dev
            'mixed_chart' => self::class,
        ]);

        return $this->morphMany(Chart::class, 'post');
    }
}
