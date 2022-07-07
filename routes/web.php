<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\RoleController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/dashboard',[PostController::class,'dashboard'])->name('dashboard.index');
Route::prefix('categories')->group(function (){
    Route::get('/',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/store',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/edit/{category}',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/update/{category}',[CategoryController::class,'update'])->name('categories.update');
    Route::get('/destroy/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');
});

Route::prefix('posts')->group(function (){
    Route::get('/',[PostController::class,'index'])->name('posts.index');
    Route::get('/create',[PostController::class,'create'])->name('posts.create');
    Route::post('/store',[PostController::class,'store'])->name('posts.store');
    Route::get('/edit/{post}',[PostController::class,'edit'])->name('posts.edit');
    Route::post('/update/{post}',[PostController::class,'update'])->name('posts.update');
    Route::get('/destroy/{post}',[PostController::class,'destroy'])->name('posts.destroy');
    Route::get('/create',[PostController::class,'create'])->name('posts.create');
});
Route::prefix('roles')->group(function (){
    Route::get('/',[RoleController::class,'index'])->name('roles.index');
    Route::get('/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/store',[RoleController::class,'store'])->name('roles.store');
    Route::get('/edit/{role}',[RoleController::class,'edit'])->name('roles.edit');
    Route::post('/update/{role}',[RoleController::class,'update'])->name('roles.update');
    Route::get('/destroy/{role}',[RoleController::class,'destroy'])->name('roles.destroy');
});
Route::get('tags/show',[TagController::class,'show'])->name('tags.show');

