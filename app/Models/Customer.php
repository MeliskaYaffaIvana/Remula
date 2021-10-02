<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'ID_customer';
    protected $fillable = [
        'ID_user',
        'privateKey',
    ];
}
