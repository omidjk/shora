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
            <td><a href="{{ route('arrangement.create')}}" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="30px">@sortablelink('ردیف')</td>
                <td width="200px">@sortablelink('نام مراسم')</td>
                <td width="120px">@sortablelink('تصویر مجوز مراسم')</td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            @if($arrangements->count())
              @foreach($arrangements as $key=> $arrangement)
                <tr>
                    <td>{{$arrangement->id}}</td>
                    <td>{{$arrangement->riteid}}</td>
                    <td>{{$arrangement->ritephoto}}</td>
                    <td width="25px"><a href="{{ route('arrangement.show',$arrangement->id)}}" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="{{ route('arrangement.edit',$arrangement->id)}}" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="{{ route('arrangement.destroy', $arrangement->id)}}" method="post">
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
            {!! $arrangements->appends(\Request::except('page'))->render() !!}
        <div>
@endsection