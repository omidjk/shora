<!-- create.blade.php -->

@extends('layouts.app2')
@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <script type="text/javascript" src="/js/jscolor.js"></script>
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31
                && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    <script type='text/javascript'>
        $(document).ready(function () {
            $('#tablename').change(function () {
                var mytable = $(this).val();
                $('#riteelement').find('option').not(':first').remove();
                $.ajax({
                    url: 'fieldtable/' + mytable,
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        var len = 0;
                        if (response['data'] != null) {
                            len = response['data'].length;
                        }
                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                var gettablelist = response['data'][i].name;
                                var option = "<option value='" + gettablelist + "'>" + gettablelist + "</option>";
                                $("#riteelement").append(option);
                            }
                        }
                    }
                });
            });
        });
    </script>

    <div class="card uper">
        <div class="card-header" align="center">
            تنظیمات مجوز
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form method="post" action="{{ route('arrangement.store')}}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <label for="riteid">نام مراسم :</label>
                    <select id="riteid" class="form-control" name="riteid">
                        <option value='0'>-- انتخاب مراسم --</option>
                        @foreach($getmarasem['data'] as $key => $getmarasem)
                            <option value='{{ $getmarasem->id }}'>{{ $getmarasem->ritename }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ritephoto">تصویر مجوز :</label>
                    <input type="file" class="form-control" name="ritephoto"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="gname">نام جدول :</label>
                    <select id="riteid" class="form-control" name="riteid">
                        <option value='0'>-- انتخاب جداول --</option>
                        @foreach($gettablelist['data'] as $key => $gettablelist)
                            <option value='{{ $gettablelist }}'>{{ $gettablelist }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="riteelement">نام فیلد اطلاعاتی :</label>
                    <input type="text" class="form-control" name="riteelement"/>
                </div>
            <!--  <div class="form-group">
                    @csrf
                    <label for="riteelement">نام فیلد اطلاعاتی :</label>
                    <select id="riteelement" class="form-control" name="riteelement">
                        <option value='0'>-- انتخاب فیلد --</option>
                        @foreach($fieldlist['data'] as $key => $fieldlist)
                <option value='{{ $fieldlist }}'>{{ $fieldlist }}</option>
                        @endforeach
                    </select>
                </div> -->
                <div class="form-group">
                    @csrf
                    <label for="elementfontname">انتخاب فونت فیلد اطلاعاتی :</label>
                    <select id="elementfontname" class="form-control" name="elementfontname">
                        <option value='0'>-- انتخاب فونت --</option>
                        @foreach($getfontfamily['data'] as $key => $getfontfamily)
                            <option value='{{ $getfontfamily->fontname }}'>{{ $getfontfamily->fontname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="elementfontsize">اندازه فونت فیلد اطلاعاتی :</label>
                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" minlength="1"
                           maxlength="2" name="elementfontsize"/>
                </div>
                <div class="form-group">
                    <label for="elementcolor">رنگ فونت فیلد اطلاعاتی :</label>
                    <input class="form-control col-sm-3 color" name="elementcolor" value="66ff00"/>
                </div>
                <div class="form-group">
                    <label for="elementname">نام فیلد اطلاعاتی :</label>
                    <input type="text" class="form-control" name="elementname"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="elementnamefontsize">انتخاب فونت نام فیلد اطلاعاتی :</label>
                    <select id="elementnamefontsize" class="form-control" name="elementnamefontsize">
                        <option value='0'>-- انتخاب فونت --</option>
                        @foreach($getfontnamefamily['data'] as $key => $getfontnamefamily)
                            <option value='{{ $getfontnamefamily->fontname }}'>{{ $getfontnamefamily->fontname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="elementnamefontsize">اندازه فونت نام فیلد اطلاعاتی :</label>
                    <input type="text" class="form-control " onkeypress="return isNumberKey(event)" minlength="1"
                           maxlength="2" name="elementnamefontsize"/>
                </div>
                <div class="form-group">
                    <label for="elementnamecolor">رنگ فونت نام فیلد اطلاعاتی :</label>
                    <input class="form-control  col-sm-3 color" name="elementnamecolor" value="66ff00"/>
                </div>
                <td><a href="{{ route('arrangement.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">تنظیم مجوز</button>
            </form>
        </div>
    </div>
@endsection