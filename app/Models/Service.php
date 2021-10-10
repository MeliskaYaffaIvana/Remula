<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $primaryKey = 'ID_service';
    protected $fillable = [
        'ID_user',
        'service_name',
        'description',
        'price',
    ];
}
