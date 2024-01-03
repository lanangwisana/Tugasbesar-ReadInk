<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\bookmarkController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\penulisController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FavoritController;
use App\Models\bookmark;
use App\Models\history;
use App\Models\penulis;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/halamanbaca2-author', function () {
        return view('Author.halamanBaca2');
    });

    // Route::get('/mulaibaca-author', function () {
    //     return view('tulis.mulaiBaca');
    // });

    Route::get('/favorit-author', function () {
        return view('Author.Favorit');
    });

    Route::get('/tulis-author', function () {
        return view('Author.Tulis');
    });

    Route::get('/addcerita-author', function () {
        return view('Author.Addcerita');
    });

    // Route::get('/addcerita-author', [AuthorController::class, 'index'] );

    Route::get('/tuliscerita-author', function () {
        return view('tulis.detail');
    });

    Route::get('/editcerita-author', function () {
        return view('Author.Editcerita');
    });

    // Route::get('/dashboard-pembaca', function () {
    //     return view('Pembaca.Dashboard');
    // });

    Route::get('/mulaibaca-pembaca', function () {
        return view('Pembaca.mulaiBaca');
    });

    Route::get('/baca-pembaca', function () {
        return view('Pembaca.halamanBaca');
    });

    Route::get('/halamanbaca2-pembaca', function () {
        return view('Pembaca.halamanBaca2');
    });

    Route::get('/mulaibaca-pembaca', function () {
        return view('Pembaca.mulaiBaca');
    });

    Route::get('/halamanbaca2-pembaca', function () {
        return view('Pembaca.halamanBaca2');
    });

    Route::get('/mulaibaca-pembaca', function () {
        return view('Pembaca.mulaiBaca');
    });

    Route::get('/bookmark-pembaca', function () {
        return view('Pembaca.Bookmark');
    });

    Route::get('/favorit-pembaca', function () {
        return view('Pembaca.Favorit');
    });

    Route::get('/histori-pembaca', function () {
        return view('Pembaca.Histori');
    });

    Route::get('/setting-pembaca', function () {
        return view('Pembaca.setting');
    });

    //Route Crud

    route::get('tulis-author', [penulisController::class, 'index']);
    route::get('add-tulis-author', [penulisController::class, 'create']);
    Route::post('/add-tulis-author', [penulisController::class, 'store'])->name('add-tulis-author');
    route::get('/edit-tulis/{id}', [penulisController::class, 'edit']);
    route::put('/add-tulis-author/{id}', [penulisController::class, 'update']);
    Route::get('/delete-tulis/{id}', [penulisController::class, 'delete']);
    Route::delete('/tulis/{id}', [penulisController::class, 'destroy']);
    route::get('tulis-author-search', [penulisController::class, 'search']);

    // routes home
    route::get('dashboard-author', [homeController::class, 'index']);
    route::get('bookmark-author', [bookmarkController::class, 'index']);
    route::get('history-author', [historyController::class, 'index']);
    route::get('halamanbaca-author/{id}', [penulisController::class, 'halamanbacaauthor']);
});

// routes isi cerita
// isi cerita
Route::get('/detail-cerita/{id}', [NovelController::class, 'detail']);

Route::get('/detail-isicerita/{id}', [NovelController::class, 'isicerita']);
Route::get('/isicerita/{id}', [NovelController::class, 'isicerita']);
Route::get('/add-isicerita', [NovelController::class, 'isibaru']);
Route::post('/isi-cerita', [NovelController::class, 'storee']);
Route::get('/edit-isi/{id}', [NovelController::class, 'editisi']);
Route::put('/isi/{idcerita}', [NovelController::class, 'updateisi']);
Route::get('/delete-isicerita/{id}', [NovelController::class, 'deleteisi']);
Route::delete('/deleteisi/{id}', [NovelController::class, 'destroyisi']);

Route::get('/mulaibaca-author', [NovelController::class, 'mulaibaca']);

// route pembaca
route::get('/dashboard-pembaca', [penulisController::class, 'indexpembaca']);

Route::get('/login2', [LoginController::class, 'showLoginForm'])->name('login2');

//favorit
// Route::get('/favorit', [FavoritController::class, 'index']);
Route::get('/favorit-author', [FavoritController::class, 'index']);
Route::get('/fav-create/{id}', [FavoritController::class, 'create']);
Route::post('/fav-store/{id}', [FavoritController::class, 'store']);

// Bookmark
Route::get('/bookmark-author', [BookmarkController::class, 'index']);
Route::get('/bookmark-create/{id}', [BookmarkController::class, 'create']);
Route::post('/bookmark-store/{id}', [BookmarkController::class, 'store']);
