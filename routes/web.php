<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


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
    return view('home');
});


//OLD VERSION
// Route::get('/doviz', function () {
//        function getDoviz()
//     {

//         $client = new Client();
//         $response = $client->get(env(EXCHANGE_RATES_API_KEY));
//         $data = json_decode($response->getBody());
//         return view('home',['data' => $data]);
//         dd($data);
//     }
//     return getDoviz();
// });


// //Main Function
// function getDoviz()
// {
//     // API anahtarı .env dosyasından alınıyor
//     $apiKey = env(key:'EXCHANGE_RATES_API_KEY');//'fca_live_Th55xKbmucS0SJhhH3Cc7uBU5QArBeBwZ8yqj2FH';

//     // HTTP isteği yapmak için GuzzleHttp\Client kullanılıyor
//     $client = new Client();
//     $response = $client->get(
//         'https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_Th55xKbmucS0SJhhH3Cc7uBU5QArBeBwZ8yqj2FH&currencies=EUR%2CUSD%2CRUB%2CGBP&base_currency=TRY', [
//         'headers' => [
//             'Authorization' => 'Bearer ' . $apiKey,
//         ]
//     ]);

//     // API'den gelen verileri PHP nesnesine dönüştürme
//     $data = json_decode($response->getBody());


//     // Verileri kontrol etmek için dd() fonksiyonu kullanılıyor
//     dd($data->data);

//     // Görüntülemek için verileri bir view'e geçirme
//     // return view('home', ['data' => $data]);
// }

use App\Console\Commands\CurrencyGet;


Route::get('/currency', function () {
    // $data = CurrencyGet::getCurrency();
    // dd($data);
});

//EXAMPLE DATA STRACTURE
// $response = Http::get('https://finans.truncgil.com/today.json');

// // Array olarak kullanmak için
// $results = $response->json();
// $USDBuying = $results['USD']['Alış'];

// // Collection olarak kullanmak için
// $results = $response->collection();
// $USDBuying = $results->get('USD')['Alış'];

// // Object olarak kullanmak için
// $results = $response->object();
// $USDBuying = $results->USD->{'Alış'}; // ya da $results->USD->Alış



