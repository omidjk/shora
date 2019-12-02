<?php $__env->startSection('content'); ?>

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
                <?php echo e($offices->officename); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کد دفتر :</strong>
                <?php echo e($offices->officecode); ?>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام استان :</strong>
               <?php echo e($offices->province); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نام شهر :</strong>
                <?php echo e($offices->city); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عمر بنا :</strong>
                <?php echo e($offices->age); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تعداد طبقات :</strong>
                <?php echo e($offices->floors); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تعداد واحدها :</strong>
                <?php echo e($offices->units); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مهمانسرا :</strong>
                <?php echo e($offices->guestroom); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نوع اسکلت سازه :</strong>
                <?php echo e($offices->structure); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>جنس نمای ساختمان :</strong>
                <?php echo e($offices->frontage); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سیستم اعلام حریق :</strong>
                <?php echo e($offices->firealarm); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سیستم اطفای حریق :</strong>
                <?php echo e($offices->fireext); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>حفاظ :</strong>
                <?php echo e($offices->shield); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>موقعیت ساحتمان در شهر :</strong>
                <?php echo e($offices->location); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کاربری ملک :</strong>
                <?php echo e($offices->usage); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مالکیت ملک :</strong>
                <?php echo e($offices->ownership); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>موقعیت نسبت به سایر ارگانها :</strong>
                <?php echo e($offices->organsposition); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>جمعیت :</strong>
                <?php echo e($offices->population); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نماینده ولی فقیه :</strong>
                <?php echo e($offices->leaderagent); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>استاندار :</strong>
                <?php echo e($offices->governor); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>مسئول شورای هماهنگی :</strong>
                <?php echo e($offices->provincecouncil); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>فرمانده سپاه پاسداران :</strong>
                <?php echo e($offices->commanderarmy); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>فرمانده نیروی انتظامی :</strong>
                <?php echo e($offices->commanderpolice); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>آدرس :</strong>
                <?php echo e($offices->address); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>کد پستی :</strong>
                <?php echo e($offices->postalcode); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تلفن تماس :</strong>
                <?php echo e($offices->phonenumber); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تلفن همراه :</strong>
                <?php echo e($offices->mobile); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نقشه ساختمان :</strong>
                <?php echo e($offices->bulidingmaps); ?>

                <img class="img-fluid" src="../../storage/app/public/buldingmaps/<?php echo e($offices->bulidingmaps); ?>" class="img-thumbnail" />
            </div>
        </div>
        <td class="align-middle"><a href="<?php echo e(route('office.index')); ?>" class="btn btn-primary">بازگشت</a></td>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/baseinfo/office/show.blade.php ENDPATH**/ ?>