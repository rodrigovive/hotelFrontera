<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $table = "types";
    protected $fillable = ["cost","name","num_bed"];

    public function rooms(){
        return $this->hasMany(Room::class);
    }
}
