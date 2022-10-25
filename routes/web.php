<?php

use App\Events\PublicEvent;
use App\Events\TestEvent;
use Illuminate\Http\Request;
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

Route::get('/color', function () {
    return view('color-picker');
});

Route::get('/check_broadcast', function() {
    event(new TestEvent());
    return view('check-broadcast');
});

Route::post('/fireEvent', function (Request $request) {

    PublicEvent::dispatch($request->color);
})->name('fire.public.event');