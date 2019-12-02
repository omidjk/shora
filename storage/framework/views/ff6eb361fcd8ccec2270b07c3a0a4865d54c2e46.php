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
                <strong>مراسم:</strong>
                <?php echo e($rite->ritename); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>سال :</strong>
                <?php echo e($rite->riteyear); ?>

            </div>
        </div>
    <div class="d-flex justify-content-around">
        <strong>   تصاویر مجوزها  </strong>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تصویر 1 :</strong>
                <img class="img-fluid" src="<?php echo e(asset('/storage/app/public/marasem/'.$rite->ritehoto1)); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>تصویر 2 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto2); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 3 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto3); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 4 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto4); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 5 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto5); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 6 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto6); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 7 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto7); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group col-md-3 px-0">
                <strong>تصویر 8 :</strong>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto8); ?>" class="img-thumbnail" />
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group riteroles" name="riteroles" >
                <strong>قوانین امنیتی مراسم :</strong>
                <textarea class="form-control riteroles " rows="5" id="riteroles" name="riteroles" readonly ><?php echo e($rite->riteroles); ?></textarea>
            </div>
        </div>
        <script src="<?php echo e(asset('/plugins/tinymce/tinymce.min.js')); ?>"></script>
        <script>
            tinymce.init({
                selector:'textarea.riteroles',
                directionality : 'rtl',
                language: 'fa_IR',
                height: 300,
            });
        </script>
        <td class="align-middle"><a href="<?php echo e(route('rite.index')); ?>" class="btn btn-primary">بازگشت</a></td>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/rite/show.blade.php ENDPATH**/ ?>