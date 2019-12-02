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
            <td><a href="{{ route('ghorfehgroup.create')}}" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ردیف</td>
                <td>نام گروه</td>
                <td>کد گروه</td>
                <td colspan="2">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            @foreach($ghorfehcodegroups as $ghorfehcodegroup)
                <tr>
                    <td>{{$ghorfehcodegroup->id}}</td>
                    <td>{{$ghorfehcodegroup->group_name}}</td>
                    <td>{{$ghorfehcodegroup->group_code}}</td>
                    <td><a href="{{ route('ghorfehgroup.edit',$ghorfehcodegroup->id)}}" class="btn btn-primary">ویرایش</a></td>
                    <td>
                        <form action="{{ route('ghorfehgroup.destroy', $ghorfehcodegroup->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection