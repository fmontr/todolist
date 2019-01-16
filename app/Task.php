<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    //Relation Tasks x user
    public function user() {
        return $this->belongsTo(\App\User::class);
    }
}
