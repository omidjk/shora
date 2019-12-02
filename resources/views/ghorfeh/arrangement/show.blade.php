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
                <strong>نام گروه :</strong>
                {{ $organs->group_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کد ارگان :</strong>
                {{$organs->organ_code}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> نام ارگان :</strong>
                {{$organs->organ_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام استان :</strong>
               {{$organs->organ_province}}
            </div>
        </div>
      <!--  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام شهر :</strong>

            </div>
        </div>-->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>آدرس :</strong>
                {{$organs->organ_address}}
            </div>
        </div>

        <td class="align-middle"><a href="{{ route('organs.index')}}" class="btn btn-primary">بازگشت</a></td>
    </div>
@endsection