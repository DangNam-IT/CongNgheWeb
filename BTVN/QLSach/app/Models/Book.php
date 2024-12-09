<?php

namespace App\Models;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Book extends Model
{
    //
    protected $fillable = ['title','author','publication','genre','library_id'];
    public function library(){
        return $this->belongsTo(Library::class);
    }
    public function loading(){
        $load = App::make(DatabaseSeeder::class);
        $load->run();
    }
}
