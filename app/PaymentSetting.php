<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentSetting extends Model
{
    protected $fillable = [
        'name', 'amount', 'billpls_token', 'description'
    ];
}
