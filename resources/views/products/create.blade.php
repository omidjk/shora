@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-right">

                <h3>ایجاد فرم جدید</h3>

            </div>

            <div class="pull-left">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> بازگشت</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

        <strong>شرمنده!</strong> فکر کنم در ورود اطلاعات مشکلی داشتید.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('products.store') }}" method="POST">

    	@csrf


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>نام فرم :</strong>

		            <input type="text" name="name" class="form-control" placeholder="نام فرم">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>توضیحات فرم:</strong>

		            <textarea class="form-control" style="height:150px" name="detail" placeholder="توضیحات فرم"></textarea>

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">اعمال</button>

		    </div>

		</div>


    </form>


@endsection
