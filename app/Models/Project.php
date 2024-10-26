<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        // Define the media collection
        $this->addMediaCollection('projectImages');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb') // Define a conversion for thumbnails
            ->width(120) // Set the width for the thumbnail
            ->height(120) // Set the height for the thumbnail
            ->sharpen(10); // Optional: sharpen the image
    }
}
