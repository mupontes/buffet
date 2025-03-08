<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buffet Premium</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Banner -->
    <div class="relative">
        <img src="https://source.unsplash.com/1600x600/?food,catering" class="w-full h-80 object-cover">
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <h1 class="text-white text-5xl font-bold">Buffet Premium</h1>
        </div>
    </div>

    <!-- Sobre Nós -->
    <section class="container mx-auto p-6 text-center">
        <h2 class="text-3xl font-semibold mb-4">Sobre Nós</h2>
        <p class="text-lg text-gray-700">Oferecemos um serviço de buffet de alta qualidade para eventos especiais. Desde casamentos até eventos corporativos, garantimos uma experiência gastronômica inesquecível.</p>
    </section>

    <!-- Serviços -->
    <section class="bg-white py-12">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-6">Nossos Serviços</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 border rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold">Casamentos</h3>
                    <p class="text-gray-600">Buffet completo para seu dia especial.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold">Eventos Corporativos</h3>
                    <p class="text-gray-600">Soluções gastronômicas para sua empresa.</p>
                </div>
                <div class="p-6 border rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold">Aniversários</h3>
                    <p class="text-gray-600">Buffet temático para comemorações inesquecíveis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeria Destacada -->
    <section class="container mx-auto p-6 text-center">
        <h2 class="text-3xl font-semibold mb-4">Galeria de Eventos</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($images as $image)
                <div class="rounded-lg overflow-hidden shadow-md">
                    <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->title }}" class="w-full h-40 object-cover">
                </div>
            @endforeach
        </div>
        <a href="/galeria" class="mt-4 inline-block bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700">
            Ver Mais
        </a>
    </section>

    <!-- Contato -->
    <section class="bg-gray-900 text-white py-12 text-center">
        <h2 class="text-3xl font-semibold mb-4">Fale Conosco</h2>
        <p class="text-lg mb-4">Entre em contato para saber mais sobre nossos serviços.</p>
        <a href="https://wa.me/SEUNUMERO" class="bg-green-500 px-6 py-3 rounded-lg text-white text-lg hover:bg-green-600">
            📞 Fale pelo WhatsApp
        </a>
    </section>

</body>
</html>
