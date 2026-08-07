@extends('layouts.app')

@section('title', 'سلسلة المحيط 2027 | منصة مستر عبدالسلام رضوان')

@section('content')

    {{-- الرسالة الترحيبية --}}
    @include('components.welcome-popup')

    {{-- الشريط العلوي --}}
    @include('components.topbar')

    {{-- شريط التنقل --}}
    @include('components.navbar')

    {{-- شريط الأخبار --}}
    @include('components.news-ticker')

    {{-- Hero --}}
    @include('components.hero')

    {{-- من نحن --}}
    @include('components.about')

    {{-- المميزات --}}
    @include('components.features')

    {{-- المجموعات --}}
    @include('components.groups')

    {{-- معرض الصور --}}
    @include('components.gallery')

    {{-- الأخبار --}}
    @include('components.news')

    {{-- اتصل بنا --}}
    @include('components.contact')

    {{-- Footer --}}
    @include('components.footer')

@endsection