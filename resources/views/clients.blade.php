@extends('components.layout')

@section('title', __('ui.clients_page_title') . ' — Kajie Group')
@section('meta_description', __('ui.clients_page_subtitle'))

@section('content')

    {{-- ==================== PAGE HEADER ==================== --}}
    <section class="bg-primary-900 py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-accent-400 font-semibold text-base uppercase tracking-wider mb-3">{{ __('ui.track_record_tag') }}</p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">{{ __('ui.clients_page_title') }}</h1>
            <p class="text-lg text-gray-300 mt-4 max-w-2xl">
                {{ __('ui.clients_page_subtitle') }}
            </p>
        </div>
    </section>

    {{-- ==================== CLIENTS LIST ==================== --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ __('ui.trusted_by_title') }}</h2>
                <p class="text-gray-500 mt-3 text-lg">{{ __('ui.trusted_by_subtitle') }}</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($clients as $client)
                <div class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm hover:shadow-md hover:border-primary-100 transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">{{ $client['name'] }}</h3>
                    @if($client['industry'] !== '-')
                    <p class="text-primary-600 text-sm font-medium mb-2">{{ $client['industry'] }}</p>
                    @endif
                    @if($client['project'] !== '-')
                    <p class="text-gray-500 text-sm">{{ $client['project'] }}</p>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== OUR PROJECTS ==================== --}}
    <section class="py-20 lg:py-24 bg-gray-50 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold text-base uppercase tracking-wider mb-2">{{ __('ui.projects_tag') }}</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ __('ui.projects_title') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 border border-gray-100 flex flex-col">
                    <div class="h-48 overflow-hidden bg-gray-100 relative group">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-primary-900/10 group-hover:bg-transparent transition-colors duration-300"></div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">{{ $project['description'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== INDUSTRIES WE SERVE ==================== --}}
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">{{ __('ui.industries_we_serve') }}</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                    $industries = [
                        __('ui.industry_1'), 
                        __('ui.industry_2'), 
                        __('ui.industry_3'), 
                        __('ui.industry_4'), 
                        __('ui.industry_5'), 
                        __('ui.industry_6')
                    ];
                @endphp
                @foreach($industries as $industry)
                <div class="bg-white rounded-xl p-5 text-center border border-gray-100 shadow-sm">
                    <p class="text-sm font-semibold text-gray-700">{{ $industry }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="py-20 bg-primary-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">{{ __('ui.cta_clients_title') }}</h2>
            <p class="text-lg text-gray-300 mb-10">{{ __('ui.cta_clients_subtitle') }}</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-accent-400 hover:bg-accent-500 text-primary-900 text-lg font-bold rounded-xl transition-colors duration-200 shadow-lg">
                {{ __('ui.btn_get_in_touch') }}
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>

@endsection
