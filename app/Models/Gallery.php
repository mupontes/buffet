<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'images', 'category']; // Adicione 'title' aqui

    protected $casts = [
        'images' => 'array', // Converte as imagens para array automaticamente
    ];


    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($gallery) {
            if ($gallery->images) {
                foreach (json_decode($gallery->images) as $image) {
                    Storage::disk('public')->delete("gallery/{$image}"); // Remove a imagem do storage
                }
            }
        });
    }

    
}
