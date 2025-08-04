<?php

declare(strict_types=1);

namespace Modules\Xot\Contracts;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Modules\User\Models\Role;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStates\HasStatesContract;
use Spatie\Permission\Contracts\Permission;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
=======
=======
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;
use Modules\User\Models\Role;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Contracts\Permission;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
use Spatie\Permission\Exceptions\PermissionDoesNotExist;

/**
 * Modules\Xot\Contracts\SateContract.
 *
 * @property string $name
 */
interface StateContract 
{
    public function label(): string;
    public function color(): string;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
    public function bgColor(): string;
    public function icon(): string;
    public function modalHeading(): string;
    public function modalDescription(): string;
    public function modalFormSchema(): array;
    public function modalFillFormByRecord(Model $record): array;
    public function modalActionByRecord(Model $record,array $data): void;

<<<<<<< HEAD
=======
=======
    public function icon(): string;
    public function modalHeading(): string;
    public function modalDescription(): string;
>>>>>>> 568ade8b (✨ (DbForge): add new DbForge module with various console commands and controllers to enhance database management capabilities. This module includes commands for generating models, importing data, and managing database schemas, providing a comprehensive toolkit for developers.)
>>>>>>> aurmich/dev
}
