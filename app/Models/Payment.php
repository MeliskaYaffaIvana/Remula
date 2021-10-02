<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $primaryKey = 'ID_payment';
    protected $fillable = [
        'ID_order',
        'ID_date',
        'amount',
        'description',
    ];
}
