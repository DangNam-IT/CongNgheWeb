<?php

namespace App\Models;

use Illuminate\Support\Facades\App; 
use Illuminate\Database\Eloquent\Model;
use btvnPost\Database\Seedeers\DatabaseSeeder;

class Post extends Model
{
    protected $fillable =  [
        'title',
        'content',
    ];
   
}
