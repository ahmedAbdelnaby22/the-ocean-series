<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">

<head>
    <!-- ============================================= -->
    <!-- Essential Meta Tags -->
    <!-- ============================================= -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ============================================= -->
    <!-- Dynamic Title & Primary Meta Tags -->
    <!-- ============================================= -->
    <title>@yield('title', 'سلسلة المحيط 2027 | منصة مستر عبد السلام رضوان للغة الإنجليزية')</title>
    <meta name="title" content="@yield('title', 'سلسلة المحيط 2027 | منصة مستر عبد السلام رضوان للغة الإنجليزية')">
    <meta name="description" content="@yield('description', 'المنصة الرسمية لسلسلة المحيط 2027 للأستاذ عبد السلام رضوان. دورات لغة إنجليزية تفاعلية، كتاب الشرح والتدريبات، واختبارات لضمان التفوق والوصول للقمة.')">
    <meta name="keywords" content="@yield('keywords', 'سلسلة المحيط 2027, مستر عبد السلام رضوان, The Ocean Series 2027, تعلم اللغة الإنجليزية, ثانوية عامة إنجليزي')">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Arabic">
    <meta name="author" content="Ahmed Abdelnaby">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- ============================================= -->
    <!-- Favicon -->
    <!-- ============================================= -->
    <link rel="icon" href="{{ asset('assets/images/logo/logo.png') }}">

    <!-- ============================================= -->
    <!-- Open Graph / Facebook & WhatsApp -->
    <!-- ============================================= -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="سلسلة المحيط 2027 | مستر عبد السلام رضوان">
    <meta property="og:description" content="طريقك للقمة في اللغة الإنجليزية مع مستر عبد السلام رضوان. انضم الآن وتصفح المحاضرات والكتب.">
    <meta property="og:image" content="{{ asset('assets/images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- ============================================= -->
    <!-- Twitter Cards -->
    <!-- ============================================= -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="سلسلة المحيط 2027 | مستر عبد السلام رضوان">
    <meta name="twitter:description" content="طريقك للقمة في اللغة الإنجليزية مع مستر عبد السلام رضوان. انضم الآن وتصفح المحاضرات والكتب.">
    <meta name="twitter:image" content="{{ asset('assets/images/og-image.jpg') }}">

    <!-- ============================================= -->
    <!-- Preconnect & Fonts -->
    <!-- ============================================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- ============================================= -->
    <!-- Swiper CSS (للسلايدر) -->
    <!-- ============================================= -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

    <!-- ============================================= -->
    <!-- Asset Bundling (Vite) -->
    <!-- ============================================= -->
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    @stack('styles')
</head>

<body class="font-cairo bg-white text-gray-900 antialiased">

    <!-- ============================================= -->
    <!-- 🆕 شاشة الترحيب الاحترافية (Splash Screen) -->
    <!-- ============================================= -->
    <div id="splash-screen" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle at center, #0a1a2e 0%, #010407 100%); display: flex; flex-direction: column; align-items: center; justify-content: center; z-index: 9999; transition: opacity 1.2s ease; font-family: 'Cairo', sans-serif;">

        {{-- العنصر المتوهج خلف اللوجو --}}
        <div style="position: absolute; width: 300px; height: 300px; border-radius: 50%; background: radial-gradient(circle, rgba(255, 215, 0, 0.6) 0%, rgba(255, 215, 0, 0) 70%); filter: blur(20px); animation: glowFlash 1.5s cubic-bezier(0.22, 1, 0.36, 1) forwards; pointer-events: none;"></div>

        {{-- صورة اللوجو --}}
        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="شعار THE OCEAN SERIES" style="width: 320px; max-width: 90vw; height: auto; border-radius: 20px; position: relative; z-index: 1; animation: royalEntrance 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, goldPulse 3s ease-in-out 2s infinite; filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.3));">

        {{-- نص ترحيبي أسفل الشعار --}}
        <h2 style="margin-top: 25px; color: #d4af37; font-size: 1.8rem; letter-spacing: 3px; opacity: 0; animation: textFade 1s ease-out 1.5s forwards; z-index: 1; font-weight: 300;">مرحباً بكم في</h2>
        <h2 style="color: #f6c951; font-size: 2.5rem; letter-spacing: 5px; opacity: 0; animation: textFade 1s ease-out 1.8s forwards; z-index: 1; font-weight: 700;">THE OCEAN SERIES</h2>
    </div>

    {{-- CSS الخاص بشاشة الترحيب --}}
    <style>
        /* ===== حركة الدخول الملكي ===== */
        @keyframes royalEntrance {
            0% {
                transform: scale(0.2) rotate(-40deg);
                opacity: 0;
            }
            50% {
                transform: scale(1.1) rotate(4deg);
                opacity: 1;
            }
            70% {
                transform: scale(0.95) rotate(-1deg);
                opacity: 1;
            }
            100% {
                transform: scale(1) rotate(0deg);
                opacity: 1;
            }
        }

        /* ===== توهج خلفي ===== */
        @keyframes glowFlash {
            0% {
                transform: scale(0);
                opacity: 0.9;
            }
            60% {
                transform: scale(1.5);
                opacity: 0.8;
            }
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        /* ===== نبض ذهبي مستمر ===== */
        @keyframes goldPulse {
            0%, 100% {
                filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.3)) brightness(1);
            }
            50% {
                filter: drop-shadow(0 0 40px rgba(255, 215, 0, 0.8)) brightness(1.1);
            }
        }

        /* ===== ظهور النصوص ===== */
        @keyframes textFade {
            0% {
                opacity: 0;
                transform: translateY(15px);
            }
            100% {
                opacity: 0.9;
                transform: translateY(0);
            }
        }

        /* ===== اختفاء الشاشة ===== */
        #splash-screen.fade-out {
            opacity: 0;
            pointer-events: none;
        }
    </style>

    {{-- JavaScript للتحكم في وقت الاختفاء --}}
    <script>
        // ننتظر 2.8 ثانية (لإكمال الحركات) ثم نخفي الشاشة
        setTimeout(() => {
            const splash = document.getElementById('splash-screen');
            splash.classList.add('fade-out');
            setTimeout(() => {
                splash.style.display = 'none';
            }, 1200);
        }, 2800);
    </script>

    <!-- ============================================= -->
    <!-- المحتوى الرئيسي -->
    <!-- ============================================= -->
    <div id="app">
        @yield('content')
    </div>

    @stack('scripts')

    <!-- ============================================= -->
    <!-- Swiper JS (للسلايدر) -->
    <!-- ============================================= -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSlider = document.querySelector('.heroSlider');
            if (heroSlider) {
                new Swiper(".heroSlider", {
                    loop: true,
                    effect: "fade",
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                });
                console.log('✅ Swiper تم تفعيله بنجاح');
            }
        });
    </script>

</body>

</html>