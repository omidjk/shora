<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class arrangement extends Model
{
    use Sortable;
    use SoftDeletes;
    public $sortable =['riteid', 'riteelement', 'elementtable'];
    protected $fillable = ['riteid', 'ritephoto', 'riteelement','elementtable','elementname','elementfontsize','elementfontname','elementcolor','elementnamefontsize','elementnamefontname','elementnamecolor'];
    protected $dates = ['deleted_at'];
    public static function getmarasem (){
        $value=DB::table('rites')->orderByRaw('id DESC')->get();
        return $value;
    }
    public static function gettablelist (){
        $value=DB::select('SHOW TABLES');
        $value = array_map('current',$value);
        return $value;
    }
    public static function getfieldlist ($tablename){
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($tablename);

    }
    public static function getfontfamily (){
        $value=DB::table('fontfamily')->orderByRaw('id DESC')->get();
        return $value;
    }

}
