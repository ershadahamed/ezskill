<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentSetting extends Model
{
    protected $fillable = [
        'name', 'amount', 'billpls_token', 'description'
    ];

    // Bill pls currency are in token based exact RM multiply with 100
    public function setAmountAttribute($amount){
        $this->attributes['billpls_token'] = ($amount * 100);
    }
}
