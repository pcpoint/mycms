<?php

namespace App;
use App\Role;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user(){
       return $this->hasOne('App\user');
    }
}
