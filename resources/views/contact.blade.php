@extends('layout.app')

@section('title', 'Contact Us | Andromeda Hospital')

@section('content')

@php
    $whatsappNumber = '2347019557057';

    $contactMethods = [
        [
            'icon' => 'phone',
            'title' => 'Phone & Emergency',
            'details' => ['+234 701 955 7057', '+234 800 123 4567'],
            'actionText' => 'Call Us Directly',
            'actionUrl' => 'tel:+2347019557057',
            'badge' => '24/7 Line',
        ],
        [
            'icon' => 'message-circle',
            'title' => 'WhatsApp Chat',
            'details' => ['+234 701 955 7057', 'Instant response & booking'],
            'actionText' => 'Open WhatsApp',
            'actionUrl' => "https://wa.me/{$whatsappNumber}",
            'badge' => 'Fastest Response',
        ],
        [
            'icon' => 'mail',
            'title' => 'Email Support',
            'details' => ['info@andromedahospital.com', 'enquiries@andromedahospital.com'],
            'actionText' => 'Send an Email',
            'actionUrl' => 'mailto:info@andromedahospital.com',
            'badge' => 'General Enquiries',
        ],
        [
            'icon' => 'map-pin',
            'title' => 'Hospital Address',
            'details' => ['4B, Babatunde Oki Street, off Town Planning Way', 'Ilupeju, Lagos, Nigeria'],
            'actionText' => 'Get Directions',
            'actionUrl' => 'https://maps.google.com/?q=Ilupeju+Lagos+Nigeria',
            'badge' => 'Main Location',
        ],
    ];

    $socials = [
        [
            'name' => 'Instagram',
            'handle' => '@andromeda_hospital',
            'icon' => '<svg class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>',
            'url' => 'https://www.instagram.com/andromedahospital/',
            'desc' => 'Follow our daily healthcare updates, wellness tips, and facility highlights.',
            'followers' => '12.5k Followers',
            'color' => 'hover:border-pink-500/40 hover:text-pink-600',
        ],
        [
            'name' => 'Facebook',
            'handle' => 'Andromeda Hospital Nigeria',
            'icon' => '<svg class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
',
            'url' => 'https://facebook.com/andromedahospital',
            'desc' => 'Join our health community for live sessions, articles, and announcements.',
            'followers' => '28k Community',
            'color' => 'hover:border-blue-500/40 hover:text-blue-600',
        ],
        [
            'name' => 'LinkedIn',
            'handle' => 'Andromeda Hospital & Healthcare',
            'icon' => '<svg class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>',
            'url' => 'https://linkedin.com/company/andromedahospital',
            'desc' => 'Connect with our clinical specialists and follow medical advancements.',
            'followers' => '5k Professional Network',
            'color' => 'hover:border-sky-500/40 hover:text-sky-600',
        ],
        [
            'name' => 'X / Twitter',
            'handle' => '@AndromedaHosp',
            'icon' => '<svg class="w-10 h-10 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>',
            'url' => 'https://twitter.com/AndromedaHosp',
            'desc' => 'Get real-time service alerts, health advisories, and quick responses.',
            'followers' => '9.2k Followers',
            'color' => 'hover:border-emerald-500/40 hover:text-[#145C40]',
        ],
    ];
@endphp

