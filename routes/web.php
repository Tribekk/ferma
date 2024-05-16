<?php

use App\Models\Project;
use App\Models\Review;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('pages.home');
})->name('home');
Route::get('/about', function () {
    $reviews = Review::all();
    return view('pages.about', compact('reviews'));
})->name('about');
Route::get('/projects', function () {
    $projects = Project::all();
    return view('pages.projects', compact('projects'));
})->name('projects');
Route::get('/project/{project}', function (Project $project) {
    return view('pages.project', compact('project'));
})->name('project');
Route::get('/review', function () {
    $reviews = Review::all();
    return view('pages.review', compact('reviews'));
})->name('review');
Route::post('/review', function (Request $request) {
    $request->validate([
        'email' => 'required|email|unique:reviews',
        'number' => 'required|unique:reviews',
        'FIO' => 'required|max:255',
        'review' => 'required|unique:reviews'
    ]);
    $newReview = [
        'email' => $request->email,
        'number'=>$request->number,
        'FIO' =>$request->FIO,
        'review'=>$request->review,
    ];

    Review::create($newReview);
    return redirect(route('review'));
});
Route::get('/contact', function (){
    return view('pages.contact');
})->name('contact');
