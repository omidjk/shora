<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;


class property extends Model
{
    use Sortable;
    use SoftDeletes;
    public $sortable =['mapid', 'propertyname', 'width','pelakno'];
    protected $fillable = ['mapid', 'propertyname', 'width','pelakno'];
    protected $dates = ['deleted_at'];
}
