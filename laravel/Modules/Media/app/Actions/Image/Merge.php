<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
declare(strict_types=1);

namespace Modules\Media\Actions\Image;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> aurmich/dev
use Intervention\Image\ImageManager as InterventionImageManager;

class Merge
{
    /**
     * Unisce due immagini in una sola.
     *
     * @param string $path1 Percorso della prima immagine
     * @param string $path2 Percorso della seconda immagine
     * @param string $outputPath Percorso di salvataggio
     * @return bool
     */
    public function handle(string $path1, string $path2, string $outputPath): bool
    {
        // Compatibile con Intervention Image v2 (Laravel 10):
        $manager = new InterventionImageManager(['driver' => 'gd']);

        // Carica le immagini
        $image1 = $manager->make($path1);
        $image2 = $manager->make($path2);

        // Inserisce image2 sopra image1 (centrato)
        $image1->insert($image2, 'center');

        // Salva il risultato
        $image1->save($outputPath);

        return true;
<<<<<<< HEAD
=======
=======
// use Intervention\Image\Facades\Image;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Spatie\QueueableAction\QueueableAction;

class Merge
{
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
    }

    public function execute(array $filenames, string $filenameOut): void
    {
        $width = 0;
        $height = 0;
        $imgs = [];
        foreach ($filenames as $filename) {
            // $img = Image::make(public_path($filename));
            if (! is_string($filename)) {
                continue;
            }
            $manager = new ImageManager(new Driver());
            $img = $manager->read(public_path($filename));

            $imgs[] = $img;
            $width += $img->width();
            $height = max($height, $img->height());
        }

        if (! is_numeric($height)) {
            throw new \Exception('['.__LINE__.']['.class_basename(self::class).']');
        }
        $height = (int) $height;
        // $img_canvas = Image::canvas($width, $height);

        $manager = new ImageManager(Driver::class);
        $img_canvas = $manager->create($width, $height);

        $delta = 0;
        foreach ($imgs as $img) {
            // $img_canvas->insert($img, 'top-left ', $delta, 0);
            $img_canvas->place($img, 'top-left ', $delta, 0);
            $delta += $img->width();
        }

        $img_canvas->save(public_path().'/'.$filenameOut, 100);
>>>>>>> 54f4fa16 (.)
>>>>>>> aurmich/dev
    }
}
