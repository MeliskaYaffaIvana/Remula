<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
    public function user() {
        return $this->belongsTo(User::class, 'ID_user');
    }
}
