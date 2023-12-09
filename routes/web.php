<?php

use App\Models\Cours;
use App\Models\Creators;
use App\Models\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $courses = Cours::orderBy('date', 'asc')->take(3)->get();
    $count_courses = Cours::all()->count();
    $count_users = Users::all()->count();
    $count_creators = Creators::all()->count();
    $count_apprentices = $count_users - $count_creators;

    return view('index',[
        "courses" => $courses,
        "count_users" => $count_users,
        "count_courses" => $count_courses,
        "count_creators" => $count_creators,
        "count_apprentices" => $count_apprentices
    ]);

})->name("index");

Route::name("courses.")->group(function () {

    Route::get("/cours", function(){
        $courses = Cours::paginate(6);
        return view("cours.index", [
            "courses" => $courses
        ]);
    })->name("index");

    Route::get("/cours/{id}", function($id){
        $course = Cours::find($id);
        return view("cours.show", [
            "course" => $course
        ]);
    })->name("show");
});
