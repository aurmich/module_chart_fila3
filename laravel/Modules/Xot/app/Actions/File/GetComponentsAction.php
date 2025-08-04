<?php

declare(strict_types=1);

namespace Modules\Xot\Actions\File;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Datas\ComponentFileData;

use function Safe\json_decode;

use Spatie\LaravelData\DataCollection;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetComponentsAction
{
    use QueueableAction;

    /**
     * Undocumented function.
     *
     * @return DataCollection<ComponentFileData>
     */
    public function execute(string $path, string $namespace, string $prefix, bool $force_recreate = false): DataCollection
    {
        Assert::string($namespace = Str::replace('/', '\\', $namespace), '['.__LINE__.']['.class_basename(static::class).']');
        $components_json = $path.'/_components.json';
        $components_json = app(FixPathAction::class)->execute($components_json);

        $path = app(FixPathAction::class)->execute($path);

        if (! File::exists($path)) {
            if (Str::startsWith($path, base_path('Modules'))) {
                File::makeDirectory($path, 0755, true, true);
            }
        }

        $exists = File::exists($components_json);
<<<<<<< HEAD
        
=======
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> 54f4fa16 (.)
=======
        
>>>>>>> 5d95df2f (feat(chart): add autoloading for factories and seeders in composer.json to improve module structure)
>>>>>>> aurmich/dev
        if ($exists && ! $force_recreate) {
            Assert::string($content = File::get($components_json), '['.__LINE__.']['.class_basename(static::class).']');
            $comps = json_decode($content, false);
            if (! is_array($comps)) {
                $comps = [];
            }
            return ComponentFileData::collection($comps);
        }
<<<<<<< HEAD
        
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> aurmich/dev
=======
>>>>>>> 54f4fa16 (.)
=======
        
>>>>>>> 15cb84fb (fix collisions)
=======
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev

        $files = File::allFiles($path);
        $comps = [];
        
        foreach ($files as $file) {
            if ('php' !== $file->getExtension()) {
                continue;
            }

            $class_name = $file->getFilenameWithoutExtension();
            $relative_path = $file->getRelativePath();
            Assert::string($relative_path = Str::replace('/', '\\', $relative_path), '['.__LINE__.']['.class_basename(static::class).']');

            $comp_name = Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
            $comp_name = $prefix . $comp_name;
            $comp_ns = $namespace . '\\' . $class_name;

            if ('' !== $relative_path) {
                $comp_name = '';
                $piece = collect(explode('\\', $relative_path))
                    ->map(fn ($item) => Str::slug(Str::snake($item)))
                    ->implode('.');
                
                $comp_name = $prefix . $piece . '.' . Str::slug(Str::snake(Str::replace('\\', ' ', $class_name)));
                $comp_ns = $namespace . '\\' . $relative_path . '\\' . $class_name;
                $class_name = $relative_path . '\\' . $class_name;
            }

            try {
                if (!class_exists($comp_ns)) {
                    throw new \Exception("La classe {$comp_ns} non esiste");
                }
                
                /** @var class-string<object> $comp_ns */
                $reflection = new \ReflectionClass($comp_ns);
                if ($reflection->isAbstract()) {
                    continue;
                }
<<<<<<< HEAD
                
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                
=======

>>>>>>> 54f4fa16 (.)
=======
                
>>>>>>> 5d95df2f (feat(chart): add autoloading for factories and seeders in composer.json to improve module structure)
=======

>>>>>>> 15cb84fb (fix collisions)
=======
                
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
                $comps[] = ComponentFileData::from([
                    'name' => $comp_name,
                    'class' => $class_name,
                    'ns' => $comp_ns,
                ])->toArray();
<<<<<<< HEAD
                
            } catch (\Exception $e) {
                /*
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                
            } catch (\Exception $e) {
                /*
=======

            } catch (\Exception $e) {
>>>>>>> 54f4fa16 (.)
=======
                
            } catch (\Exception $e) {
                /*
>>>>>>> 5d95df2f (feat(chart): add autoloading for factories and seeders in composer.json to improve module structure)
=======

            } catch (\Exception $e) {
                
>>>>>>> 15cb84fb (fix collisions)
=======
                
            } catch (\Exception $e) {
                /*
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
                dddx([
                    'comp_name' => $comp_name,
                    'class_name' => $class_name,
                    'comp_ns' => $comp_ns,
                    'path' => $path,
                    'namespace' => $namespace,
                    'prefix' => $prefix,
                    'message' => $e->getMessage(),
                ]);
<<<<<<< HEAD
                */
                throw $e;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                */
                throw $e;
=======
>>>>>>> 54f4fa16 (.)
=======
                */
                throw $e;
>>>>>>> 5d95df2f (feat(chart): add autoloading for factories and seeders in composer.json to improve module structure)
=======
                
>>>>>>> 15cb84fb (fix collisions)
=======
                */
                throw $e;
>>>>>>> d23ba493 (add calendar)
>>>>>>> aurmich/dev
            }
        }

        $content = \Safe\json_encode($comps, JSON_THROW_ON_ERROR);
        $old_content = File::exists($components_json) ? File::get($components_json) : '';

        if ($old_content !== $content) {
            File::put($components_json, $content);
        }

        return ComponentFileData::collection($comps);
    }
}
