@extends('layout.app')

@section('title', 'Why Choose Andromeda Hospital')

@section('content')

@php
    $whatsappNumber = '2347019557057';

    $pillars = [
        [
            'number' => '01',
            'title' => 'We listen first.',
            'description' => 'We believe good healthcare begins with listening, understanding your unique concerns, and respecting your individual needs before recommending any treatment path.',
            'icon' => 'heart-handshake',
        ],
        [
            'number' => '02',
            'title' => 'We care deeply.',
            'description' => 'Every patient deserves dignity, kindness, and uncompromised attention throughout their healthcare journey with us.',
            'icon' => 'heart-pulse',
        ],
        [
            'number' => '03',
            'title' => 'We put health first.',
            'description' => 'Our focus is on supporting long-term health and wellness through responsible medical care, preventive checks, and thorough patient education.',
            'icon' => 'shield-check',
        ],
    ];

    $differentiators = [
        [
            'icon' => 'clock-3',
            'title' => '24/7 Round-the-Clock Access',
            'description' => 'Healthcare needs do not follow a 9-to-5 schedule. Our emergency units and support desks are active around the clock.',
        ],
        [
            'icon' => 'stethoscope',
            'title' => 'Expert Specialist Physicians',
            'description' => 'Consult with seasoned consultants across internal medicine, paediatrics, maternal care, and diagnostics.',
        ],
        [
            'icon' => 'check-circle-2',
            'title' => 'Patient-Centred Dignity',
            'description' => 'We treat individuals, not just symptoms. Your comfort, privacy, and emotional wellbeing matter to us.',
        ],
        [
            'icon' => 'activity',
            'title' => 'Modern Diagnostics & Labs',
            'description' => 'Equipped with reliable laboratory and screening technology to ensure accurate and fast clinical decisions.',
        ],
    ];
@endphp

