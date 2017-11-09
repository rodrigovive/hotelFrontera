<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    //
    protected $table = 'rents';
    protected $fillable = ["date_start","date_end","mount","bed","days","observation","room_id","guest_id"];

    public function room(){
        return $this->belongsTo(Room::class);
    }
    public function guest(){
        return $this->belongsTo(Guest::class);
    }
}
