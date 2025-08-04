<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
//use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Contracts\Mail\Mailable;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MailTemplates\Interfaces\MailTemplateInterface;
use Spatie\MailTemplates\Models\MailTemplate as SpatieMailTemplate;

/**
 * 
 *
 * @property int $id
 * @property string $mailable
 * @property string|null $subject
 * @property string $html_template
 * @property string|null $text_template
 * @property int $version
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Notify\Models\MailTemplateVersion> $versions
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Notify\Models\MailTemplateLog> $logs
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3e4ec66 (.)
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property string|null $deleted_by
 * @property string $name
 * @property string $slug
 * @property-read array $variables
 * @property-read mixed $translations
 * @method static Builder<static>|MailTemplate forMailable(\Illuminate\Contracts\Mail\Mailable $mailable)
 * @method static Builder<static>|MailTemplate newModelQuery()
 * @method static Builder<static>|MailTemplate newQuery()
 * @method static Builder<static>|MailTemplate query()
 * @method static Builder<static>|MailTemplate whereCreatedAt($value)
 * @method static Builder<static>|MailTemplate whereCreatedBy($value)
 * @method static Builder<static>|MailTemplate whereDeletedAt($value)
 * @method static Builder<static>|MailTemplate whereDeletedBy($value)
 * @method static Builder<static>|MailTemplate whereHtmlTemplate($value)
 * @method static Builder<static>|MailTemplate whereId($value)
 * @method static Builder<static>|MailTemplate whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|MailTemplate whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|MailTemplate whereLocale(string $column, string $locale)
 * @method static Builder<static>|MailTemplate whereLocales(string $column, array $locales)
 * @method static Builder<static>|MailTemplate whereMailable($value)
 * @method static Builder<static>|MailTemplate whereName($value)
 * @method static Builder<static>|MailTemplate whereSlug($value)
 * @method static Builder<static>|MailTemplate whereSubject($value)
 * @method static Builder<static>|MailTemplate whereTextTemplate($value)
 * @method static Builder<static>|MailTemplate whereUpdatedAt($value)
 * @method static Builder<static>|MailTemplate whereUpdatedBy($value)
<<<<<<< HEAD
 * @property string|null $params
 * @method static Builder<static>|MailTemplate whereParams($value)
 * @property array<array-key, mixed>|null $sms_template
 * @property int $counter
 * @method static Builder<static>|MailTemplate whereCounter($value)
 * @method static Builder<static>|MailTemplate whereSmsTemplate($value)
 * @mixin \Eloquent
=======
>>>>>>> 54f4fa16 (.)
=======
 * @mixin \Eloquent
>>>>>>> f3e4ec66 (.)
 */
class MailTemplate extends SpatieMailTemplate implements MailTemplateInterface
{
    //use SoftDeletes;
    use HasTranslations;
    use HasSlug;

    /** @var string */
    protected $connection = 'notify';

    /** @var list<string> */
<<<<<<< HEAD
    public array $translatable = ['subject', 'html_template', 'text_template','sms_template'];
=======
    public array $translatable = ['subject', 'html_template', 'text_template'];
>>>>>>> 54f4fa16 (.)

    /** @var list<string> */
    protected $fillable = [
        'mailable',
        'name',
        'slug',
        'subject',
        'html_template',
        'text_template',
<<<<<<< HEAD
        'sms_template',
        //'version',  //under development
        'params',
<<<<<<< HEAD
        'counter',
=======
        //'version',  //under development
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> c9c4a8bd (feat: use BaseTransition in all Transactions of SaluteOra)
    ];

    /**
     * Define attribute casts.
     *
     * @return array<string, string>
     */
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
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function scopeForMailable(Builder $query, Mailable $mailable): Builder
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 345f8677 (phpstan)
        if(!method_exists($mailable, 'getSlug')){
            throw new \Exception('Il metodo getSlug() non è definito nella classe '.$mailable::class);
        }
        $slug=$mailable->getSlug();
<<<<<<< HEAD
        return $query
            ->where('mailable', get_class($mailable))
            ->where('slug', $slug);
=======

        return $query
            ->where('mailable', get_class($mailable))
            ->where('slug', $mailable->getSlug());
>>>>>>> 54f4fa16 (.)
=======
        return $query
            ->where('mailable', get_class($mailable))
            ->where('slug', $slug);
>>>>>>> 345f8677 (phpstan)
    }


    /*
     * Versioni del template email.
     *
     * @return HasMany<MailTemplateVersion>

    public function versions(): HasMany
    {
        return $this->hasMany(MailTemplateVersion::class, 'template_id')
            ->orderByDesc('version');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(MailTemplateLog::class, 'template_id');
    }

     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
    public function createNewVersion(string $createdBy, ?string $notes = null): self
    {
        $this->versions()->create([
            'mailable' => $this->mailable,
            'subject' => $this->subject,
            'html_template' => $this->html_template,
            'text_template' => $this->text_template,
            'version' => $this->version,
            'created_by' => $createdBy,
            'change_notes' => $notes,
        ]);

        $this->increment('version');
        return $this;
    }
    */


}
