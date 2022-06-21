<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{     //here varibles that can use to mass assignment
    protected $fillable=[ 'name',
    'email' ,
    'phone',
    'msg',
    'building_number' ,
    'apartment_number' ,
    'user_id'];
    //way no.2  reverse fillable
   // protected $guarded =[];
    public function user(){
        return $this->belongsTo(user::class);
    }
}
