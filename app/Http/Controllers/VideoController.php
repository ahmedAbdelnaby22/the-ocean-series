<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * عرض قائمة الفيديوهات
     */
    public function index()
    {
        $videos = Video::where('status', 'active')
            ->orWhere('status', '1')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('videos.index', compact('videos'));
    }

    /**
     * عرض صفحة رفع فيديو جديد
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * حفظ الفيديو المرفوع مع إنشاء الرابط العام
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'video'       => 'required|file|mimes:mp4,mov,ogg,qt,webm,mkv,avi|max:512000',
        ]);

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $disk = config('filesystems.default', 'public');

            // حفظ الملف
            $path = $file->store('videos', $disk);

            // ============================================================
            // 🔥 توليد الرابط العام للفيديو (المطلوب)
            // ============================================================
            if ($disk === 'public') {
                // للتخزين المحلي: نحتاج إلى رابط عبر storage
                $videoUrl = Storage::disk('public')->url($path);
            } elseif ($disk === 'r2') {
                // للتخزين السحابي R2
                $videoUrl = Storage::disk('r2')->url($path);
            } else {
                // حل احتياطي
                $videoUrl = Storage::disk($disk)->url($path);
            }

            // حفظ البيانات في قاعدة البيانات
            Video::create([
                'title'       => $request->title,
                'description' => $request->description,
                'video_path'  => $path,
                'video_url'   => $videoUrl,   // <-- 🔥 الرابط العام يُحفظ هنا
                'video_disk'  => $disk,
                'mime_type'   => $file->getClientMimeType(),
                'file_size'   => $file->getSize(),
                'status'      => 'active',
            ]);

            return redirect()->route('videos.index')
                ->with('success', 'تم رفع الفيديو بنجاح!');
        }

        return back()->with('error', 'حدث خطأ أثناء رفع الفيديو.');
    }

    /**
     * حذف الفيديو
     */
    public function destroy(Video $video)
    {
        if ($video->video_path && Storage::disk($video->video_disk ?? 'public')->exists($video->video_path)) {
            Storage::disk($video->video_disk ?? 'public')->delete($video->video_path);
        }

        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', 'تم حذف الفيديو بنجاح.');
    }
}