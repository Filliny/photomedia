<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory,Sluggable;

    protected $fillable = ['name', 'image'];

    public function articles(){

        return $this->hasMany(Article::class);
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value === null ? 'images/noimage.jpg' : $value,
            set: fn($value) => $value === null? $this->image : explode("storage",$value)[1]
        );
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
