<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stamp extends Model
{
    protected $table = 'stamps';
    protected $fillable = [
        'article', 'subcategory_id', 'title', 'description', 'cost', 'count'
    ];
}
