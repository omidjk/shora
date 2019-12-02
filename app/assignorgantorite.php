<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class assignorgantorite extends Model
{
    use Sortable;
    use SoftDeletes;
    public $sortable =['ritename', 'riteyear', 'organname','organprovince'];
    protected $fillable = ['ritename', 'riteyear', 'organid','organname','organcode','organprovince','organcity','ghorfehmarchigtype','numberghorfeh',
    'ghorfehmeteraj','ghorfehmeterajkol','ghormasname','ghormasfamily','ghormasnational','ghormasphone','ghormasmobile','itemtype','itemname','itemnumber',
    'corname','corfamily','cornational','corphone','cormobile','corfax','mapdirection','mapstreet','mapplace1','mapbeetween1','mapplace2','mapbeetween2',
    'mapphoto','propertyname','propertywidth','propertypelakno','licensestand','licenseanswerable','licensecontroller','licenseother'];
    protected $dates = ['deleted_at'];
}
