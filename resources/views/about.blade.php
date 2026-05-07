@extends('components.layout')

@section('title', __('ui.about_tag') . ' — Kajie Group')
@section('meta_description', 'PT. Karya Jasa Indonesia Jaya — ' . $company['description'])

@section('content')

    {{-- ==================== PAGE HEADER ==================== --}}
    <section class="bg-primary-900 py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-accent-400 font-semibold text-base uppercase tracking-wider mb-3">{{ __('ui.about_tag') }}</p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                {{ config('catalog.company.legal_name') }}
            </h1>
            <p class="text-lg text-gray-300 mt-4 max-w-2xl">
                {{ __('ui.about_subtitle', ['year' => config('catalog.company.founded_year')]) }}
            </p>
        </div>
    </section>

    {{-- ==================== WHO WE ARE ==================== --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <p class="text-primary-600 font-semibold text-base uppercase tracking-wider mb-2">{{ __('ui.who_we_are_tag') }}</p>
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6">{{ __('ui.who_we_are_title') }}</h2>
                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>{!! __('ui.about_p1') !!}</p>
                        <p>{!! __('ui.about_p2') !!}</p>
                        <p>{!! __('ui.about_p3') !!}</p>
                        <p>{!! __('ui.about_p4') !!}</p>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/hero-bg.png') }}" alt="Industrial facility" class="rounded-2xl shadow-lg w-full aspect-[4/3] object-cover">
                    <div class="absolute -bottom-6 -left-6 bg-primary-600 text-white rounded-2xl p-6 shadow-lg hidden lg:block">
                        <p class="text-4xl font-bold">{{ date('Y') - config('catalog.company.founded_year') }}+</p>
                        <p class="text-sm text-primary-200 mt-1">{{ __('ui.stats_years') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== OUR SERVICES ==================== --}}
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

    {{-- ==================== OUR GOAL ==================== --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold text-base uppercase tracking-wider mb-2">{{ __('ui.our_goal_tag') }}</p>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900">{{ __('ui.slogan') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                {{-- Mission --}}
                <div class="bg-gray-50 rounded-2xl p-10 text-center border border-gray-100">
                    <div class="w-16 h-16 bg-primary-100 text-primary-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ __('ui.mission_title') }}</h3>
                    <p class="text-xl font-medium text-gray-600 italic">
                        {{ __('ui.mission_desc') }}
                    </p>
                </div>

                {{-- Vision --}}
                <div class="bg-primary-50 rounded-2xl p-10 text-center border border-primary-100">
                    <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-primary-900 mb-4">{{ __('ui.vision_title') }}</h3>
                    <p class="text-xl font-medium text-primary-700 italic">
                        {{ __('ui.vision_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== CTA ==================== --}}
    <section class="py-20 lg:py-24 bg-primary-800">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">{{ __('ui.cta_about_title') }}</h2>
            <p class="text-lg text-gray-300 mb-10">
                {{ __('ui.cta_about_subtitle') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 bg-accent-400 hover:bg-accent-500 text-primary-900 text-lg font-bold rounded-xl transition-colors duration-200 shadow-lg">
                {{ __('ui.btn_contact_team') }}
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </section>

@endsection