<main class="bg-[#F8FAF8] text-[#172B23]">

    <!-- PAGE HEADER HERO -->
    <section class="relative bg-[#102F23] py-20 text-white sm:py-24">
        <div class="pointer-events-none absolute -right-36 -top-36 h-[500px] w-[500px] rounded-full border border-white/5"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#299B68]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 text-center lg:px-8">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-[#75C99B]/30 bg-white/5 px-4 py-2 text-[10px] font-bold tracking-[0.16em] text-[#A9E6C0] sm:text-xs">
                <i data-lucide="phone-call" class="w-4 h-4"></i>
                WE ARE ALWAYS HERE FOR YOU
            </div>

            <h1 class="text-4xl font-semibold tracking-tight sm:text-6xl lg:text-[56px]">
                Get in Touch with <span class="font-serif italic text-[#8DDBAC]">Andromeda</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-8 text-white/70 sm:text-base">
                Have questions about our medical services, appointments, or emergency care? Reach out through any of our channels below or connect with us on social media.
            </p>
        </div>
    </section>

    <!-- DIRECT CONTACT CHANNELS -->
    <section class="mx-auto max-w-7xl px-5 py-16 sm:py-24 lg:px-8">
        <div class="mb-12 text-center">
            <div class="mb-3 flex items-center justify-center gap-3">
                <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">DIRECT CHANNELS</span>
            </div>
            <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">All Contact Information</h2>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($contactMethods as $method)
                <div class="group relative flex flex-col justify-between rounded-3xl border border-[#E8EEE9] bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1.5 hover:border-[#299B68]/40 hover:shadow-xl">
                    <div>
                        <div class="flex items-center justify-between">
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#EAF5EF] text-[#299B68] transition group-hover:bg-[#145C40] group-hover:text-white">
                                <i data-lucide="{{ $method['icon'] }}" class="w-7 h-7"></i>
                            </div>
                            <span class="rounded-full bg-[#EAF5EF] px-3 py-1 text-[10px] font-bold text-[#145C40]">
                                {{ $method['badge'] }}
                            </span>
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-[#172B23]">{{ $method['title'] }}</h3>

                        <div class="mt-4 space-y-1">
                            @foreach($method['details'] as $detail)
                                <p class="text-xs sm:text-sm text-[#65736B] leading-6">{{ $detail }}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-8 pt-5 border-t border-[#E8EEE9]">
                        <a href="{{ $method['actionUrl'] }}" target="_blank" class="inline-flex items-center gap-2 text-xs font-bold text-[#145C40] transition group-hover:text-[#299B68]">
                            <span>{{ $method['actionText'] }}</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- MEET US ON SOCIALS SECTION -->
    <section class="bg-white py-20 sm:py-24 border-y border-[#E8EEE9]">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <div class="mb-3 flex items-center justify-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">STAY CONNECTED</span>
                </div>
                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Meet Us on Social Media</h2>
                <p class="mt-4 text-sm text-[#718078] sm:text-base">
                    Follow Andromeda Hospital across official platforms for daily health tips, specialist insights, hospital events, and live Q&A sessions.
                </p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($socials as $social)
                    <a href="{{ $social['url'] }}" target="_blank" rel="noreferrer" class="group flex flex-col justify-between rounded-3xl border border-[#E8EEE9] bg-[#F9FBF9] p-7 transition duration-300 hover:bg-white hover:shadow-xl {{ $social['color'] }}">
                        <div>
                            <div class="flex items-center justify-between">
                                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-[#EAF5EF] text-[#145C40] transition duration-300 group-hover:scale-110">
                                   {!! $social['icon'] !!}
                                </div>
                                <span class="text-[11px] font-semibold text-[#8C9B92] group-hover:text-inherit">
                                    {{ $social['followers'] }}
                                </span>
                            </div>

                            <h3 class="mt-6 text-lg font-bold text-[#172B23]">{{ $social['name'] }}</h3>
                            <p class="text-xs font-medium text-[#299B68] mt-0.5">{{ $social['handle'] }}</p>

                            <p class="mt-4 text-xs leading-6 text-[#65736B]">
                                {{ $social['desc'] }}
                            </p>
                        </div>

                        <div class="mt-6 flex items-center justify-between border-t border-[#E8EEE9] pt-4 text-xs font-bold text-[#145C40]">
                            <span>Follow Page</span>
                            <i data-lucide="arrow-up-right" class="w-4 h-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5"></i>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- HOSPITAL MAP & HOURS SECTION -->
    <section class="mx-auto max-w-7xl px-5 py-20 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-12 lg:items-center">
            
            <div class="lg:col-span-5">
                <div class="mb-4 flex items-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">VISIT OUR FACILITY</span>
                </div>

                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Open 24/7 For Your Healthcare Needs</h2>

                <p class="mt-5 text-sm leading-8 text-[#718078]">
                    Located in Ilupeju, Lagos, our hospital facilities are fully operational around the clock for emergency services, outpatient consultations, and inpatient care.
                </p>

                <div class="mt-8 space-y-4">
                    <div class="flex items-start gap-4 rounded-2xl bg-white p-5 border border-[#E8EEE9]">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#EAF5EF] text-[#299B68]">
                            <i data-lucide="clock" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-[#172B23]">Operating Hours</h4>
                            <p class="text-xs text-[#65736B] mt-1">Emergency & Admission: 24 Hours / 7 Days</p>
                            <p class="text-xs text-[#65736B]">Outpatient Clinic: Mon - Sat (8:00 AM - 6:00 PM)</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-2xl bg-white p-5 border border-[#E8EEE9]">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-[#EAF5EF] text-[#299B68]">
                            <i data-lucide="navigation" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-[#172B23]">Address Landmark</h4>
                            <p class="text-xs text-[#65736B] mt-1">4B, Babatunde Oki Street, off Town Planning Way, Ilupeju, Lagos, Nigeria.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Placeholder / Embed -->
            <div class="lg:col-span-7 h-[420px] rounded-3xl overflow-hidden border border-[#E8EEE9] shadow-xl relative bg-gray-100">
                <iframe 
                    class="w-full h-full border-0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.987518428131!2d3.364375!3d6.554743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d96b7cd5a2b%3A0x8bbd352b8655848!2sTown%20Planning%20Way%2C%20Ilupeju%2C%20Lagos!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>

</main>

@endsection