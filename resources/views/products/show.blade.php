@extends('components.layout')

@section('title', $product['meta_title'])
@section('meta_description', $product['meta_description'])

@section('content')

    {{-- ==================== BREADCRUMB HEADER ==================== --}}
    <section class="bg-primary-900 py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Breadcrumbs --}}
            <nav class="flex items-center gap-2 text-sm text-gray-400 mb-4">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors">{{ __('ui.nav_home') }}</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <a href="{{ route('products') }}" class="hover:text-white transition-colors">{{ __('ui.nav_products') }}</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                <span class="text-gray-300">{{ $product['name'] }}</span>
            </nav>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">{{ $product['name'] }}</h1>
        </div>
    </section>

    {{-- ==================== PRODUCT DETAIL ==================== --}}
    <section class="py-16 lg:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">

                {{-- Image Gallery --}}
                <div x-data="{ lightbox: false, activeImage: '{{ asset($product['image']) }}' }">
                    {{-- Main Image --}}
                    <div @click="lightbox = true" class="cursor-zoom-in aspect-[4/3] rounded-2xl overflow-hidden bg-gray-100 shadow-sm border border-gray-100">
                        <img :src="activeImage" alt="{{ $product['name'] }}" class="w-full h-full object-cover">
                    </div>

                    {{-- Thumbnails --}}
                    @if(count($product['gallery']) > 1)
                    <div class="flex gap-3 mt-4">
                        @foreach($product['gallery'] as $img)
                        <button @click="activeImage = '{{ asset($img) }}'" class="w-20 h-20 rounded-lg overflow-hidden border-2 border-gray-200 hover:border-primary-500 transition-colors focus:outline-none focus:ring-2 focus:ring-primary-400">
                            <img src="{{ asset($img) }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover">
                        </button>
                        @endforeach
                    </div>
                    @endif

                    {{-- Lightbox --}}
                    <div x-show="lightbox" x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"
                         @click="lightbox = false"
                         @keydown.escape.window="lightbox = false"
                         class="fixed inset-0 z-[60] bg-black/90 flex items-center justify-center p-4 cursor-pointer">
                        <button @click="lightbox = false" class="absolute top-6 right-6 text-white hover:text-gray-300 transition-colors">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                        </button>
                        <img :src="activeImage" alt="{{ $product['name'] }}" class="max-w-full max-h-[85vh] object-contain rounded-lg" @click.stop>
                    </div>
                </div>

                {{-- Product Info --}}
                <div>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        {{ $product['description'] }}
                    </p>

                    {{-- Features --}}
                    <div class="mb-10">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">{{ __('ui.key_features') }}</h2>
                        <ul class="space-y-3">
                            @foreach($product['features'] as $feature)
                            <li class="flex items-start gap-3">
                                <svg class="w-6 h-6 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-gray-700 text-base">{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- CTA Buttons --}}
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white text-lg font-semibold rounded-xl transition-colors duration-200 shadow-sm">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            {{ __('ui.btn_inquire_now') }}
                        </a>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', config('catalog.company.whatsapp')) }}?text={{ urlencode('Hello, I am interested in your ' . $product['name'] . '. Can you provide more details?') }}" target="_blank" rel="noopener"
                           class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-green-500 hover:bg-green-600 text-white text-lg font-semibold rounded-xl transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            {{ __('ui.btn_whatsapp') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== RELATED PRODUCTS ==================== --}}
    @if($related->isNotEmpty())
    <section class="py-16 lg:py-20 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-10">{{ __('ui.other_products') }}</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($related as $rel)
                <a href="{{ route('products.show', $rel['slug']) }}" class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg hover:border-primary-100 transition-all duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="{{ asset($rel['image']) }}" alt="{{ $rel['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors mb-2">{{ $rel['name'] }}</h3>
                        <p class="text-gray-500 text-sm line-clamp-2">{{ $rel['short_description'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

@endsection
