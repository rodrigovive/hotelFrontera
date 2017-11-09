<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //
    protected $table = "guests";
    protected $fillable = ["name","lastname","country","city","direction","dni","birth","occupation"];
    
    public function rents(){
        return $this->hasMany(Rent::class);
    }
}
