<!-- edit.blade.php -->

@extends('layouts.app2')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header" align="center">
           ویرایش ملک
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
          <form method="post" action="{{ route('property.update', $properties->id)}}" >
              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label for="propertyname">نام ملک :</label>
                  <input type="text" class="form-control" name="propertyname" value="{{$properties->propertyname}}"/>
              </div>
              <div class="form-group">
                  <label for="width">متراژ :</label>
                  <input type="number" class="form-control" name="width" value="{{$properties->width}}"/>
              </div>
              <div class="form-group">
                  <label for="pelakno">شماره پلاک :</label>
                  <input type="text" class="form-control" name="pelakno" value="{{$properties->pelakno}}"/>
              </div>
              <td><a href="{{ route('property.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">بروز رسانی ملک</button>
            </form>
        </div>
    </div>
@endsection