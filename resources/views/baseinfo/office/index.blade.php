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
            <td><a href="{{ route('office.create')}}" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="50px">@sortablelink('ردیف')</td>
                <td width="150px">@sortablelink('نام دفتر')</td>
                <td width="120px">@sortablelink('کد دفتر')</td>
                <td width="150px">@sortablelink('استان')</td>
                <td width="150px">@sortablelink('شهر')</td>
                <td width="200px">@sortablelink('نام مسئول')</td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            @if($offices->count())
              @foreach($offices as $key=> $office)
                <tr>
                    <td>{{$office->id}}</td>
                    <td>{{$office->officename}}</td>
                    <td>{{$office->officecode}}</td>
                    <td>{{$office->province}}</td>
                    <td>{{$office->city}}</td>
                    <td>{{$office->provincecouncil}}</td>
                    <td width="25px"><a href="{{ route('office.show',$office->id)}}" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="{{ route('office.edit',$office->id)}}" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="{{ route('office.destroy', $office->id)}}" method="post">
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
            {!! $offices->appends(\Request::except('page'))->render() !!}
        <div>
@endsection