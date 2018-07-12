<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table='customers';
    protected $fillable = [
        'firstname','lastname', 'email', 'password','address','phonenumber','districtname'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function isAdmin(){
        return $this->admin;
    }


}
