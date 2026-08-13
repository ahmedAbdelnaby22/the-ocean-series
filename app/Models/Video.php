<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'video_path',
        'video_disk',
        'mime_type',
        'file_size',
        'status',
    ];

    protected $casts = [
        'file_size' => 'integer',
    ];
}
