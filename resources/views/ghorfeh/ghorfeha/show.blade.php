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
              <strong>کد ارگان:</strong>
              {{ $ghorfeha->organid }}
          </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سال:</strong>
                {{ $ghorfeha->yearofreq }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>راهپیمایی :</strong>
                {{$ghorfeha->marchigtype}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تعداد غرفه :</strong>
                {{$ghorfeha->numberghorfeh}}
            </div>
        </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>متراژ :</strong>
              {{$ghorfeha->meteraj}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>متراژ کل:</strong>
              {{$ghorfeha->meterajkol}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نوع سازه :</strong>
              {{$ghorfeha->structuretype}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نوع فعالیت :</strong>
              {{$ghorfeha->activitytype}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نام مسئول غرفه :</strong>
              {{$ghorfeha->ghormasname}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>نام  خانوادگی مسئول غرفه :</strong>
              {{$ghorfeha->ghormasfamily}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>کدملی :</strong>
              {{$ghorfeha->ghormasnational}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>تلفن ثابت :</strong>
              {{$ghorfeha->ghormasphone}}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>تلفن همراه :</strong>
              {{$ghorfeha->ghormasmobile}}
          </div>
      </div>
      <div class="col-md-3 px-0">
          <div class="form-group">
              <strong>تصویر مسئول :</strong>
              <img src="/storage/app/public/image/{{ $ghorfeha->ghormasphoto }}" class="img-thumbnail" />
          </div>
      </div>

  </div>
    <td class="align-middle"><a href="{{ route('ghorfeha.index')}}" class="btn btn-primary">بازگشت</a></td>
@endsection