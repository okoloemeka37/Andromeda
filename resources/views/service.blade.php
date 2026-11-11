@extends('layout.app')

@section('title', 'Our Medical Services & Booking | Andromeda Hospital')

@section('content')

@php
    $whatsappNumber = '2347019557057';

    $allServices = [
        [
            'id' => 'paediatric',
            'image' => 'images/services/pead.jpg',
            'title' => 'Paediatric Care',
            'category' => 'Family Care',
            'description' => 'Thoughtful medical care for children, supporting their growth, development and overall wellbeing from infancy through adolescence.',
            'features' => ['Routine immunizations & vaccinations', 'Growth and developmental milestone tracking', 'Acute childhood illness management', 'Gentle, child-friendly environment'],
            'leadDoctor' => 'Dr. Amina Bello (Paediatric Specialist)',
        ],
        [
            'id' => 'diabetic',
            'image' => 'images/services/diab.jpg',
            'title' => 'Diabetic Care',
            'category' => 'Specialist Care',
            'description' => 'Ongoing support, monitoring and personalised care plans to help patients manage diabetes effectively and prevent long-term complications.',
            'features' => ['Blood glucose monitoring routines', 'Dietary and lifestyle counseling', 'Medication and insulin management', 'Regular foot and eye complication screenings'],
            'leadDoctor' => 'Dr. Chinedu Okafor (Endocrinologist)',
        ],
        [
            'id' => 'maternal',
            'image' => 'images/services/mat.jpg',
            'title' => 'Maternal Care',
            'category' => 'Family Care',
            'description' => 'Dedicated maternal healthcare throughout pregnancy, delivery and the postnatal journey, ensuring safety and comfort for mother and child.',
            'features' => ['Comprehensive antenatal care & scans', 'Safe delivery and obstetric support', 'Postnatal maternal wellness checks', 'Breastfeeding and newborn care guidance'],
            'leadDoctor' => 'Dr. Mrs. Folake Adebayo (Consultant Obstetrician)',
        ],
        [
            'id' => 'physiotherapy',
            'image' =>  'images//services/phy.jpg',
            'title' => 'Physiotherapy',
            'category' => 'Specialist Care',
            'description' => 'Professional rehabilitation and physical therapy designed to support movement, restore physical function, and accelerate recovery.',
            'features' => ['Post-surgery and injury rehabilitation', 'Chronic back and joint pain management', 'Stroke recovery mobility programs', 'Sports injury conditioning'],
            'leadDoctor' => 'Mr. Tunde Bakare (Lead Physiotherapist)',
        ],
        [
            'id' => 'internal-medicine',
            'image' => 'images/services/int.jpg',
            'title' => 'Internal Medicine',
            'category' => 'Specialist Care',
            'description' => 'Comprehensive medical assessment, accurate diagnosis, and expert management of a wide range of complex adult health conditions.',
            'features' => ['Hypertension and cardiovascular management', 'Respiratory and infectious disease care', 'Comprehensive annual health screenings', 'Multi-organ chronic illness care'],
            'leadDoctor' => 'Dr. Ibrahim Musa (Consultant Physician)',
        ],
        [
            'id' => 'laboratory',
            'image' => 'images/services/lab.jpg',
            'title' => 'Laboratory Services',
            'category' => 'Diagnostics',
            'description' => 'State-of-the-art medical laboratory investigations providing rapid and accurate diagnostic results to support informed healthcare decisions.',
            'features' => ['Comprehensive blood work & pathology', 'Hormonal and biochemical assays', 'Microbiological screenings', 'Fast turnaround diagnostic reporting'],
            'leadDoctor' => 'Mrs. Nkechi Okoro (Chief Lab Scientist)',
        ],
    ];
@endphp

