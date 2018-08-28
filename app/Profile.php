<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address1', 'address2', 'postcode', 'city', 'state', 'phone_fixed', 'phone_mobile', 'phone_fax', 'picture',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
