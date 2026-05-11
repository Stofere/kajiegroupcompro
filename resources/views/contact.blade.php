@extends('components.layout')

@section('title', __('ui.contact_page_title') . ' — Kajie Group')
@section('meta_description', __('ui.contact_page_subtitle'))

@section('content')

    {{-- ==================== PAGE HEADER ==================== --}}
    <section class="bg-primary-900 py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-accent-400 font-semibold text-base uppercase tracking-wider mb-3">{{ __('ui.get_in_touch_tag') }}</p>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">{{ __('ui.contact_page_title') }}</h1>
            <p class="text-lg text-gray-300 mt-4 max-w-2xl">
                {{ __('ui.contact_page_subtitle') }}
            </p>
        </div>
    </section>

    {{-- ==================== CONTACT SECTION ==================== --}}
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                {{-- Contact Info Cards --}}
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-8">{{ __('ui.reach_out_title') }}</h2>
                    <div class="space-y-6">
                        {{-- Phone --}}
                        <a href="tel:{{ config('catalog.company.phone') }}" class="flex items-start gap-5 p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:border-primary-100 hover:bg-primary-50/50 transition-all duration-200">
                            <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">{{ __('ui.phone') }}</h3>
                                <p class="text-primary-600 text-lg font-medium mt-1">{{ config('catalog.company.phone') }}</p>
                                <p class="text-gray-500 text-sm mt-1">{{ __('ui.phone_desc') }}</p>
                            </div>
                        </a>

                        {{-- WhatsApp (Multiple Contacts) --}}
                        <div class="flex items-start gap-5 p-6 bg-gray-50 rounded-2xl border border-gray-100">
                            <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7 text-green-600" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </div>
                            <div class="w-full">
                                <h3 class="text-lg font-bold text-gray-900">{{ __('ui.whatsapp') }}</h3>
                                
                                {{-- Head Office --}}
                                <div class="mt-4">
                                    <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-2">Head Office</h4>
                                    <a href="https://wa.me/6281336853355" target="_blank" rel="noopener" class="inline-block group">
                                        <div class="text-gray-900 font-medium group-hover:text-green-600 transition-colors">Customer Service</div>
                                        <div class="text-green-600 text-sm mt-0.5">+62 813-3685-3355</div>
                                    </a>
                                </div>

                                {{-- Marketing Team --}}
                                <div class="mt-5 pt-5 border-t border-gray-100">
                                    <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Marketing Team</h4>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-2">
                                        
                                        <a href="https://wa.me/628563426160" target="_blank" rel="noopener" class="block group p-2 -ml-2 rounded-lg hover:bg-green-50 transition-colors duration-200">
                                            <div class="text-gray-900 font-medium group-hover:text-green-700">Adityo Putro</div>
                                            <div class="text-green-600 text-sm mt-0.5">+62 856-3426-160</div>
                                        </a>

                                        <a href="https://wa.me/628117213901" target="_blank" rel="noopener" class="block group p-2 -ml-2 sm:ml-0 rounded-lg hover:bg-green-50 transition-colors duration-200">
                                            <div class="text-gray-900 font-medium group-hover:text-green-700">Ahmad Nursiddik</div>
                                            <div class="text-green-600 text-sm mt-0.5">+62 811-7213-901</div>
                                        </a>

                                        <a href="https://wa.me/6285290078282" target="_blank" rel="noopener" class="block group p-2 -ml-2 rounded-lg hover:bg-green-50 transition-colors duration-200">
                                            <div class="text-gray-900 font-medium group-hover:text-green-700">Budi Hartono</div>
                                            <div class="text-green-600 text-sm mt-0.5">+62 852-9007-8282</div>
                                        </a>

                                        <a href="https://wa.me/6281221648826" target="_blank" rel="noopener" class="block group p-2 -ml-2 sm:ml-0 rounded-lg hover:bg-green-50 transition-colors duration-200">
                                            <div class="text-gray-900 font-medium group-hover:text-green-700">Dedi Safirudin</div>
                                            <div class="text-green-600 text-sm mt-0.5">+62 812-2164-8826</div>
                                        </a>

                                        <a href="https://wa.me/6281333352605" target="_blank" rel="noopener" class="block group p-2 -ml-2 rounded-lg hover:bg-green-50 transition-colors duration-200">
                                            <div class="text-gray-900 font-medium group-hover:text-green-700">Hari Prasetjo</div>
                                            <div class="text-green-600 text-sm mt-0.5">+62 813-3335-2605</div>
                                        </a>

                                        <a href="https://wa.me/6285645895827" target="_blank" rel="noopener" class="block group p-2 -ml-2 sm:ml-0 rounded-lg hover:bg-green-50 transition-colors duration-200">
                                            <div class="text-gray-900 font-medium group-hover:text-green-700">Rizal Firmansah</div>
                                            <div class="text-green-600 text-sm mt-0.5">+62 856-4589-5827</div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-start gap-5 p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:border-primary-100 transition-all duration-200">
                            <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">{{ __('ui.email') }}</h3>
                                @php
                                    $emails = is_array(config('catalog.company.email')) ? (config('catalog.company.email')[app()->getLocale()] ?? config('catalog.company.email.en')) : [config('catalog.company.email')];
                                    $emails = is_array($emails) ? $emails : [$emails];
                                @endphp
                                @foreach($emails as $email)
                                    <a href="mailto:{{ $email }}" class="block text-primary-600 text-lg font-medium mt-1 hover:text-primary-700">{{ $email }}</a>
                                @endforeach
                                <p class="text-gray-500 text-sm mt-1">{{ __('ui.email_desc') }}</p>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="flex items-start gap-5 p-6 bg-gray-50 rounded-2xl border border-gray-100">
                            <div class="w-14 h-14 bg-primary-100 rounded-xl flex items-center justify-center shrink-0">
                                <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">{{ __('ui.office_address') }}</h3>
                                <a href="{{ config('catalog.company.maps_link') }}" target="_blank" rel="noopener" class="block text-gray-700 text-lg mt-1 hover:text-primary-600 transition-colors">
                                    {{ config('catalog.company.address') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div>
                    <div class="bg-gray-50 rounded-2xl p-8 lg:p-10 border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ __('ui.send_message_title') }}</h2>
                        <p class="text-gray-500 mb-8">{{ __('ui.send_message_subtitle') }}</p>

                        <form action="https://formspree.io/f/your-form-id" method="POST" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.form_name') }}</label>
                                <input type="text" id="name" name="name" required
                                       class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-white text-base text-gray-800 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition-all"
                                       placeholder="{{ __('ui.form_name') }}">
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.form_company') }}</label>
                                <input type="text" id="company" name="company"
                                       class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-white text-base text-gray-800 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition-all"
                                       placeholder="{{ __('ui.form_company') }}">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.form_email') }}</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-white text-base text-gray-800 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition-all"
                                       placeholder="your@email.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.form_phone') }}</label>
                                <input type="tel" id="phone" name="phone"
                                       class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-white text-base text-gray-800 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition-all"
                                       placeholder="+62 xxx xxxx xxxx">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">{{ __('ui.form_message') }}</label>
                                <textarea id="message" name="message" rows="5" required
                                          class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-white text-base text-gray-800 focus:border-primary-500 focus:ring-2 focus:ring-primary-100 outline-none transition-all resize-y"
                                          placeholder="{{ __('ui.form_message_ph') }}"></textarea>
                            </div>
                            <button type="submit" class="w-full px-8 py-4 bg-primary-600 hover:bg-primary-700 text-white text-lg font-semibold rounded-xl transition-colors duration-200 shadow-sm">
                                {{ __('ui.btn_send_message') }}
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection