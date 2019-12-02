@extends('menu::layouts.app')

@section('content')

         <div class="cx-main-pannel">
            <div class="cx-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <nest-menu prefix="{{ menu_prefix() }}"></nest-menu>
                        </div>
                    </div>
                 </div>
            </div>
         </div>
@endsection
