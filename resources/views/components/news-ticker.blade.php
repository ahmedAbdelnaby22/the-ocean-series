{{-- شريط الأخبار المتحرك (محسّن للجوال) --}}

<div class="news-ticker-wrapper">
    <div class="news-ticker">
        <div class="news-track">
            <span>📢 خبر عاجل: تحديثات جديدة في النظام</span>
            <span>⭐ عروض حصرية لفترة محدودة</span>
            <span>📅 موعد الصيانة القادم يوم الخميس</span>
            <span>📢 خبر عاجل: تحديثات جديدة في النظام</span>
            <span>⭐ عروض حصرية لفترة محدودة</span>
        </div>
    </div>
</div>

<style>
    .news-ticker-wrapper {
        width: 100%;
        background: #0f172a;
        padding: 0;
        margin: 0;
        border-bottom: 1px solid rgba(251, 191, 36, 0.2);
    }
    .news-ticker {
        width: 100%;
        overflow: hidden;
        padding: 12px 0;
        direction: rtl;
        background: transparent;
    }
    .news-track {
        display: flex;
        white-space: nowrap;
        animation: scroll-news 25s linear infinite;
        gap: 0;
    }
    .news-track span {
        display: inline-block;
        padding: 0 45px;
        color: #facc15;
        font-weight: 500;
        font-size: 15px;
        flex-shrink: 0;
        font-family: 'Cairo', sans-serif;
    }
    @keyframes scroll-news {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .news-ticker-wrapper:hover .news-track {
        animation-play-state: paused;
    }
    @media (max-width: 640px) {
        .news-ticker {
            padding: 10px 0;
        }
        .news-track span {
            font-size: 12px;
            padding: 0 20px;
        }
        .news-track {
            animation-duration: 18s;
        }
    }
    @media (min-width: 641px) and (max-width: 1024px) {
        .news-track {
            animation-duration: 22s;
        }
        .news-track span {
            padding: 0 30px;
        }
    }
    @media (prefers-reduced-motion: reduce) {
        .news-track {
            animation: none !important;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            white-space: nowrap;
        }
        .news-track span {
            padding: 0 15px;
        }
    }
</style>