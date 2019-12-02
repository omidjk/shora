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
                <strong>مراسم:</strong>
                {{ $rite->ritename }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سال :</strong>
                {{$rite->riteyear}}
            </div>
        </div>
    <div class="d-flex justify-content-around">
        <strong>   تصاویر مجوزها  </strong>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تصویر 1 :</strong>
                <img class="img-fluid" src="{{ asset('/storage/app/public/marasem/'.$rite->ritehoto1) }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تصویر 2 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto2 }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 3 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto3 }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 4 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto4 }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 5 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto5 }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 6 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto6 }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 7 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto7 }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 8 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/{{ $rite->ritehoto8 }}" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group riteroles" name="riteroles" >
                <strong>قوانین امنیتی مراسم :</strong>
                <textarea class="form-control riteroles " rows="5" id="riteroles" name="riteroles" readonly >{{$rite->riteroles }}</textarea>
            </div>
        </div>
        <script src="{{asset('/plugins/tinymce/tinymce.min.js')}}"></script>
        <script>
            tinymce.init({
                selector:'textarea.riteroles',
                directionality : 'rtl',
                language: 'fa_IR',
                height: 300,
            });
        </script>
        <td class="align-middle"><a href="{{ route('rite.index')}}" class="btn btn-primary">بازگشت</a></td>
    </div>
@endsection