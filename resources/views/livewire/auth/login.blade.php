<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - HotelManager</title>
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

<body class="bg-gray-100 min-h-screen flex">
    <!-- Left Side - Branding -->
    <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white p-12 flex-col justify-center items-center">
        <div class="max-w-lg w-full text-center">
            <!-- Logo y Marca -->
            <div class="flex items-center justify-center space-x-4 mb-10">
                <div class="bg-amber-500 p-4 rounded-2xl shadow-2xl shadow-amber-500/20">
                    <svg class="w-12 h-12 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a2 2 0 00-2 2v1a2 2 0 00-2 2v9a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2V4a2 2 0 00-2-2h-4z" />
                        <rect x="6" y="7" width="8" height="2" rx="1" />
                        <rect x="6" y="11" width="8" height="2" rx="1" />
                    </svg>
                </div>
                <span class="text-4xl font-display font-bold tracking-tight">HotelManager</span>
            </div>

            <!-- Título Principal -->
            <h2 class="text-3xl font-display font-bold mb-4 text-white leading-tight">
                Sistema Profesional de<br>Gestión Hotelera
            </h2>

            <!-- Descripción -->
            <p class="text-lg text-gray-400 mb-12 max-w-md mx-auto leading-relaxed">
                Optimiza la administración de tu hotel con nuestra plataforma completa y moderna
            </p>

            <!-- Características -->
            <ul class="space-y-5 text-left max-w-md mx-auto">
                <li class="flex items-center space-x-4 bg-slate-800/50 p-4 rounded-xl backdrop-blur-sm">
                    <div class="bg-amber-500 rounded-lg p-2 flex-shrink-0">
                        <svg class="w-5 h-5 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-gray-200 font-medium">Gestión completa de reservaciones</span>
                </li>
                <li class="flex items-center space-x-4 bg-slate-800/50 p-4 rounded-xl backdrop-blur-sm">
                    <div class="bg-amber-500 rounded-lg p-2 flex-shrink-0">
                        <svg class="w-5 h-5 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-gray-200 font-medium">Control de habitaciones en tiempo real</span>
                </li>
                <li class="flex items-center space-x-4 bg-slate-800/50 p-4 rounded-xl backdrop-blur-sm">
                    <div class="bg-amber-500 rounded-lg p-2 flex-shrink-0">
                        <svg class="w-5 h-5 text-slate-900" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-gray-200 font-medium">Dashboard personalizable y analíticas</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <div class="text-center mb-8">
                    <h1 class="font-display text-3xl font-bold text-slate-900 mb-2">Bienvenido</h1>
                    <p class="text-gray-600">Accede a tu panel de administración</p>
                </div>

                <!-- Tabs -->
                <div class="flex bg-gray-100 rounded-lg p-1 mb-8">
                    <button class="flex-1 py-2.5 text-sm font-semibold text-slate-900 bg-white rounded-md shadow-sm transition">
                        Iniciar Sesión
                    </button>
                    <a href="{{ route('register') }}" class="flex-1 py-2.5 text-sm font-semibold text-gray-600 hover:text-slate-900 text-center transition">
                        Registrarse
                    </a>
                </div>

                <!-- Login Form -->
                <form action="{{ route('login.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-900 mb-2">
                            Correo electrónico
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="correo@hotel.com"
                                required
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent outline-none transition">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-slate-900 mb-2">
                            Contraseña
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="••••••••"
                                required
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent outline-none transition">
                        </div>
                    </div>


                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 text-amber-500 border-gray-300 rounded focus:ring-amber-500">
                            <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="text-sm font-semibold text-amber-600 hover:text-amber-700">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-amber-500 hover:bg-amber-600 text-slate-900 font-semibold py-3 rounded-lg transition duration-200 shadow-lg shadow-amber-500/30" data-test="login-button">
                        Iniciar Sesión
                    </button>
                </form>

                <p class="text-center text-sm text-gray-600 mt-8">
                    Sistema de gestión hotelera profesional
                </p>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-slate-900 transition">
                    ← Volver al inicio
                </a>
            </div>
        </div>
    </div>
</body>

</html>