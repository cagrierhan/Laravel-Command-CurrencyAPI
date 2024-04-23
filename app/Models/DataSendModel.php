<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class DataSendModel extends Model
{
    protected $table = 'UpdateCurrencyVariable';
    protected $fillable = [
        'name',
        'buying',
        'selling',
        'change',
        'update_at',
    ];
}
