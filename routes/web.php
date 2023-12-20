<?php

use App\Events\latestBroadcast;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\websockets\SocketHandler\UpdateDataSocketHandler;
use BeyondCode\LaravelWebSockets\Facades\WebSocketsRouter;

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
// WebSocketsRouter::webSocket('/connect', function () {
//     dd('holla');
// });
WebSocketsRouter::webSocket('/connect', UpdateDataSocketHandler::class);

Route::get('color/worker', function () {
    return view('birthday');
});
Route::get('make/find', function () {
    return event(new latestBroadcast());
});
Route::get('doo/artisan/command', function () {
    return Artisan::call('websockets:serve');
});