@extends('components.layout')

@section('title', 'Kajie Group — ' . __('ui.hero_tag'))
@section('meta_description', 'PT. Karya Jasa Indonesia Jaya — ' . $company['description'])

@section('content')

    {{-- ==================== HERO SECTION ==================== --}}
    <section class="relative min-h-[600px] lg:min-h-[700px] flex items-center bg-primary-900 overflow-hidden">
        {{-- Background Image --}}
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-bg.png') }}" alt="Industrial facility" class="w-full h-full object-cover opacity-30">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-primary-900/95 via-primary-900/80 to-primary-900/60"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-accent-400/20 text-accent-400 rounded-full text-sm font-semibold mb-6 animate-fade-in-up">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    {{ __('ui.hero_tag') }}
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6 animate-fade-in-up animate-delay-100">
                    {{ __('ui.hero_title_1') }} <br>
                    <span class="text-accent-400">{{ __('ui.hero_title_2') }}</span>
                </h1>

                <p class="text-lg sm:text-xl text-gray-300 leading-relaxed mb-10 max-w-2xl animate-fade-in-up animate-delay-200">
                    {{ $company['description'] }}
                </p>

                <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-up animate-delay-300">
                    <a href="{{ route('products') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-accent-400 hover:bg-accent-500 text-primary-900 text-lg font-bold rounded-xl transition-colors duration-200 shadow-lg">
                        {{ __('ui.btn_view_products') }}
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/10 hover:bg-white/20 text-white text-lg font-semibold rounded-xl border border-white/20 transition-colors duration-200">
                        {{ __('ui.btn_contact') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== STATS BAR ==================== --}}
    <section class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-gray-100">
                <div class="py-8 lg:py-10 text-center">
                    <p class="text-3xl lg:text-4xl font-bold text-primary-600">{{ date('Y') - config('catalog.company.founded_year') }}+</p>
                    <p class="text-gray-500 mt-1 text-base">{{ __('ui.stats_years') }}</p>
                </div>
                <div class="py-8 lg:py-10 text-center">
                    <p class="text-3xl lg:text-4xl font-bold text-primary-600">{{ count(config('catalog.products')) }}</p>
                    <p class="text-gray-500 mt-1 text-base">{{ __('ui.stats_products') }}</p>
                </div>
                <div class="py-8 lg:py-10 text-center">
                    <p class="text-3xl lg:text-4xl font-bold text-primary-600">{{ count(config('catalog.clients')) }}+</p>
                    <p class="text-gray-500 mt-1 text-base">{{ __('ui.stats_clients') }}</p>
                </div>
                <div class="py-8 lg:py-10 text-center">
                    <p class="text-3xl lg:text-4xl font-bold text-primary-600">100%</p>
                    <p class="text-gray-500 mt-1 text-base">{{ __('ui.stats_genuine') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== SERVICES ==================== --}}
    <section class="py-20 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold text-base uppercase tracking-wider mb-2">{{ __('ui.services_tag') }}</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ __('ui.services_title') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md hover:border-primary-100 transition-all duration-300">
                    <div class="w-14 h-14 bg-primary-50 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $service['icon'] }}"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                    <p class="text-gray-600 text-base leading-relaxed whitespace-pre-line">{{ $service['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== FEATURED PRODUCTS ==================== --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold text-base uppercase tracking-wider mb-2">{{ __('ui.products_tag') }}</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ __('ui.products_title') }}</h2>
                <p class="text-gray-500 mt-3 text-lg max-w-2xl mx-auto">{{ __('ui.products_subtitle') }}</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $product)
                <a href="{{ route('products.show', $product['slug']) }}" class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg hover:border-primary-100 transition-all duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors mb-2">{{ $product['name'] }}</h3>
                        <p class="text-gray-500 text-base line-clamp-2">{{ $product['short_description'] }}</p>
                        <div class="mt-4 inline-flex items-center gap-1 text-primary-600 font-semibold text-sm">
                            {{ __('ui.btn_learn_more') }}
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('products') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white text-lg font-semibold rounded-xl transition-colors duration-200 shadow-sm">
                    {{ __('ui.btn_view_all_products') }}
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ==================== CLIENTS STRIP ==================== --}}
    <section class="py-16 bg-gray-50 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-primary-600 font-semibold text-base uppercase tracking-wider mb-2">{{ __('ui.clients_tag') }}</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ __('ui.clients_title') }}</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach(array_slice($clients, 0, 8) as $client)
                <div class="bg-white rounded-xl p-6 text-center border border-gray-100 shadow-sm">
                    <p class="text-base font-bold text-gray-800">{{ $client['name'] }}</p>
                    @if($client['industry'] !== '-')
                    <p class="text-sm text-gray-500 mt-1">{{ $client['industry'] }}</p>
                    @endif
                </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <a href="{{ route('clients') }}" class="text-primary-600 hover:text-primary-700 font-semibold text-base inline-flex items-center gap-1">
                    {{ __('ui.btn_see_all_clients') }}
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ==================== CTA SECTION ==================== --}}
    <section class="py-20 lg:py-24 bg-primary-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">{{ __('ui.cta_title') }}</h2>
            <p class="text-lg text-gray-300 mb-10 max-w-2xl mx-auto">
                {{ __('ui.cta_subtitle') }}
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-accent-400 hover:bg-accent-500 text-primary-900 text-lg font-bold rounded-xl transition-colors duration-200 shadow-lg">
                    {{ __('ui.btn_get_in_touch') }}
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('catalog.company.whatsapp')) }}" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 px-8 py-4 bg-green-500 hover:bg-green-600 text-white text-lg font-bold rounded-xl transition-colors duration-200 shadow-lg">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    {{ __('ui.btn_whatsapp') }}
                </a>
            </div>
        </div>
    </section>

@endsection
