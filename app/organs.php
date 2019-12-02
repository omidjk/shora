<?php

namespace App;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use DB;

class organs extends Model
{
    use Sortable;
    protected $fillable = ['group_name', 'organ_code', 'organ_name' , 'organ_address','province','city'];
    public $sortable = ['id', 'group_name', 'organ_code', 'organ_name','province','city'];
        public static function getghorfehgroup (){
            $value=DB::table('ghorfehcodegroups')->get();
           return $value;
           }
        public static function oprovince ()
        {
            $value = DB::table('province')->orderBy('id', 'asc')->get();
            return $value;
        }
        public static function city ($oprovinceid)
        {
            $value = DB::table('city')->where('pcode', $oprovinceid)->get();
            return $value;
        }

}
