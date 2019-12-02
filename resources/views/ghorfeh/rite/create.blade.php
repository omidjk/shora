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
           افزودن مراسم
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
            <form method="post" action="{{ route('rite.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    @csrf
                    <label for="ritename">مراسم :</label>

                    <select id="ritename" class="form-control" name="ritename">
                        <option value=''>-- انتخاب مراسم --</option>
                        @foreach($getmarasem['data'] as $key => $getmarasem)
                            <option value='{{ $getmarasem->name }}'>{{ $getmarasem->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="riteyear">سال :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="4" maxlength="4" class="form-control" name="riteyear"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 1 :</label>
                    <input type="file" class="form-control" name="ritehoto1"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 2 :</label>
                    <input type="file" class="form-control" name="ritehoto2"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 3 :</label>
                    <input type="file" class="form-control" name="ritehoto3"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 4 :</label>
                    <input type="file" class="form-control" name="ritehoto4"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 5 :</label>
                    <input type="file" class="form-control" name="ritehoto5"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 6 :</label>
                    <input type="file" class="form-control" name="ritehoto6"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 7 :</label>
                    <input type="file" class="form-control" name="ritehoto7"/>
                </div>
                <div class="form-group">
                    <label for="photo">افزودن تصویر شماره 8 :</label>
                    <input type="file" class="form-control" name="ritehoto8"/>
                </div>
                <div class="form-group">
                    <label for="riteroles">قوانین امنیتی مراسم :</label>
                    <textarea class="form-control riteroles" rows="5" id="riteroles" name="riteroles"></textarea>
                    <script src="{{asset('/plugins/tinymce/jquery.tinymce.min.js')}}"></script>
                    <script src="{{asset('/plugins/tinymce/tinymce.min.js')}}"></script>
                    <script>
                        tinymce.init({
                            selector:'textarea.riteroles',
                            directionality : 'rtl',
                            theme: 'default',
                            language: 'fa_IR',
                            height: 300,
                            setup: function (editor) {
                                editor.on('init change', function () {
                                    editor.save();
                                });
                            },
                            plugins: [
                                "advlist autolink lists link image charmap print preview anchor",
                                "searchreplace visualblocks code fullscreen",
                                "insertdatetime media table contextmenu paste media code imagetools"
                            ],
                            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code",
                            theme_advanced_buttons1: "code",
                            media_strict: false,
                            image_dimensions: false,
                            image_class_list: [
                                {title: 'Responsive', value: 'img-responsive'}
                            ],
                            image_title: true,
                            automatic_uploads: true,
                            images_upload_url: '/editorupload',
                            file_picker_types: 'image',
                            file_picker_callback: function(cb, value, meta) {
                                var input = document.createElement('input');
                                input.setAttribute('type', 'file');
                                input.setAttribute('accept', 'image/*');
                                input.onchange = function() {
                                    var file = this.files[0];

                                    var reader = new FileReader();
                                    reader.readAsDataURL(file);
                                    reader.onload = function () {
                                        var id = 'blobid' + (new Date()).getTime();
                                        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                                        var base64 = reader.result.split(',')[1];
                                        var blobInfo = blobCache.create(id, file, base64);
                                        blobCache.add(blobInfo);
                                        cb(blobInfo.blobUri(), { title: file.name });
                                        console.log(blobInfo.blobUri());
                                    };
                                };
                                input.click();
                            }
                        });
                    </script>
                </div>
                <td><a href="{{ route('rite.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ایجاد مراسم</button>
            </form>
        </div>
    </div>
@endsection