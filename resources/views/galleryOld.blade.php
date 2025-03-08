<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Fotos</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold text-center mb-6">Galeria de Fotos</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($images as $image)
                <div class="rounded-lg overflow-hidden shadow-lg">
                    @if (!empty($image->images) && is_array($image->images))
                    <a href="{{ asset('storage/' . $image->images[0]) }}" data-fancybox="gallery-{{ $image->id }}">
                        <img src="{{ asset('storage/' . $image->images[0]) }}" alt="{{ $image->title }}" class="w-full h-64 object-cover">
                    </a>
                    @foreach ($image->images as $key => $img)
                        @if ($key > 0)
                        <a href="{{ asset('storage/' . $img) }}" data-fancybox="gallery-{{ $image->id }}" style="display: none;"></a>
                        @endif
                    @endforeach
                    @endif
                    <div class="p-2 text-center">
                        <p class="text-lg font-semibold">{{ $image->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>

