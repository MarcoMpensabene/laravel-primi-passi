<?php

use Illuminate\Support\Facades\Route;

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

    $title = "Buondi' ";
    $goodDay = true;
    $urlInfo = route("info");
    $urlButton = route("testButton");
    $goodDayList = ['Studiare tanto ', 'Fare esercizio ', 'Andare al Mare ', 'Dormire 8 ore'];
    $badDayList = ['Piangere sotto la doccia ', 'Mangiare gelato per alleviare depressione', 'Puzzare di sudore ', 'Dormire 2 ore'];


    return view('home', compact("title", "goodDay", "goodDayList", "badDayList", "urlInfo", "urlButton"));
})->name("home");

Route::get('/info', function () {
    $home = "Torna alla Home";
    $url = route("home");
    $infoList = ['Penna e quaderno ', 'Idratazione', 'Costume', 'Ventilatore'];
    return view('info', compact("infoList", "home", "url"));
})->name('info');

Route::get('/testButton', function () {
    $press = "PREMI";
    $home = "Torna alla Home";
    $url = route("home");
    return view('testButton', compact("press", "url", "home"));
})->name('testButton');
