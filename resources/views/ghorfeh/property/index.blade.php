<!-- index.blade.php -->

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
            <td><a href="{{ route('property.create','mapid='.$id)}}" class="btn btn-primary">افزودن</a></td>
            <td><a href="{{ route('maps.index')}}" class="btn btn-primary">ّبازگشت</a></td>

        </div>
            <table class="table table-striped">
                <thead>
                <tr >
                    <td width="100px">@sortablelink('ردیف')</td>
                    <td width="100px">@sortablelink('کد نقشه')</td>
                    <td width="300px">@sortablelink('نام ملک')</td>
                    <td width="200px">@sortablelink('متراژ')</td>
                    <td width="200px">@sortablelink('شماره پلاک')</td>
                    <td  width="50px" class="align-middle" >وضعیت</td>
                </tr>
                </thead>
                <tbody>
                @if($property->count())
                    @foreach($property as $key=> $properties)
                        <tr>
                            <td>{{$properties->id}}</td>
                            <td>{{$properties->mapid}}</td>
                            <td>{{$properties->propertyname}}</td>
                            <td>{{$properties->width}}</td>
                            <td>{{$properties->pelakno}}</td>
                            <td width="25px"><a href="{{ route('property.show',$properties->id)}}" class="btn btn-primary">نمایش</a></td>
                            <td width="25px"><a href="{{ route('property.edit',$properties->id)}}" class="btn btn-primary">ویرایش</a></td>
                            <td width="25px">
                                <form action="{{ route('property.destroy', $properties->id)}}" method="post">
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

            {!! $property->appends(\Request::except('page'))->render() !!}
        <div>
@endsection