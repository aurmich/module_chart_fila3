<?php

declare(strict_types=1);

namespace Modules\Chart\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Webmozart\Assert\Assert;

/**
 * Modules\Chart\Models\Chart.
 *
 * @property int|null $height
 * @property string|null $type
 * @property int|null $width
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
 * @property string|null $color
 * @property string|null $bg_color
 * @property int|null $font_family
 * @property int|null $font_size
 * @property int|null $font_style
 * @property int|null $y_grace
 * @property bool|null $yaxis_hide
 * @property string|null $list_color
 * @property int|null $grace
 * @property int|null $x_label_angle
 * @property bool|null $show_box
 * @property int|null $x_label_margin
 * @property int|null $plot_perc_width
 * @property int|null $plot_value_show
 * @property string|null $plot_value_format
 * @property int|null $plot_value_pos
 * @property string|null $plot_value_color
 * @property string|null $group_by
 * @property string|null $sort_by
 * @property int|null $transparency
 * @property array|null $colors
 * @property string|null $post_id
 * @property string|null $post_type
 * @property string|null $chart_type
<<<<<<< HEAD
=======
=======
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
 * @method static \Modules\Chart\Database\Factories\ChartFactory factory($count = null, $state = [])
 * @method static Builder|Chart newModelQuery()
 * @method static Builder|Chart newQuery()
 * @method static Builder|Chart query()
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
=======
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * @property-read \Modules\Blog\Models\Profile|null $creator
 * @property-read \Modules\Blog\Models\Profile|null $updater
>>>>>>> 54f4fa16 (.)
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> 345f8677 (phpstan)
=======
 * @property array<string, mixed> $attributes
<<<<<<< HEAD
 * @phpstan-type ChartArray array{id: int|null, type: string|null, width: int|null, height: int|null}
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
 * @phpstan-type Chart array{id: int|null, type: string|null, width: int|null, height: int|null}
>>>>>>> 5a682a93 (✨ (Chart.php, DoctorsRelationManager.php, ListUsers.php, CreateAppointmentAction.php, RegisterAction.php, UpdateUserAction.php, AnalyzePatientDataCommand.php, AppointmentTypeEnum.php, DentistSpecializationEnum.php, DoctorRegistrationStatusEnum.php, UserStateEnum.php, AdminCalendarWidget.php, PatientCalendarWidget.php, PatientRegistrationWizard.php, ReportingChartAssets.php, ReportDataFactory.php, ReportFactory.php, CreateAppointmentAction.php, UserModerationService.php): introduce new features and improvements including type definitions, validation, and new models for better data handling and reporting.)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
>>>>>>> aurmich/dev
 * @mixin \Eloquent
 */
class Chart extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'id',
        'post_id',
        'post_type',
        'type',
        'width', 'height',
        'color',
        'bg_color',
        'font_family',
        'font_size',
        'font_style',
        'y_grace',
        'yaxis_hide',
        'list_color',
        'grace',
        'x_label_angle',
        'show_box',
        'x_label_margin',
        'plot_perc_width',
        'plot_value_show',
        'plot_value_format',
        'plot_value_pos',
        'plot_value_color',
        'group_by',
        'sort_by',
        'transparency',
        'colors',
    ];

<<<<<<< HEAD
    /** @var  array<string, mixed>   */
=======
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var  array<string, mixed>   */
=======
    /**
     * Undocumented variable.
     *
     * @var array
     */
