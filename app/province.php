<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;


class province extends Model

{
public function cities(){
    return $this->hasMany('city');
}
}