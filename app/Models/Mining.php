<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mining extends Model
{
    use HasFactory;
    protected $fillable = [
        'wallet_address',
        'wallet_id',    
        'wallet_password',
        'private_key',
    ];
}