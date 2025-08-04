<?php

declare(strict_types=1);

namespace Modules\Tenant\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Tenant\Actions\Domains\GetDomainsArrayAction;
use Sushi\Sushi;

/**
<<<<<<< HEAD
<<<<<<< HEAD
=======
 * 
 *
>>>>>>> aurmich/dev
=======
 * 
 *
>>>>>>> 54f4fa16 (.)
 * @property int|null $id
 * @property string|null $name
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain query()
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Domain whereName($value)
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
=======
 * @property-read \Modules\Broker\Models\Profile|null $creator
 * @property-read \Modules\Broker\Models\Profile|null $updater
>>>>>>> 54f4fa16 (.)
=======
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> bf0cd1be (phpstan)
 * @method static \Modules\Tenant\Database\Factories\DomainFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class Domain extends BaseModel
{
    use Sushi;

    /**
     * Model Rows.
     *
     * @return array
     */
    public function getRows()
    {
        $products = app(GetDomainsArrayAction::class)->execute();

        return $products;
    }
}
