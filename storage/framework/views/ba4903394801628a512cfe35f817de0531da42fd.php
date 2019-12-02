<?php $__env->startSection('content'); ?>

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h4>دسترسی ها</h4>

        </div>

        <div class="pull-right">
            <td><a href="<?php echo e(route('home')); ?>" class="btn btn-primary">ّبازگشت</a></td>

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>

            <a class="btn btn-success" href="<?php echo e(route('roles.create')); ?>"> ایجاد دسترسی جدید</a>

            <?php endif; ?>

        </div>

    </div>

</div>


<?php if($message = Session::get('success')): ?>

    <div class="alert alert-success">

        <p><?php echo e($message); ?></p>

    </div>

<?php endif; ?>


<table class="table table-bordered">

  <tr>

     <th>ردیف</th>

     <th>نام کاربر</th>

     <th width="280px">عملیات</th>

  </tr>

    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>

        <td><?php echo e(++$i); ?></td>

        <td><?php echo e($role->name); ?></td>

        <td>

            <a class="btn btn-info" href="<?php echo e(route('roles.show',$role->id)); ?>">نمایش</a>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-edit')): ?>

                <a class="btn btn-primary" href="<?php echo e(route('roles.edit',$role->id)); ?>">ویرایش</a>

            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-delete')): ?>

                <?php echo Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']); ?>


                    <?php echo Form::submit('حذف', ['class' => 'btn btn-danger']); ?>


                <?php echo Form::close(); ?>


            <?php endif; ?>

        </td>

    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>


<?php echo $roles->render(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/roles/index.blade.php ENDPATH**/ ?>