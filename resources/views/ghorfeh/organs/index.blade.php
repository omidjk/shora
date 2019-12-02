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
            <td><a href="{{ route('organs.create')}}" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="30px">@sortablelink('ردیف')</td>
                <td width="200px">@sortablelink('نام گروه')</td>
                <td width="120px">@sortablelink('کد ارگان')</td>
                <td width="300px">@sortablelink('نام ارگان')</td>
                <td width="600px">آدرس</td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            @if($organss->count())
              @foreach($organss as $key=> $organs)
                <tr>
                    <td>{{$organs->id}}</td>
                    <td>{{$organs->group_name}}</td>
                    <td>{{$organs->organ_code}}</td>
                    <td>{{$organs->organ_name}}</td>
                    <td width="600px">{{$organs->organ_address}}</td>
                    <td width="25px"><a href="{{ route('ghorfeha.index','id='.$organs->id)}}" class="btn btn-primary">غرفه</a></td>
                    <td width="25px"><a href="{{ route('cordinator.index','id='.$organs->id)}}" class="btn btn-primary">نماینده</a></td>
                    <td width="25px"><a href="{{ route('organs.show',$organs->id)}}" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="{{ route('organs.edit',$organs->id)}}" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="{{ route('organs.destroy', $organs->id)}}" method="post">
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
            {!! $organss->appends(\Request::except('page'))->render() !!}
        <div>
@endsection