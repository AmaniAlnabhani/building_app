<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    public function user(){
        return $this->belongsTo(user::class);
    }
}
