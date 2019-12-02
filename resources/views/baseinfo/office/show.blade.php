@extends('layouts.app2')

@section('content')

    <div class="row" style="margin-bottom: 20px;" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h3>نمایش اطلاعات</h3>
            </div>
        </div>
    </div>

    <div class="row" >

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> نام دفتر :</strong>
                {{$offices->officename}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کد دفتر :</strong>
                {{$offices->officecode}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام استان :</strong>
               {{$offices->province}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام شهر :</strong>
                {{$offices->city}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عمر بنا :</strong>
                {{$offices->age}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تعداد طبقات :</strong>
                {{$offices->floors}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تعداد واحدها :</strong>
                {{$offices->units}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مهمانسرا :</strong>
                {{$offices->guestroom}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نوع اسکلت سازه :</strong>
                {{$offices->structure}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>جنس نمای ساختمان :</strong>
                {{$offices->frontage}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سیستم اعلام حریق :</strong>
                {{$offices->firealarm}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سیستم اطفای حریق :</strong>
                {{$offices->fireext}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>حفاظ :</strong>
                {{$offices->shield}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>موقعیت ساحتمان در شهر :</strong>
                {{$offices->location}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کاربری ملک :</strong>
                {{$offices->usage}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مالکیت ملک :</strong>
                {{$offices->ownership}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>موقعیت نسبت به سایر ارگانها :</strong>
                {{$offices->organsposition}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>جمعیت :</strong>
                {{$offices->population}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نماینده ولی فقیه :</strong>
                {{$offices->leaderagent}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>استاندار :</strong>
                {{$offices->governor}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مسئول شورای هماهنگی :</strong>
                {{$offices->provincecouncil}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>فرمانده سپاه پاسداران :</strong>
                {{$offices->commanderarmy}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>فرمانده نیروی انتظامی :</strong>
                {{$offices->commanderpolice}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>آدرس :</strong>
                {{$offices->address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کد پستی :</strong>
                {{$offices->postalcode}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تلفن تماس :</strong>
                {{$offices->phonenumber}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تلفن همراه :</strong>
                {{$offices->mobile}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نقشه ساختمان :</strong>
                {{$offices->bulidingmaps}}
                <img class="img-fluid" src="../../storage/app/public/buldingmaps/{{ $offices->bulidingmaps }}" class="img-thumbnail" />
            </div>
        </div>
        <td class="align-middle"><a href="{{ route('office.index')}}" class="btn btn-primary">بازگشت</a></td>
    </div>
@endsection