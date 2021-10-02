<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer;
use App\Models\Service;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'ID_order';
    protected $fillable = [
        'ID_customer',
        'ID_service',
        'cost',
        'order_date',
        'service_date',
        'status_payment',
    ];
}
