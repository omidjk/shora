@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-right">

                <h2>نمایش فرم</h2>

            </div>

            <div class="pull-left">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> بازگشت</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>نام فرم :</strong>

                {{ $product->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>توضیحات فرم :</strong>

                {{ $product->detail }}

            </div>

        </div>

    </div>

@endsection
