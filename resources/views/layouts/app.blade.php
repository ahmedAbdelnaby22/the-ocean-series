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
    <!-- Structured Data (Schema.org / JSON-LD) -->
    <!-- ============================================= -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "EducationalOrganization",
          "@id": "{{ url('/') }}/#organization",
          "name": "سلسلة المحيط 2027 - The Ocean Series",
          "url": "{{ url('/') }}",
          "telephone": ["+201111168104", "+201027635545"]
        },
        {
          "@type": "Person",
          "@id": "{{ url('/') }}/#teacher",
          "name": "عبد السلام رضوان",
          "jobTitle": "Professor of English Language"
        }
      ]
    }
    </script>

    <!-- ============================================= -->
    <!-- Swiper CSS (للسلايدر) -->
    <!-- ============================================= -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

    <!-- ============================================= -->
    <!-- Asset Bundling (Production) -->
    <!-- ============================================= -->
    {{-- نستخدم asset() مباشرة لتحميل الملفات من مجلد build --}}
    <link rel="stylesheet" href="{{ asset('build/assets/app-C6kB7Ab_.css') }}">
    <script type="module" src="{{ asset('build/assets/app-DYdTUths.js') }}"></script>

    @stack('styles')
</head>

<body class="font-cairo bg-white text-gray-900 antialiased">

    <div id="app">
        @yield('content')
    </div>

    @stack('scripts')

    <!-- ============================================= -->
    <!-- Swiper JS (للسلايدر) -->
    <!-- ============================================= -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // =============================================
        // تفعيل Swiper إذا كان موجوداً في الصفحة
        // =============================================
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