<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    //
    protected $fillable = ['name','address', 'contact_number'];
    public function products(){
        return $this->hasMany(Book::class);
    }
}
