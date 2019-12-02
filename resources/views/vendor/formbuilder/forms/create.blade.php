@extends('formbuilder::layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                <!--   {{ $pageTitle ?? '' }} -->
					  ساخت فرم جدید

                        <a href="{{ route('formbuilder::forms.index') }}" class="btn btn-sm btn-primary float-md-right">
                            <i class="fa fa-arrow-lrft"></i> بازگشت به صفحه فرم ها
                        </a>
                    </h5>
                </div>

             <form action="{{ route('formbuilder::forms.store') }}" method="POST" id="createFormForm" dir="rtl">
                    @csrf 
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="col-form-label float-md-right">نام فرم</label>

                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="نام فرم را وارد کنید">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="visibility" class="col-form-label float-md-right">دسترسی به فرم</label>

                                    <select name="visibility" id="visibility" class="form-control" required="required">
                                        <option value="">انتخاب نوع دسترسی</option>
                                        @foreach(jazmy\FormBuilder\Models\Form::$visibility_options as $option)
                                            <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('visibility'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('visibility') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4" style="display: none;" id="allows_edit_DIV">
                                <div class="form-group">
                                    <label for="allows_edit" class="col-form-label">
                                        مجوز ویرایش اطلاعات
                                    </label>

                                    <select name="allows_edit" id="allows_edit" class="form-control" required="required">
                                        <option value="0">خیر (submissions are final)</option>
                                        <option value="1">بله (allow users to edit their submissions)</option>
                                    </select>

                                    @if ($errors->has('allows_edit'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('allows_edit') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-info float-right" role="alert">
                                    <i class="fa fa-info-circle"></i> 
                                
								   برای ساختن محتوای فرم خود بر روی صفحه اصلی کلیک کرده یا آنها را بکشید و رها کنید
                                </div>

                            </div>
							 <div class="content-wrapper col-12">
					<div id="fb-editor" class="fb-editor"></div>
				</div>

                        </div>
                    </div>
                </form>
				
				
				<!--<div class="card-footer" id="fb-editor-footer" style="display: none;">-->
			<div class="card-footer" id="fb-editor-footer" >
                    <button type="button" class="btn btn-primary fb-clear-btn">
                        <i class="fa fa-remove"></i> پاک کردن 
                    </button> 
                    <button type="button" class="btn btn-primary fb-save-btn">
                        <i class="fa fa-save"></i> ارسال &amp; ذخیره فرم
                    </button>
                </div> 
            </div>
        </div>
    </div>
</div>	
@endsection

@push(config('formbuilder.layout_js_stack', 'scripts'))

  <!--  <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script> -->
          <script type="text/javascript">
        window.FormBuilder = window.FormBuilder || {}
        window.FormBuilder.form_roles = @json($form_roles);
    </script>
   <script src="{{ asset('vendor/formbuilder/js/create-form.js') }}{{ jazmy\FormBuilder\Helper::bustCache() }}" defer></script>
@endpush 