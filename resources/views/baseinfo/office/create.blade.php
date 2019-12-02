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
    <script type='text/javascript'>
        $(document).ready(function(){
            // Department Change
            $('#province').change(function(){

                // Department id
                var id = $(this).val();
                // Empty the dropdown
                $('#city').find('option').not(':first').remove();
                // AJAX request
                $.ajax({
                    url: 'city/'+id,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){

                        var len = 0;
                        if(response['data'] != null){
                            len = response['data'].length;
                        }
                        if(len > 0){
                            // Read data and create <option >
                            for(var i=0; i<len; i++){
                                var id = response['data'][i].id;
                                var name = response['data'][i].name;
                                var option = "<option value='"+id+"'>"+name+"</option>";
                                $("#city").append(option);
                            }
                        }
                    }
                });
            });
        });
    </script>
    <div class="card uper">
        <div class="card-header" align="center">
           افزودن دفتر
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
            <form method="post" action="{{ route('office.store') }}" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="officename">نام دفتر :</label>
                    <input type="text" class="form-control" name="officename"/>
                </div>
                <div class="form-group">
                    <label for="officecode">کد دفتر :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="4" maxlength="4" class="form-control" name="officecode"/>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="province">نام استان :</label>
                    <select id="province" class="form-control" name="province">
                        <option value=''>-- انتخاب استان --</option>
                        @foreach($oprovince['data'] as  $oprovincedata)
                            <option value='{{ $oprovincedata->id }}'>{{ $oprovincedata->pname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="city">نام شهر :</label>
                    <select id="city" class="form-control" name="city">
                        <option value=''>-- انتخاب شهر --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="age">عمر بنا :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="1" maxlength="2" class="form-control" name="age"/>
                </div>
                <div class="form-group">
                    <label for="floors">تعداد طبقات :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="1" maxlength="2" class="form-control" name="floors"/>
                </div>
                <div class="form-group">
                    <label for="units">تعداد واحدها :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="1" maxlength="2" class="form-control" name="units"/>
                </div>
                <div class="form-group">
                    <label for="guestroom">مهمانسرا :</label>
                    <input type="text"  class="form-control" name="guestroom"/>
                </div>
                <div class="form-group">
                    <label for="structure">نوع اسکلت سازه :</label>
                    <input type="text"  class="form-control" name="structure"/>
                </div>
                <div class="form-group">
                    <label for="frontage">جنس نمای ساختمان :</label>
                    <input type="text"  class="form-control" name="frontage"/>
                </div>
                <div class="form-group">
                    <label for="firealarm">سیستم اعلام حریق :</label>
                    <input type="text"  class="form-control" name="firealarm"/>
                </div>
                <div class="form-group">
                    <label for="fireext">سیستم اطفای حریق :</label>
                    <input type="text"  class="form-control" name="fireext"/>
                </div>
                <div class="form-group">
                    <label for="shield">حفاظ :</label>
                    <input type="text"  class="form-control" name="shield"/>
                </div>
                <div class="form-group">
                    <label for="location">موقعیت ساحتمان در شهر :</label>
                    <input type="text"  class="form-control" name="location"/>
                </div>
                <div class="form-group">
                    <label for="usage">کاربری ملک :</label>
                    <input type="text"  class="form-control" name="usage"/>
                </div>
                <div class="form-group">
                    <label for="ownership">مالکیت ملک :</label>
                    <input type="text"  class="form-control" name="ownership"/>
                </div>
                <div class="form-group">
                    <label for="organsposition">موقعیت نسبت به سایر ارگانها :</label>
                    <input type="text"  class="form-control" name="organsposition"/>
                </div>
                <div class="form-group">
                    <label for="population">جمعیت :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="3" maxlength="9" class="form-control" name="population"/>
                </div>
                <div class="form-group">
                    <label for="leaderagent">نماینده ولی فقیه :</label>
                    <input type="text"  class="form-control" name="leaderagent"/>
                </div>
                <div class="form-group">
                    <label for="governor">استاندار :</label>
                    <input type="text"  class="form-control" name="governor"/>
                </div>
                <div class="form-group">
                    <label for="provincecouncil">مسئول شورای هماهنگی :</label>
                    <input type="text"  class="form-control" name="provincecouncil"/>
                </div>
                <div class="form-group">
                    <label for="commanderarmy">فرمانده سپاه پاسداران :</label>
                    <input type="text"  class="form-control" name="commanderarmy"/>
                </div>
                <div class="form-group">
                    <label for="commanderpolice">فرمانده نیروی انتظامی :</label>
                    <input type="text"  class="form-control" name="commanderpolice"/>
                </div>
                <div class="form-group">
                    <label for="address">آدرس :</label>
                    <input type="text" class="form-control" name="address"/>
                </div>
                <div class="form-group">
                    <label for="postalcode">کد پستی :</label>
                    <input type="text"  onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" class="form-control" name="postalcode"/>
                </div>
                <div class="form-group">
                    <label for="phonenumber">تلفن تماس :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="11" maxlength="11" class="form-control" name="phonenumber"/>
                </div>
                <div class="form-group">
                    <label for="mobile">تلفن همراه :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="11" maxlength="11" class="form-control" name="mobile"/>
                </div>
                <div class="form-group">
                    <label for="bulidingmaps">نقشه ساختمان :</label>
                    <input type="file"  class="form-control" name="bulidingmaps"/>
                </div>
                <td><a href="{{ route('office.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ایجاد دفتر </button>
            </form>
        </div>
    </div>
@endsection