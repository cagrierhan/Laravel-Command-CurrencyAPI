<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Console\Commands\CurrencyGet;
use AshAllenDesign\LaravelExchangeRates\Classes\Currency;
use App\Http\Controllers\CurrencyController;


Route::get('/', function () {
    return view('home');
});

Route::get('/currency', [CurrencyController::class, 'getCurrency']);

