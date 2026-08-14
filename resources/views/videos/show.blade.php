{{-- resources/views/videos/show.blade.php --}}
{{-- صفحة عرض وتشغيل الفيديو (تدعم جميع الصيغ) --}}

@extends('layouts.app')

@section('title', $video->title . ' | THE OCEAN SERIES')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-4xl">
    <div class="bg-[#1a2533] rounded-2xl overflow-hidden shadow-2xl border border-[#f6c951]/10">

        {{-- مشغل الفيديو --}}
        <div class="aspect-video bg-[#101820] flex items-center justify-center">
            @if($video->video_url)
                <video controls class="w-full h-full">
                    {{-- استخدام mime_type الفعلي للملف، مع قيمة افتراضية --}}
                    <source src="{{ $video->video_url }}" type="{{ $video->mime_type ?? 'video/mp4' }}">
                    متصفحك لا يدعم تشغيل الفيديو.
                </video>
            @else
                <div class="text-center text-gray-500">
                    <i class="fa-solid fa-video-slash text-6xl mb-4"></i>
                    <p>الرابط غير متاح</p>
                </div>
            @endif
        </div>

        {{-- معلومات الفيديو --}}
        <div class="p-6">
            <h1 class="text-2xl font-bold text-white">{{ $video->title }}</h1>
            <p class="text-gray-300 mt-2">{{ $video->description ?? 'لا يوجد وصف' }}</p>

            <div class="flex flex-wrap gap-4 mt-4 text-sm text-gray-400 border-t border-[#f6c951]/10 pt-4">
                <span><i class="fa-solid fa-user"></i> {{ $video->teacher_name ?? 'غير محدد' }}</span>
                <span><i class="fa-solid fa-layer-group"></i> {{ $video->level ?? 'عام' }}</span>
                <span><i class="fa-regular fa-calendar"></i> {{ $video->created_at->format('d/m/Y') }}</span>
                @if($video->file_size)
                    <span><i class="fa-regular fa-file"></i> {{ number_format($video->file_size / 1048576, 2) }} ميجابايت</span>
                @endif
                <span><i class="fa-regular fa-file"></i> نوع الملف: {{ $video->mime_type ?? 'غير محدد' }}</span>
            </div>

            <div class="mt-6 flex gap-4 flex-wrap">
                <a href="{{ route('videos.index') }}" class="px-6 py-2 bg-[#f6c951] text-[#062f47] font-bold rounded-full hover:bg-yellow-400 transition duration-300">
                    <i class="fa-solid fa-arrow-right"></i> العودة للقائمة
                </a>
                @if($video->video_url)
                    <a href="{{ $video->video_url }}" target="_blank" class="px-6 py-2 bg-[#f6c951]/10 text-[#f6c951] font-bold rounded-full hover:bg-[#f6c951] hover:text-[#062f47] transition duration-300">
                        <i class="fa-solid fa-external-link-alt"></i> فتح الرابط مباشرة
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection