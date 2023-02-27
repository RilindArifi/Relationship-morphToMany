<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Videos;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return response()->json(Tag::all());
    }

    public function store(Request $request, Tag $tag)
    {
        $tag = Tag::find(1);
        $post = Post::find(1);
        $video = Videos::find(1);
        $courses = Course::find(1);

        $tag->posts()->attach($post);
        $tag->videos()->attach($video);
        $tag->courses()->attach($courses);

        return response()->json($tag);

    }
}