<main class="bg-[#F8FAF8] text-[#172B23]" x-data="{ 
    selectedService: '',
    bookingMessage: '',
    whatsappNumber: '{{ $whatsappNumber }}',
    selectService(title) {
        this.selectedService = title;
        document.getElementById('booking-form-section')?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    },
    handleBooking(e) {
        e.preventDefault();
        const form = e.target;
        const data = new FormData(form);

        const message = [
            'Hello Andromeda Hospital.',
            '',
            'I would like to book an appointment for a specific service.',
            '',
            `Full Name: ${data.get('name')}`,
            `Phone Number: ${data.get('phone')}`,
            `Email: ${data.get('email') || 'Not provided'}`,
            `Selected Service: ${data.get('service')}`,
            `Preferred Date: ${data.get('date')}`,
            `Preferred Time: ${data.get('time')}`,
            `Additional Notes: ${data.get('message') || 'None'}`,
            '',
            'Please contact me to confirm availability.'
        ].join('\n');

        const url = `https://wa.me/${this.whatsappNumber}?text=${encodeURIComponent(message)}`;
        this.bookingMessage = 'Opening WhatsApp to send your booking request...';
        window.open(url, '_blank', 'noopener,noreferrer');
    }
}">

    <!-- PAGE HERO -->
    <section class="relative bg-[#102F23] py-20 text-white sm:py-24">
        <div class="pointer-events-none absolute -right-36 -top-36 h-[500px] w-[500px] rounded-full border border-white/5"></div>
        <div class="pointer-events-none absolute bottom-0 left-0 h-72 w-72 rounded-full bg-[#299B68]/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-5 text-center lg:px-8">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-[#75C99B]/30 bg-white/5 px-4 py-2 text-[10px] font-bold tracking-[0.16em] text-[#A9E6C0] sm:text-xs">
                
                COMPREHENSIVE DEPARTMENTS
            </div>

            <h1 class="text-4xl font-semibold tracking-tight sm:text-6xl lg:text-[56px]">
                Our Medical Services & <span class="font-serif italic text-[#8DDBAC]">Bookings</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-sm leading-8 text-white/70 sm:text-base">
                Explore our full spectrum of specialist care, diagnostics, and family healthcare programs. Select any service to book an appointment instantly via WhatsApp.
            </p>
        </div>
    </section>

    <!-- SERVICES DIRECTORY GRID WITH IMAGES -->
    <section class="mx-auto max-w-7xl px-5 py-16 sm:py-24 lg:px-8">
        <div class="mb-12 flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <div>
                <div class="mb-3 flex items-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">SPECIALIST DEPARTMENTS</span>
                </div>
                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Available Medical Treatments</h2>
            </div>
            <p class="max-w-md text-xs sm:text-sm text-[#718078]">
                Click **"Book This Service"** on any card below to auto-populate the booking form at the bottom of the page.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
            @foreach($allServices as $index => $service)
                <div class="flex flex-col justify-between rounded-3xl border border-[#E8EEE9] bg-white overflow-hidden shadow-sm transition duration-300 hover:border-[#299B68]/40 hover:shadow-xl">
                    
                    <!-- Service Header Image -->
                    <div class="relative h-60 w-full overflow-hidden bg-gray-100">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="h-full w-full object-cover object-center transition duration-500 hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-6 right-6 flex items-center justify-between">
                            <span class="rounded-full bg-white/90 backdrop-blur-md px-3.5 py-1 text-xs font-bold text-[#145C40] shadow-sm">
                                {{ $service['category'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Service Body Content -->
                    <div class="p-8 sm:p-10 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-[#172B23]">{{ $service['title'] }}</h3>
                            <p class="mt-3 text-sm leading-7 text-[#65736B]">{{ $service['description'] }}</p>

                            <!-- Key Features List -->
                            <div class="mt-6 space-y-2.5 border-t border-b border-gray-100 py-5">
                                @foreach($service['features'] as $feature)
                                    <div class="flex items-center gap-3">
                                        <i data-lucide="check-circle-2" class="w-4 h-4 shrink-0 text-[#299B68]"></i>
                                        <span class="text-xs sm:text-sm font-medium text-[#34483C]">{{ $feature }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <p class="mt-4 text-xs font-semibold text-[#145C40]">
                                Lead Clinician: <span class="font-normal text-[#65736B]">{{ $service['leadDoctor'] }}</span>
                            </p>
                        </div>

                        <div class="mt-8 pt-6 border-t border-[#E8EEE9]">
                            <button type="button" @click="selectService('{{ $service['title'] }}')" class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#145C40] py-4 text-sm font-semibold text-white shadow-md transition hover:bg-[#299B68]">
                                <span>Book This Service</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <!-- INTERACTIVE BOOKING FORM SECTION -->
    <section id="booking-form-section" class="bg-white py-20 sm:py-24 border-t border-[#E8EEE9]">
        <div class="mx-auto max-w-4xl px-5 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <div class="mb-3 flex items-center justify-center gap-3">
                    <span class="h-[2px] w-8 rounded-full bg-[#299B68]"></span>
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#299B68]">INSTANT RESERVATION</span>
                </div>
                <h2 class="text-3xl font-semibold text-[#172B23] sm:text-4xl">Schedule Your Appointment</h2>
                <p class="mt-4 text-sm text-[#718078] sm:text-base">
                    Your selected service will automatically appear below. Complete your contact details and preferred slot to send your request directly to our desk via WhatsApp.
                </p>
            </div>

            <div class="mt-12 rounded-3xl border border-[#E8EEE9] bg-[#F9FBF9] p-8 sm:p-12 shadow-xl">
                <form @submit="handleBooking" class="space-y-6">
                    @csrf
                    
                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Full Name *</label>
                            <input type="text" name="name" required placeholder="e.g. Sarah Johnson" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-white px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Phone Number *</label>
                            <input type="tel" name="phone" required placeholder="e.g. 08012345678" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-white px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68]">
                        </div>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Email Address</label>
                            <input type="email" name="email" placeholder="e.g. sarah@example.com" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-white px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Selected Medical Service *</label>
                            <select name="service" required x-model="selectedService" class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-white px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68]">
                                <option value="" disabled>-- Choose a Service --</option>
                                @foreach($allServices as $service)
                                    <option value="{{ $service['title'] }}">{{ $service['title'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="grid gap-6 sm:grid-cols-2">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Preferred Date *</label>
                            <input type="date" name="date" required class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-white px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Preferred Time *</label>
                            <input type="time" name="time" required class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-white px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68]">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-[#34483C]">Additional Note / Symptoms</label>
                        <textarea name="message" rows="4" placeholder="Mention any specific concerns or requests..." class="mt-2 w-full rounded-xl border border-[#E7EEE9] bg-white px-4 py-3.5 text-sm text-[#172B23] outline-none transition focus:border-[#299B68]"></textarea>
                    </div>

                    <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#145C40] py-4 text-sm font-semibold text-white shadow-lg transition hover:bg-[#299B68]">
                        <span>Confirm & Send Booking via WhatsApp</span>
                        <i data-lucide="message-circle" class="w-5 h-5"></i>
                    </button>

                    <div x-show="bookingMessage" x-text="bookingMessage" class="text-center text-xs text-[#299B68] font-semibold mt-3"></div>
                </form>
            </div>
        </div>
    </section>

</main>

@endsection