<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class CurrencyController extends Controller
{
    public function getCurrency()
    {
        $client = new Client();
        $response = $client->get('fca_live_Th55xKbmucS0SJhhH3Cc7uBU5QArBeBwZ8yqj2FH');
        $data = json_decode($response->getBody());
        return view('home',['data' => $data]);
    }
}
