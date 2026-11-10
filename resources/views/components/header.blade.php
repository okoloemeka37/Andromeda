@php
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
            'image' => 'images/andromeda-hospital-3.jpg',
            'eyebrow' => 'YOUR HEALTH. OUR PRIORITY.',
            'title' => 'Consult with specialists alongside your partner.',
            'description' => 'Take the journey to better health together with attentive guidance, expert specialists, and care built around your family.',
            'primary' => 'Schedule a Visit',
            'secondary' => 'Discover Our Services',
        ],
    ];
@endphp

<section id="home" class="relative scroll-mt-24 overflow-hidden bg-white text-[#172B23]"
    x-data="{ 
        activeSlide: 0, 
        slidesCount: {{ count($heroSlides) }},
        timer: null,
        init() {
            this.timer = setInterval(() => { this.next(); }, 6000);
        },
        next() { this.activeSlide = (this.activeSlide + 1) % this.slidesCount; },
        prev() { this.activeSlide = (this.activeSlide - 1 + this.slidesCount) % this.slidesCount; }
    }">
    <div class="relative min-h-[620px] lg:min-h-[680px] flex items-center">
        
        @foreach($heroSlides as $index => $slide)
            <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out flex items-center"
                 x-show="activeSlide === {{ $index }}"
                 x-transition:enter="transition-opacity ease-out duration-700"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-in duration-500"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 style="display: none;">
                
                <!-- Full Crystal-Clear Background Image with a clean soft white-to-transparent gradient on the left for text readability -->
               <!-- Background Image (100% Sharp) -->
<div class="absolute inset-0">
    <img src="{{ $slide['image'] }}" alt="Andromeda Hospital Slide" class="h-full w-full object-cover object-center">
    <!-- Light contrast overlay to make white text pop -->
    <div class="absolute inset-0 bg-black/35"></div>
</div>

<!-- White Text Content -->
<div class="relative mx-auto grid max-w-7xl items-center gap-14 px-5 py-16 sm:py-20 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16 lg:px-8 w-full z-10 text-white">
    <div>
        <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/30 bg-white/10 px-4 py-2 text-[10px] font-bold tracking-[0.16em] text-[#A9E6C0] backdrop-blur-sm sm:text-xs">
            <i data-lucide="plus" class="w-4 h-4"></i>
            {{ $slide['eyebrow'] }}
        </div>

        <h1 class="max-w-2xl text-4xl font-semibold leading-[1.12] tracking-[-0.045em] text-white sm:text-6xl lg:text-[60px]">
            {{ $slide['title'] }}
        </h1>

        <p class="mt-6 max-w-lg text-sm leading-8 text-white/85 sm:text-base font-medium">
            {{ $slide['description'] }}
        </p>

        <div class="mt-8 flex flex-wrap gap-3">
            <a href="#appointment" class="inline-flex items-center justify-center gap-3 rounded-full px-7 py-4 text-sm font-semibold transition duration-300 bg-[#145C40] text-white shadow-lg hover:-translate-y-1 hover:bg-[#299B68]">
                {{ $slide['primary'] }}
                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
            </a>
            <a href="#services" class="inline-flex items-center justify-center gap-3 rounded-full px-7 py-4 text-sm font-semibold transition duration-300 border border-white/30 bg-white/10 text-white backdrop-blur-md hover:bg-white hover:text-[#172B23]">
                {{ $slide['secondary'] }}
                <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
            </a>
        </div>
    </div>
</div>
            </div>
        @endforeach

        <!-- Manual Navigation Controls & Indicators -->
        <div class="absolute bottom-8 right-5 lg:right-12 z-20 flex items-center gap-4 bg-white/90 backdrop-blur-md px-5 py-3 rounded-full border border-gray-200 shadow-lg">
            <button @click="prev()" aria-label="Previous slide" class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-100 text-[#172B23] transition hover:bg-[#145C40] hover:text-white">
                <i data-lucide="chevron-left" class="w-5 h-5"></i>
            </button>

            <div class="flex items-center gap-2">
                @foreach($heroSlides as $index => $slide)
                    <button @click="activeSlide = {{ $index }}" aria-label="Slide {{ $index + 1 }}" :class="activeSlide === {{ $index }} ? 'w-8 bg-[#145C40]' : 'w-2 bg-gray-300'" class="h-2 rounded-full transition-all duration-300"></button>
                @endforeach
            </div>

            <button @click="next()" aria-label="Next slide" class="flex h-9 w-9 items-center justify-center rounded-full bg-gray-100 text-[#172B23] transition hover:bg-[#145C40] hover:text-white">
                <i data-lucide="chevron-right" class="w-5 h-5"></i>
            </button>
        </div>

    </div>
</section>