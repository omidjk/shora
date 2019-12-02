<!-- create.blade.php -->

@extends('layouts.app2')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>

    <div class="card uper">
        <div class="card-header" align="center">
           افزودن ملک
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
            <form method="post" action="{{ route('property.store') }}" >
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" name="mapid" readonly="readonly" value="{{$mapid}}"/>
                </div>
                <div class="form-group">
                    <label for="propertyname">نام ملک :</label>
                    <input type="text" class="form-control" name="propertyname"/>
                </div>
                <div class="form-group">
                    <label for="width">متراژ :</label>
                    <input type="number" class="form-control" name="width"/>
                </div>
                <div class="form-group">
                    <label for="pelakno">شماره پلاک :</label>
                    <input type="text" class="form-control" name="pelakno"/>
                </div>
                <td><a href="{{ route('property.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ایجاد ملک</button>


            </form>
        </div>
    </div>
@endsection