>>>>>>> 54f4fa16 (.)
=======
    /** @var  array<string, mixed>   */
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    protected $attributes = [
        'list_color' => '#d60021',
        'color' => '#d60021',
        'font_family' => 15,
        'font_style' => 9002,
        'font_size' => 12,
        'x_label_angle' => 0,
        'show_box' => false,
        'x_label_margin' => 10,
        'plot_perc_width' => 90,
        'plot_value_show' => 1,
        'plot_value_pos' => 1,
        'plot_value_color' => '#000000',
    ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
>>>>>>> aurmich/dev
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'colors' => 'array',
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
        ];
    }

    public function getPanelRow(string $parent_field, string $my_field): int|string|null
    {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
    /** @var array<string, string> */
    protected $casts = [
        'colors' => 'array',
    ];
<<<<<<< HEAD
=======
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'show_box' => 'boolean',
            'plot_value_show' => 'boolean',
        ];
    }
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)

    // /**
    //  * @return int|string|null
    //  */
    // public function getParentStyle(string $name)
    // {
    //     $panel = PanelService::make()->getRequestPanel();

    //     if (null === $panel) {
    //         return $this->attributes[$name] ?? null;
    //     }
    //     $parent = $panel->getParent();

    //     if (null === $parent) {
    //         return $this->attributes[$name] ?? null;
    //     }
    //     $parent = $parent->getRow();
    //     if (! method_exists($parent, 'chart')) {
    //         return $this->attributes[$name] ?? null;
    //     }
    //     // dddx([$name, $panel->row, $parent->{$name}]);
    //     // $value = $parent->chart->{$name};

    //     $value = $parent->chart->attributes[$name] ?? null;

    //     $this->{$name} = $value;
    //     $this->save();
    //     if (! \is_string($value) && ! \is_int($value)) {
    //         return null;
    //     }

    //     return $value;
    // }

    public function getPanelRow(string $parent_field, string $my_field): int|string|null
    {
        // $panel = PanelService::make()->getRequestPanel();
        // if (! \is_object($panel)) {
        //     return null;
        // }
        // $panel_row = $panel->row;
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
        $panel_row = $this;

        try {
            $value = $panel_row->{$parent_field};
            $this->{$my_field} = $value;
            $this->save();
        } catch (\ErrorException $errorException) {
            $msg = [
                'message' => $errorException->getMessage(),
                'line' => $errorException->getLine(),
                'file' => $errorException->getFile(),
                'panel_row_class' => $panel_row::class,
            ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            // echo '<pre>'.print_r($msg,true).'</pre>';
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
            $value = null;
        }

        return $value;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    // ---------- Getter
    // public function getColorAttribute(?string $value): ?string
    // {
    //     if (null !== $value) {
    //         // return $value;
    //     }

    //     return (string) $this->getParentStyle('color');
    // }

    // public function getListColorAttribute(?string $value): ?string
    // {
    //     if (null !== $value) {
    //         return $value;
    //     }

    //     return (string) $this->getParentStyle('list_color');
    // }

    //     public function getXLabelAngleAttribute(?string $value): ?string
    //     {
    //         if (null !== $value) {
    //             return $value;
    //         }
    //         /*
    //         $this->x_label_angle = 0;
    //         $this->save();
    //         $value = $this->x_label_angle;

    //         return $value;
    // */
    //         return (string) $this->getParentStyle('x_label_angle');
    //     }

    // public function getFontFamilyAttribute(?int $value): int
    // {
    //     if (null !== $value && 0 !== $value) {
    //         return (int) $value;
    //     }

    //     return (int) $this->getParentStyle('font_family');
    // }

    // public function getFontStyleAttribute(?int $value): int
    // {
    //     if (null !== $value && 0 !== $value) {
    //         return (int) $value;
    //     }

    //     return (int) $this->getParentStyle('font_style');
    // }

    // public function getFontSizeAttribute(?int $value): int
    // {
    //     if (null !== $value && 0 !== $value) {
    //         return (int) $value;
    //     }

    //     return (int) $this->getParentStyle('font_size');
    // }

>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
    public function getTypeAttribute(?string $value): ?string
    {
        if ($value !== null) {
            return $value;
        }

<<<<<<< HEAD
        $res = $this->attributes['type'] ?? (string) $this->getPanelRow('chart_type', 'type');
        Assert::string($res);
        return $res;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $res = $this->attributes['type'] ?? (string) $this->getPanelRow('chart_type', 'type');
        Assert::string($res);
        return $res;
=======
        return $this->attributes['type'] ?? (string) $this->getPanelRow('chart_type', 'type');
>>>>>>> 54f4fa16 (.)
=======
        $defaultType = $this->attributes['type'] ?? null;
        if ($defaultType !== null) {
            return (string) $defaultType;
        }

        $panelValue = $this->getPanelRow('chart_type', 'type');
        return $panelValue !== null ? (string) $panelValue : null;
>>>>>>> c99763dd (✨ (studio-filter-widget-lessons.mdc): add comprehensive guidelines and patterns for StudioFilterWidget to enhance code quality and maintainability)
=======
        return $this->attributes['type'] ?? (string) $this->getPanelRow('chart_type', 'type');
>>>>>>> c283a5df (✨ (SaluteOra): introduce new features including user moderation, report generation, and patient registration wizard)
=======
        $res= $this->attributes['type'] ?? (string) $this->getPanelRow('chart_type', 'type');
        Assert::string($res);
        return $res;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
    }

    public function getWidthAttribute(?string $value): ?int
    {
        if ($value === null) {
            return (int) $this->getPanelRow('width', 'width');
        }

        if ((int) $value === 0) {
            return (int) $this->getPanelRow('width', 'width');
        }

        return (int) $value;
    }

    public function getHeightAttribute(?string $value): ?int
    {
        if ($value === null) {
            return (int) $this->getPanelRow('height', 'height');
        }
        if ((int) $value === 0) {
            return (int) $this->getPanelRow('height', 'height');
        }

        return (int) $value;
    }

    public function getSettings(): array
    {
        Assert::notNull($this->type, '['.__FILE__.']['.__LINE__.']');
        if (Str::startsWith($this->type, 'mixed')) {
            $parz = \array_slice(explode(':', $this->type), 1);
            $mixed_id = implode('|', $parz);
            $mixed = MixedChart::firstWhere(['id' => $mixed_id]);
            Assert::notNull($mixed, '['.__FILE__.']['.__LINE__.']');
            Assert::isInstanceof($mixed->charts, Collection::class);

            return $mixed->charts->toArray();
        }

        return [$this->toArray()];
    }
<<<<<<< HEAD
} 
=======
<<<<<<< HEAD
} 
=======
}
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
