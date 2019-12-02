@extends('layouts.app2')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-right">

            <h3>ویرایش کاربر</h3>

        </div>

        <div class="pull-left">

            <a class="btn btn-primary" href="{{ route('users.index') }}"> بازگشت</a>

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


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>نام :</strong>

            {!! Form::text('name', null, array('placeholder' => 'نام','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>ایمیل :</strong>

            {!! Form::text('email', null, array('placeholder' => 'ایمیل','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>رمز ورود:</strong>

            {!! Form::password('password', array('placeholder' => 'رمز ورود','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>تکرار رمز ورود:</strong>

            {!! Form::password('confirm-password', array('placeholder' => 'تکرار رمز ورود','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>نوع دسترسی :</strong>

            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">اعمال</button>

    </div>

</div>

{!! Form::close() !!}


@endsection
