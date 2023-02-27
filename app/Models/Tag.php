<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->morphedByMany(Post::class,'tagmodel');
    }

    public function videos()
    {
        return $this->morphedByMany(Videos::class, 'tagmodel');
    }

    public function courses()
    {
        return $this->morphedByMany(Course::class,'tagmodel');
    }
}
