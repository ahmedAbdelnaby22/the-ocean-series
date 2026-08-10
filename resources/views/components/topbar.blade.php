{{-- resources/views/components/topbar.blade.php --}}
{{-- شريط الأخبار العلوي (ماركيه) --}}

<div 
    role="complementary" 
    aria-label="شريط الأخبار العاجلة" 
    class="relative z-40 overflow-hidden bg-[#062f47] border-b border-[#f6c951]/20 text-white shadow-sm"
>
    {{-- حاوية الماركيه --}}
    <div class="marquee-wrapper overflow-hidden py-2 md:py-3">
        <div class="marquee flex items-center whitespace-nowrap text-sm md:text-base lg:text-lg font-semibold animate-marquee">

            {{-- 1. الترحيب --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                🌊
                <span>مرحباً بكم في</span>
                <span class="font-bold text-[#f6c951]">THE OCEAN SERIES 2027</span>
                <span>مع</span>
                <span class="font-bold text-[#f6c951]">Mr. Abdel Salam Radwan</span>
            </span>

            {{-- 2. الخبرة --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                🏆
                <span>خبرة أكثر من <strong class="text-[#f6c951]">8 سنوات</strong> في تدريس اللغة الإنجليزية</span>
            </span>

            {{-- 3. الكتاب --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                📚
                <span>سلسلة المحيط 2027 - كتاب الشرح والتدريبات</span>
            </span>

            {{-- 4. الامتحانات --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                🎯
                <span>لا يخرج عنها أي امتحان بإذن الله</span>
            </span>

            {{-- 5. الموقع --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                📍
                <span>البلينا - سوهاج - جمهورية مصر العربية</span>
            </span>

            {{-- 6. البريد الإلكتروني --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                <i class="fa-solid fa-envelope text-[#f6c951]"></i>
                <a 
                    href="mailto:abdohanafi011111@gmail.com" 
                    class="hover:text-[#f6c951] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#062f47] rounded px-1"
                    aria-label="إرسال بريد إلكتروني إلى abdohanafi011111@gmail.com"
                >
                    abdohanafi011111@gmail.com
                </a>
            </span>

            {{-- 7. فيسبوك --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                <i class="fa-brands fa-facebook text-[#1877F2] text-xl"></i>
                <a 
                    href="https://www.facebook.com/share/19EzddwcQG/" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="hover:text-[#1877F2] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#1877F2] focus:ring-offset-2 focus:ring-offset-[#062f47] rounded px-1"
                    aria-label="زيارة صفحتنا على فيسبوك"
                >
                    Facebook
                </a>
            </span>

            {{-- 8. واتساب 1 --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                <i class="fa-brands fa-whatsapp text-[#25D366] text-xl"></i>
                <a 
                    href="https://wa.me/2011111168104" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="hover:text-[#25D366] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#25D366] focus:ring-offset-2 focus:ring-offset-[#062f47] rounded px-1"
                    aria-label="تواصل معنا عبر واتساب على الرقم 01111168104"
                >
                    01111168104
                </a>
            </span>

            {{-- 9. واتساب 2 --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                <i class="fa-brands fa-whatsapp text-[#25D366] text-xl"></i>
                <a 
                    href="https://wa.me/201027635545" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="hover:text-[#25D366] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#25D366] focus:ring-offset-2 focus:ring-offset-[#062f47] rounded px-1"
                    aria-label="تواصل معنا عبر واتساب على الرقم 01027635545"
                >
                    01027635545
                </a>
            </span>

            {{-- 10. اتصال هاتفي --}}
            <span class="mx-6 md:mx-10 lg:mx-12 flex items-center gap-2">
                <i class="fa-solid fa-phone text-[#f6c951]"></i>
                <a 
                    href="tel:+2011111168104" 
                    class="hover:text-[#f6c951] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#f6c951] focus:ring-offset-2 focus:ring-offset-[#062f47] rounded px-1"
                    aria-label="الاتصال بنا على الرقم 01111168104"
                >
                    اتصل الآن
                </a>
            </span>

        </div>
    </div>
</div>

<style>
    /* ===== حركة الماركيه ===== */
    .animate-marquee {
        animation: marquee-scroll 20s linear infinite;
        will-change: transform;
    }

    @keyframes marquee-scroll {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    /* ===== إيقاف الحركة عند التمرير ===== */
    .marquee-wrapper:hover .animate-marquee {
        animation-play-state: paused;
    }

    /* ===== تقليل الحركة ===== */
    @media (prefers-reduced-motion: reduce) {
        .animate-marquee {
            animation: none;
            transform: translateX(0);
        }
        .marquee-wrapper {
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    }

    /* ===== تحسين التركيز ===== */
    .focus\:ring-offset-2:focus {
        outline: none;
        box-shadow: 0 0 0 2px #062f47, 0 0 0 4px #f6c951;
    }
</style>