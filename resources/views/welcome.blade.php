<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andromeda Hospital & Healthcare</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js for interactive slider and state management -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        .has-scroll-reveal [data-reveal] {
            opacity: 0;
            transform: translate3d(0, 24px, 0);
            transition: opacity 700ms ease, transform 700ms cubic-bezier(0.2, 0.7, 0.2, 1);
            transition-delay: var(--reveal-delay, 0ms);
        }

        .has-scroll-reveal [data-reveal="left"] {
            transform: translate3d(-28px, 0, 0);
        }

        .has-scroll-reveal [data-reveal="right"] {
            transform: translate3d(28px, 0, 0);
        }

        .has-scroll-reveal [data-reveal].is-visible {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        @media (prefers-reduced-motion: reduce) {
            .has-scroll-reveal [data-reveal] {
                opacity: 1;
                transform: none;
                transition: none;
            }
        }
    </style>
</head>
<body class="font-sans antialiased text-[#172B23] bg-[#F8FAF8] overflow-x-hidden">

    @php
        $whatsappNumber = '2347019557057';

        $heroSlides = [
            [
                'image' => 'images/andromeda-hospital-1.jpg',
                'eyebrow' => 'WELCOME TO ANDROMEDA HOSPITAL',
                'title' => 'Stepping into a sanctuary of open, welcoming care.',
                'description' => 'Experience compassionate medical care delivered with professionalism, dedication and open arms to embrace your family from the moment you arrive.',
                'primary' => 'Book an Appointment',
                'secondary' => 'Explore Our Services',
            ],
            [
                'image' => 'images/andromeda-hospital-2.jpg',
                'eyebrow' => 'COMPASSIONATE MEDICAL CARE',
                'title' => 'Dedicated daily care for your complete wellbeing.',
                'description' => 'From everyday medical needs and monitoring to specialised health routines, we are committed to supporting healthier lives at every stage.',
                'primary' => 'Find Your Care',
                'secondary' => 'Meet Our Hospital',
            ],
            [
                'image' => 'https://images.pexels.com/photos/5452290/pexels-photo-5452290.jpeg?auto=compress&cs=tinysrgb&w=1600',
                'eyebrow' => 'YOUR HEALTH. OUR PRIORITY.',
                'title' => 'Consult with specialists alongside your partner.',
                'description' => 'Take the journey to better health together with attentive guidance, expert specialists, and care built around your family.',
                'primary' => 'Schedule a Visit',
                'secondary' => 'Discover Our Services',
            ],
        ];

        $services = [
            [
                'icon' => 'baby',
                'image' => 'https://images.pexels.com/photos/5561185/pexels-photo-5561185.jpeg?auto=compress&cs=tinysrgb&w=900',
                'title' => 'Paediatric Care',
                'description' => 'Thoughtful medical care for children, supporting their growth, development and overall wellbeing.',
                'category' => 'Family Care',
            ],
            [
                'icon' => 'heart-pulse',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=85',
                'title' => 'Diabetic Care',
                'description' => 'Ongoing support, monitoring and personalised care to help patients manage diabetes.',
                'category' => 'Specialist Care',
            ],
            [
                'icon' => 'heart-handshake',
                'image' => 'https://images.pexels.com/photos/6991896/pexels-photo-6991896.jpeg?auto=compress&cs=tinysrgb&w=900',
                'title' => 'Maternal Care',
                'description' => 'Dedicated maternal healthcare throughout pregnancy, delivery and the postnatal journey.',
                'category' => 'Family Care',
            ],
            [
                'icon' => 'activity',
                'image' => 'images/andromeda-hospital-2.jpg',
                'title' => 'Physiotherapy',
                'description' => 'Professional rehabilitation and physical therapy to support movement, recovery and mobility.',
                'category' => 'Specialist Care',
            ],
            [
                'icon' => 'stethoscope',
                'image' => 'https://images.pexels.com/photos/5452290/pexels-photo-5452290.jpeg?auto=compress&cs=tinysrgb&w=900',
                'title' => 'Internal Medicine',
                'description' => 'Medical assessment, diagnosis and management of a wide range of adult health conditions.',
                'category' => 'Specialist Care',
            ],
            [
                'icon' => 'microscope',
                'image' => 'https://images.pexels.com/photos/8515138/pexels-photo-8515138.jpeg?auto=compress&cs=tinysrgb&w=900',
                'title' => 'Laboratory Services',
                'description' => 'Medical laboratory investigations to support accurate diagnosis and informed healthcare.',
                'category' => 'Diagnostics',
            ],
        ];

        $hmoPartners = [
            ['name' => 'Bastion Health', 'image' => 'bastion-health.png'],
            ['name' => 'Total Health Trust', 'image' => 'total-health-trust.png'],
            ['name' => 'Greenshield HMO', 'image' => 'greenshield-hmo.png'],
            ['name' => 'Wellness Healthcare', 'image' => 'wellness-healthcare.png'],
            ['name' => 'NEM HMO', 'image' => 'nem-hmo.png'],
            ['name' => 'Phillips HMO', 'image' => 'phillips-hmo.png'],
            ['name' => 'AXA HMO', 'image' => 'axa-hmo.png'],
            ['name' => 'Hygeia HMO', 'image' => 'hygeia-hmo.png'],
            ['name' => 'Reliance HMO', 'image' => 'reliance-hmo.png'],
            ['name' => 'Careline HMO', 'image' => 'careline-hmo.png'],
            ['name' => 'Health HMO', 'image' => 'health-hmo.png'],
            ['name' => 'Venus Medicare', 'image' => 'venus-medicare.png'],
        ];

        $commitments = [
            [
                'number' => '01',
                'title' => 'We listen first.',
                'description' => 'We believe good healthcare begins with listening, understanding your concerns and respecting your individual needs.',
                'icon' => 'heart-handshake',
            ],
            [
                'number' => '02',
                'title' => 'We care deeply.',
                'description' => 'Every patient deserves dignity, kindness and attention throughout their healthcare journey.',
                'icon' => 'heart-pulse',
            ],
            [
                'number' => '03',
                'title' => 'We put health first.',
                'description' => 'Our focus is on supporting better health through responsible medical care and patient education.',
                'icon' => 'shield-check',
            ],
        ];

        $faqs = [
            [
                'question' => 'How can I book an appointment?',
                'answer' => 'You can request an appointment through our online appointment form or contact the hospital directly by telephone or WhatsApp. The hospital team will help confirm your appointment.',
            ],
            [
                'question' => 'Does Andromeda Hospital offer emergency care?',
                'answer' => 'The hospital advertises round-the-clock availability. Please contact the hospital directly for emergency assistance and confirmation of available services.',
            ],
            [
                'question' => 'Where is Andromeda Hospital located?',
                'answer' => 'Andromeda Hospital is located at 4B, Babatunde Oki Street, off Town Planning Way, Ilupeju, Lagos, Nigeria.',
            ],
            [
                'question' => 'Can I request a specific medical service?',
                'answer' => 'Yes. You can select your preferred service in the appointment request form. The hospital team can help direct you to the appropriate department.',
            ],
        ];

        $navLinks = [
            ['label' => 'Home', 'href' => '#home', 'section' => 'home', 'icon' => 'house'],
            ['label' => 'About Us', 'href' => '#about', 'section' => 'about', 'icon' => 'info'],
            ['label' => 'Services', 'href' => '#services', 'section' => 'services', 'icon' => 'stethoscope'],
            ['label' => 'Why Andromeda', 'href' => '#why-us', 'section' => 'why-us', 'icon' => 'heart-pulse'],
            ['label' => 'Contact', 'href' => '#contact', 'section' => 'contact', 'icon' => 'phone'],
        ];

        $mobileNavLinks = array_merge($navLinks, [
            ['label' => 'Book Appointment', 'href' => '#appointment', 'section' => 'appointment', 'icon' => 'calendar-check'],
        ]);
    @endphp

    <main x-data="{ 
        activeMobileNav: 'home',
        selectedService: '', 
        activeCommitment: 0, 
        activeFaq: 0, 
        bookingMessage: '',
        whatsappNumber: '{{ $whatsappNumber }}',
        activeSlide: 0,
        slidesCount: {{ count($heroSlides) }},
        timer: null,
        initCarousel() {
            this.timer = setInterval(() => {
                this.nextSlide();
            }, 6000);
        },
        nextSlide() {
            this.activeSlide = (this.activeSlide + 1) % this.slidesCount;
        },
        prevSlide() {
            this.activeSlide = (this.activeSlide - 1 + this.slidesCount) % this.slidesCount;
        },
        goToSlide(index) {
            this.activeSlide = index;
        },
        selectService(service) {
            this.selectedService = service;
            document.getElementById('appointment')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
        },
        handleBooking(e) {
            e.preventDefault();
            const form = e.target;
            const data = new FormData(form);

            const message = [
                'Hello Andromeda Hospital.',
                '',
                'I would like to request an appointment.',
                '',
                `Full Name: ${data.get('name')}`,
                `Phone Number: ${data.get('phone')}`,
                `Email: ${data.get('email') || 'Not provided'}`,
                `Medical Service: ${data.get('service')}`,
                `Preferred Date: ${data.get('date')}`,
                `Preferred Time: ${data.get('time')}`,
                `Additional Message: ${data.get('message') || 'None'}`,
                '',
                'Please contact me to confirm availability.'
            ].join('\n');

            const url = `https://wa.me/${this.whatsappNumber}?text=${encodeURIComponent(message)}`;
            this.bookingMessage = 'Opening WhatsApp to send your request...';
            window.open(url, '_blank', 'noopener,noreferrer');
        }
    }" x-init="initCarousel()">

        <!-- ANNOUNCEMENT BAR -->
        {{-- <div class="bg-[#145C40] px-5 py-3 text-white">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-8 gap-y-2 text-xs sm:justify-between">
                <p class="flex items-center gap-2 text-white/85">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-[#91E3B6]"></span>
                    Here for your health, around the clock.
                </p>

                <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" rel="noreferrer" class="flex items-center gap-2 font-semibold transition hover:text-[#B6F0D0]">
                    <i data-lucide="phone" class="w-3.5 h-3.5 inline"></i>
                    +234 701 955 7057
                    <i data-lucide="arrow-up-right" class="w-3 h-3 inline"></i>
                </a>
            </div>
        </div> --}}

        <!-- NAVIGATION -->
        <header class="sticky top-0 z-50 border-b border-[#172B23]/5 bg-white/95 backdrop-blur-xl">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">
                <a href="#home" class="flex shrink-0 items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#145C40] text-white shadow-lg shadow-[#145C40]/15">
                        <i data-lucide="heart-pulse" class="w-7 h-7"></i>
                    </div>
                    <div>
                        <h1 class="text-[19px] font-extrabold tracking-[0.04em] text-[#145C40]">ANDROMEDA</h1>
                        <p class="text-[9px] font-bold uppercase tracking-[0.23em] text-[#299B68]">Hospital & Healthcare</p>
                    </div>
                </a>

                <!-- Desktop links -->
                <div class="hidden items-center gap-8 lg:flex">
                    @foreach($navLinks as $index => $link)
                        <a href="{{ $link['href'] }}" class="text-[13px] font-semibold transition hover:text-[#299B68] {{ $index === 0 ? 'text-[#299B68]' : 'text-[#65736B]' }}">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </div>

                <div class="hidden lg:block">
                    <a href="#appointment" class="flex items-center gap-2 rounded-full bg-[#145C40] px-6 py-3.5 text-sm font-semibold text-white transition hover:-translate-y-0.5 hover:bg-[#299B68]">
                        Book Appointment
                        <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </a>
                </div>

            </nav>
        </header>

        <nav aria-label="Mobile navigation" class="fixed bottom-3 left-3 right-3 z-[60] rounded-full border border-white/10 bg-[#102F23] p-1.5 shadow-[0_12px_35px_rgba(16,47,35,0.3)] lg:hidden">
            <div class="flex items-center justify-between gap-1">
                @foreach($mobileNavLinks as $link)
                    <a href="{{ $link['href'] }}"
                       @click="activeMobileNav = '{{ $link['section'] }}'"
                       :class="activeMobileNav === '{{ $link['section'] }}' ? 'bg-[#A9E6C0] text-[#102F23] shadow-sm' : 'text-white/80 hover:bg-[#D8F3E2] hover:text-[#145C40]'"
                       class="group flex min-w-0 flex-1 flex-col items-center justify-center gap-1 rounded-full px-1 py-2 transition duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#A9E6C0]"
                       aria-label="{{ $link['label'] }}">
                        <i data-lucide="{{ $link['icon'] }}" class="h-5 w-5 shrink-0 transition-transform duration-200 group-hover:-translate-y-0.5"></i>
                        <span class="whitespace-nowrap text-[8px] font-semibold leading-none sm:text-[9px]">{{ $link['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </nav>

       @include('components.header')

        <!-- QUICK INFORMATION -->
        <section class="relative z-10 mx-auto -mt-6 max-w-7xl px-5 lg:px-8">
            <div class="grid overflow-hidden rounded-2xl border border-[#E7EEE9] bg-white shadow-[0_15px_50px_rgba(16,47,35,0.06)] sm:grid-cols-3">
                @php
                    $quickInfo = [
                        ['icon' => 'map-pin', 'title' => 'Our Location', 'desc' => 'Ilupeju, Lagos, Nigeria'],
                        ['icon' => 'clock-3', 'title' => 'Always Available', 'desc' => '24-hour hospital service'],
                        ['icon' => 'heart-handshake', 'title' => 'Patient First', 'desc' => 'Compassionate healthcare']
                    ];
                @endphp
                @foreach($quickInfo as $index => $item)
                    <div class="flex items-center gap-4 p-6 sm:p-7 {{ $index !== 2 ? 'border-b border-gray-100 sm:border-b-0 sm:border-r' : '' }}">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#EAF5EF] text-[#299B68]">
                            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-[#172B23]">{{ $item['title'] }}</p>
                            <p class="mt-1 text-xs text-gray-500">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section aria-labelledby="hmo-partners-heading" class="mx-auto max-w-7xl px-5 py-14 lg:px-8 sm:py-16">
            <div class="mx-auto max-w-2xl text-center" data-reveal>
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">HEALTH INSURANCE</p>
                <h2 id="hmo-partners-heading" class="mt-3 text-3xl font-semibold tracking-tight text-[#172B23] sm:text-4xl">Our HMO Partners</h2>
                <p class="mt-3 text-sm leading-7 text-[#718078] sm:text-base">We welcome members from a range of health insurance providers.</p>
            </div>

            <div class="mt-9 grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 lg:grid-cols-4 xl:grid-cols-6">
                @foreach($hmoPartners as $index => $partner)
                    <div data-reveal style="--reveal-delay: {{ ($index % 6) * 60 }}ms" class="flex h-24 items-center justify-center rounded-2xl border border-[#E7EEE9] bg-white px-4 py-5 transition duration-200 hover:-translate-y-1 hover:border-[#299B68]/40 hover:shadow-[0_12px_30px_rgba(20,92,64,0.08)] sm:h-28">
                        <img src="{{ asset('images/hmo/' . $partner['image']) }}" alt="{{ $partner['name'] }} logo" loading="lazy" class="max-h-14 w-full object-contain">
                    </div>
                @endforeach
            </div>
        </section>

        <section aria-label="Call Andromeda Hospital" class="mx-auto max-w-7xl px-5 pt-8 lg:px-8" data-reveal>
            <div class="flex flex-col items-start gap-5 rounded-2xl bg-[#145C40] p-6 text-white shadow-[0_16px_40px_rgba(20,92,64,0.16)] sm:flex-row sm:items-center sm:justify-between sm:p-8">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-white/10 text-[#A9E6C0]">
                        <i data-lucide="phone-call" class="h-5 w-5"></i>
                    </div>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#A9E6C0]">Need to speak with the hospital?</p>
                        <p class="mt-1 text-sm leading-6 text-white/80">Call the team directly for urgent assistance or to confirm service availability.</p>
                    </div>
                </div>
                <a href="tel:+2347019557057" class="inline-flex w-full shrink-0 items-center justify-center gap-2 rounded-full bg-white px-5 py-3 text-sm font-bold text-[#145C40] transition hover:bg-[#D8F3E2] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:w-auto">
                    <i data-lucide="phone" class="h-4 w-4"></i>
                    Call +234 701 955 7057
                </a>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="scroll-mt-24 mx-auto grid max-w-7xl items-center gap-16 px-5 py-28 lg:grid-cols-2 lg:px-8 lg:py-32">
            <div class="relative" data-reveal="left">
                <div class="relative h-[400px] overflow-hidden rounded-[28px] sm:h-[480px]">
                    <img src="https://images.pexels.com/photos/5452224/pexels-photo-5452224.jpeg?auto=compress&cs=tinysrgb&w=1100" alt="Black healthcare professionals collaborating" class="h-full w-full object-cover">
                </div>

                <div class="absolute -bottom-7 -right-3 max-w-[240px] rounded-2xl bg-[#145C40] p-6 text-white shadow-2xl sm:-right-7 sm:max-w-[270px]">
                    <i data-lucide="heart-pulse" class="w-7 h-7 text-[#A9E6C0]"></i>
                    <p class="mt-4 text-lg font-bold">Care with purpose.</p>
                    <p class="mt-1 text-xs leading-6 text-white/70">Every patient. Every moment.</p>
                </div>

                <div class="absolute -left-3 top-8 hidden rounded-xl bg-white px-5 py-4 shadow-xl sm:block">
                    <div class="flex items-center gap-2 text-xs font-bold text-[#145C40]">
                        <i data-lucide="check-circle-2" class="w-4 h-4 text-[#299B68]"></i>
                        Dedicated to your health
                    </div>
                </div>
            </div>

            <div class="pt-5 lg:pt-0" data-reveal="right">
                <div class="mb-5 flex items-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">WELCOME TO ANDROMEDA</span>
                </div>

                <h2 class="text-4xl font-semibold leading-[1.15] tracking-tight text-[#172B23] sm:text-5xl">
                    More than healthcare. <span class="font-serif italic text-[#299B68]">A commitment to you.</span>
                </h2>

                <p class="mt-7 text-sm leading-8 text-[#718078] sm:text-base">
                    At Andromeda Hospital, we believe quality healthcare begins with understanding people. Every patient has a story, and every story deserves attention, dignity and compassionate care.
                </p>

                <p class="mt-4 text-sm leading-8 text-[#718078] sm:text-base">
                    Our focus is on providing attentive medical care and supporting individuals and families through their healthcare journeys.
                </p>

                <div class="mt-8 space-y-4">
                    @foreach(['Patient-centred approach to healthcare', 'Dedicated medical professionals', 'Accessible medical services', 'Care and support around the clock'] as $reason)
                        <div class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 shrink-0 text-[#299B68]"></i>
                            <span class="text-sm font-medium text-[#34483C]">{{ $reason }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="mt-10">
                    <a href="#why-us" class="inline-flex items-center justify-center gap-3 rounded-full px-7 py-4 text-sm font-semibold transition duration-300 bg-[#145C40] text-white shadow-lg shadow-[#145C40]/10 hover:-translate-y-1 hover:bg-[#299B68]">
                        Discover Our Story
                        <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section id="services" class="scroll-mt-24 bg-white py-24 sm:py-28">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">
                <div class="flex flex-col justify-between gap-7 md:flex-row md:items-end" data-reveal>
                    <div class="max-w-2xl">
                        <div class="mb-5 flex items-center gap-3">
                            <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">OUR MEDICAL SERVICES</span>
                        </div>
                        <h2 class="text-4xl font-semibold leading-[1.15] tracking-tight text-[#172B23] sm:text-5xl">Healthcare for every stage of life.</h2>
                        <p class="mt-5 text-sm leading-8 text-[#718078] sm:text-base">Explore our range of healthcare services, designed to support your health, wellbeing and recovery.</p>
                    </div>

                    <a href="#appointment" class="mb-1 inline-flex shrink-0 items-center gap-2 text-sm font-bold text-[#299B68] transition hover:gap-4">
                        Request an appointment
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($services as $index => $service)
                        <button type="button" @click="selectService('{{ $service['title'] }}')" data-reveal style="--reveal-delay: {{ $index * 80 }}ms" class="group relative flex h-full flex-col rounded-2xl border border-[#E8EEE9] bg-[#F9FBF9] p-7 text-left transition duration-300 hover:-translate-y-2 hover:border-[#299B68]/40 hover:bg-white hover:shadow-[0_20px_45px_rgba(20,92,64,0.09)] sm:p-8">
                            <div class="-mx-7 -mt-7 mb-6 h-44 overflow-hidden rounded-t-2xl sm:-mx-8 sm:-mt-8">
                                <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            </div>

                            <div class="flex w-full items-center justify-between">
                                <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-[#EAF5EF] text-[#299B68] transition duration-300 group-hover:bg-[#145C40] group-hover:text-white">
                                    <i data-lucide="{{ $service['icon'] }}" class="w-7 h-7"></i>
                                </div>
                                <span class="text-xs font-bold text-[#B7C5BB]">0{{ $index + 1 }}</span>
                            </div>

                            <span class="mt-7 text-[10px] font-bold uppercase tracking-[0.17em] text-[#299B68]">{{ $service['category'] }}</span>
                            <h3 class="mt-2 text-xl font-bold text-[#172B23]">{{ $service['title'] }}</h3>
                            <p class="mt-3 flex-1 text-sm leading-7 text-[#77847B]">{{ $service['description'] }}</p>

                            <div class="mt-7 flex items-center justify-between border-t border-[#E8EEE9] pt-5 text-sm font-bold text-[#145C40]">
                                <span>Book this service</span>
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-[#EAF5EF] transition group-hover:bg-[#145C40] group-hover:text-white">
                                    <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                                </span>
                            </div>
                        </button>
                    @endforeach
                </div>

                <p class="mt-8 text-center text-xs text-gray-400">Select a service to start an appointment request.</p>
            </div>
        </section>

        <!-- FEATURE / MATERNITY -->
        <section class="overflow-hidden bg-[#EAF5EF]">
            <div class="mx-auto grid max-w-7xl items-center gap-14 px-5 py-24 lg:grid-cols-2 lg:px-8 lg:py-28">
                <div data-reveal="left">
                    <div class="mb-5 flex items-center gap-3">
                        <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">EVERY NEW BEGINNING</span>
                    </div>

                    <h2 class="max-w-xl text-4xl font-semibold leading-[1.15] tracking-tight text-[#172B23] sm:text-5xl">
                        Every new beginning deserves <span class="font-serif italic text-[#299B68]">exceptional care.</span>
                    </h2>

                    <p class="mt-7 max-w-lg text-sm leading-8 text-[#718078] sm:text-base">
                        The journey to motherhood deserves attention, understanding and support. We believe every mother should feel heard, supported and cared for throughout her journey.
                    </p>

                    <div class="mt-8 space-y-4">
                        @foreach(['Support throughout the maternal journey', 'Attentive and compassionate care', 'Healthcare guidance for mothers and families'] as $item)
                            <div class="flex items-center gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 shrink-0 text-[#299B68]"></i>
                                <span class="text-sm font-medium text-[#34483C]">{{ $item }}</span>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-9">
                        <a href="#appointment" class="inline-flex items-center justify-center gap-3 rounded-full px-7 py-4 text-sm font-semibold transition duration-300 bg-[#145C40] text-white shadow-lg shadow-[#145C40]/10 hover:-translate-y-1 hover:bg-[#299B68]">
                            Make an Enquiry
                            <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <div class="relative" data-reveal="right">
                    <div class="h-[360px] overflow-hidden rounded-[28px] sm:h-[470px]">
                        <img src="https://images.pexels.com/photos/6991896/pexels-photo-6991896.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Expectant mother holding her belly" class="h-full w-full object-cover">
                    </div>

                    <div class="absolute -bottom-5 -left-3 flex items-center gap-3 rounded-2xl bg-white p-5 shadow-xl sm:-left-7">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#EAF5EF] text-[#299B68]">
                            <i data-lucide="baby" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-[#145C40]">Family-focused care</p>
                            <p class="mt-1 text-xs text-gray-500">Supporting every journey</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- WHY ANDROMEDA -->
        <section id="why-us" class="scroll-mt-24 bg-[#102F23] py-24 text-white sm:py-28">
            <div class="mx-auto grid max-w-7xl gap-14 px-5 lg:grid-cols-2 lg:items-center lg:px-8">
                <div data-reveal="left">
                    <div class="mb-5 flex items-center gap-3">
                        <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#8DDBAC]">WHY ANDROMEDA</span>
                    </div>

                    <h2 class="max-w-xl text-4xl font-semibold leading-[1.15] tracking-tight sm:text-5xl">
                        Healthcare should feel <span class="font-serif italic text-[#8DDBAC]">personal.</span>
                    </h2>

                    <p class="mt-7 max-w-lg text-sm leading-8 text-white/55 sm:text-base">
                        Choosing a hospital is an important decision. We believe that the experience should be built on trust, respect and genuine concern for every patient.
                    </p>

                    <div class="mt-10 grid grid-cols-2 gap-4">
                        <div class="rounded-2xl border border-white/10 bg-white/[0.05] p-5">
                            <i data-lucide="shield-check" class="w-7 h-7 text-[#8DDBAC]"></i>
                            <h3 class="mt-5 text-sm font-bold">Patient dignity</h3>
                            <p class="mt-2 text-xs leading-6 text-white/45">Respect and attention in every interaction.</p>
                        </div>

                        <div class="rounded-2xl border border-white/10 bg-white/[0.05] p-5">
                            <i data-lucide="heart-handshake" class="w-7 h-7 text-[#8DDBAC]"></i>
                            <h3 class="mt-5 text-sm font-bold">Compassion</h3>
                            <p class="mt-2 text-xs leading-6 text-white/45">Care that recognises every individual.</p>
                        </div>
                    </div>
                </div>

                <!-- Interactive commitment slider -->
                <div class="rounded-[28px] border border-white/10 bg-white/[0.05] p-7 sm:p-10" data-reveal="right">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#8DDBAC]">OUR COMMITMENT</span>
                        <span class="text-sm font-semibold text-white/40" x-text="`0${activeCommitment + 1} / 03`"></span>
                    </div>

                    @foreach($commitments as $index => $item)
                        <div x-show="activeCommitment === {{ $index }}" x-cloak>
                            <div class="mt-12 flex h-20 w-20 items-center justify-center rounded-3xl bg-[#8DDBAC]/10 text-[#8DDBAC]">
                                <i data-lucide="{{ $item['icon'] }}" class="w-9 h-9"></i>
                            </div>

                            <h3 class="mt-8 text-3xl font-semibold sm:text-4xl">{{ $item['title'] }}</h3>
                            <p class="mt-5 min-h-[90px] text-sm leading-8 text-white/55">{{ $item['description'] }}</p>
                        </div>
                    @endforeach

                    <div class="mt-9 flex items-center justify-between border-t border-white/10 pt-7">
                        <div class="flex gap-2">
                            @foreach($commitments as $index => $item)
                                <button @click="activeCommitment = {{ $index }}" aria-label="Show commitment {{ $index + 1 }}" :class="activeCommitment === {{ $index }} ? 'w-10 bg-[#8DDBAC]' : 'w-2 bg-white/25 hover:bg-white/50'" class="h-2 rounded-full transition-all duration-300"></button>
                            @endforeach
                        </div>

                        <div class="flex gap-2">
                            <button @click="activeCommitment = (activeCommitment - 1 + {{ count($commitments) }}) % {{ count($commitments) }}" aria-label="Previous commitment" class="flex h-11 w-11 items-center justify-center rounded-full border border-white/15 transition hover:bg-white/10">
                                <i data-lucide="chevron-left" class="w-5 h-5"></i>
                            </button>

                            <button @click="activeCommitment = (activeCommitment + 1) % {{ count($commitments) }}" aria-label="Next commitment" class="flex h-11 w-11 items-center justify-center rounded-full bg-[#8DDBAC] text-[#102F23] transition hover:bg-white">
                                <i data-lucide="chevron-right" class="w-5 h-5"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- APPOINTMENT -->
        <section id="appointment" class="scroll-mt-24 bg-[#F8FAF8] px-5 py-24 sm:py-28">
            <div class="mx-auto grid max-w-7xl items-start gap-14 lg:grid-cols-[0.85fr_1.15fr] lg:gap-20">
                <div class="lg:sticky lg:top-32" data-reveal="left">
                    <div class="mb-5 flex items-center gap-3">
                        <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">YOUR HEALTH, OUR PRIORITY</span>
                    </div>

                    <h2 class="text-4xl font-semibold leading-[1.15] tracking-tight sm:text-5xl">
                        Request an Appointment
                    </h2>

                    <p class="mt-5 text-sm leading-8 text-[#718078] sm:text-base">
                        Fill out the details below to submit an appointment request. Our hospital administration team will process your request and reach out promptly.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 shrink-0 text-[#299B68]"></i>
                            <span class="text-sm font-medium text-[#34483C]">Direct communication via WhatsApp</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check-circle-2" class="w-5 h-5 shrink-0 text-[#299B68]"></i>
                            <span class="text-sm font-medium text-[#34483C]">Fast scheduling feedback</span>
                        </div>
                    </div>
                </div>

                <!-- Appointment Form -->
                <div class="rounded-3xl border border-[#E7EEE9] bg-white p-7 shadow-xl shadow-[#102F23]/5 sm:p-10" data-reveal="right">
                    <form @submit="handleBooking" class="space-y-6">
                        @csrf
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Full Name *</label>
                                <input type="text" name="name" required placeholder="e.g. John Doe" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-[#F9FBF9] px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68] focus:bg-white">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Phone Number *</label>
                                <input type="tel" name="phone" required placeholder="e.g. 08012345678" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-[#F9FBF9] px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68] focus:bg-white">
                            </div>
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Email Address</label>
                                <input type="email" name="email" placeholder="e.g. john@example.com" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-[#F9FBF9] px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68] focus:bg-white">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Medical Service *</label>
                                <select name="service" required x-model="selectedService" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-[#F9FBF9] px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68] focus:bg-white">
                                    <option value="" disabled>Select a service</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service['title'] }}">{{ $service['title'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Preferred Date *</label>
                                <input type="date" name="date" required class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-[#F9FBF9] px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68] focus:bg-white">
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Preferred Time *</label>
                                <input type="time" name="time" required class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-[#F9FBF9] px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68] focus:bg-white">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Additional Note</label>
                            <textarea name="message" rows="4" placeholder="Mention any specific medical history or requests..." class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-[#F9FBF9] px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68] focus:bg-white"></textarea>
                        </div>

                        <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#145C40] py-4 text-sm font-semibold text-white transition hover:bg-[#299B68]">
                            <span>Send Request via WhatsApp</span>
                            <i data-lucide="message-circle" class="w-4 h-4"></i>
                        </button>

                        <div x-show="bookingMessage" x-text="bookingMessage" class="text-center text-xs text-[#299B68] font-medium mt-2"></div>
                    </form>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION -->
        <section class="bg-white py-24 sm:py-28">
            <div class="mx-auto max-w-4xl px-5 lg:px-8">
                <div class="mx-auto max-w-2xl text-center" data-reveal>
                    <div class="mb-5 flex items-center justify-center gap-3">
                        <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">FREQUENTLY ASKED QUESTIONS</span>
                    </div>
                    <h2 class="text-4xl font-semibold leading-[1.15] tracking-tight text-[#172B23] sm:text-5xl">Got questions? We've got answers.</h2>
                </div>

                <div class="mt-12 space-y-4">
                    @foreach($faqs as $index => $faq)
                        <div data-reveal style="--reveal-delay: {{ $index * 70 }}ms" class="rounded-2xl border border-[#E8EEE9] bg-[#F9FBF9] overflow-hidden transition">
                            <button type="button" @click="activeFaq = (activeFaq === {{ $index }} ? null : {{ $index }})" class="flex w-full items-center justify-between p-6 text-left text-base font-bold text-[#172B23]">
                                <span>{{ $faq['question'] }}</span>
                                <i data-lucide="chevron-down" class="w-5 h-5 text-[#299B68] transition-transform duration-200" :class="activeFaq === {{ $index }} ? 'rotate-180' : ''"></i>
                            </button>
                            <div x-show="activeFaq === {{ $index }}" x-cloak class="px-6 pb-6 text-sm leading-7 text-[#718078]">
                                {{ $faq['answer'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer id="contact" class="bg-[#102F23] text-white pt-20 pb-28 lg:pb-12">
            <div class="mx-auto max-w-7xl px-5 lg:px-8">
                <div class="grid gap-12 lg:grid-cols-4 sm:grid-cols-2">
                    <div>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#299B68] text-white">
                                <i data-lucide="heart-pulse" class="w-6 h-6"></i>
                            </div>
                            <span class="text-lg font-bold">ANDROMEDA</span>
                        </div>
                        <p class="mt-4 text-xs leading-6 text-white/50">
                            Dedicated healthcare providing medical care, attention and treatment tailored to every patient's needs.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-sm font-bold uppercase tracking-wider text-[#8DDBAC]">Quick Links</h4>
                        <ul class="mt-4 space-y-2 text-xs text-white/70">
                            @foreach($navLinks as $link)
                                <li><a href="{{ $link['href'] }}" class="hover:text-white transition">{{ $link['label'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm font-bold uppercase tracking-wider text-[#8DDBAC]">Contact Info</h4>
                        <ul class="mt-4 space-y-3 text-xs text-white/70">
                            <li class="flex items-start gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-[#8DDBAC] shrink-0 mt-0.5"></i>
                                <span>4B, Babatunde Oki Street, off Town Planning Way, Ilupeju, Lagos, Nigeria</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="phone" class="w-4 h-4 text-[#8DDBAC] shrink-0"></i>
                                <span>+234 701 955 7057</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="text-sm font-bold uppercase tracking-wider text-[#8DDBAC]">Hours</h4>
                        <p class="mt-4 text-xs text-white/70">Open 24 Hours / 7 Days a week for emergency & ongoing patient services.</p>
                    </div>
                </div>

                <div class="mt-16 border-t border-white/10 pt-8 text-center text-xs text-white/40">
                    <p>&copy; {{ date('Y') }} Andromeda Hospital. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();

            const revealTargets = document.querySelectorAll('[data-reveal]');

            if (
                !revealTargets.length
                || window.matchMedia('(prefers-reduced-motion: reduce)').matches
                || !('IntersectionObserver' in window)
            ) {
                return;
            }

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -40px 0px',
            });

            document.documentElement.classList.add('has-scroll-reveal');
            revealTargets.forEach((target) => revealObserver.observe(target));
        });
    </script>
</body>
</html>