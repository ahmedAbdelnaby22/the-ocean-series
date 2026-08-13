{{-- resources/views/components/navbar.blade.php --}}
{{-- شريط التنقل الرئيسي – أسفل الـ Topbar --}}

<nav
    x-data="{ mobileMenuOpen: false }"
    role="navigation"
    aria-label="القائمة الرئيسية"
    class="fixed top-12 left-0 w-full z-50 bg-[#101820] shadow-lg border-b border-[#f6c951]/10"
>
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 h-16 md:h-20 flex items-center justify-between"
        dir="rtl"
    >

        {{-- ============================================= --}}
        {{-- الشعار --}}
        {{-- ============================================= --}}

        <a
            href="/"
            class="flex items-center focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded-lg p-1"
            aria-label="الرئيسية - THE OCEAN SERIES"
        >
            <img
                src="{{ asset('assets/images/logo/logo.png') }}"
                class="w-24 sm:w-28 md:w-32 hover:scale-105 transition-transform duration-300"
                alt="شعار THE OCEAN SERIES"
                loading="lazy"
            >
        </a>


        {{-- ============================================= --}}
        {{-- القائمة الرئيسية --}}
        {{-- ============================================= --}}

        <div class="hidden lg:flex items-center gap-6 xl:gap-8">

            <ul class="flex gap-6 xl:gap-8 text-white font-bold text-sm xl:text-base">

                <li>
                    <a
                        href="/"
                        class="hover:text-[#f6c951] transition-colors duration-300 relative group focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded px-2 py-1"
                    >
                        الصفحة الرئيسية

                        <span
                            class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>
                </li>

                <li>
                    <a
                        href="#about"
                        class="hover:text-[#f6c951] transition-colors duration-300 relative group focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded px-2 py-1"
                    >
                        نبذة عني

                        <span
                            class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>
                </li>

                <li>
                    <a
                        href="#dashboard"
                        class="hover:text-[#f6c951] transition-colors duration-300 relative group focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded px-2 py-1"
                    >
                        لوحة التحكم

                        <span
                            class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>
                </li>

                <li>
                    <a
                        href="#documents"
                        class="hover:text-[#f6c951] transition-colors duration-300 relative group focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded px-2 py-1"
                    >
                        المستندات والمذكرات

                        <span
                            class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>
                </li>

                <li>
                    <a
                        href="#follow"
                        class="hover:text-[#f6c951] transition-colors duration-300 relative group focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded px-2 py-1"
                    >
                        تابع معي

                        <span
                            class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"
                        ></span>
                    </a>
                </li>

            </ul>


            {{-- ============================================= --}}
            {{-- زر رفع الفيديو --}}
            {{-- ============================================= --}}

            <a
                href="{{ route('videos.create') }}"
                class="inline-flex items-center gap-2 bg-[#f6c951] hover:bg-[#ffd86b] text-[#101820] font-extrabold px-4 py-2.5 rounded-xl shadow-md hover:shadow-[#f6c951]/30 hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820]"
                aria-label="رفع فيديو جديد"
            >

                {{-- أيقونة الفيديو --}}
                <svg
                    class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"
                    />
                </svg>

                <span>
                    رفع فيديو
                </span>

            </a>

        </div>


        {{-- ============================================= --}}
        {{-- زر الهمبرغر --}}
        {{-- ============================================= --}}

        <button
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="lg:hidden p-2 rounded-lg hover:bg-[#f6c951]/10 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820]"
            aria-label="فتح أو إغلاق القائمة"
            :aria-expanded="mobileMenuOpen ? 'true' : 'false'"
            aria-controls="mobile-menu"
        >

            <svg
                class="w-7 h-7 text-white"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
            >

                <path
                    x-show="!mobileMenuOpen"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                />

                <path
                    x-show="mobileMenuOpen"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                />

            </svg>

        </button>

    </div>


    {{-- ============================================= --}}
    {{-- القائمة المنسدلة للهواتف --}}
    {{-- ============================================= --}}

    <div
        id="mobile-menu"
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="lg:hidden bg-[#101820] border-t border-[#f6c951]/20 shadow-inner"
        role="menu"
        aria-label="القائمة المنبثقة"
    >

        <ul
            class="flex flex-col items-end px-6 py-4 space-y-3 text-white font-bold text-base"
            dir="rtl"
        >

            <li class="w-full">
                <a
                    href="/"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition-colors duration-200"
                    role="menuitem"
                    @click="mobileMenuOpen = false"
                >
                    الصفحة الرئيسية
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#about"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition-colors duration-200"
                    role="menuitem"
                    @click="mobileMenuOpen = false"
                >
                    نبذة عني
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#dashboard"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition-colors duration-200"
                    role="menuitem"
                    @click="mobileMenuOpen = false"
                >
                    لوحة التحكم
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#documents"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition-colors duration-200"
                    role="menuitem"
                    @click="mobileMenuOpen = false"
                >
                    المستندات والمذكرات
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#follow"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition-colors duration-200"
                    role="menuitem"
                    @click="mobileMenuOpen = false"
                >
                    تابع معي
                </a>
            </li>


            {{-- ============================================= --}}
            {{-- زر رفع الفيديو - الهاتف --}}
            {{-- ============================================= --}}

            <li class="w-full pt-2 border-t border-[#f6c951]/10">

                <a
                    href="{{ route('videos.create') }}"
                    class="flex items-center justify-center gap-2 w-full bg-[#f6c951] hover:bg-[#ffd86b] text-[#101820] font-extrabold px-4 py-3 rounded-xl shadow-md transition-all duration-300"
                    role="menuitem"
                    @click="mobileMenuOpen = false"
                    aria-label="رفع فيديو جديد"
                >

                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"
                        />
                    </svg>

                    <span>
                        رفع فيديو جديد
                    </span>

                </a>

            </li>

        </ul>

    </div>

</nav>


<style>
    [x-cloak] {
        display: none !important;
    }
</style>
