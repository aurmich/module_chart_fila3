<?php

declare(strict_types=1);

namespace Modules\Geo\Models;

use Illuminate\Database\Eloquent\Model;
// //use Laravel\Scout\Searchable;
use Modules\Xot\Traits\Updater;

/**
 * Modules\Geo\Models\GeoNamesCap.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GeoNamesCap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeoNamesCap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GeoNamesCap query()
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @mixin \Eloquent
 */
class GeoNamesCap extends Model
{
    // use Searchable;
    use Updater;

    /** @var string */
    protected $table = 'geonames_cap';
    // protected $connection = 'geo';

    /*
     * { function_description }
     *
     */
    /*
    function __construct(){
<<<<<<< HEAD
<<<<<<< HEAD
        $this->setConnection('user');
=======
        $this->setConnection('liveuser_general');
>>>>>>> aurmich/dev
=======
        $this->setConnection('user');
>>>>>>> a7d04d78 (✨ (auth): implement password reset functionality with new widgets and views to enhance user experience)
        parent::__construct();
    }//end construct
    */
}
