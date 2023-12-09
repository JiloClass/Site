<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Tags;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoursesController extends Controller
{
    public function index(): Paginator | View {
        $courses = Cours::paginate(6);
        $tags = Tags::all();
        $count_tags = $tags->count();

        return view("cours.index", [
            "courses" => $courses,
            "tags" => $tags,
            "count_tags" => $count_tags
        ]);
    }

    public function show(int $id): View{
        $course = Cours::find($id);

        return view("cours.show", [
            "course" => $course
        ]);
    }

    public function search(string $etiquette): Paginator | View{
        if($etiquette != null){
            $tags = explode(',', $etiquette);

            $courses = Cours::where(function ($query) use ($tags) {
                foreach ($tags as $tag) {
                    $query->where('tags', 'LIKE', '%' . $tag . '%');
                }
            })->paginate(6);

            $tags = Tags::all();
            $count_tags = $tags->count();

            return view("cours.search", [
                "courses" => $courses,
                "tags" => $tags,
                "etiquette" => $etiquette,
                "count_tags" => $count_tags
            ]);
        }
    }
}
