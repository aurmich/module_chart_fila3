<?php

declare(strict_types=1);

namespace Modules\Cms\Datas;

<<<<<<< HEAD
use Livewire\Wireable;
use Illuminate\Support\Arr;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Modules\Tenant\Services\TenantService;
use Illuminate\Contracts\Support\Renderable;
use Spatie\LaravelData\Concerns\WireableData;
=======
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Arr;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
>>>>>>> 54f4fa16 (.)

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
        $view=Arr::get($data,'view','ui::empty');
>>>>>>> 54f4fa16 (.)
        if(!view()->exists($view)){
            throw new \Exception('view not found: '.$view);
        }
        $this->view=$view;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 54f4fa16 (.)
