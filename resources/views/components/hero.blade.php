{{-- resources/views/components/hero.blade.php --}}
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10 dark:opacity-5">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="text-center lg:text-right fade-up">
                <span class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-indigo-700 dark:text-indigo-300 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">
                    ✨ منصة تعليمية احترافية
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">
                    <span class="text-gray-800 dark:text-gray-100">مرحبًا بك في</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400">
                        THE OCEAN SERIES
                    </span>
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-600 dark:text-gray-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    ابدأ رحلتك نحو التفوق في اللغة الإنجليزية مع مستر عبدالسلام.
                    منصة تعليمية حديثة تجمع بين الشرح المبسط، والاختبارات، والمذكرات، والمتابعة المستمرة، في مكان واحد.
                </p>
                <blockquote class="mt-6 p-4 border-r-4 border-indigo-500 bg-indigo-50/50 dark:bg-indigo-900/20 rounded-lg">
                    <p class="text-lg italic text-gray-700 dark:text-gray-300">
                        "نحن لا نعلّم الإنجليزية فقط... بل نبني الثقة، ونصنع النجاح."
                    </p>
                </blockquote>
                <div class="mt-8 flex flex-wrap gap-4 justify-center lg:justify-start">
                    <a href="#booking" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        🚀 بادر بالحجز الآن
                    </a>
                    <a href="#about" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 font-bold rounded-full shadow-md hover:shadow-lg border-2 border-gray-200 dark:border-gray-700 transform hover:-translate-y-1 transition-all duration-300">
                        👋 تعرف علينا
                    </a>
                </div>
            </div>
            <!-- Image -->
<div class="flex justify-center fade-up animation-delay-200">

    <div class="relative w-full max-w-xl">

        <div class="swiper heroSlider rounded-3xl overflow-hidden shadow-2xl">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/slider/slider1.jpeg') }}"
                        class="w-full h-[500px] object-cover">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/slider/slider2.jpeg') }}"
                        class="w-full h-[500px] object-cover">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/slider/slider3.jpeg') }}"
                        class="w-full h-[500px] object-cover">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/slider/slider4.jpeg') }}"
                        class="w-full h-[500px] object-cover">
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('assets/images/slider/slider5.jpeg') }}"
                        class="w-full h-[500px] object-cover">
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

        <!-- صورة المعلم -->

        <div class="absolute -bottom-10 -left-10 hidden lg:block">

            <img
                src="{{ asset('assets/images/teacher/teacher4.png') }}"
                class="w-52 rounded-3xl shadow-2xl border-4 border-white">

        </div>

    </div>

</div>
</section>
{{-- resources/views/components/hero.blade.php --}}
<section class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10 dark:opacity-5">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="text-center lg:text-right fade-up">
                <span class="inline-block px-4 py-2 mb-4 text-sm font-semibold text-indigo-700 dark:text-indigo-300 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">
                    ✨ منصة تعليمية احترافية
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">
                    <span class="text-gray-800 dark:text-gray-100">مرحبًا بك في</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 dark:from-blue-400 dark:to-purple-400">
                        THE OCEAN SERIES
                    </span>
                </h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-600 dark:text-gray-300 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    ابدأ رحلتك نحو التفوق في اللغة الإنجليزية مع مستر عبدالسلام.
                    منصة تعليمية حديثة تجمع بين الشرح المبسط، والاختبارات، والمذكرات، والمتابعة المستمرة، في مكان واحد.
                </p>
                <blockquote class="mt-6 p-4 border-r-4 border-indigo-500 bg-indigo-50/50 dark:bg-indigo-900/20 rounded-lg">
                    <p class="text-lg italic text-gray-700 dark:text-gray-300">
                        "نحن لا نعلّم الإنجليزية فقط... بل نبني الثقة، ونصنع النجاح."
                    </p>
                </blockquote>
                <div class="mt-8 flex flex-wrap gap-4 justify-center lg:justify-start">
                    <a href="#booking" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        🚀 بادر بالحجز الآن
                    </a>
                    <a href="#about" class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-200 font-bold rounded-full shadow-md hover:shadow-lg border-2 border-gray-200 dark:border-gray-700 transform hover:-translate-y-1 transition-all duration-300">
                        👋 تعرف علينا
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="flex justify-center fade-up animation-delay-200">
                <div class="relative w-full max-w-md">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-400 to-purple-400 rounded-3xl blur-2xl opacity-20 animate-pulse"></div>
                    <img src="{{ asset('images/teacher.jpg') }}" alt="المعلم مستر عبدالسلام" 
                         class="relative rounded-3xl shadow-2xl w-full object-cover aspect-[4/3]">
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-4 -right-4 bg-white dark:bg-gray-800 rounded-xl shadow-xl p-4 flex items-center gap-3 animate-bounce">
                        <span class="text-2xl">⭐</span>
                        <div>
                            <p class="font-bold text-gray-800 dark:text-gray-100">خبرة 8 سنوات</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">تخريج آلاف الطلاب</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>