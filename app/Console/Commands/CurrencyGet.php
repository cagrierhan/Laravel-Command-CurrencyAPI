<?php

namespace App\Console\Commands;
use GuzzleHttp\Client;
use Illuminate\Console\Command;


class CurrencyGet extends Command
{
    protected $signature = 'currency:get';

    protected $description = 'Get Currenc';

    public function __construct(){
        parent::__construct();
    }

    public function handle(){
        function getCurrency()
        {
            // API anahtarı.env dosyasından alınıyor

            $apiKey = config($apiKey = 'EXCHANGE_RATES_API_KEY'); //'fca_live_Th55xKbmucS0SJhhH3Cc7uBU5QArBeBwZ8yqj2FH';

            // HTTP isteği yapmak için GuzzleHttp\Client kullanılıyor
            $client = new Client();
            $response = $client->get(
                //'https://finans.truncgil.com/today.json',
                'https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_Th55xKbmucS0SJhhH3Cc7uBU5QArBeBwZ8yqj2FH&currencies=EUR%2CUSD%2CRUB%2CGBP&base_currency=TRY',
                [
                    'headers' => [
                        'Authorization' => 'Bearer '. $apiKey,
                    ]
                ]
            );

            // API'den gelen verileri PHP nesnesine dönüştürme
            $data = json_decode($response->getBody());

            // Verileri kontrol etmek için dd() fonksiyonu kullanılıyor
            dd($data->data);
        }

        // $doviz = $exampleInstance->getDoviz();

        // $this->info('Döviz: '. $doviz);
    }

}

// namespace App\Console\Commands;

// use Illuminate\Console\Command;
// use App\Console\Commands\Client;

// class DovizGet extends Command
// {
//     protected $signature = 'doviz:get';

//     protected $description = 'Get Doviz';

//     public function __construct(){
//         parent::__construct();
//     }

//     public function handle(){

//         // $exampleInstance = new ExampleClass();
//         // $doviz = $exampleInstance->getDoviz();

//         // $this->info('Döviz: ' . $doviz);
//     }
//     function getDoviz()
//     {
//         // API anahtarı .env dosyasından alınıyor
//         $apiKey = env(key: 'EXCHANGE_RATES_API_KEY'); //'fca_live_Th55xKbmucS0SJhhH3Cc7uBU5QArBeBwZ8yqj2FH';

//         // HTTP isteği yapmak için GuzzleHttp\Client kullanılıyor

//         $response = $client->get(
//             'https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_Th55xKbmucS0SJhhH3Cc7uBU5QArBeBwZ8yqj2FH&currencies=EUR%2CUSD%2CRUB%2CGBP&base_currency=TRY',
//             [
//                 'headers' => [
//                     'Authorization' => 'Bearer ' . $apiKey,
//                 ]
//             ]
//         );

//         // API'den gelen verileri PHP nesnesine dönüştürme
//         $data = json_decode($response->getBody());


//         // Verileri kontrol etmek için dd() fonksiyonu kullanılıyor
//         dd($data->data);

//         // Görüntülemek için verileri bir view'e geçirme
//         // return view('home', ['data' => $data]);
//     }




// }
