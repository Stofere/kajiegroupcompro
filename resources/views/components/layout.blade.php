<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Kajie Group — ' . __('ui.hero_tag'))</title>
    <meta name="description" content="@yield('meta_description', config('catalog.company.description.en'))">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="{{ asset('images/kajiegroup-logo.jpg') }}" type="image/jpeg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans antialiased">

    {{-- ==================== NAVIGATION ==================== --}}
    <nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-24">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0">
                    <img src="{{ asset('images/kajiegroup-logo.jpg') }}" alt="Kajie Group Logo" class="h-16 md:h-20 w-auto py-1">
                </a>

                {{-- Desktop Menu --}}
                <div class="hidden md:flex items-center gap-1">
                    <a href="{{ route('home') }}"
                       class="px-4 py-2 rounded-lg text-base font-medium transition-colors duration-200
                              {{ request()->routeIs('home') ? 'text-primary-600 bg-primary-50' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        {{ __('ui.nav_home') }}
                    </a>
                    <a href="{{ route('about') }}"
                       class="px-4 py-2 rounded-lg text-base font-medium transition-colors duration-200
                              {{ request()->routeIs('about') ? 'text-primary-600 bg-primary-50' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        {{ __('ui.nav_about') }}
                    </a>
                    <a href="{{ route('products') }}"
                       class="px-4 py-2 rounded-lg text-base font-medium transition-colors duration-200
                              {{ request()->routeIs('products*') ? 'text-primary-600 bg-primary-50' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        {{ __('ui.nav_products') }}
                    </a>
                    <a href="{{ route('clients') }}"
                       class="px-4 py-2 rounded-lg text-base font-medium transition-colors duration-200
                              {{ request()->routeIs('clients') ? 'text-primary-600 bg-primary-50' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        {{ __('ui.nav_clients') }}
                    </a>
                    <a href="{{ route('contact') }}"
                       class="ml-2 inline-flex items-center gap-2 px-6 py-2.5 bg-primary-600 text-white text-base font-semibold rounded-lg hover:bg-primary-700 transition-colors duration-200 shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        {{ __('ui.nav_contact') }}
                    </a>
                    
                    {{-- Language Toggle --}}
                    <div class="ml-4 flex items-center border border-gray-200 rounded-lg overflow-hidden shrink-0">
                        <a href="{{ route('lang.switch', 'id') }}" class="px-3 py-1.5 text-sm font-semibold {{ app()->getLocale() == 'id' ? 'bg-primary-600 text-white' : 'bg-white text-gray-500 hover:bg-gray-50' }}">ID</a>
                        <a href="{{ route('lang.switch', 'en') }}" class="px-3 py-1.5 text-sm font-semibold {{ app()->getLocale() == 'en' ? 'bg-primary-600 text-white' : 'bg-white text-gray-500 hover:bg-gray-50' }}">EN</a>
                    </div>
                </div>

                {{-- Mobile Menu Button --}}
                <button @click="open = !open" class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 focus:outline-none" aria-label="Toggle menu">
                    <svg x-show="!open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="open" x-cloak class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="open" x-cloak
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden bg-white border-t border-gray-100 shadow-lg">
            <div class="px-4 py-3 space-y-1">
                <a href="{{ route('home') }}" class="block px-4 py-3 rounded-lg text-lg font-medium {{ request()->routeIs('home') ? 'text-primary-600 bg-primary-50' : 'text-gray-700 hover:bg-gray-50' }}">{{ __('ui.nav_home') }}</a>
                <a href="{{ route('about') }}" class="block px-4 py-3 rounded-lg text-lg font-medium {{ request()->routeIs('about') ? 'text-primary-600 bg-primary-50' : 'text-gray-700 hover:bg-gray-50' }}">{{ __('ui.nav_about') }}</a>
                <a href="{{ route('products') }}" class="block px-4 py-3 rounded-lg text-lg font-medium {{ request()->routeIs('products*') ? 'text-primary-600 bg-primary-50' : 'text-gray-700 hover:bg-gray-50' }}">{{ __('ui.nav_products') }}</a>
                <a href="{{ route('clients') }}" class="block px-4 py-3 rounded-lg text-lg font-medium {{ request()->routeIs('clients') ? 'text-primary-600 bg-primary-50' : 'text-gray-700 hover:bg-gray-50' }}">{{ __('ui.nav_clients') }}</a>
                <a href="{{ route('contact') }}" class="block px-4 py-3 bg-primary-600 text-white text-lg font-semibold rounded-lg text-center mt-2">{{ __('ui.nav_contact') }}</a>
                
                {{-- Mobile Language Toggle --}}
                <div class="flex mt-4 border border-gray-200 rounded-lg overflow-hidden">
                    <a href="{{ route('lang.switch', 'id') }}" class="flex-1 text-center px-4 py-3 text-base font-semibold {{ app()->getLocale() == 'id' ? 'bg-primary-600 text-white' : 'bg-white text-gray-500' }}">Bahasa Indonesia</a>
                    <a href="{{ route('lang.switch', 'en') }}" class="flex-1 text-center px-4 py-3 text-base font-semibold {{ app()->getLocale() == 'en' ? 'bg-primary-600 text-white' : 'bg-white text-gray-500' }}">English</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- ==================== MAIN CONTENT ==================== --}}
    <main class="pt-24">
        @yield('content')
    </main>

    {{-- ==================== FOOTER ==================== --}}
    <footer class="bg-primary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                {{-- Company Info --}}
                <div class="lg:col-span-2">
                    <img src="{{ asset('images/kajiegroup-logo.jpg') }}" alt="Kajie Group" class="h-20 w-auto mb-4 rounded bg-white p-2">
                    <p class="text-gray-300 text-base leading-relaxed max-w-md">
                        @if(is_array(config('catalog.company.description')))
                            {{ config('catalog.company.description')[app()->getLocale()] ?? config('catalog.company.description.id') }}
                        @else
                            {{ config('catalog.company.description') }}
                        @endif
                    </p>
                </div>

                {{-- Quick Links --}}
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">{{ __('ui.quick_links') }}</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors text-base">{{ __('ui.nav_home') }}</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition-colors text-base">{{ __('ui.nav_about') }}</a></li>
                        <li><a href="{{ route('products') }}" class="text-gray-300 hover:text-white transition-colors text-base">{{ __('ui.nav_products') }}</a></li>
                        <li><a href="{{ route('clients') }}" class="text-gray-300 hover:text-white transition-colors text-base">{{ __('ui.nav_clients') }}</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors text-base">{{ __('ui.nav_contact') }}</a></li>
                    </ul>
                </div>

                {{-- Contact Info --}}
                <div>
                    <h4 class="text-lg font-semibold mb-4 text-white">{{ __('ui.nav_contact') }}</h4>
                    <ul class="space-y-3 text-gray-300 text-base">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 mt-0.5 shrink-0 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <a href="{{ config('catalog.company.maps_link') }}" target="_blank" rel="noopener" class="hover:text-white transition-colors">
                                {{ config('catalog.company.address') }}
                            </a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 mt-0.5 shrink-0 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            {{ config('catalog.company.phone') }}
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 mt-0.5 shrink-0 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <div>
                                @php
                                    $emails = is_array(config('catalog.company.email')) ? (config('catalog.company.email')[app()->getLocale()] ?? config('catalog.company.email.en')) : [config('catalog.company.email')];
                                    $emails = is_array($emails) ? $emails : [$emails];
                                @endphp
                                @foreach($emails as $email)
                                    <a href="mailto:{{ $email }}" class="block hover:text-white transition-colors">{{ $email }}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="mt-12 pt-8 border-t border-gray-700 text-center">
                <p class="text-gray-400 text-sm">
                    &copy; {{ date('Y') }} {{ config('catalog.company.legal_name') }}. {{ __('ui.all_rights_reserved') }}
                </p>
            </div>
        </div>
    </footer>

    {{-- ==================== WhatsApp Floating Button ==================== --}}
    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('catalog.company.whatsapp')) }}" target="_blank" rel="noopener"
       class="fixed bottom-6 right-6 z-50 flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white px-5 py-3.5 rounded-full shadow-lg hover:shadow-xl transition-all duration-200 text-base font-semibold"
       aria-label="Chat on WhatsApp">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        <span class="hidden sm:inline">{{ __('ui.btn_whatsapp') }}</span>
    </a>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</body>
</html>
