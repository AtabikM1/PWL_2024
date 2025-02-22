<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);
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

// Route::get('/hello', function () {
//     return 'Hello World';
// });
// Route::get('/world', function () {
//     return 'World';
// });
// Route::get('/', function () {
//     return 'Selamat Datang';
// });
// Route::get('/about', function () {
//     return '2341720090 | Atabik Mutawakilalallah';
// });
// Route::get('/user/{nama}', function ($name){
//     return 'Nama saya '. $name;
// });
// Route::get('/post/{nama}/comments/{comment}', function ($postId, $commentId){
//     return 'Pos ke-'. $postId. " Komentar ke-: ".$commentId;
// });
// Route::get('/articles/{id}', function ($id){
//     return 'Halaman Artikel dengan ID '. $id;
// });
// Route::get('/user/{name?}', function ($name='Biki'){
//     return 'Nama saya ' .$name;
// });
Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);
Route::get('/greeting', function () {
return view('blog.hello', ['name' => 'Biki']);
});
Route::get('/greeting', [WelcomeController::class,
'greeting']);