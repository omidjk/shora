<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use DB;

class rite extends Model
{
    use Sortable;
    use SoftDeletes;
    protected $fillable = ['ritename', 'riteyear', 'ritehoto1','ritehoto2','ritehoto3','ritehoto4','ritehoto5','ritehoto6','ritehoto7','ritehoto8','riteroles'];
    public $sortable =['ritename', 'riteyear'];
    protected $dates = ['deleted_at'];
    public static function getmarasem (){
        $value=DB::table('marasem')->get();
        return $value;
    }

}
