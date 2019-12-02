<!-- create.blade.php -->

@extends('layouts.app2')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <script>
        function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    <div class="card uper">
        <div class="card-header" align="center">
            ویرایش مراسم
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('rite.update', $rite->id) }}"  enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">

                    <label for="gname">مراسم :</label>

                    <select id="ritename" class="form-control" name="ritename">
                        <option value=''> -- انتخاب مراسم --</option>
                        @foreach($getmarasem['data'] as $key => $getmarasem)
                            <option value='{{ $getmarasem->name }}'
                                    @if($getmarasem->name == $rite->ritename)
                                    selected='selected'
                                    @endif>
                            {{ $getmarasem->name }}
                         </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="riteyear">سال :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="4" maxlength="4" class="form-control" name="riteyear" value="{{$rite->riteyear}}"/>
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="ritehoto1">ویرایش تصویر1 :</label>
                    <input type="file" class="form-control" name="ritehoto1" value="{{$rite->ritehoto1}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto1 }}" class="img-thumbnail" />
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="ritehoto2">ویرایش تصویر2 :</label>
                    <input type="file" class="form-control" name="ritehoto2" value="{{$rite->ritehoto2}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto2 }}" class="img-thumbnail" />
                </div>
              <div class="form-group col-md-3 px-0">
                    <label for="ritehoto3">ویرایش تصویر3 :</label>
                    <input type="file" class="form-control" name="ritehoto3" value="{{$rite->ritehoto3}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto3 }}" class="img-thumbnail" />
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="ritehoto4">ویرایش تصویر4 :</label>
                    <input type="file" class="form-control" name="ritehoto4" value="{{$rite->ritehoto4}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto4 }}" class="img-thumbnail" />
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="ritehoto5">ویرایش تصویر5 :</label>
                    <input type="file" class="form-control" name="ritehoto5" value="{{$rite->ritehoto5}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto5 }}" class="img-thumbnail" />
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="ritehoto6">ویرایش تصویر6 :</label>
                    <input type="file" class="form-control" name="ritehoto6" value="{{$rite->ritehoto6}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto6 }}" class="img-thumbnail" />
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="ritehoto7">ویرایش تصویر7 :</label>
                    <input type="file" class="form-control" name="ritehoto7" value="{{$rite->ritehoto7}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto7 }}" class="img-thumbnail" />
                </div>
                <div class="form-group col-md-3 px-0">
                    <label for="ritehoto8">ویرایش تصویر8 :</label>
                    <input type="file" class="form-control" name="ritehoto8" value="{{$rite->ritehoto8}}"/>
                    <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto8 }}" class="img-thumbnail" />
                </div>
                <div class="form-group">
                    <label for="riteroles">قوانین امنیتی مراسم :</label>
                    <textarea class="form-control riteroles " rows="5" id="riteroles" name="riteroles" >{{$rite->riteroles }}</textarea>
                    <script src="{{asset('/plugins/tinymce/tinymce.min.js')}}"></script>
                    <script>
                        tinymce.init({
                            selector:'textarea.riteroles',
                            directionality : 'rtl',
                            language: 'fa_IR',
                            height: 300,
                        });
                    </script>
                </div>
                <td><a href="{{ route('rite.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ویرایش مراسم</button>
            </form>
        </div>
    </div>
@endsection