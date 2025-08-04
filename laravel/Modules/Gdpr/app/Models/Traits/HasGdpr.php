<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;
use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Models\Treatment;
use Modules\Gdpr\Enums\ConsentType;

/**
 * Trait HasGdpr
 * 
 * Provides GDPR-related functionality for Eloquent models.
 * 
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Consent> $consents
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Consent> $activeConsents
 */
trait HasGdpr
{
    /**
     * Get all consents for the model (polymorphic).
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<Consent>
>>>>>>> adac82bd (rebase)
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public function consents(): MorphMany
    {
        return $this->morphMany(Consent::class, 'user');
    }

    /**
     * Get only active (non-revoked) consents.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<Consent>
>>>>>>> adac82bd (rebase)
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public function activeConsents(): MorphMany
    {
        return $this->consents()->whereNull('revoked_at');
    }
    
    /**
     * Get the treatments associated with the user through consents.
     * 
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough<\Modules\Gdpr\Models\Treatment, \Modules\Gdpr\Models\Consent, $this>
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough<\Modules\Gdpr\Models\Treatment, \Modules\Gdpr\Models\Consent, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough<Treatment>
>>>>>>> adac82bd (rebase)
=======
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough<\Modules\Gdpr\Models\Treatment, \Modules\Gdpr\Models\Consent, $this>
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public function treatments()
    {
        return $this->hasManyThrough(
            Treatment::class,
            Consent::class,
            'user_id', // Foreign key on consents table
            'id', // Foreign key on treatments table
            'id', // Local key on users table
            'treatment_id' // Local key on consents table
        )->where('consents.user_type', get_class($this));
    }

    /**
     * Check if the user has given a specific consent.
     * 
     * @param  ConsentType|string  $type
     * @param  bool  $cached  Use cached version if available
     * @return bool
     */
    public function hasGivenConsent(ConsentType|string $type, bool $cached = true): bool
    {
        $type = $type instanceof ConsentType ? $type->value : $type;
<<<<<<< HEAD
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
=======
        $cacheKey = "user_{$this->getKey()}_consent_{$type}";
>>>>>>> adac82bd (rebase)
=======
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        
        if ($cached && Cache::has($cacheKey)) {
            return (bool) Cache::get($cacheKey);
        }

        $hasConsent = $this->activeConsents()
            ->where('type', $type)
            ->exists();

        Cache::put($cacheKey, $hasConsent, now()->addDay());

        return $hasConsent;
    }

    /**
     * Give consent for a specific type.
     * 
     * @param  ConsentType|string  $type
     * @param  array<string, mixed>  $metadata
<<<<<<< HEAD
     * @return \Modules\Gdpr\Models\Consent
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Modules\Gdpr\Models\Consent
=======
     * @return Consent
>>>>>>> adac82bd (rebase)
=======
     * @return \Modules\Gdpr\Models\Consent
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
     */
    public function giveConsent(ConsentType|string $type, array $metadata = []): Consent
    {
        $type = $type instanceof ConsentType ? $type->value : $type;
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
        /** @var \Modules\Gdpr\Models\Consent $consent */
        $consent = $this->consents()->create([
            'type' => $type,
            'metadata' => $metadata,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
<<<<<<< HEAD
=======
=======
        $consent = $this->consents()->create([
            'type' => $type,
            'metadata' => $metadata,
            'ip_address' => request()?->ip(),
            'user_agent' => request()?->userAgent(),
>>>>>>> adac82bd (rebase)
=======
        /** @var \Modules\Gdpr\Models\Consent $consent */
        $consent = $this->consents()->create([
            'type' => $type,
            'metadata' => $metadata,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            'accepted_at' => now(),
        ]);

        $this->clearConsentCache($type);
        
        return $consent;
    }

    /**
     * Revoke a specific consent.
     * 
     * @param  ConsentType|string  $type
     * @return bool
     */
    public function revokeConsent(ConsentType|string $type): bool
    {
        $type = $type instanceof ConsentType ? $type->value : $type;
        
        $updated = $this->activeConsents()
            ->where('type', $type)
            ->update([
                'revoked_at' => now(),
<<<<<<< HEAD
                'revoked_ip_address' => request()->ip(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
                'revoked_ip_address' => request()->ip(),
=======
                'revoked_ip_address' => request()?->ip(),
>>>>>>> adac82bd (rebase)
=======
                'revoked_ip_address' => request()->ip(),
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
            ]);

        if ($updated > 0) {
            $this->clearConsentCache($type);
            return true;
        }

        return false;
    }

    /**
     * Clear cached consent status.
     * 
     * @param  string  $type
     * @return void
     */
    protected function clearConsentCache(string $type): void
    {
<<<<<<< HEAD
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
=======
        $cacheKey = "user_{$this->getKey()}_consent_{$type}";
>>>>>>> adac82bd (rebase)
=======
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
        Cache::forget($cacheKey);
    }

    /**
     * Get all required consents that the user hasn't given yet.
     * 
     * @return array<string, string>
     */
    public function getMissingRequiredConsents(): array
    {
        $givenConsents = $this->activeConsents()
            ->pluck('type')
            ->toArray();

        return array_diff(
            ConsentType::getRequiredConsentTypes(),
            $givenConsents
        );
    }

    /**
     * Check if user has given all required consents.
     * 
     * @return bool
     */
    public function hasAllRequiredConsents(): bool
    {
        return empty($this->getMissingRequiredConsents());
    }
}
