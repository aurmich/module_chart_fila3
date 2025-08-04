<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Blocks;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Components\Builder\Block;
=======
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
>>>>>>> aurmich/dev
=======
use Filament\Forms\Components\Select;
use Modules\Xot\Filament\Traits\TransTrait;
use Filament\Forms\Components\Builder\Block;
>>>>>>> 345f8677 (phpstan)
=======
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Select;
>>>>>>> 54f4fa16 (.)
use Modules\Xot\Actions\Filament\Block\GetViewBlocksOptionsByTypeAction;

abstract class XotBaseBlock
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    use TransTrait;
    
=======
>>>>>>> aurmich/dev
=======
    use TransTrait;
    
>>>>>>> 345f8677 (phpstan)
=======
>>>>>>> 54f4fa16 (.)
    public static function make(
        string $name = 'article_list',
        string $context = 'form',
    ): Block {
        /**
         * @var array<\Filament\Forms\Components\Component>
         */
        $schema = array_merge(static::getBlockSchema(), static::getBlockVarSchema());

        return Block::make($name)
            ->schema($schema)

            ->columns('form' === $context ? 3 : 1);
    }

    /**
     * Undocumented function.
     *
     * @return array<\Filament\Forms\Components\Component>
     */
    public static function getBlockSchema(): array
    {
        return [];
    }

    /**
     * Undocumented function.
     *
     * @return array<\Filament\Forms\Components\Component>
     */
    public static function getBlockVarSchema(): array
    {
        $options = app(GetViewBlocksOptionsByTypeAction::class)
            ->execute('article_list', false);

        return [
            Select::make('view')
                ->options($options),
        ];
    }
}
