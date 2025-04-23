# PHPStan Report - Livello 9

## Errori rilevati
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/Providers/ChartServiceProvider.php: Class Modules\Chart\Providers\ChartServiceProvider extends unknown class Modules\Chart\app\Providers\ChartServiceProvider. (line 11)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Datas/AnswersChartData.php: Cannot access offset 0 on Illuminate\Support\Enumerable<(int|string), mixed>. (line 119)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Datas/AnswersChartData.php: Cannot access property $avg on mixed. (line 404)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Filament/Resources/ChartResource/Pages/ListCharts.php: Method Modules\Chart\Filament\Resources\ChartResource\Pages\ListCharts::getListTableColumns() should return array<string, Filament\Tables\Columns\Column> but returns array<int, Filament\Tables\Columns\TextColumn>. (line 30)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Models/Chart.php: PHPDoc tag @property-read for property Modules\Chart\Models\Chart::$creator contains unknown class Modules\Blog\Models\Profile. (line 26)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Models/Chart.php: PHPDoc tag @property-read for property Modules\Chart\Models\Chart::$updater contains unknown class Modules\Blog\Models\Profile. (line 26)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Models/Chart.php: PHPDoc type array of property Modules\Chart\Models\Chart::$attributes is not covariant with PHPDoc type array<string, mixed> of overridden property Illuminate\Database\Eloquent\Model::$attributes. (line 63)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Models/MixedChart.php: PHPDoc tag @property-read for property Modules\Chart\Models\MixedChart::$creator contains unknown class Modules\Blog\Models\Profile. (line 29)
* /var/www/html/_bases/base_quaeris_fila3_mono/laravel/Modules/Chart/app/Models/MixedChart.php: PHPDoc tag @property-read for property Modules\Chart\Models\MixedChart::$updater contains unknown class Modules\Blog\Models\Profile. (line 29)

## Soluzioni proposte

> TODO: descrivere soluzioni architetturali e funzionali

## Collegamenti

- Torna all'indice principale: [Indice Report PHPStan Moduli](/docs/phpstan_modules_index.md)
