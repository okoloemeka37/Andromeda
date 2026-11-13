<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Andromeda Hospital & Healthcare')</title>

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

     <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
</head>

@php

        $navLinks = [
            ['label' => 'Home', 'href' => 'home', 'section' => 'home', 'icon' => 'house'],
            ['label' => 'About Us', 'href' => 'about', 'section' => 'about', 'icon' => 'info'],
            ['label' => 'Services', 'href' => 'services', 'section' => 'services', 'icon' => 'stethoscope'],
            ['label' => 'Why Andromeda', 'href' => 'whyus', 'section' => 'why-us', 'icon' => 'heart-pulse'],
            ['label' => 'Contact', 'href' => 'contact', 'section' => 'contact', 'icon' => 'phone'],
        ];

        $mobileNavLinks = array_merge($navLinks, [
            ['label' => 'Book Appointment', 'href' => '#appointment', 'section' => 'appointment', 'icon' => 'calendar-check'],
        ]);
@endphp
<body class="font-sans antialiased text-[#172B23] bg-[#F8FAF8] overflow-x-hidden">

         <!-- ANNOUNCEMENT BAR -->
    <div class="bg-[#145C40] px-5 py-3 text-white">
    <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-8 gap-y-2 text-xs sm:justify-between">
        <p class="flex items-center gap-2 text-white/85">
           
            Here for your health, around the clock.
        </p>

        <!-- Right Side: Phone Contact & Social Icons -->
        <div class="flex flex-wrap items-center gap-6">
            <a href="https://wa.me/{{ $whatsappNumber }}" target="_blank" rel="noreferrer" class="flex items-center gap-2 font-semibold transition hover:text-[#B6F0D0]">
                <i data-lucide="phone" class="w-3.5 h-3.5 inline"></i>
                +234 701 955 7057
                <i data-lucide="arrow-up-right" class="w-3 h-3 inline"></i>
            </a>

            <!-- Subtle Divider -->
            <div class="hidden sm:block h-3 w-px bg-white/20"></div>

            <!-- Social Icons (Inline SVGs for reliable cross-browser rendering) -->
            <div class="flex items-center gap-3 text-white/85">
                <!-- Facebook -->
                <a href="https://web.facebook.com/andromedahospital/?_rdc=1&_rdr#" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="transition hover:text-[#B6F0D0]">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <!-- Twitter / X -->
             {{--    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="transition hover:text-[#B6F0D0]">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a> --}}
                <!-- Instagram -->
                <a href="https://www.instagram.com/andromedahospital/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="transition hover:text-[#B6F0D0]">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/andromeda-hospital/home/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="transition hover:text-[#B6F0D0]">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
            </div>
        </div>
    </div>
</div>
        <!-- NAVIGATION -->
        <header class="sticky top-0 z-50 border-b border-[#172B23]/5 bg-white/95 backdrop-blur-xl">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 lg:px-8">
                <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#145C40] text-white shadow-lg shadow-[#145C40]/15">
                        <img src="/images/logo.jpg" alt="">
                    </div>
                    <div>
                        <h1 class="text-[19px] font-extrabold tracking-[0.04em] text-[#145C40]">ANDROMEDA</h1>
                        <p class="text-[9px] font-bold uppercase tracking-[0.23em] text-[#299B68]">Hospital & Healthcare</p>
                    </div>
                </a>

                <!-- Desktop links -->
                <div class="hidden items-center gap-8 lg:flex">
                    @foreach($navLinks as $index => $link)
                        <a href="{{ route($link['href']) }}" class="text-[13px] font-semibold transition hover:text-[#299B68] {{ $index === 0 ? 'text-[#299B68]' : 'text-[#65736B]' }}">
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
                    @php($isActive = $link['href'] !== '#appointment' && request()->routeIs($link['href']))
                    <a href="{{ $link['href'] === '#appointment' ? route('home') . '#appointment' : route($link['href']) }}"
                       @if($isActive) aria-current="page" @endif
                       class="{{ $isActive ? 'bg-[#A9E6C0] text-[#102F23] shadow-sm' : 'text-white/80 hover:bg-[#D8F3E2] hover:text-[#145C40]' }} group flex min-w-0 flex-1 flex-col items-center justify-center gap-1 rounded-full px-1 py-2 transition duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#A9E6C0]"
                       aria-label="{{ $link['label'] }}">
                        <i data-lucide="{{ $link['icon'] }}" class="h-5 w-5 shrink-0 transition-transform duration-200 group-hover:-translate-y-0.5"></i>
                        <span class="whitespace-nowrap text-[8px] font-semibold leading-none sm:text-[9px]">{{ $link['label'] }}</span>
                    </a>
                @endforeach
            </div>
        </nav>



@yield('content')


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