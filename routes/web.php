<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

//halaman product
Route::get('/home',function(){
    echo "Ini adalah halaman awal website";
});
Route::prefix('products')->group(function(){
    Route::get('category/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('category/marbel-and-friends-kids-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('category/riri-story-books-animations', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books-animations');
    });
    Route::get('category/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

//halaman news
Route::get('/news',function(){
    return redirect('https://www.educastudio.com/news');
});
Route::get('news/{title}',function($title){
    return redirect('https://www.educastudio.com/news/'.$title);
});

//halaman program
Route::prefix('program')->group(function(){
    Route::get('program/karir', function(){
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('program/magang', function(){
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('program/kunjungan-industri', function(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

//halaman aboutus
Route::get('/HalamanAbout',function(){
    return redirect('https://www.educastudio.com/about-us');
});

//halaman contact us
Route::get('/contactus', [ContactController::class,'contactus']);