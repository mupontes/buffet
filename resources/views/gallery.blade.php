<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buffet Elegance - Culinária Refinada</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <style>
        body {
        font-family: 'Cinzel', serif;
        }
        
        
        .menu-item:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }
        
        
    </style>
</head>
<body class="font-sans antialiased text-gray-800">
    <!-- Header com navegação -->
    <header class="bg-white shadow-md fixed w-full z-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-gray-800">Buffet Elegance</div>
                
                <!-- Menu desktop -->
                <nav class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-800 hover:text-yellow-600 transition">Início</a>
                    <a href="#services" class="text-gray-800 hover:text-yellow-600 transition">Serviços</a>
                    <a href="#menu" class="text-gray-800 hover:text-yellow-600 transition">Cardápio</a>
                    <a href="#testimonials" class="text-gray-800 hover:text-yellow-600 transition">Depoimentos</a>
                    <a href="#contact" class="text-gray-800 hover:text-yellow-600 transition">Contato</a>
                </nav>
                
                <!-- Menu mobile -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-800">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
            
            <!-- Menu mobile expandido -->
            <div id="mobile-menu" class="md:hidden hidden py-4">
                <nav class="flex flex-col space-y-4">
                    <a href="#home" class="text-gray-800 hover:text-yellow-600 transition">Início</a>
                    <a href="#services" class="text-gray-800 hover:text-yellow-600 transition">Serviços</a>
                    <a href="#menu" class="text-gray-800 hover:text-yellow-600 transition">Cardápio</a>
                    <a href="#testimonials" class="text-gray-800 hover:text-yellow-600 transition">Depoimentos</a>
                    <a href="#contact" class="text-gray-800 hover:text-yellow-600 transition">Contato</a>
                </nav>
            </div>
        </div>
    </header>

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


    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Buffet Elegance</h3>
                    <p class="text-gray-400">Transformando momentos em memórias inesquecíveis através da gastronomia refinada.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-yellow-600 transition">Início</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-yellow-600 transition">Serviços</a></li>
                        <li><a href="#menu" class="text-gray-400 hover:text-yellow-600 transition">Cardápio</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-yellow-600 transition">Depoimentos</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-yellow-600 transition">Contato</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Serviços</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Eventos Corporativos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Casamentos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Aniversários</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Formaturas</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Eventos Especiais</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Inscreva-se para receber novidades e promoções exclusivas.</p>
                    <form>
                        <div class="flex">
                            <input type="email" placeholder="Seu email" class="px-4 py-2 rounded-l w-full focus:outline-none">
                            <button type="submit" class="bg-yellow-600 hover:bg-yellow-700 px-4 py-2 rounded-r transition">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Buffet Elegance. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Menu mobile toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Menu filter buttons
        const filterButtons = document.querySelectorAll('.menu-filter-btn');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-yellow-600', 'text-white');
                    btn.classList.add('bg-gray-200', 'text-gray-800');
                });
                
                // Add active class to clicked button
                button.classList.remove('bg-gray-200', 'text-gray-800');
                button.classList.add('bg-yellow-600', 'text-white');
                
                // Here you would add code to filter menu items
            });
        });
        
        
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Adjust for header height
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>
</html>