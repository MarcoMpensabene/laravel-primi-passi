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
    $url = route("info");
    $goodDayList = ['Studiare tanto ', 'Fare esercizio ', 'Andare al Mare ', 'Dormire 8 ore'];
    $badDayList = ['Piangere sotto la doccia ', 'Mangiare gelato per alleviare depressione', 'Puzzare di sudore ', 'Dormire 2 ore'];


    return view('home', compact("title", "goodDay", "goodDayList", "badDayList", "url"));
});

Route::get('/info', function () {

    $infoList = ['Penna e quaderno ', 'Idratazione', 'Costume', 'Ventilatore'];
    return view('info', compact("infoList"));
})->name('info');
