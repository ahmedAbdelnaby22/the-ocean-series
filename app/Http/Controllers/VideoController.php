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
     /**
     * حفظ الفيديو المرفوع
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'video'       => 'required|file|mimes:mp4,mov,ogg,qt,webm,mkv,avi|max:512000', // السماح بكل الصيغ وحد أقصى 500MB
        ]);

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $disk = config('filesystems.default', 'public');
            
            $path = $file->store('videos', $disk);

            Video::create([
                'title'       => $request->title,
                'description' => $request->description,
                'video_path'  => $path,
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