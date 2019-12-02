<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use DB;


class item extends Model
{
    use Sortable;
    use SoftDeletes;
    protected $fillable = ['ghorfehid', 'itemtype', 'itemname','itemnumber'];
    public $sortable =['ghorfehid', 'itemtype', 'itemname','itemname'];
    protected $dates = ['deleted_at'];
    public static function getitems (){
        $value=DB::table('itemtypes')->get();
        return $value;
    }
}
