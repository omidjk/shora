<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;
use DB;

class office extends Model
{
    use Sortable;
    use SoftDeletes;
    protected $fillable = ['officename','officecode', 'province', 'city','age','floors','units','guestroom','frontage','firealarm','fireext','shield','location','usage','ownership','organsposition','population','leaderagent','governor','provincecouncil','commanderarmy',
        'commanderpolice','address','postalcode','phonenumber','mobile','bulidingmaps'];
    public $sortable =['officename', 'province', 'city','age','floors','units','guestroom','frontage','firealarm','fireext','shield','location','usage','ownership','organsposition','population'];
    protected $dates = ['deleted_at'];
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
