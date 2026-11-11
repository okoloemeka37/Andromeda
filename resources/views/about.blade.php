@extends('layout.app')

@section('title', 'About Us & Meet Our Team')

@section('content')

@php

$whatsappNumber = '2347019557057';
    $leadership = [
        [
            'name' => 'Dr. Chinedu Okafor',
            'role' => 'Chief Medical Director & Endocrinologist',
            'image' => 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=800&q=85',
            'bio' => 'Over 18 years of clinical experience in advanced internal medicine and patient-centred hospital governance.',
        ],
        [
            'name' => 'Dr.Mr Lekan',
            'role' => 'ADMIN Consultant Obstetrician & Gynaecologist',
            'image' => 'images/about/DrL.png',
            'bio' => 'Passionate about maternal care safety, high-risk pregnancy management, and empowering families.',
        ],
        [
            'name' => 'Dr. Amina Bello',
            'role' => 'Lead Paediatric Specialist',
            'image' => 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=800&q=85',
            'bio' => 'Dedicated to child wellness, immunization advocacy, and compassionate developmental paediatrics.',
        ],
    ];

    $nurses = [
        [
            'name' => 'Nurse Ruth. A',
            'role' => 'Head of Nursing Services',
            'image' => 'images/about/nurseR.jpg',
            'bio' => 'Leading our 24/7 nursing floor with unmatched dedication, clinical precision, and empathy.',
        ],
        [
            'name' => 'Nurse Elizabeth James',
            'role' => 'Emergency & Triage Senior Nurse',
            'image' => 'images/about/nurseB.jpg',
            'bio' => 'Expert in urgent medical response and critical care coordination around the clock.',
        ],
        [
            'name' => 'Nurse David Olawale',
            'role' => 'Paediatric Ward Care Nurse',
            'image' => 'images/about/nurseE.jpg',
            'bio' => 'Providing warm, reassuring support and specialized care for our young patients and families.',
        ],
    ];

    $values = [
        [
            'icon' => 'heart-handshake',
            'title' => 'Patient-First Empathy',
            'desc' => 'Every decision and treatment plan begins with listening to our patients and respecting their dignity.',
        ],
        [
            'icon' => 'shield-check',
            'title' => 'Clinical Excellence',
            'desc' => 'Rigorous medical standards, advanced diagnostics, and continuous professional training.',
        ],
        [
            'icon' => 'activity',
            'title' => 'Round-the-Clock Access',
            'desc' => 'Providing uncompromised 24-hour healthcare support for emergencies and daily health needs.',
        ],
    ];
@endphp

