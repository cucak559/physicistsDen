<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplicant extends Model
{
     public function groups(){
        return $this->belongsToMany(Group::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
