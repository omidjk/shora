<!-- create.blade.php -->


<?php $__env->startSection('content'); ?>
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <script type="text/javascript" src="/js/jscolor.js"></script>
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
           تنظیمات مجوز
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
            <form method="post" action="<?php echo e(route('arrangement.store')); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <?php echo csrf_field(); ?>
                    <label for="riteid">نام مراسم :</label>
                    <select id="riteid" class="form-control" name="riteid">
                        <option value='0'>-- انتخاب مراسم --</option>
                        <?php $__currentLoopData = $getmarasem['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $getmarasem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($getmarasem->id); ?>'><?php echo e($getmarasem->ritename); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ritephoto">تصویر مجوز :</label>
                    <input type="file" class="form-control" name="ritephoto"/>
                </div>
                <div class="form-group">
                    <?php echo csrf_field(); ?>
                    <label for="gname">نام جدول :</label>
                    <select id="riteid" class="form-control" name="riteid">
                        <option value='0'>-- انتخاب جداول --</option>
                        <?php $__currentLoopData = $gettablelist['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gettablelist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($gettablelist); ?>'><?php echo e($gettablelist); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="riteelement">نام فیلد اطلاعاتی :</label>
                    <input type="text" class="form-control" name="riteelement"/>
                </div>

                <div class="form-group">
                    <?php echo csrf_field(); ?>
                    <label for="elementfontname">انتخاب فونت فیلد اطلاعاتی :</label>
                    <select id="elementfontname" class="form-control" name="elementfontname">
                        <option value='0'>-- انتخاب فونت --</option>
                        <?php $__currentLoopData = $getfontfamily['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $getfontfamily): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($getfontfamily->fontname); ?>'><?php echo e($getfontfamily->fontname); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="elementfontsize">اندازه فونت فیلد اطلاعاتی :</label>
                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" minlength="1" maxlength="2" name="elementfontsize"/>
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
                    <?php echo csrf_field(); ?>
                    <label for="elementnamefontsize">انتخاب فونت نام فیلد اطلاعاتی :</label>
                    <select id="elementnamefontsize" class="form-control" name="elementnamefontsize">
                        <option value='0'>-- انتخاب فونت --</option>
                        <?php $__currentLoopData = $getfontnamefamily['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $getfontnamefamily): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value='<?php echo e($getfontnamefamily->fontname); ?>'><?php echo e($getfontnamefamily->fontname); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="elementnamefontsize">اندازه فونت نام فیلد اطلاعاتی :</label>
                    <input type="text" class="form-control " onkeypress="return isNumberKey(event)" minlength="1" maxlength="2" name="elementnamefontsize"/>
                </div>
                <div class="form-group">
                    <label for="elementnamecolor">رنگ فونت نام فیلد اطلاعاتی :</label>
                    <input class="form-control  col-sm-3 color" name="elementnamecolor" value="66ff00"/>
                </div>
                <td><a href="<?php echo e(route('arrangement.index')); ?>" class="btn btn-primary">بازگشت</a></td>
                <button type="submit" class="btn btn-primary">تنظیم مجوز</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/arrangement/create.blade.php ENDPATH**/ ?>