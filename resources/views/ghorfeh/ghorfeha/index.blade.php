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
            <td><a href="{{ route('ghorfeha.create','organid='.$id)}}" class="btn btn-primary">افزودن</a></td>
            <td><a href="{{ route('organs.index')}}" class="btn btn-primary">ّبازگشت</a></td>
        </div>
            <table class="table table-striped">
                <thead>
                <tr >
                    <td width="80px">@sortablelink('ردیف')</td>
                    <td width="120px">@sortablelink('سال')</td>
                    <td width="120px">@sortablelink('مسئول غرفه')</td>
                    <td width="200px">@sortablelink('تلفن')</td>
                    <td width="200px">@sortablelink('متراژ')</td>
                    <td  width="50px" class="align-middle" >وضعیت</td>
                </tr>
                </thead>
                <tbody>
                @if($ghorfeha->count())
                    @foreach($ghorfeha as $key=> $ghorfehas)
                        <tr>
                            <td>{{$ghorfehas->id}}</td>
                            <td>{{$ghorfehas->yearofreq}}</td>
                            <td>{{$ghorfehas->ghormasname." ".$ghorfehas->ghormasfamily}}</td>
                            <td>{{$ghorfehas->ghormasmobile}}</td>
                            <td>{{$ghorfehas->meteraj}}</td>
                            <td width="25px"><a href="{{ route('item.index','id='.$ghorfehas->id)}}" class="btn btn-primary">اقلام</a></td>
                            <td width="25px"><a href="{{ route('ghorfeha.show',$ghorfehas->id)}}" class="btn btn-primary">نمایش</a></td>
                            <td width="25px"><a href="{{ route('ghorfeha.edit',$ghorfehas->id)}}" class="btn btn-primary">ویرایش</a></td>
                            <td width="25px">
                                <form action="{{ route('ghorfeha.destroy', $ghorfehas->id)}}" method="post">
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

            {!! $ghorfeha->appends(\Request::except('page'))->render() !!}
        <div>
@endsection