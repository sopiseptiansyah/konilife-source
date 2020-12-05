<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{

    use Sluggable;

    protected $fillable = [
        'title', 'slug', 'image', 'thumbnail', 'content', 'published'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'maxLength'          => null,
                'maxLengthKeepWords' => true,
                'method'             => null,
                'separator'          => '-',
                'unique'             => true,
                'uniqueSuffix'       => null,
                'includeTrashed'     => false,
                'reserved'           => null,
                'onUpdate'           => true,
            ]
        ];
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageAttribute($value)
    {
        return Storage::url('artikel/'. $value);
    }
    public function getThumbnailAttribute($value)
    {
        return Storage::url('thumbnail/'. $value);
    }
    
    public function getSlugAttribute($value)
    {
        return url('article/' . $value);
    }
}
