@extends('layouts.app2')

@section('content')

    <div class="row" style="margin-bottom: 20px;" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h3>نمایش اطلاعات</h3>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>جهت:</strong>
                {{ $map->direction }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>خیابان :</strong>
                {{$map->street}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>از :</strong>
                {{$map->place1." ".$map->beetween1}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تا :</strong>
                {{$map->place2." ".$map->beetween2}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر مسئول :</strong>
                <img class="img-fluid" src="/map/{{ $map->mapphoto }}" class="img-thumbnail" />

            </div>
        </div>
        <td class="align-middle"><a href="{{ route('maps.index')}}" class="btn btn-primary">بازگشت</a></td>
    </div>
@endsection