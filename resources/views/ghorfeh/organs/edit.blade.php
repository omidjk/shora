<!-- edit.blade.php -->

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
        $(document).ready({
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
           ویرایش ارگان
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
          <form method="post" action="{{ route('organs.update', $organss->id) }}">
             <!--  <div class="form-group">
                    csrf
                    method('PATCH')
                    <label for="name">نام گروه :</label>
                <input type="text" class="form-control" name="group_name" value="{{$organss->group_name}}"/>

                </div> -->
                 <div class="form-group">
                     @csrf
                     @method('PATCH')
                     <label for="gname">نام گروه :</label>

                     <select id="group_name" class="form-control" name="group_name" multiple="multiple">
                         <option value='0'>-- انتخاب گروه --</option>
                         @foreach($groupnamedata['data'] as $key => $groupnamedata)
                         <option value="{{ $groupnamedata->group_name }}"
                             @if($groupnamedata->group_name==$organss->group_name)
                                 selected='selected'
                             @endif>
                             {{ $groupnamedata->group_name }}
                         </option>
                         @endforeach
                     </select>
                 </div>
                <div class="form-group">
                    <label for="code">کد ارگان :</label>
                    <input type="text" onkeypress="return isNumberKey(event)" minlength="3" maxlength="5" class="form-control" name="organ_code" value="{{$organss->organ_code}}"/>
                </div>
              <div class="form-group">
                  <label for="oname">نام ارگان :</label>
                  <input type="text" class="form-control" name="organ_name" value="{{$organss->organ_name}}"/>
              </div>
                 <div class="form-group">
                     @csrf
                     <label for="province">نام استان :</label>
                     <select id="province" class="form-control" name="province">
                         <option value=''>-- انتخاب استان --</option>
                         @foreach($oprovince['data'] as  $oprovincedata)
                             <option value='{{ $oprovincedata->id }}'
                                 @if($oprovincedata->id==$organss->province)
                                     selected='selected'
                                 @endif>
                                 {{ $oprovincedata->pname }}
                             </option>
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
                  <label for="address">آدرس :</label>
                  <input type="text" class="form-control" name="organ_address" value="{{$organss->organ_address}}"/>
              </div>
              <td><a href="{{ route('organs.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">بروز رسانی ارگان</button>
            </form>
        </div>
    </div>
@endsection