<?php

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
    $comicsArr = config("comics");
    return view('home', ['comicsArr' => $comicsArr],);
})->name('home');

Route::get('/products/{id}', function ($id) {
    $comic = null;
    foreach (config('comics') as $value) {
        if ($value['id'] == $id) {
            $comic = $value;
            break;
        }
    }
    if ($comic) {
        return view('products', [
            'comic'     => $comic,
        ]);
    } else {
        abort(404);
    }
})->name('product');
