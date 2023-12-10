<?php

namespace App\Http\Controllers;

use App\Models\Forum\Categories;
use App\Models\Forum\Topics;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view("forum.index", [
            "categories" => $categories
        ]);
    }

    public function show_topic(int $topic_id){
        $topic = Topics::find($topic_id);
        return view("forum.topic", [
            "topic" => $topic
        ]);
    }
}
