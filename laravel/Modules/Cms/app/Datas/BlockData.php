<?php

declare(strict_types=1);

namespace Modules\Cms\Datas;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Livewire\Wireable;
use Illuminate\Support\Arr;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Modules\Tenant\Services\TenantService;
use Illuminate\Contracts\Support\Renderable;
use Spatie\LaravelData\Concerns\WireableData;
<<<<<<< HEAD
=======
=======
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Arr;
=======
>>>>>>> 8e4d163b (phpstan)
use Livewire\Wireable;
use Illuminate\Support\Arr;
use Spatie\LaravelData\Data;
<<<<<<< HEAD
>>>>>>> 54f4fa16 (.)
=======
use Webmozart\Assert\Assert;
use Modules\Tenant\Services\TenantService;
use Illuminate\Contracts\Support\Renderable;
use Spatie\LaravelData\Concerns\WireableData;
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev

class BlockData extends Data implements Wireable
{
    use WireableData;
    public string $type;
    public array $data;
    public string $view;

    public function __construct(string $type,array $data){
        $this->type=$type;
        $this->data=$data;
<<<<<<< HEAD
        Assert::string($view=Arr::get($data,'view','ui::empty'));
=======
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($view=Arr::get($data,'view','ui::empty'));
=======
        $view=Arr::get($data,'view','ui::empty');
>>>>>>> 54f4fa16 (.)
=======
        Assert::string($view=Arr::get($data,'view','ui::empty'));
>>>>>>> 8e4d163b (phpstan)
>>>>>>> aurmich/dev
        if(!view()->exists($view)){
            throw new \Exception('view not found: '.$view);
        }
        $this->view=$view;
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
