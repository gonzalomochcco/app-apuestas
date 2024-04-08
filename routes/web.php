<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayersController;
//use Illuminate\Support\Facades\Auth;

use App\Models\Roles;
use App\Models\User;

Route::middleware('guest')->group(function () {

    Route::redirect( '/' , '/login' );

    Route::get("/login" , [AuthController::class, 'index'])->name("login");  

    Route::post('/auth/login', [AuthController::class, 'login'])->name("auth.login");

});

Route::middleware('auth')->group(function () {    
    
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name("auth.logout");

    Route::get("/home" , [HomeController::class, 'index'])->name("home");  
    
    Route::get("/players/manage" , [PlayersController::class, 'index'])->name("players.list");  

    Route::get('/player/refills/{player_id}', [PlayersController::class, 'refills'])->where('player_id', '[A-Z0-9]+')->name("player.refills");

    Route::post('/player/refills/create', [PlayersController::class, 'create'])->name("refills.create");

});

/**Route::get('pagenotfound', function(){

    if(Auth::guest()){
        return redirect()->name("login");
    }else{
        return redirect()->name("home");
    }
    
})->name('pagenotfound');**/