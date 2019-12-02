@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-right">

            <h2>ایجاد نوع دسترسی جدید</h2>

        </div>

        <div class="pull-left">

            <a class="btn btn-primary" href="{{ route('roles.index') }}"> بازگشت</a>

        </div>

    </div>

</div>


@if (count($errors) > 0)

    <div class="alert alert-danger">

       <strong>شرمنده!</strong> فکر کنم در ورود اطلاعات مشکلی داشتید.<br><br>

        <ul>

        @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach

        </ul>

    </div>

@endif


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>نام :</strong>

            {!! Form::text('name', null, array('placeholder' => 'نام','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>نوع دسترسی ها:</strong>

            <br/>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                {{ $value->name }}</label>

            <br/>

            @endforeach

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">اعمال</button>

    </div>

</div>

{!! Form::close() !!}


@endsection
