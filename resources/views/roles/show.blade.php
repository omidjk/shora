@extends('layouts.app')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-right">

            <h3> نمایش نوع دسترسی</h3>

        </div>

        <div class="pull-left">

            <a class="btn btn-primary" href="{{ route('roles.index') }}"> بازگشت</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>نام :</strong>

            {{ $role->name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>نوع دسترسی :</strong>
			<br/>

            @if(!empty($rolePermissions))

                @foreach($rolePermissions as $v)

                    <label class="label label-success">{{ $v->name }},</label>
					<br/>
                @endforeach

            @endif

        </div>

    </div>

</div>

@endsection
