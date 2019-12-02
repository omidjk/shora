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
            <td><a href="{{ route('cordinator.create','organid='.$id)}}" class="btn btn-primary">افزودن</a></td>
            <td><a href="{{ route('organs.index')}}" class="btn btn-primary">ّبازگشت</a></td>
        </div>
            <table class="table table-striped">
                <thead>
                <tr >
                    <td width="80px">@sortablelink('ردیف')</td>
                    <td width="120px">@sortablelink('سال')</td>
                    <td width="120px">@sortablelink('مسئول هماهنگی')</td>
                    <td width="200px">@sortablelink('تلفن تماس')</td>
                    <td width="200px">@sortablelink('فکس')</td>
                    <td  width="50px" class="align-middle" >وضعیت</td>
                </tr>
                </thead>
                <tbody>
                @if($cordinator->count())
                    @foreach($cordinator as $key=> $cordinators)
                        <tr>
                            <td>{{$cordinators->id}}</td>
                            <td>{{$cordinators->yearofreq}}</td>
                            <td>{{$cordinators->corname." ".$cordinators->corfamily}}</td>
                            <td>{{$cordinators->cormobile}}</td>
                            <td>{{$cordinators->corfax}}</td>
                            <td><a href="{{ route('cordinator.show',$cordinators->id)}}" class="btn btn-primary">نمایش</a></td>
                            <td><a href="{{ route('cordinator.edit',$cordinators->id)}}" class="btn btn-primary">ویرایش</a></td>
                            <td>
                                <form action="{{ route('cordinator.destroy', $cordinators->id)}}" method="post">
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

            {!! $cordinator->appends(\Request::except('page'))->render() !!}
        <div>
@endsection