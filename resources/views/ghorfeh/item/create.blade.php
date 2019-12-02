<!-- create.blade.php -->

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
           افزودن اقلام پذیرایی
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
            <form method="post" action="{{ route('item.store') }}" >
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" name="ghorfehid" readonly="readonly" value="{{$ghorfehid}}"/>
                </div>
                <div class=" custom-control radio-inline custom-control-inline">
                    @csrf
                    <label for="direction">نوع اقلام پذیرایی :
                        @foreach($getitems['data'] as $key => $getitems)
                            <input type="radio" class="custom-control-label" name="itemtype" value="{{$getitems->name}}">{{"  ".$getitems->name."  "}}
                        @endforeach
                    </label>
                </div>
                <div class="form-group">
                    <label for="itemname">شرح :</label>
                    <input type="text" class="form-control" name="itemname"/>
                </div>
                <div class="form-group">
                    <label for="itemnumber">تعداد :</label>
                    <input type="text" onkeypress="return isNumberKey(event)"  maxlength="9" class="form-control" name="itemnumber"/>
                </div>
                <td><a href="{{ route('item.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ایجاد اقلام</button>


            </form>
        </div>
    </div>
@endsection