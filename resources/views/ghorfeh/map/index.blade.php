
@extends('layouts.app2')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <div>
            <td><a href="{{ route('maps.create')}}" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="30px">@sortablelink('ردیف')</td>
                <td width="200px">@sortablelink('جهت')</td>
                <td width="120px">@sortablelink('خیابان')</td>
                <td width="300px">@sortablelink('از')</td>
                <td width="300px">@sortablelink('تا')</td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            @if($maps->count())
              @foreach($maps as $key=> $map)
                <tr>
                    <td>{{$map->id}}</td>
                    <td>{{$map->direction}}</td>
                    <td>{{$map->street}}</td>
                    <td width="600px">{{$map->place1." ".$map->beetween1}}</td>
                    <td width="600px">{{$map->place2." ".$map->beetween2}}</td>
                    <td width="25px"><a href="{{ route('property.index','id='.$map->id)}}" class="btn btn-primary">ملک</a></td>
                    <td width="25px"><a href="{{ route('maps.show',$map->id)}}" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="{{ route('maps.edit',$map->id)}}" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="{{ route('maps.destroy', $map->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">حذف</button>
                        </form>


                    </td>
                </tr>
              @endforeach
            @endif
            </tbody>
        </table>
            {!! $maps->appends(\Request::except('page'))->render() !!}
        <div>
@endsection