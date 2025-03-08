<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;

class WatermarkService
{
    public static function applyWatermark($file, $watermarkText)
    {
        // Criar instância do ImageManager com o driver correto
        $manager = new ImageManager(new GdDriver()); // ou 'imagick' se preferir

        // Carregar a imagem
        $image = $manager->read($file->getRealPath());
        
        // Obter dimensões da imagem
        $width = $image->width();
        $height = $image->height();
        
        // Adicionar a marca d'água (texto)
        $image->text($watermarkText, $width/2, $height/2, function ($font) {
            $font->file(storage_path('./app/public/fonts/PlayfairDisplay-Bold.ttf'));
            $font->size(70);
            $font->color('#FF0000');
            $font->align('center');
            $font->valign('middle');
            $font->angle(0); // Inclinação da marca d'água
        });

        // Definir o novo caminho do arquivo
        $filename = time() . '-' . $file->getClientOriginalName();
        $path = "gallery/{$filename}";

        // Salvar no disco público
        Storage::disk('public')->put($path, (string) $image->encode());

        return $path;
    }
}
