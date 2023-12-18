<?php

use App\Models\Cours;
use App\Models\Creators;
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
    $count_users = \App\Models\User::all()->count();
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

    Route::get("/cours", [\App\Http\Controllers\CoursesController::class, "index"])->name("index");

    Route::get("/cours/{id}", [\App\Http\Controllers\CoursesController::class, "show"])->name("show");

    Route::get("/cours/search/{etiquette}", [\App\Http\Controllers\CoursesController::class, "search"])->name("search");
});

Route::name("forum.")->group(function(){
    Route::get("/forum", [\App\Http\Controllers\ForumController::class, "index"])->name("index");
    Route::get("/forum/topic/{topic_id?}", [\App\Http\Controllers\ForumController::class, "show_topic"])->name("topic");
});

Route::name("auth.")->group(function (){
    Route::get("/register", [\App\Http\Controllers\Auth\RegisterController::class, "show"])->name("register");
});
