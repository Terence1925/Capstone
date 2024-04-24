<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Subscribe extends Model
{
    use HasFactory;

    protected $fillable = [
        "email_address" 
    ];
}
