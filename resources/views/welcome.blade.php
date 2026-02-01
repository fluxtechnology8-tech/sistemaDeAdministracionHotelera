<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HotelManager - Gestión Hotelera Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap');
        
        .font-display {
            font-family: 'Playfair Display', serif;
        }
        
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header/Navigation -->
    <header class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-white">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-amber-500 p-2 rounded-lg">
                        <svg class="w-8 h-8 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a2 2 0 00-2 2v1a2 2 0 00-2 2v9a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2V4a2 2 0 00-2-2h-4z"/>
                            <rect x="6" y="7" width="8" height="2" rx="1"/>
                            <rect x="6" y="11" width="8" height="2" rx="1"/>
                        </svg>
                    </div>
                    <span class="text-2xl font-display font-bold">HotelManager</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold px-6 py-2.5 rounded-lg transition flex items-center space-x-2">
                        <span>Comenzar</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="container mx-auto px-6 py-24 text-center">
            <h1 class="font-display text-6xl md:text-7xl font-bold mb-6">
                Gestión Hotelera<br>
                <span class="text-amber-500">Profesional</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-8">
                El sistema completo para administrar tu hotel de manera eficiente.<br>
                Reservaciones, huéspedes, habitaciones y reportes en un solo lugar.
            </p>
            <a href="{{ route('register') }}" class="inline-flex items-center space-x-2 bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold px-8 py-4 rounded-lg text-lg transition">
                <span>Comenzar Gratis</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </section>
    </header>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="font-display text-5xl font-bold text-slate-900 mb-4">
                    Todo lo que necesitas
                </h2>
                <p class="text-xl text-gray-600">
                    Herramientas potentes diseñadas específicamente para la industria hotelera
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Feature 1: Gestión de Habitaciones -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="bg-amber-500 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">
                        Gestión de Habitaciones
                    </h3>
                    <p class="text-gray-600">
                        Control completo del estado y disponibilidad de todas tus habitaciones
                    </p>
                </div>

                <!-- Feature 2: Reservaciones -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="bg-amber-500 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">
                        Reservaciones
                    </h3>
                    <p class="text-gray-600">
                        Sistema integral de reservas con calendario interactivo
                    </p>
                </div>

                <!-- Feature 3: Huéspedes -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="bg-amber-500 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">
                        Huéspedes
                    </h3>
                    <p class="text-gray-600">
                        Base de datos completa de huéspedes con historial
                    </p>
                </div>

                <!-- Feature 4: Reportes -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 hover:shadow-xl transition-all duration-300">
                    <div class="bg-amber-500 w-16 h-16 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-slate-900 mb-3">
                        Reportes
                    </h3>
                    <p class="text-gray-600">
                        Análisis detallado de ocupación e ingresos
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-gray-100 to-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="font-display text-5xl font-bold text-slate-900 mb-4">
                ¿Listo para transformar tu hotel?
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                Únete a cientos de hoteles que ya optimizan su gestión con HotelManager
            </p>
            <a href="{{ route('register') }}" class="inline-flex items-center space-x-2 bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold px-8 py-4 rounded-lg text-lg transition">
                <span>Crear Cuenta Gratis</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-8">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="bg-amber-500 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 2a2 2 0 00-2 2v1a2 2 0 00-2 2v9a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2V4a2 2 0 00-2-2h-4z"/>
                            <rect x="6" y="7" width="8" height="2" rx="1"/>
                            <rect x="6" y="11" width="8" height="2" rx="1"/>
                        </svg>
                    </div>
                    <span class="text-xl font-display font-bold text-slate-900">HotelManager</span>
                </div>
                <p class="text-gray-600">
                    © 2026 HotelManager. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
