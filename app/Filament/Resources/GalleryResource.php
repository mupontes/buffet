<?php

namespace App\Filament\Resources;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use App\Services\WatermarkService;
use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Título')->required(),
                TextInput::make('category')->label('Categoria')->required(),
                TextInput::make('watermark_text')
                ->label('Text Marca D\'água')
                ->required(),
                FileUpload::make('images')
                    ->label('Imagens')
                    ->disk('public')
                    ->directory('gallery')
                    ->image()
                    ->multiple()
                    ->preserveFilenames()
                    ->reorderable()
                    ->required()
                    ->columnSpanFull()
                    ->visibility('public')
                    ->uploadProgressIndicatorPosition('left')
                    ->panelLayout('grid')
                    ->maxFiles(20)
                    ->loadingIndicatorPosition('right')
                    ->downloadable()
                    ->default(fn ($record) => $record ? array_map(fn($img) => Storage::url("gallery/{$img}"), $record->images ?? []) : [])
                    ->acceptedFileTypes(['image/*'])
                    ->saveUploadedFileUsing(function ($file, callable $set, callable $get) {
                        // Pegando o texto da marca d'água do formulário
                        $watermarkText = $get('watermark_text'); 
                         // Confirme se o texto está correto
                
                        return WatermarkService::applyWatermark($file, $watermarkText);
                    })                 
                    ->deleteUploadedFileUsing(fn ($file) => Storage::disk('public')->delete(str_replace('/storage/', '', $file))),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('images')
                ->label('Imagens')
                ->disk('public')
                ->getStateUsing(function ($record) {
                    return isset($record->images[0]) ? asset('storage/' . $record->images[0]) : null;
                })
                ->size(50) // Define um tamanho menor para cada imagem
                ->stacked() // Empilha as imagens
                ->limit(1),
                TextColumn::make('title')->label('Título')->searchable(),
                TextColumn::make('category')->label('Categoria'),
                TextColumn::make('created_at')->label('Enviado em')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

    
    
}
