<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-right">

            <h2>ویرایش نوع دسترسی</h2>

        </div>

        <div class="pull-left">

            <a class="btn btn-primary" href="<?php echo e(route('roles.index')); ?>"> بازگشت</a>

        </div>

    </div>

</div>


<?php if(count($errors) > 0): ?>

    <div class="alert alert-danger">

        <strong>شرمنده!</strong> فکر کنم در ورود اطلاعات مشکلی داشتید.<br><br>
		
        <ul>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li><?php echo e($error); ?></li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

    </div>

<?php endif; ?>


<?php echo Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]); ?>


<div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>نام :</strong>

            <?php echo Form::text('name', null, array('placeholder' => 'نام','class' => 'form-control')); ?>


        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>نوع دسترسی :</strong>

            <br/>

            <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <label><?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name'))); ?>


                <?php echo e($value->name); ?></label>

            <br/>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">اعمال</button>

    </div>

</div>

<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/roles/edit.blade.php ENDPATH**/ ?>