<main class="bg-[#F8FAF8] text-[#172B23]" x-data="{ 
    activeCommitment: 0,
    commitments: {{ json_encode($pillars) }}
}">

    <!-- PAGE HERO -->
    <section class="relative bg-[#102F23] py-20 text-white sm:py-24">
        <div class="pointer-events-none absolute -right-36 -top-36 h-[500px] w-[500px] rounded-full border border-white/5"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#299B68]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 text-center lg:px-8">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-[#75C99B]/30 bg-white/5 px-4 py-2 text-[10px] font-bold tracking-[0.16em] text-[#A9E6C0] sm:text-xs">
                <i data-lucide="shield-check" class="w-4 h-4"></i>
                THE ANDROMEDA DIFFERENCE
            </div>

            <h1 class="text-4xl font-semibold tracking-tight sm:text-6xl lg:text-[56px]">
                Why Choose <span class="font-serif italic text-[#8DDBAC]">Andromeda Hospital?</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-8 text-white/70 sm:text-base">
                Choosing a hospital is one of the most important decisions you will make. Discover why families across Ilupeju and Lagos trust us with their health and wellbeing.
            </p>
        </div>
    </section>

    <!-- PHILOSOPHY SECTION -->
    <section class="mx-auto max-w-7xl px-5 py-20 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-2 lg:items-center">
            <div>
                <div class="mb-4 flex items-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">OUR CORE PHILOSOPHY</span>
                </div>

                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Healthcare should always feel personal, never transactional.</h2>

                <p class="mt-6 text-sm leading-8 text-[#718078] sm:text-base">
                    At Andromeda Hospital, we reject the notion of rushed or impersonal medical care. Every patient who walks through our doors is welcomed into an environment built on trust, clinical rigor, and genuine empathy.
                </p>

                <p class="mt-4 text-sm leading-8 text-[#718078] sm:text-base">
                    Whether you are bringing in a child for paediatric care, managing a chronic condition, or preparing for a new family addition, our promise is to stand by your side with undivided attention.
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="/services" class="inline-flex items-center gap-2 rounded-full bg-[#145C40] px-7 py-4 text-sm font-semibold text-white shadow-md transition hover:bg-[#299B68]">
                        Explore Our Services
                        <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </a>
                    <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" class="inline-flex items-center gap-2 rounded-full border border-[#172B23]/15 bg-white px-7 py-4 text-sm font-semibold text-[#172B23] transition hover:bg-gray-50">
                        Chat on WhatsApp
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Image Showcase -->
            <div class="relative">
                <div class="h-[420px] overflow-hidden rounded-3xl shadow-xl">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=1100&q=85" alt="Doctor talking with patient" class="h-full w-full object-cover">
                </div>
                <div class="absolute -bottom-6 -left-6 hidden sm:flex items-center gap-4 rounded-2xl bg-white p-5 shadow-2xl border border-gray-100">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#EAF5EF] text-[#299B68]">
                        <i data-lucide="heart-handshake" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-[#145C40]">Compassionate Approach</p>
                        <p class="text-xs text-gray-500">Listening to your needs first</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INTERACTIVE COMMITMENT SLIDER SECTION -->
   <!-- INTERACTIVE COMMITMENT SLIDER SECTION -->
<section class="bg-[#102F23] py-24 text-white" x-data="{ activeCommitment: 0, totalPillars: {{ count($pillars) }} }">
    <div class="mx-auto max-w-7xl px-5 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="mb-3 flex items-center justify-center gap-3">
                <span class="h-[2px] w-8 rounded-full bg-[#8DDBAC]"></span>
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#8DDBAC]">OUR PLEDGE TO YOU</span>
            </div>
            <h2 class="text-3xl font-semibold sm:text-4xl">The Three Pillars of Andromeda Care</h2>
        </div>

        <div class="mt-16 mx-auto max-w-3xl rounded-[32px] border border-white/10 bg-white/[0.05] p-8 sm:p-12 shadow-2xl backdrop-blur-md">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#8DDBAC]">COMMITMENT PLEDGE</span>
                <span class="text-sm font-semibold text-white/40" x-text="`0${activeCommitment + 1} / 03`"></span>
            </div>

            @foreach($pillars as $index => $item)
                <div x-show="activeCommitment === {{ $index }}" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 translate-y-2"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="mt-8"
                     style="{{ $index !== 0 ? 'display: none;' : '' }}">
                    
                    <div class="flex h-20 w-20 items-center justify-center rounded-3xl bg-[#8DDBAC]/10 text-[#8DDBAC]">
                        <i data-lucide="{{ $item['icon'] }}" class="w-9 h-9"></i>
                    </div>

                    <h3 class="mt-8 text-3xl font-semibold sm:text-4xl">{{ $item['title'] }}</h3>
                    <p class="mt-5 min-h-[90px] text-sm sm:text-base leading-8 text-white/70">{{ $item['description'] }}</p>
                </div>
            @endforeach

            <div class="mt-9 flex items-center justify-between border-t border-white/10 pt-7">
                <div class="flex gap-2">
                    @foreach($pillars as $index => $item)
                        <button @click="activeCommitment = {{ $index }}" 
                                :class="activeCommitment === {{ $index }} ? 'w-10 bg-[#8DDBAC]' : 'w-2 bg-white/25 hover:bg-white/50'" 
                                class="h-2 rounded-full transition-all duration-300"></button>
                    @endforeach
                </div>

                <div class="flex gap-2">
                    <button @click="activeCommitment = (activeCommitment - 1 + totalPillars) % totalPillars" aria-label="Previous" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/15 transition hover:bg-white/10">
                        <i data-lucide="chevron-left" class="w-5 h-5"></i>
                    </button>
                    <button @click="activeCommitment = (activeCommitment + 1) % totalPillars" aria-label="Next" class="flex h-11 w-11 items-center justify-center rounded-full bg-[#8DDBAC] text-[#102F23] transition hover:bg-white">
                        <i data-lucide="chevron-right" class="w-5 h-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- KEY DIFFERENTIATORS GRID -->
    <section class="mx-auto max-w-7xl px-5 py-24 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="mb-3 flex items-center justify-center gap-3">
                <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">WHAT SETS US APART</span>
            </div>
            <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Built for Your Peace of Mind</h2>
        </div>

        <div class="mt-14 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($differentiators as $diff)
                <div class="rounded-3xl border border-[#E8EEE9] bg-white p-8 shadow-sm transition duration-300 hover:border-[#299B68]/40 hover:shadow-xl">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#EAF5EF] text-[#299B68] mb-6">
                        <i data-lucide="{{ $diff['icon'] }}" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[#172B23]">{{ $diff['title'] }}</h3>
                    <p class="mt-3 text-sm leading-7 text-[#65736B]">{{ $diff['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="bg-[#EAF5EF] py-16">
        <div class="mx-auto max-w-7xl px-5 text-center lg:px-8">
            <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Ready to experience exceptional healthcare?</h2>
            <p class="mx-auto mt-4 max-w-xl text-sm text-[#55635B]">
                Book an appointment online or reach out to our team via WhatsApp to get started today.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a href="/services" class="inline-flex items-center gap-2 rounded-full bg-[#145C40] px-8 py-4 text-sm font-semibold text-white shadow-lg transition hover:bg-[#299B68]">
                    Book an Appointment
                    <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

</main>

@endsection