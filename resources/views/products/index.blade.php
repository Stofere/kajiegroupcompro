@extends('components.layout')

@section('title', __('ui.nav_products') . ' — Kajie Group')
@section('meta_description', __('ui.products_page_subtitle'))

@section('content')

    {{-- ==================== PAGE HEADER ==================== --}}
    <section class="bg-primary-900 py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-accent-400 font-semibold text-base uppercase tracking-wider mb-3">{{ __('ui.products_tag') }}</p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">{{ __('ui.products_page_title') }}</h1>
            <p class="text-lg text-gray-300 mt-4 max-w-2xl">
                {{ __('ui.products_page_subtitle') }}
            </p>
        </div>
    </section>

    {{-- ==================== PRODUCTS GRID ==================== --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $product)
                <a href="{{ route('products.show', $product['slug']) }}" class="group bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-lg hover:border-primary-100 transition-all duration-300">
                    <div class="aspect-[4/3] overflow-hidden bg-gray-100">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h2 class="text-lg font-bold text-gray-900 group-hover:text-primary-600 transition-colors mb-2">{{ $product['name'] }}</h2>
                        <p class="text-gray-500 text-base line-clamp-2">{{ $product['short_description'] }}</p>
                        <div class="mt-4 inline-flex items-center gap-1 text-primary-600 font-semibold text-sm">
                            {{ __('ui.btn_view_details') }}
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="py-16 bg-gray-50 border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">{{ __('ui.cant_find_title') }}</h2>
            <p class="text-lg text-gray-600 mb-8">
                {{ __('ui.cant_find_subtitle') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white text-lg font-semibold rounded-xl transition-colors duration-200 shadow-sm">
                {{ __('ui.btn_request_quote') }}
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>

@endsection
