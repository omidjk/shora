<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class cordinator extends Model
{
    use Sortable;
    use SoftDeletes;
    public $sortable =['yearofreq', 'organid', 'cornational'];
    protected $fillable = ['yearofreq', 'organid', 'corname','corfamily','cornational','corphone','cormobile','corfax'];
    protected $dates = ['deleted_at'];
    //
}
