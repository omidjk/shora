<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ghorfehcodegroup extends Model
{
    protected $fillable = ['group_name', 'group_code'];
          public $sortable = ['id', 'group_name', 'group_code'];
}
