@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-10">

    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-6">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            رفع فيديو جديد
        </h1>

        @if(session('success'))
            <div class="mb-5 p-4 rounded-lg bg-green-100 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-5 p-4 rounded-lg bg-red-100 text-red-800">
                <ul class="list-disc pr-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('videos.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="mb-5">
                <label class="block mb-2 font-semibold text-gray-700">
                    عنوان الفيديو
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                    placeholder="مثال: شرح الوحدة الأولى">
            </div>

            <div class="mb-5">
                <label class="block mb-2 font-semibold text-gray-700">
                    وصف الفيديو
                </label>

                <textarea
                    name="description"
                    rows="4"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3"
                    placeholder="اكتب وصفًا مختصرًا للفيديو...">{{ old('description') }}</textarea>
            </div>

            <div class="mb-6">
                <label class="block mb-2 font-semibold text-gray-700">
                    اختيار الفيديو
                </label>

                <input
                    type="file"
                    name="video"
                    accept="video/mp4,video/mov,video/avi,video/mkv,video/webm"
                    required
                    class="w-full border border-gray-300 rounded-lg px-4 py-3">

                <p class="text-sm text-gray-500 mt-2">
                    الصيغ المدعومة: MP4, MOV, AVI, MKV, WEBM
                </p>
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition">
                رفع الفيديو
            </button>

        </form>

    </div>

</div>

@endsection
