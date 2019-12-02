@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-right">

                <h3>فرمها</h3>

            </div>

            <div class="pull-left">

                @can('product-create')

                <a class="btn btn-success" href="{{ route('products.create') }}">ایجاد فرم جدید</a>

                @endcan

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>ردیف</th>

            <th>نام فرم</th>

            <th>جزئیات فرم</th>

            <th width="280px">عملیات</th>

        </tr>

	    @foreach ($products as $product)

	    <tr>

	        <td>{{ ++$i }}</td>

	        <td>{{ $product->name }}</td>

	        <td>{{ $product->detail }}</td>

	        <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

					<a class="btn btn-info" href="{{ route('products.make',$product->id) }}">ایجاد</a> 

					<a class="btn btn-info" href="{{ route('products.show',$product->id) }}">نمایش</a>

                    @can('product-edit')

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">ویرایش</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('product-delete')

                    <button type="submit" class="btn btn-danger">حذف</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $products->links() !!}


@endsection
