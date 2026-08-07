{{-- resources/views/components/hero.blade.php --}}
{{-- القسم الرئيسي مع صورة المعلم الصحيحة --}}

<section id="home" class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-[#062f47] via-[#0a3d5c] to-[#101820] pt-32 md:pt-36">

    {{-- الخلفية المتحركة --}}
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 -left-4 w-72 h-72 bg-[#f6c951] rounded-full mix-blend-overlay filter blur-3xl animate-float"></div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-blue-500 rounded-full mix-blend-overlay filter blur-3xl animate-float animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-500 rounded-full mix-blend-overlay filter blur-3xl animate-float animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

            {{-- النصوص --}}
            <div class="text-center lg:text-right fade-up">
                <span class="inline-block px-4 py-2 mb-4 text-sm font-bold text-[#f6c951] bg-[#f6c951]/10 border border-[#f6c951]/30 rounded-full">
                    🌟 منصة تعليمية احترافية
                </span>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight break-words">
                    <span class="text-white">مرحبًا بك في</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-[#f6c951] to-yellow-400">
                        THE OCEAN SERIES
                    </span>
                </h1>

                <p class="mt-4 text-base sm:text-lg md:text-xl text-gray-300 leading-relaxed max-w-2xl mx-auto lg:mx-0 break-words">
                    ابدأ رحلتك نحو التفوق في اللغة الإنجليزية مع مستر عبدالسلام.
                    منصة تعليمية حديثة تجمع بين الشرح المبسط، والاختبارات، والمذكرات، والمتابعة المستمرة.
                </p>

                <blockquote class="mt-6 p-4 border-r-4 border-[#f6c951] bg-[#f6c951]/5 rounded-lg">
                    <p class="text-lg italic text-gray-200">"نحن لا نعلّم الإنجليزية فقط... بل نبني الثقة، ونصنع النجاح."</p>
                </blockquote>

                <div class="mt-8 flex flex-wrap gap-4 justify-center lg:justify-start">
                    <a href="#booking" class="px-8 py-4 bg-gradient-to-r from-[#f6c951] to-yellow-400 hover:from-[#e5b83d] hover:to-yellow-300 text-[#062f47] font-bold rounded-full shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-[#f6c951]/50">
                        🚀 بادر بالحجز الآن
                    </a>
                    <a href="#about" class="px-8 py-4 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white font-bold rounded-full shadow-md hover:shadow-lg border-2 border-white/20 hover:border-[#f6c951] transform hover:-translate-y-1 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-white/30">
                        👋 تعرف علينا
                    </a>
                </div>

                {{-- عدادات --}}
                <div class="mt-10 flex flex-wrap gap-8 justify-center lg:justify-start text-white">
                    <div class="text-center">
                        <span class="block text-3xl font-bold text-[#f6c951] counter" data-target="8000">0+</span>
                        <span class="text-sm text-gray-400">طالب مستفيد</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-3xl font-bold text-[#f6c951] counter" data-target="8">0+</span>
                        <span class="text-sm text-gray-400">سنوات خبرة</span>
                    </div>
                    <div class="text-center">
                        <span class="block text-3xl font-bold text-[#f6c951] counter" data-target="150">0+</span>
                        <span class="text-sm text-gray-400">فيديو تعليمي</span>
                    </div>
                </div>
            </div>

            {{-- ===== صورة المعلم (تم تصحيح المسار) ===== --}}
            <div class="flex justify-center fade-up animation-delay-200">
                <div class="relative w-full max-w-md">
                    {{-- إطار متوهج --}}
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#f6c951] to-yellow-400 rounded-3xl blur-2xl opacity-30 animate-pulse"></div>
                    
                    {{-- ✅ المسار الصحيح: assets/images/teacher/teacher4.png --}}
                    <img 
                        src="{{ asset('assets/images/teacher/teacher4.png') }}" 
                        alt="المعلم مستر عبدالسلام - مؤسس THE OCEAN SERIES" 
                        class="relative rounded-3xl shadow-2xl w-full object-cover aspect-[4/3] border-2 border-[#f6c951]/20" 
                        loading="lazy"
                    >

                    {{-- بطاقة عائمة --}}
                    <div class="absolute -bottom-4 -right-4 bg-[#101820] border border-[#f6c951]/20 rounded-xl shadow-xl p-4 flex items-center gap-3 animate-bounce-slow">
                        <span class="text-3xl">⭐</span>
                        <div>
                            <p class="font-bold text-[#f6c951]">خبرة 8 سنوات</p>
                            <p class="text-sm text-gray-400">تخريج آلاف الطلاب</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- سهم للأسفل --}}
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
        <a href="#about" class="text-[#f6c951] hover:text-yellow-300 transition-colors" aria-label="انتقل للأسفل">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </a>
    </div>
</section>