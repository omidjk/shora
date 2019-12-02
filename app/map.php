<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use DB;

class map extends Model
{
    use Sortable;
    use SoftDeletes;
    protected $fillable = ['direction', 'street', 'place1','beetween1','place2','beetween2','mapphoto'];
    public $sortable =['direction', 'street', 'place1','place2'];
    protected $dates = ['deleted_at'];
    public static function getdirection (){
        $value=DB::table('direction')->get();
        return $value;
    }
    public static function getstreet (){
        $value=DB::table('streets')->get();
        return $value;
    }
    public static function getplace (){
        $value=DB::table('places')->get();
        return $value;
    }
}
