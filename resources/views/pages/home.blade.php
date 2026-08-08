@extends('layouts.app')

@section('title', 'سلسلة المحيط 2027 | منصة مستر عبدالسلام رضوان')

@section('content')

    {{-- الرسالة الترحيبية --}}
    @include('components.welcome-popup')

    {{-- الشريط العلوي --}}
    @include('components.topbar')

    {{-- شريط التنقل --}}
    @include('components.navbar')  {{-- مرة واحدة فقط --}}

    {{-- شريط الأخبار --}}
    @include('components.news-ticker')

    {{-- القسم الرئيسي (Hero) --}}
    @include('components.hero')

    {{-- السلايدر --}}
    @include('components.slider')

    {{-- من نحن --}}
    @include('components.about')

    {{-- المميزات --}}
    @include('components.features')

    {{-- المجموعات --}}
    @include('components.groups')

    {{-- معرض الصور الثابت --}}
    @include('components.gallery')

    {{-- الأخبار --}}
    @include('components.news')

    {{-- اتصل بنا --}}
    @include('components.contact')

    {{-- التذييل --}}
    @include('components.footer')

@endsection