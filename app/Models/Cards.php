<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [

        'first_name',
        'last_name',
        'card_number',
        'pin_code',
        'fin_mobile_number',
    ];

}
