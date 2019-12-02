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
                <strong>سال:</strong>
                {{$cordinator->yearofreq}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام هماهنگ کننده :</strong>
                {{$cordinator->corname}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>>نام خانوادگی هماهنگ کننده :</strong>
                {{$cordinator->corfamily}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کد ملی هماهنگ کننده :</strong>
                {{$cordinator->cornational}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تلفن ثابت :</strong>
                {{$cordinator->corphone}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تلفن همراه :</strong>
                {{$cordinator->cormobile}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>فکس :</strong>
                {{$cordinator->corfax}}
            </div>
        </div>

        <td class="align-middle"><a href="{{ route('ghorfeha.index')}}" class="btn btn-primary">بازگشت</a></td>
    </div>
@endsection