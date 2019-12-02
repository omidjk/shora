<!-- create.blade.php -->


<?php $__env->startSection('content'); ?>
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<script>
    function isNumberKey(evt) {
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
        <?php if ($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all();
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData as $error): $__env->incrementLoopIndices();
                        $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>
                </ul>
            </div><br/>
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('rite.update', $rite->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <div class="form-group">

                <label for="gname">مراسم :</label>

                <select id="ritename" class="form-control" name="ritename">
                    <option value=''> -- انتخاب مراسم --</option>
                    <?php $__currentLoopData = $getmarasem['data'];
                    $__env->addLoop($__currentLoopData);
                    foreach ($__currentLoopData as $key => $getmarasem): $__env->incrementLoopIndices();
                        $loop = $__env->getLastLoop(); ?>
                        <option value='<?php echo e($getmarasem->name); ?>'
                            <?php if ($getmarasem->name == $rite->ritename): ?>
                                selected='selected'
                            <?php endif; ?>>
                            <?php echo e($getmarasem->name); ?>

                        </option>
                    <?php endforeach;
                    $__env->popLoop();
                    $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="riteyear">سال :</label>
                <input type="text" onkeypress="return isNumberKey(event)" minlength="4" maxlength="4"
                       class="form-control" name="riteyear" value="<?php echo e($rite->riteyear); ?>"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto1">ویرایش تصویر1 :</label>
                <input type="file" class="form-control" name="ritehoto1" value="<?php echo e($rite->ritehoto1); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto1); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto2">ویرایش تصویر2 :</label>
                <input type="file" class="form-control" name="ritehoto2" value="<?php echo e($rite->ritehoto2); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto2); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto3">ویرایش تصویر3 :</label>
                <input type="file" class="form-control" name="ritehoto3" value="<?php echo e($rite->ritehoto3); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto3); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto4">ویرایش تصویر4 :</label>
                <input type="file" class="form-control" name="ritehoto4" value="<?php echo e($rite->ritehoto4); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto4); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto5">ویرایش تصویر5 :</label>
                <input type="file" class="form-control" name="ritehoto5" value="<?php echo e($rite->ritehoto5); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto5); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto6">ویرایش تصویر6 :</label>
                <input type="file" class="form-control" name="ritehoto6" value="<?php echo e($rite->ritehoto6); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto6); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto7">ویرایش تصویر7 :</label>
                <input type="file" class="form-control" name="ritehoto7" value="<?php echo e($rite->ritehoto7); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto7); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group col-md-3 px-0">
                <label for="ritehoto8">ویرایش تصویر8 :</label>
                <input type="file" class="form-control" name="ritehoto8" value="<?php echo e($rite->ritehoto8); ?>"/>
                <img class="img-fluid" src="../storage/app/public/marasem/<?php echo e($rite->ritehoto8); ?>"
                     class="img-thumbnail"/>
            </div>
            <div class="form-group">
                <label for="riteroles">قوانین امنیتی مراسم :</label>
                <textarea class="form-control riteroles " rows="5" id="riteroles"
                          name="riteroles"><?php echo e($rite->riteroles); ?></textarea>
                <script src="<?php echo e(asset('/plugins/tinymce/tinymce.min.js')); ?>"></script>
                <script>
                    tinymce.init({
                        selector: 'textarea.riteroles',
                        directionality: 'rtl',
                        language: 'fa_IR',
                        height: 300,
                    });
                </script>
            </div>
            <td><a href="<?php echo e(route('rite.index')); ?>" class="btn btn-primary">بازگشت</a></td>
            <button type="submit" class="btn btn-primary">ویرایش مراسم</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/rite/edit.blade.php ENDPATH**/ ?>