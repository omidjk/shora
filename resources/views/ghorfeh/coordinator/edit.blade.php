<!-- edit.blade.php -->

@extends('layouts.app2')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <script>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    <div class="card uper">
        <div class="card-header" align="center">
           ویرایش هماهنگ کننده
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
          <form method="post" action="{{ route('cordinator.update', $cordinators->id)}}" >
              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label for="yearofreq">سال :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="4" maxlength="4" class="form-control" name="yearofreq" value="{{$cordinators->yearofreq}}"/>
              </div>
              <div class="form-group">
                  <label for="corname">نام هماهنگ کننده :</label>
                  <input type="text" class="form-control" name="corname" value="{{$cordinators->corname}}"/>
              </div>
              <div class="form-group">
                  <label for="corfamily">نام خانوادگی هماهنگ کننده :</label>
                  <input type="text" class="form-control" name="corfamily" value="{{$cordinators->corfamily}}"/>
              </div>
              <div class="form-group">
                  <label for="cornational">کد ملی هماهنگ کننده :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" class="form-control" name="cornational"value="{{$cordinators->cornational}}"/>
              </div>
              <div class="form-group">
                  <label for="corphone">تلفن ثابت :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="8" maxlength="8" class="form-control" name="corphone" value="{{$cordinators->corphone}}"/>
              </div>
              <div class="form-group">
                  <label for="cormobile">تلفن همراه :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="11" maxlength="11" class="form-control" name="cormobile" value="{{$cordinators->cormobile}}"/>
              </div>
              <div class="form-group">
                  <label for="corfax">فکس :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="8" maxlength="8" class="form-control" name="corfax" value="{{$cordinators->corfax}}"/>
              </div>
              <td><a href="{{ route('cordinator.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">بروز رسانی هماهنگ کننده</button>
            </form>
        </div>
    </div>
@endsection