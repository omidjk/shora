
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
            <td><a href="{{ route('rite.create')}}" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="30px">@sortablelink('ردیف')</td>
                <td width="200px">@sortablelink('مراسم')</td>
                <td width="120px">@sortablelink('سال')</td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            @if($rite->count())
              @foreach($rite as $key=> $rites)
                <tr>
                    <td>{{$rites->id}}</td>
                    <td>{{$rites->ritename}}</td>
                    <td>{{$rites->riteyear}}</td>
                    <td width="25px"><a href="{{ route('rite.show',$rites->id)}}" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="{{ route('rite.edit',$rites->id)}}" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="{{ route('rite.destroy', $rites->id)}}" method="post">
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
            {!! $rite->appends(\Request::except('page'))->render() !!}
        <div>
@endsection