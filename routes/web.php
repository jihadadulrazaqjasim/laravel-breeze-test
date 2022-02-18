<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    // $re = '/\d/i';
    // $str = 'Theraini nSP1 AINfallsmain2yonth1e3plains.';
    // (preg_match_all($re, $str, $matches, PREG_OFFSET_CAPTURE, 0));
    // // Print the entire match result
    // var_dump($matches[0]);


    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('post', PostController::class);
// Route::get('post', [PostController::class, 'index'])->name('post.index');

require __DIR__ . '/auth.php';
