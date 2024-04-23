<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use App\Models\DataSendModel;
use Illuminate\Console\Command;

class CurrencyGet extends Command
{
    protected $signature = 'get:currency';
    protected $description = 'Get Currency';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
{
    $client = new Client();
    $response = $client->get('https://finans.truncgil.com/devextreme-datasource.php');
    $data = json_decode($response->getBody(), true);



            foreach ($data as $key) {

              DataSendModel::updateOrCreate(

                  [
                    'name' => $key['Currency'],
                    'buying' => $key['Buying'],
                    'selling' => $key['Selling'],
                    'change' => $key['Change'],
                ]);

            // DataSendModel::where('name', $key['Currency'])
            //     ->update([
            //         'buying' => $key['Buying'],
            //         'selling' => $key['Selling'],
            //         'change' => $key['Change'],
            //     ]);
     $this->info('Currency data retrieved and saved successfully.');
        }
    }
}
