<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $guarded = ['id'];

    public function Post()
    {
        return $this->belongsTo(\App\Models\Post::class, 'id_post');
    }
}