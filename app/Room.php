<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $table = 'rooms';
    protected $fillable = ["state","num_room","type_id"];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function rents(){
        return $this->hasMany(Rent::class);
    }

}
