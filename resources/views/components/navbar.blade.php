{{-- resources/views/components/navbar.blade.php --}}
{{-- THE OCEAN SERIES 2027 --}}
<nav
    x-data="{ mobileMenuOpen: false }"
    role="navigation"
    aria-label="القائمة الرئيسية"
    class="fixed top-0 left-0 w-full z-50 bg-[#101820] shadow-lg border-b border-[#f6c951]/10">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 h-20 md:h-24 flex items-center justify-between" dir="rtl">

        {{-- Logo --}}
        <a
            href="/"
            class="flex items-center focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#101820] rounded-lg p-1">

            <img
                src="{{ asset('assets/images/logo/logo.png') }}"
                class="w-32 sm:w-36 md:w-40 hover:scale-105 transition-transform duration-300"
                alt="THE OCEAN SERIES"
                loading="lazy">

        </a>

        {{-- Desktop Menu --}}
        <ul class="hidden lg:flex gap-6 xl:gap-8 text-white font-bold text-sm xl:text-base">

            <li>
                <a href="/"
                    class="hover:text-[#f6c951] transition-all duration-300 relative group px-2 py-1">
                    الصفحة الرئيسية
                    <span
                        class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

            <li>
                <a href="#about"
                    class="hover:text-[#f6c951] transition-all duration-300 relative group px-2 py-1">
                    نبذة عني
                    <span
                        class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

            <li>
                <a href="#dashboard"
                    class="hover:text-[#f6c951] transition-all duration-300 relative group px-2 py-1">
                    لوحة التحكم
                    <span
                        class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

            <li>
                <a href="#documents"
                    class="hover:text-[#f6c951] transition-all duration-300 relative group px-2 py-1">
                    المستندات والمذكرات
                    <span
                        class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

            <li>
                <a href="#follow"
                    class="hover:text-[#f6c951] transition-all duration-300 relative group px-2 py-1">
                    تابع معي
                    <span
                        class="absolute bottom-0 right-0 w-0 h-0.5 bg-[#f6c951] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </li>

        </ul>

        {{-- Mobile Button --}}
        <button
            @click="mobileMenuOpen=!mobileMenuOpen"
            class="lg:hidden p-2 rounded-lg hover:bg-[#f6c951]/10 transition">

            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                <path
                    x-show="!mobileMenuOpen"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"/>

                <path
                    x-show="mobileMenuOpen"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"/>

            </svg>

        </button>

    </div>
        {{-- Mobile Menu --}}
    <div
        id="mobile-menu"
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="lg:hidden bg-[#101820] border-t border-[#f6c951]/20 shadow-inner">

        <ul class="flex flex-col items-end px-6 py-4 space-y-3 text-white font-bold">

            <li class="w-full">
                <a
                    href="/"
                    @click="mobileMenuOpen=false"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition">
                    الصفحة الرئيسية
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#about"
                    @click="mobileMenuOpen=false"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition">
                    نبذة عني
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#dashboard"
                    @click="mobileMenuOpen=false"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition">
                    لوحة التحكم
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#documents"
                    @click="mobileMenuOpen=false"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition">
                    المستندات والمذكرات
                </a>
            </li>

            <li class="w-full">
                <a
                    href="#follow"
                    @click="mobileMenuOpen=false"
                    class="block w-full text-right hover:text-[#f6c951] hover:bg-[#f6c951]/10 px-4 py-2 rounded-lg transition">
                    تابع معي
                </a>
            </li>

        </ul>

    </div>

</nav>

<style>

[x-cloak]{
    display:none!important;
}

</style>