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
           ویرایش گروه
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
          <form method="post" action="{{ route('ghorfehgroup.update', $ghorfehcodegroups->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="name">نام گروه :</label>
                    <input type="text" class="form-control" name="group_name" value="{{$ghorfehcodegroups->group_name}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">کد گروه :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="3" maxlength="5" class="form-control" name="group_code" value="{{$ghorfehcodegroups->group_code}}"/>
                </div>
              <td><a href="{{ route('ghorfehgroup.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">بروز رسانی گروه</button>
            </form>
        </div>
    </div>
@endsection