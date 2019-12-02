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
                <strong>کد غرفه:</strong>
                {{$item->ghorfehid}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نوع اقلام پذیرایی :</strong>
                {{$item->itemtype}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>شرح :</strong>
                {{$item->itemname}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تعداد :</strong>
                {{$item->itemnumber}}
            </div>
        </div>
        <td class="align-middle"><a href="{{ route('item.index','id='.$item->ghorfehid)}}" class="btn btn-primary">بازگشت</a></td>
    </div>
@endsection