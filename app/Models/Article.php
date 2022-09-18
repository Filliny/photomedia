<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory,Sluggable;

    protected $fillable = ['name', 'content', 'category_id', 'image','slug','published','user_id'];

    public function category()
    {

        return $this->belongsTo(Category::class);
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }


    public function tags()
    {

        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value === null ? 'images/noimage.jpg' : $value,
            set: fn($value) => $value === null? $this->image : explode("storage",$value)[1]
        );
    }

    protected function shortContent(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => Str::words(strip_tags($attributes['content']), 5)

        );
    }
}
