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
           افزودن نقشه
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
            <form method="post" action="{{ route('maps.store') }}" enctype="multipart/form-data">
                <div class=" custom-control radio-inline custom-control-inline">
                    @csrf
                    <label for="direction">جهت :
                        @foreach($odirection['data'] as $key => $odirection)
                            <input type="radio" class="custom-control-label" name="direction" value="{{$odirection->name}}">{{"  ".$odirection->name."  "}}
                        @endforeach
                    </label>
                </div>

                <div class="form-group">
                    @csrf
                    <label for="gname">خیابان :</label>

                    <select id="street" class="form-control" name="street">
                        <option value='0'>-- انتخاب منطقه --</option>
                        @foreach($ostreet['data'] as $key => $ostreet)
                            <option value='{{ $ostreet->name }}'>{{ $ostreet->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="gname">از :</label>
                    <select id="street" class="form-control" name="place1">
                        <option value='0'>-- انتخاب  --</option>
                        @foreach($oplace1['data'] as $key => $oplace1)
                            <option value='{{ $oplace1->name }}'>{{ $oplace1->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control" name="beetween1"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="gname">تا :</label>
                    <select id="street" class="form-control" name="place2">
                        <option value='0'>-- انتخاب  --</option>
                        @foreach($oplace2['data'] as $key => $oplace2)
                            <option value='{{ $oplace2->name }}'>{{ $oplace2->name }}</option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control" name="beetween2"/>
                </div>
                <div class="form-group">
                    <label for="mapphoto">افزودن نقشه :</label>
                    <input type="file" class="form-control" name="mapphoto"/>
                </div>
                <td><a href="{{ route('maps.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ایجاد نقشه</button>


            </form>
        </div>
    </div>
@endsection