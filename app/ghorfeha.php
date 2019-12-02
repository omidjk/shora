<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use DB;

class ghorfeha extends Model
{
    use Sortable;
    use SoftDeletes;
    protected $fillable = ['yearofreq', 'marchigtype', 'numberghorfeh','meteraj','meterajkol','structuretypetext','activitytype','ghormasname','ghormasfamily','ghormasnational','ghormasphone','ghormasmobile','ghormasphoto','specials','organid','darbast','spacer','felezi','cultural','entertainment','theraputic','sportive','news','artistic'];
    public $sortable =['yearofreq', 'marchigtype', 'numberghorfeh','meteraj','meterajkol','structuretype','activitytype','specials'];
    protected $dates = ['deleted_at'];
    public static function getrites (){
        $value=DB::table('rites')->get();
        return $value;
    }
   /* public static function getactivitytype (){
        $value=DB::table('activitytype')->get();
        return $value;
    }*/
}
