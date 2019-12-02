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
            ویرایش نقشه
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
            <form method="post" action="{{ route('maps.update', $maps->id) }}"  enctype="multipart/form-data">
                <div class=" custom-control radio-inline custom-control-inline">
                    @csrf
                    @method('PATCH')

                    <label for="direction">جهت :
                        @foreach($odirection['data'] as $key => $odirection)
                            <input type="radio" class="custom-control-label" name="direction" value="{{$odirection->name}}"
                            @if($odirection->name==$maps->direction)
                                checked="checked"
                            @endif>
                            {{"  ".$odirection->name."  "}}
                        @endforeach
                    </label>
                </div>

                <div class="form-group">
                    @csrf
                    <label for="gname">خیابان :</label>

                    <select id="street" class="form-control" name="street">
                        <option value='0'>-- انتخاب منطقه --</option>
                        @foreach($ostreet['data'] as $key => $ostreet)
                            <option value='{{ $ostreet->name }}'
                                    @if($ostreet->name==$maps->street)
                                    selected='selected'
                                    @endif>
                                {{ $ostreet->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="gname">از :</label>
                    <select id="street" class="form-control" name="place1">
                        <option value='0'>-- انتخاب  --</option>
                        @foreach($oplace1['data'] as $key => $oplace1)
                            <option value='{{ $oplace1->name }}'
                                    @if($oplace1->name==$maps->place1)
                                    selected='selected'
                                    @endif>
                                {{ $oplace1->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control" name="beetween1"value="{{$maps->beetween1}}"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="gname">تا :</label>
                    <select id="street" class="form-control" name="place2">
                        <option value='0'>-- انتخاب  --</option>
                        @foreach($oplace2['data'] as $key => $oplace2)
                            <option value='{{ $oplace2->name }}'
                                    @if($oplace2->name==$maps->place2)
                                    selected='selected'
                                    @endif>
                                {{ $oplace2->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="text" class="form-control" name="beetween2"value="{{$maps->beetween2}}"/>
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="mapphoto">افزودن نقشه :</label>
                    <input type="file" class="form-control" name="mapphoto"value="{{$maps->mapphoto}}"/>
                    <img class="img-fluid" src="/map/{{ $maps->mapphoto }}" class="img-thumbnail" />
                </div>
                <td><a href="{{ route('maps.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ایجاد نقشه</button>


            </form>
        </div>
    </div>
@endsection