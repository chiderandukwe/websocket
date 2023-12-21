<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Events\latestBroadcast;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('send/event', function (Request $request) {
    event(new latestBroadcast());
    User::create(
        [
            'name' => "my name",
            'email' => "my email",
            'password' => "my datet",
        ]
    );
    return response()->json('workde', 200);
});