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
                <strong>کد نقشه:</strong>
                {{$property->mapid}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام ملک :</strong>
                {{$property->propertyname}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>متراژ :</strong>
                {{$property->width}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>شماره پلاک :</strong>
                {{$property->pelakno}}
            </div>
        </div>
        <td class="align-middle"><a href="{{ route('property.index','id='.$property->mapid)}}" class="btn btn-primary">بازگشت</a></td>
    </div>
@endsection