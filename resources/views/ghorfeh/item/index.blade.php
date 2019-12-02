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
            <td><a href="{{ route('item.create','ghorfehid='.$id)}}" class="btn btn-primary">افزودن</a></td>
            <td><a href="{{ route('ghorfeha.index')}}" class="btn btn-primary">ّبازگشت</a></td>

        </div>
            <table class="table table-striped">
                <thead>
                <tr >
                    <td width="100px">@sortablelink('ردیف')</td>
                    <td width="100px">@sortablelink('کد غرفه')</td>
                    <td width="300px">@sortablelink('نوع پذیرایی')</td>
                    <td width="200px">@sortablelink('شرح ')</td>
                    <td width="200px">@sortablelink('تعداد')</td>
                    <td  width="50px" class="align-middle" >وضعیت</td>
                </tr>
                </thead>
                <tbody>
                @if($item->count())
                    @foreach($item as $key=> $items)
                        <tr>
                            <td>{{$items->id}}</td>
                            <td>{{$items->ghorfehid}}</td>
                            <td>{{$items->itemtype}}</td>
                            <td>{{$items->itemname}}</td>
                            <td>{{$items->itemnumber}}</td>
                            <td width="25px"><a href="{{ route('item.show',$items->id)}}" class="btn btn-primary">نمایش</a></td>
                            <td width="25px"><a href="{{ route('item.edit',$items->id)}}" class="btn btn-primary">ویرایش</a></td>
                            <td width="25px">
                                <form action="{{ route('item.destroy', $items->id)}}" method="post">
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

            {!! $item->appends(\Request::except('page'))->render() !!}
        <div>
@endsection