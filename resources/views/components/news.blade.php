{{-- resources/views/components/news.blade.php --}}
<section id="news" class="section-padding bg-[#062f47]">
    <div class="container-custom">
        <div class="text-center mb-12 fade-up">
            <span class="badge badge-primary mb-4">📰 آخر الأخبار</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-white">
                <span class="text-gradient">أحدث</span> المستجدات
            </h2>
            <p class="mt-4 text-gray-300 max-w-2xl mx-auto">تابع أحدث الأخبار والإعلانات الخاصة بالمنصة</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $news = [
                    ['title' => 'إطلاق سلسلة المحيط 2027', 'date' => '1 يناير 2026', 'excerpt' => 'نعلن عن إطلاق النسخة الجديدة من سلسلة المحيط مع محتوى محدث ومطور.', 'badge' => 'جديد'],
                    ['title' => 'تخفيضات خاصة للتسجيل المبكر', 'date' => '15 يناير 2026', 'excerpt' => 'خصم 20% على جميع الدورات للتسجيل قبل نهاية الشهر.', 'badge' => 'عرض'],
                    ['title' => 'نتائج امتحانات الفصل الأول', 'date' => '30 يناير 2026', 'excerpt' => 'تم إعلان نتائج امتحانات الفصل الأول، تهانينا لجميع المتفوقين.', 'badge' => 'نتائج'],
                ];
            @endphp
            @foreach($news as $item)
                <div class="card group fade-up">
                    <div class="flex items-center justify-between mb-3">
                        <span class="badge badge-primary">{{ $item['badge'] }}</span>
                        <span class="text-sm text-gray-500">{{ $item['date'] }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-[#f6c951] transition-colors">{{ $item['title'] }}</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">{{ $item['excerpt'] }}</p>
                    <a href="#" class="inline-block mt-4 text-[#f6c951] text-sm font-bold hover:text-yellow-400 transition-colors">اقرأ المزيد ←</a>
                </div>
            @endforeach
        </div>
    </div>
</section>