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

    $cours = Cours::orderBy('date', 'asc')->take(3)->get();
    $count_cours = Cours::all()->count();
    $count_user = Users::all()->count();
    $count_creator = Creators::all()->count();
    $count_apprentices = $count_user - $count_creator;

    return view('index',[
        "cours" => $cours,
        "count_user" => $count_user,
        "count_cours" => $count_cours,
        "count_creator" => $count_creator,
        "count_apprentices" => $count_apprentices
    ]);
});
