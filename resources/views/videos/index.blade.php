<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الفيديوهات | The Ocean Series 2027</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f172a;
            color: #f8fafc;
            font-family: system-ui, -apple-system, sans-serif;
        }
        .card {
            background-color: #1e293b;
            border: 1px solid #334155;
            border-radius: 12px;
        }
        .btn-ocean {
            background-color: #2563eb;
            color: #fff;
        }
        .btn-ocean:hover {
            background-color: #1d4ed8;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">🎥 قائمة الفيديوهات المرفوعة</h2>
            <p class="text-secondary small">منصة THE OCEAN SERIES 2027</p>
        </div>
        <a href="{{ route('videos.create') }}" class="btn btn-ocean rounded-pill px-4">+ رفع فيديو جديد</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success bg-success text-white border-0 mb-4 rounded-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @forelse($videos as $video)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-info font-weight-bold">{{ $video->title }}</h5>
                        <p class="card-text text-secondary small">{{ $video->description ?? 'لا يوجد وصف' }}</p>
                        
                        <div class="video-preview my-3 rounded overflow-hidden border border-secondary">
                            <video controls width="100%" preload="metadata">
                                <source src="{{ Storage::url($video->video_path) }}" type="{{ $video->mime_type }}">
                                متصفحك لا يدعم تشغيل الفيديو.
                            </video>
                        </div>

                        <div class="d-flex justify-content-between align-items-center text-secondary small pt-2 border-top border-secondary">
                            <span>💾 {{ round($video->file_size / (1024 * 1024), 2) }} MB</span>
                            <span class="badge bg-primary">{{ strtoupper($video->video_disk ?? 'Local') }}</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-end pb-3">
                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف هذا الفيديو؟')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger px-3 rounded-pill">حذف</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="card p-5">
                    <p class="text-secondary fs-5 mb-3">لا توجد فيديوهات مرفوعة حتى الآن في قاعدة البيانات.</p>
                    <div>
                        <a href="{{ route('videos.create') }}" class="btn btn-ocean px-4 rounded-pill">قم برفع أول فيديو</a>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
</div>

</body>
</html>