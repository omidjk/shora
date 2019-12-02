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
    <div class="card uper">
        <div class="card-header" align="center">
           ویرایش غرفه
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
          <form method="post" action="{{ route('ghorfeha.update', $ghorfehas->id) }}"  enctype="multipart/form-data">

              <div class="form-group">
                  @csrf
                  @method('PATCH')
                  <label for="yearofreq">سال :</label>
                  <input type="text" class="form-control" onkeypress="return isNumberKey(event)" minlength="4" maxlength="4" name="yearofreq" value="{{$ghorfehas->yearofreq}}"/>
              </div>
              <div class="form-group">
                  @csrf
                  <label for="marchigtype">راهپیمایی مراسم :</label>
                  <select id="marchigtype" class="form-control" name="marchigtype">
                      <option value='0'>-- انتخاب مراسم --</option>
                      @foreach($getrites['data'] as  $getritesdata)
                          <option value='{{ $getritesdata->ritename }}' @if($getritesdata->ritename==$ghorfehas->activitytype) selected='selected' @endif >
                              {{ $getritesdata->ritename }}
                          </option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="numberghorfeh">تعداد غرفه :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" maxlength="2" class="form-control" name="numberghorfeh" value="{{$ghorfehas->numberghorfeh}}"/>
              </div>
              <div class="form-group">
                  <label for="meteraj">متراژ :</label>
                  <input type="text" onkeypress="return isNumberKey(event)"  maxlength="3" class="form-control" name="meteraj"value="{{$ghorfehas->meteraj}}"/>
              </div>
              <div class="form-group">
                  <label for="meterajkol">متراژ کل :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" maxlength="3" class="form-control" name="meterajkol" value="{{$ghorfehas->meterajkol}}"/>
              </div>
            <label> نوع احداث : </label></BR>
            <div class="form-group border border-secondary">
              <div class="form-check form-check-inline">
                  <label for="darbast">داربست : </label>
                  <input type="hidden"  name="darbast" value="0" >
                  <input type="checkbox"  name="darbast" value="1" @if($ghorfehas->darbast=='1')) checked="checked" @endif/>
              </div>
              <div class="form-check form-check-inline">
                  <label for="spacer">اسپیس :  </label>
                  <input type="hidden"  name="spacer" value="0" >
                  <input type="checkbox"  name="spacer" value="1" @if($ghorfehas->spacer=='1')) checked="checked" @endif/>
              </div>
              <div class="form-check form-check-inline">
                  <label for="felezi"> فلزی :</label>
                  <input type="hidden"  name="felezi" value="0" >
                  <input type="checkbox"  name="felezi" value="1" @if($ghorfehas->felezi=='1')) checked="checked" @endif/>
              </div>
              <div class="form-group">
                  <label for="structuretypetext">سایر :</label>
                  <input type="text" class="form-control" name="structuretypetext"  value="{{$ghorfehas->structuretypetext}}"/>
              </div>
            </div>
              <label> نوع فعالیت : </label></BR>
              <div class="form-group border border-secondary">
                  <div class="form-check form-check-inline">
                      <label for="cultural">فرهنگی : </label>
                      <input type="hidden"  name="cultural" value="0" >
                      <input type="checkbox"  name="cultural" value="1" @if($ghorfehas->cultural=='1')) checked="checked" @endif/>
                  </div>
                  <div class="form-check form-check-inline">
                      <label for="entertainment">پذیرایی :  </label>
                      <input type="hidden"  name="entertainment" value="0" >
                      <input type="checkbox"  name="entertainment" value="1" @if($ghorfehas->entertainment=='1')) checked="checked" @endif/>
                  </div>
                  <div class="form-check form-check-inline">
                      <label for="theraputic"> درمانی :</label>
                      <input type="hidden"  name="theraputic" value="0" >
                      <input type="checkbox"  name="theraputic" value="1" @if($ghorfehas->theraputic=='1')) checked="checked" @endif/>
                  </div>
                  <div class="form-check form-check-inline">
                      <label for="sportive"> ورزشی :</label>
                      <input type="hidden"  name="sportive" value="0" >
                      <input type="checkbox"  name="sportive" value="1" @if($ghorfehas->sportive=='1')) checked="checked" @endif/>
                  </div>
                  <div class="form-check form-check-inline">
                      <label for="news"> خبری :</label>
                      <input type="hidden"  name="news" value="0" >
                      <input type="checkbox"  name="news" value="1" @if($ghorfehas->news=='1')) checked="checked" @endif/>
                  </div>
                  <div class="form-check form-check-inline">
                      <label for="artistic"> هنری :</label>
                      <input type="hidden"  name="artistic" value="0" >
                      <input type="checkbox"  name="artistic" value="1" @if($ghorfehas->theraputic=='1')) checked="checked" @endif/>
                  </div>
                  <div class="form-group">
                      <label for="activitytypetext">سایر :</label>
                      <input type="text" class="form-control" name="activitytypetext"  value="{{$ghorfehas->activitytypetext}}"/>
                  </div>
              </div>
              <div class="form-group">
                  <label for="ghormasname">نام مسئول غرفه :</label>
                  <input type="text" class="form-control" name="ghormasname" value="{{$ghorfehas->ghormasname}}" />
              </div>
              <div class="form-group">
                  <label for="ghormasfamily">نام  خانوادگی مسئول غرفه :</label>
                  <input type="text" class="form-control" name="ghormasfamily" value="{{$ghorfehas->ghormasfamily}}"/>
              </div>
              <div class="form-group">
                  <label for="ghormasnational">کدملی :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" class="form-control" name="ghormasnational" value="{{$ghorfehas->ghormasnational}}"/>
              </div>
              <div class="form-group">
                  <label for="ghormasphone">تلفن ثابت :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="8" maxlength="8" class="form-control" name="ghormasphone" value="{{$ghorfehas->ghormasphone}}"/>
              </div>
              <div class="form-group">
                  <label for="ghormasmobile">تلفن همراه :</label>
                  <input type="text" onkeypress="return isNumberKey(event)" minlength="11" maxlength="11" class="form-control" name="ghormasmobile" value="{{$ghorfehas->ghormasmobile}}"/>
              </div>
              <div class="form-group">
                  <label for="ghormasphoto">تصویر مسئول :</label>
                  <input type="file" class="form-control" name="ghormasphoto" value="{{$ghorfehas->ghormasphoto}}"/>
                  <img class="img-fluid" src="../../storage/app/public/image/{{ $ghorfehas->ghormasphoto }}" class="img-thumbnail" />
              </div>
              <td><a href="{{ route('ghorfeha.index')}}" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">بروز رسانی غرفه</button>
            </form>
        </div>
    </div>
@endsection