<main class="bg-[#F8FAF8] text-[#172B23]">

    <!-- PAGE HERO -->
    <section class="relative bg-[#102F23] py-20 text-white sm:py-24">
        <div class="pointer-events-none absolute -right-36 -top-36 h-[500px] w-[500px] rounded-full border border-white/5"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#299B68]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 text-center lg:px-8">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-[#75C99B]/30 bg-white/5 px-4 py-2 text-[10px] font-bold tracking-[0.16em] text-[#A9E6C0] sm:text-xs">
                <i data-lucide="building-2" class="w-4 h-4"></i>
                OUR STORY & PEOPLE
            </div>

            <h1 class="text-4xl font-semibold tracking-tight sm:text-6xl lg:text-[56px]">
                About <span class="font-serif italic text-[#8DDBAC]">Andromeda Hospital</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-8 text-white/70 sm:text-base">
                Discover the vision, values, and exceptional medical professionals behind our commitment to delivering compassionate healthcare in Ilupeju, Lagos.
            </p>
        </div>
    </section>

    <!-- MISSION & VISION STORY SECTION -->
    <section class="mx-auto max-w-7xl px-5 py-20 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-2 lg:items-center">
            <div>
                <div class="mb-4 flex items-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">WHO WE ARE</span>
                </div>

                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Healthcare built on trust, respect, and genuine concern.</h2>

                <p class="mt-6 text-sm leading-8 text-[#718078] sm:text-base">
                    Founded with a clear mission to redefine local healthcare standards, Andromeda Hospital combines state-of-the-art diagnostic facilities with a deeply personal touch. We believe that medical care is most effective when patients feel heard, understood, and treated like family.
                </p>

                <p class="mt-4 text-sm leading-8 text-[#718078] sm:text-base">
                    From our dedicated nursing teams to our specialist physicians, every member of our staff is bound by a single commitment: protecting and enhancing your quality of life around the clock.
                </p>

                <div class="mt-10 grid sm:grid-cols-3 gap-6">
                    @foreach($values as $val)
                        <div class="rounded-2xl bg-white p-5 border border-[#E8EEE9] shadow-sm">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-[#EAF5EF] text-[#299B68] mb-4">
                                <i data-lucide="{{ $val['icon'] }}" class="w-5 h-5"></i>
                            </div>
                            <h3 class="text-sm font-bold text-[#172B23]">{{ $val['title'] }}</h3>
                            <p class="mt-1 text-xs text-[#65736B] leading-5">{{ $val['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Facility Image Grid -->
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?w=800&q=85" alt="Hospital interior" class="h-64 w-full rounded-3xl object-cover shadow-lg">
                    <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?w=800&q=85" alt="Medical team" class="h-48 w-full rounded-3xl object-cover shadow-lg">
                </div>
                <div class="space-y-4 pt-8">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&q=85" alt="Doctors collaborating" class="h-48 w-full rounded-3xl object-cover shadow-lg">
                    <img src="https://images.unsplash.com/photo-1530026405186-ed1f139313f8?w=800&q=85" alt="Patient care" class="h-64 w-full rounded-3xl object-cover shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- MEET OUR MEDICAL SPECIALISTS -->
    <section class="bg-white py-20 sm:py-24 border-t border-[#E8EEE9]">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <div class="mb-3 flex items-center justify-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">EXPERT LEADERSHIP</span>
                </div>
                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Meet Our Medical Specialists</h2>
                <p class="mt-4 text-sm text-[#718078] sm:text-base">
                    Our consultants bring decades of specialized clinical experience to ensure precise diagnosis and advanced treatment.
                </p>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                @foreach($leadership as $doc)
                    <div class="group rounded-3xl border border-[#E8EEE9] bg-[#F9FBF9] overflow-hidden transition duration-300 hover:bg-white hover:shadow-xl">
                        <div class="relative h-72 w-full overflow-hidden bg-gray-100">
                            <img src="{{ $doc['image'] }}" alt="{{ $doc['name'] }}" class="h-full w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-8">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#299B68]">{{ $doc['role'] }}</span>
                            <h3 class="mt-2 text-xl font-bold text-[#172B23]">{{ $doc['name'] }}</h3>
                            <p class="mt-3 text-xs leading-6 text-[#65736B]">{{ $doc['bio'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- MEET OUR NURSING TEAM -->
    <section class="py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-5 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <div class="mb-3 flex items-center justify-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">COMPASSIONATE CARE</span>
                </div>
                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Meet Our Dedicated Nurses</h2>
                <p class="mt-4 text-sm text-[#718078] sm:text-base">
                    The heartbeat of Andromeda Hospital — providing around-the-clock comfort, monitoring, and attentive bedside care.
                </p>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                @foreach($nurses as $nurse)
                    <div class="group rounded-3xl border border-[#E8EEE9] bg-white overflow-hidden shadow-sm transition duration-300 hover:shadow-xl">
                        <div class="relative h-72 w-full overflow-hidden bg-gray-100">
                            <img src="{{ $nurse['image'] }}" alt="{{ $nurse['name'] }}" class="h-full w-full object-cover object-top transition duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-8">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-[#299B68]">{{ $nurse['role'] }}</span>
                            <h3 class="mt-2 text-xl font-bold text-[#172B23]">{{ $nurse['name'] }}</h3>
                            <p class="mt-3 text-xs leading-6 text-[#65736B]">{{ $nurse['bio'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</main>

@endsection