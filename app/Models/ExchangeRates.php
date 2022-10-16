<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRates extends Model
{
    use HasFactory;
    protected $fillable = ['Cur_Abbreviation', 'Cur_OfficialRate', 'Cur_Scale' ];
}
