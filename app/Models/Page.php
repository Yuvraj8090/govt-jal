<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id', 'title', 'excerpt', 'body', 'image', 'slug',
        'meta_description', 'meta_keywords', 'status'
    ];
}
