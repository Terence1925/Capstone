<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Comment extends Model
{
    protected $fillable = ['user_id', 'article_id', 'content'];
}
