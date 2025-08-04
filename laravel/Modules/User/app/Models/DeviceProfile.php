<?php

declare(strict_types=1);

namespace Modules\User\Models;

/**
<<<<<<< HEAD
 * DeviceProfile Model
<<<<<<< HEAD
 * 
=======
 *
>>>>>>> aurmich/dev
 * Represents the relationship between a device and a user profile.
 * Extends the base DeviceUser model to add specific functionality.
=======
 * 
>>>>>>> 54f4fa16 (.)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property Device|null $device
 * @property \Modules\Xot\Contracts\ProfileContract|null $profile
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeviceProfile query()
 * @mixin \Eloquent
 */
<<<<<<< HEAD
class DeviceProfile extends DeviceUser
{
    /**
     * Create a new model instance.
     *
     * @param array<string, mixed> $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
=======
class DeviceProfile extends DeviceUser {}
>>>>>>> 54f4fa16 (.)
