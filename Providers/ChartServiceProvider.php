<?php

declare(strict_types=1);

namespace Modules\Chart\Providers;

/**
 * Questo file è un proxy per il service provider reale che si trova in app/Providers.
 * È necessario per garantire la compatibilità con il sistema di moduli Laravel.
 */
class ChartServiceProvider extends \Modules\Chart\app\Providers\ChartServiceProvider
{
    // Questo file estende il service provider reale per mantenere la compatibilità
    // con il sistema di moduli Laravel che cerca i service provider in Modules/Chart/Providers
    // mentre il modulo Chart li ha in Modules/Chart/app/Providers
}
