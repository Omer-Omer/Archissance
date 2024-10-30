<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Page extends Model implements HasMedia
{
    use  InteractsWithMedia, HasFactory;
    protected $guarded = [];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('custom-ratio')
            ->fit('crop', 400, 345) // Define your custom width and height
            ->keepOriginalImageFormat()
            ->nonQueued(); // Optional: removes the conversion from the queue
    }
}
