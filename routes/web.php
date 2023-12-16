<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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

Route::get('/set-session', function (){
    Session::put('user', [
     'name'=>'Asmamaw',
     'email'=>'gebresilase1200015@gmail.com',
     'city'=>'Bahrdar amhara',
    ]);
    return redirect('/');

 });

Route::get('/get-session', function () {
    $item = Session::get('user');
    if($item)
    {
        dd($item);
    }
    return response()->json(['message'=>'There is no history']);
   
});

Route::get('/set-cache', function () {
    cache(['item' => ['name' => 'Cached Item aaaaabbbbbb']], now()->addMinutes(60));
    return redirect('/');
});

Route::get('/get-cache', function () {
    $item = cache('item', ['name' => 'Default Cached Item']);
    return view('cache', ['item' => $item]);
});
Route::get('/clear-session/{key}', function ($key) {
    Session::forget($key);
    return redirect('/');
});

Route::post('/clear-session', function () {
    $key = request('key');
    Session::forget($key);
    return redirect('/');
});
