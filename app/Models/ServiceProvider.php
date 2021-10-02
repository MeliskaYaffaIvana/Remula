<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ServiceProvider extends Model
{
    use HasFactory;
    protected $table = 'service_provider';
    protected $primaryKey = 'ID_serviceProvider';
    protected $fillable = [
        'ID_user',
        'privateKey',
    ];
}
