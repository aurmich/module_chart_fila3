<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class NotificationLog extends Model
{
    /**
     * The attributes that are mass assignable.
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 345f8677 (phpstan)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class NotificationLog extends Model
{
    /**
<<<<<<< HEAD
     * Tabella associata al modello.
     *
     * @var string
     */
    protected $table = 'notification_logs';
    
    /**
     * Gli attributi che sono assegnabili in massa.
>>>>>>> 54f4fa16 (.)
=======
     * The attributes that are mass assignable.
>>>>>>> 345f8677 (phpstan)
     *
     * @var array<int, string>
     */
    protected $fillable = [
<<<<<<< HEAD
<<<<<<< HEAD
        'notifiable_type',
        'notifiable_id',
        'type',
        'channel',
        'recipient',
        'subject',
        'message',
        'status',
        'sent_at',
        'read_at',
        'error_message',
        'metadata',
    ];

    /**
     * The attributes that should be cast.
=======
        'template_id',
=======
>>>>>>> 345f8677 (phpstan)
        'notifiable_type',
        'notifiable_id',
        'type',
        'channel',
        'recipient',
        'subject',
        'message',
        'status',
        'sent_at',
        'read_at',
        'error_message',
        'metadata',
    ];

    /**
<<<<<<< HEAD
     * Gli attributi da castare.
>>>>>>> 54f4fa16 (.)
=======
     * The attributes that should be cast.
>>>>>>> 345f8677 (phpstan)
     *
     * @var array<string, string>
     */
    protected $casts = [
<<<<<<< HEAD
<<<<<<< HEAD
        'sent_at' => 'datetime',
        'read_at' => 'datetime',
        'metadata' => 'array',
    ];

    /**
     * The possible status values.
     *
     * @var array<string, string>
     */
    public const STATUS_PENDING = 'pending';
    public const STATUS_SENT = 'sent';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_FAILED = 'failed';
    public const STATUS_READ = 'read';

    /**
     * Get the parent notifiable model.
=======
        'data' => 'array',
        'metadata' => 'array',
=======
>>>>>>> 345f8677 (phpstan)
        'sent_at' => 'datetime',
        'read_at' => 'datetime',
        'metadata' => 'array',
    ];

    /**
     * The possible status values.
     *
<<<<<<< HEAD
     * @return MorphTo
>>>>>>> 54f4fa16 (.)
=======
     * @var array<string, string>
     */
    public const STATUS_PENDING = 'pending';
    public const STATUS_SENT = 'sent';
    public const STATUS_DELIVERED = 'delivered';
    public const STATUS_FAILED = 'failed';
    public const STATUS_READ = 'read';

    /**
     * Get the parent notifiable model.
>>>>>>> 345f8677 (phpstan)
     */
    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
    /**
     * Ottiene il template della notifica.
     *
     * @return BelongsTo
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }
    
    /**
     * Scope per filtrare per stato.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $status
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithStatus($query, string $status)
    {
        return $query->where('status', $status);
    }
    
    /**
     * Scope per filtrare per canale.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $channel
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForChannel($query, string $channel)
    {
        return $query->where('channel', $channel);
    }
    
    /**
     * Scope per filtrare per tipo di notificabile.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeForNotifiable($query, Model $notifiable)
    {
        return $query->where('notifiable_type', get_class($notifiable))
            ->where('notifiable_id', $notifiable->getKey());
    }

    public function markAsSent(): self
    {
        $this->update([
            'status' => self::STATUS_SENT,
            'sent_at' => now(),
        ]);

        return $this;
    }

    public function markAsDelivered(): self
    {
        $this->update([
            'status' => self::STATUS_DELIVERED,
            'delivered_at' => now(),
        ]);

        return $this;
    }

    public function markAsFailed(string $message = null): self
    {
        $this->update([
            'status' => self::STATUS_FAILED,
            'status_message' => $message,
            'failed_at' => now(),
        ]);

        return $this;
    }

    public function markAsOpened(): self
    {
        $this->update([
            'status' => self::STATUS_OPENED,
            'opened_at' => now(),
        ]);

        return $this;
    }

    public function markAsClicked(): self
    {
        $this->update([
            'status' => self::STATUS_CLICKED,
            'clicked_at' => now(),
        ]);

        return $this;
    }

    public function getStatusLabelAttribute(): string
    {
        return __('notify::notification.fields.status.' . $this->status);
    }

    public function getChannelLabelAttribute(): string
    {
        return __('notify::notification.fields.channel.options.' . $this->channel . '.label');
    }
>>>>>>> 54f4fa16 (.)
=======
>>>>>>> 345f8677 (phpstan)
}
