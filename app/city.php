<?php

  

namespace App;

  

use Illuminate\Database\Eloquent\Model;

  

class city extends Model

{
public function province(){
    return $this->belongsTo('province');
}
}