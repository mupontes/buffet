<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buffet Elegance - Culinária Refinada</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Lora', serif!important;
        }

        h1,
        h2,
        h3 {
            font-family: 'Cormorant Garamond', serif!important;
        }

        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('storage/hero.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .testimonial-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
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

    <!-- Hero Section -->
    <section id="home" class="hero-section h-screen flex items-center justify-center">
        <div class="text-center text-white px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Buffet Elegance</h1>
            <p class="text-xl md:text-2xl mb-8">Experiências gastronômicas inesquecíveis</p>
            <a href="#contact"
                class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-3 px-8 rounded-full transition duration-300">Faça
                seu Orçamento</a>
        </div>
    </section>


    <section id="services" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-800">Nossos Serviços</h2>

            <div class="space-y-16">
                <!-- Serviço 1 -->
                <div
                    class="flex flex-col md:flex-row items-center md:space-x-8 bg-white rounded-lg shadow-md p-6 md:p-8">
                    <div class="md:w-1/3">
                        <img src="{{ asset('./storage/corporativo.jpg') }}" alt="Eventos Corporativos"
                            class="w-full h-auto rounded-lg">
                    </div>
                    <div class="md:w-2/3 text-center md:text-left">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Eventos Corporativos</h3>
                        <p class="text-gray-600 leading-relaxed">Oferecemos soluções completas para reuniões,
                            conferências e celebrações empresariais, garantindo um serviço impecável.</p>
                    </div>
                </div>

                <!-- Serviço 2 -->
                <div
                    class="flex flex-col md:flex-row-reverse items-center md:space-x-8 bg-white rounded-lg shadow-md p-6 md:p-8">
                    <div class="md:w-1/3">
                        <img src="{{ asset('./storage/casamento.jpg') }}" alt="Casamentos"
                            class="w-full h-auto rounded-lg">
                    </div>
                    <div class="md:w-2/3 text-center md:text-left">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Casamentos</h3>
                        <p class="text-gray-600 leading-relaxed">Torne seu dia especial ainda mais inesquecível com
                            nossa gastronomia refinada e um atendimento excepcional.</p>
                    </div>
                </div>

                <!-- Serviço 3 -->
                <div
                    class="flex flex-col md:flex-row items-center md:space-x-8 bg-white rounded-lg shadow-md p-6 md:p-8">
                    <div class="md:w-1/3">
                        <img src="{{ asset('./storage/coffeebreak.jpg') }}" alt="Festas Particulares"
                            class="w-full h-auto rounded-lg">
                    </div>
                    <div class="md:w-2/3 text-center md:text-left">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Festas Particulares</h3>
                        <p class="text-gray-600 leading-relaxed">Desde aniversários a formaturas, criamos experiências
                            incríveis com um cardápio personalizado para sua ocasião.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Menu Section -->
    <section id="galeria" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Eventos Realizados</h2>

            <div class="flex justify-center mb-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <button class="menu-filter-btn px-4 py-2 bg-yellow-600 text-white rounded active">Todos</button>
                    <button class="menu-filter-btn px-4 py-2 bg-gray-200 text-gray-800 rounded">Casamentos</button>
                    <button class="menu-filter-btn px-4 py-2 bg-gray-200 text-gray-800 rounded">Aniversários</button>
                    <button class="menu-filter-btn px-4 py-2 bg-gray-200 text-gray-800 rounded">Coffee-breaks</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($images as $image)
                    <div class="menu-item bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer">
                        @if (!empty($image->images) && is_array($image->images))
                            <img src="{{ asset('storage/' . $image->images[0]) }}" alt="{{ $image->title }}"
                                class="w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $image->title }}</h3>
                            <p class="text-gray-600 mb-4">breve descrição.</p>
                            <span class="text-yellow-600 font-semibold">Categoria: {{ $image->category }}</span>
                        </div>
                    </div>
                @endforeach                
            </div>

            <div class="text-center mt-12">
                <a href="/galeria"
                    class="inline-block bg-transparent border-2 border-yellow-600 text-yellow-600 hover:bg-yellow-600 hover:text-white font-bold py-2 px-6 rounded-full transition duration-300">Ver
                    mais...</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonial-section py-20 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">O Que Dizem Nossos Clientes</h2>

            <div class="max-w-4xl mx-auto">
                <div class="testimonial-slider">
                    <div class="testimonial-slide bg-black bg-opacity-50 p-8 rounded-lg">
                        <div class="text-yellow-500 text-4xl mb-4 text-center">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <p class="text-lg italic mb-6 text-center">"O buffet Elegance superou todas as nossas
                            expectativas no casamento da nossa filha. A comida estava impecável e o serviço foi
                            atencioso do início ao fim. Recomendamos sem hesitar!"</p>
                        <div class="text-center">
                            <h4 class="font-bold">Maria e João Silva</h4>
                            <p class="text-sm text-gray-300">Casamento em São Paulo</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <button id="prev-testimonial"
                        class="mx-2 p-2 rounded-full bg-yellow-600 hover:bg-yellow-700 transition">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button id="next-testimonial"
                        class="mx-2 p-2 rounded-full bg-yellow-600 hover:bg-yellow-700 transition">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Entre em Contato</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <form class="bg-white p-8 rounded-lg shadow-lg">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nome</label>
                            <input type="text" id="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-600">
                        </div>

                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-600">
                        </div>

                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Telefone</label>
                            <input type="tel" id="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-600">
                        </div>

                        <div class="mb-6">
                            <label for="event" class="block text-gray-700 font-medium mb-2">Tipo de Evento</label>
                            <select id="event"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-600">
                                <option value="">Selecione</option>
                                <option value="corporate">Evento Corporativo</option>
                                <option value="wedding">Casamento</option>
                                <option value="birthday">Aniversário</option>
                                <option value="other">Outro</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Mensagem</label>
                            <textarea id="message" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-yellow-600"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">Enviar
                            Mensagem</button>
                    </form>
                </div>

                <div>
                    <div class="bg-white p-8 rounded-lg shadow-lg h-full">
                        <h3 class="text-xl font-bold mb-6">Informações de Contato</h3>

                        <div class="flex items-start mb-6">
                            <div class="text-yellow-600 mr-4">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Endereço</h4>
                                <p class="text-gray-600">Av. Paulista, 1000, São Paulo - SP</p>
                            </div>
                        </div>

                        <div class="flex items-start mb-6">
                            <div class="text-yellow-600 mr-4">
                                <i class="fas fa-phone text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Telefone</h4>
                                <p class="text-gray-600">(11) 9999-9999</p>
                            </div>
                        </div>

                        <div class="flex items-start mb-6">
                            <div class="text-yellow-600 mr-4">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold">Email</h4>
                                <p class="text-gray-600">contato@buffetelegance.com.br</p>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h4 class="font-bold mb-4">Horário de Atendimento</h4>
                            <p class="text-gray-600">Segunda a Sexta: 9h às 18h</p>
                            <p class="text-gray-600">Sábado: 9h às 13h</p>
                        </div>

                        <div>
                            <h4 class="font-bold mb-4">Redes Sociais</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="text-yellow-600 hover:text-yellow-700">
                                    <i class="fab fa-facebook-f text-xl"></i>
                                </a>
                                <a href="#" class="text-yellow-600 hover:text-yellow-700">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                                <a href="#" class="text-yellow-600 hover:text-yellow-700">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Buffet Elegance</h3>
                    <p class="text-gray-400">Transformando momentos em memórias inesquecíveis através da gastronomia
                        refinada.</p>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Links Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-yellow-600 transition">Início</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-yellow-600 transition">Serviços</a></li>
                        <li><a href="#menu" class="text-gray-400 hover:text-yellow-600 transition">Cardápio</a></li>
                        <li><a href="#testimonials"
                                class="text-gray-400 hover:text-yellow-600 transition">Depoimentos</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-yellow-600 transition">Contato</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Serviços</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Eventos Corporativos</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Casamentos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Aniversários</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Formaturas</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-yellow-600 transition">Eventos Especiais</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-bold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Inscreva-se para receber novidades e promoções exclusivas.</p>
                    <form>
                        <div class="flex">
                            <input type="email" placeholder="Seu email"
                                class="px-4 py-2 rounded-l w-full focus:outline-none">
                            <button type="submit"
                                class="bg-yellow-600 hover:bg-yellow-700 px-4 py-2 rounded-r transition">
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

        // Testimonial slider (simple version)
        const prevButton = document.getElementById('prev-testimonial');
        const nextButton = document.getElementById('next-testimonial');

        // Sample testimonials for demonstration
        const testimonials = [
            {
                text: "O buffet Elegance superou todas as nossas expectativas no casamento da nossa filha. A comida estava impecável e o serviço foi atencioso do início ao fim. Recomendamos sem hesitar!",
                name: "Maria e João Silva",
                event: "Casamento em São Paulo"
            },
            {
                text: "Contratamos para um evento corporativo e foi a escolha perfeita. Os convidados elogiaram muito a qualidade da comida e a apresentação impecável. Certamente trabalharemos juntos novamente.",
                name: "Ricardo Mendes",
                event: "Evento Corporativo em Campinas"
            },
            {
                text: "A festa de 15 anos da minha filha foi um grande sucesso graças ao Buffet Elegance. O cardápio personalizado agradou todos os convidados e o serviço foi impecável.",
                name: "Ana Oliveira",
                event: "Aniversário de 15 anos em Santos"
            }
        ];

        let currentTestimonialIndex = 0;
        const testimonialSlide = document.querySelector('.testimonial-slide');

        function updateTestimonial() {
            const current = testimonials[currentTestimonialIndex];
            testimonialSlide.innerHTML = `
                <div class="text-yellow-500 text-4xl mb-4 text-center">
                    <i class="fas fa-quote-left"></i>
                </div>
                <p class="text-lg italic mb-6 text-center">"${current.text}"</p>
                <div class="text-center">
                    <h4 class="font-bold">${current.name}</h4>
                    <p class="text-sm text-gray-300">${current.event}</p>
                </div>
            `;
        }

        prevButton.addEventListener('click', () => {
            currentTestimonialIndex = (currentTestimonialIndex - 1 + testimonials.length) % testimonials.length;
            updateTestimonial();
        });

        nextButton.addEventListener('click', () => {
            currentTestimonialIndex = (currentTestimonialIndex + 1) % testimonials.length;
            updateTestimonial();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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