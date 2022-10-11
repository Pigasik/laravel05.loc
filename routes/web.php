<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MyController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\SiteController;
use App\Http\Middleware\MyMiddleware;
use App\Mail\FirstMail;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
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
Route::get('/catalog', CatalogController::class);
Route::get('catalog/{category_id}/{product_id}',[CatalogController::class,'product'])->name('site.product');
Route::get('/cart', [CartController::class, 'getCart'])->name('cart');
Route::post('/add_to_cart', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('/currency',[CurrencyController::class,'index'])->name('currency');
Route::get('/quotes', [QuotesController::class,'index']);
Route::get('/films', [FilmsController::class,'index']);

Route::get('/test', function(Request $request){
    //$product = Product::inRandomOrder()->first();
    //$category = Category::inRandomOrder()->first();
    //dump($category);
    //dd($category->products());
    // $data = [
    //     'name' => 'varonika',
    //     'lastname' => 'pigasova',
    //     'child' => [
    //         'boy' => 'dsf',
    //         'girl' => 'sdfg'
    //     ],
    //     'parents' => [
    //         'mamy', 'dsfg', $request            
    //     ]        
    // ];
    // $json = json_encode($data);
    // dump(json_encode($json));
    // dump((json_decode($json, true))); 
    // $data = $request->all();
    // return response()->json($data)-> setStatusCode(401); 
    
    
    // $query = [
    //     'ondate' => '2016-7-1',
    //     'periodicity'=> '1'
    // ];
    // $client = new Client([
    //     'base_uri' => 'https://www.nbrb.by/api/'
    // ]);
    // // $responce = $client->request('GET', 'exrates/rates/145', [
    // //     'query' => [
    // //         'ondate' => '2016-7-1',
    // //         'periodicity' => '1'
    // //     ]
    // // ]);   
    // $response = $client->get('exrates/rates/145',['query' => $query]);
    // $response = $client->get('exrates/rates',['query' => $query]);
    // dd(json_decode(($response->getBody()->getContents()), true));  
    
    
//     $response = Http::asJson()
//     ->get('https://www.nbrb.by/api/exrates/rates/145?ondate=2016-7-1&periodicity=1');
//     // if ($responce->failed()){
//     //     switch (true){
//     //         case $responce ->clientError():
//     //             ///
//     //             break;
//     //         case $responce ->serverError():
//     //             ///
//     //             break;    
//     //     }
//    // }
//     dd($response->json());
       return view('test');
 });

// валюты  Route::get('/test-convert', function(Request $request){   
//     $responce = Http::get('https://www.nbrb.by/api/exrates/currencies');
//     $currencies = $responce->collect()->keyBy('Cur_Abbreviation');
//     return view('test', compact('currencies'));
//  });

//  Route::post('/test-convert', function(Request $request){
//     $query = [
//         'periodicity' => 0
//     ];
//     $responce = Http::get('https://www.nbrb.by/api/exrates/rates', $query);
//     dd($responce->collect()->keyBy('Cur_Abbreviation'));
    
// });

//Route::get('/', function () {
    //dump(storage_path());
    //Storage::put('1.txt', 'veronika');
    
    //dd(Storage::temporaryUrl('test.txt', now()->addMinutes(5)));
    //return view('welcome');
//})->middleware(MyMiddleware::class);

// Route::get('/any_file', function(){
//     return Storage::download('test.txt');
// });

// Route::get('/weather', function(Request $request){
//     $query = [
//         'key' => env('WEATHER_API_KEY'),
//         'q' => 'Misk',
//         'dt' => '1986-08-31'
//     ];
//     $client = Http::baseUrl('http://api.weatherapi.com/v1');
//     $responce = $client->get('/current.json', $query);
//     $result = $responce['current']['temp_c'].'C'. ' '.$responce['location']['region'].$query['dt'];
//     dd($result);
// });

// Route::get('/weather', function(Request $request){
//     $query = [
//         'key' => 'kKitYKz9Oa2nxe933jhhIO0mYqSnVX6x',
//         'limit' => 25,
//         'rating' => 'g'        
//     ];
//     $responce = Http::get('https://api.giphy.com/v1/gifs/trending', $query);
//     foreach($responce->collect(['data']) as $gif){
//         echo "<img src='{$gif['embed_url']}'/>";
//     }
// });

Route::get('/weather', function(Request $request){
        // $query = [
        //     'lang' => 'ru',
        //     'type' => 'json'    
        // ];
        // $responce = Http::get('https://evilinsult.com/generate_insult.php', $query);
        // dd($responce->json());  
        
        // Http::post('https://app.sms.by//api/v1/requisites', [
        //     'token' => '',
        //     'message' => '',
        //     'phone' => ''
        // ]);
        $mail = new FirstMail('Hello mail');
        Mail::send($mail);
        

    });





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

