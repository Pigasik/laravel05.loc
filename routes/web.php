<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Middleware\MyMiddleware;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', SiteController::class);

//Route::get('/', function () {
    //dump(storage_path());
    //Storage::put('1.txt', 'veronika');
    
    //dd(Storage::temporaryUrl('test.txt', now()->addMinutes(5)));
    //return view('welcome');
//})->middleware(MyMiddleware::class);

// Route::get('/any_file', function(){
//     return Storage::download('test.txt');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//middleware('auth')-> встроенный 
Route::prefix('admin')->group(function(){
    Route::get('/', [MyController::class, 'index']);
    //Route::resource('categories', CategoryController::class)->except(['show']);
    //Route::resource('products', ProductController::class);
    Route::resources([
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'articles' => ArticleController::class
    ]);
});

