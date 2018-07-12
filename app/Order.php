<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Notifiable;

    protected $table='orders';
    protected $fillable = [
        'customerId','shippinhId', 'orderTotal',
    ];
}
