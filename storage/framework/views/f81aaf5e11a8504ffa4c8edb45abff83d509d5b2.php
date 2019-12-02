<!-- create.blade.php -->



<?php $__env->startSection('content'); ?>
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
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div><br />
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('rite.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <?php echo csrf_field(); ?>
                    <label for="ritename">مراسم :</label>

                    <select id="ritename" class="form-control" name="ritename">
                        <option value=''>-- انتخاب مراسم --</option>
                        <?php $__currentLoopData = $getmarasem['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $getmarasem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($getmarasem->name); ?>'><?php echo e($getmarasem->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <script src="<?php echo e(asset('/plugins/tinymce/tinymce.min.js')); ?>"></script>
                    <script>
                        tinymce.init({
                            selector:"textarea.riteroles",
                            directionality : 'rtl',
                            language: 'fa_IR',
                            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                            height: 300,
                        });
                    </script>
                </div>
                <td><a href="<?php echo e(route('rite.index')); ?>" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">ایجاد مراسم</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/rite/create.blade.php ENDPATH**/ ?>