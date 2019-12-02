<!-- index.blade.php -->



<?php $__env->startSection('content'); ?>
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        <?php if(session()->get('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>

            </div><br />
        <?php endif; ?>
        <div>
            <td><a href="<?php echo e(route('organs.create')); ?>" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="30px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('ردیف'));?></td>
                <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('نام گروه'));?></td>
                <td width="120px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('کد ارگان'));?></td>
                <td width="300px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('نام ارگان'));?></td>
                <td width="600px">آدرس</td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            <?php if($organss->count()): ?>
              <?php $__currentLoopData = $organss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $organs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($organs->id); ?></td>
                    <td><?php echo e($organs->group_name); ?></td>
                    <td><?php echo e($organs->organ_code); ?></td>
                    <td><?php echo e($organs->organ_name); ?></td>
                    <td width="600px"><?php echo e($organs->organ_address); ?></td>
                    <td width="25px"><a href="<?php echo e(route('ghorfeha.index','id='.$organs->id)); ?>" class="btn btn-primary">غرفه</a></td>
                    <td width="25px"><a href="<?php echo e(route('cordinator.index','id='.$organs->id)); ?>" class="btn btn-primary">نماینده</a></td>
                    <td width="25px"><a href="<?php echo e(route('organs.show',$organs->id)); ?>" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="<?php echo e(route('organs.edit',$organs->id)); ?>" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="<?php echo e(route('organs.destroy', $organs->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger" type="submit">حذف</button>
                        </form>


                    </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </tbody>
        </table>
            <?php echo $organss->appends(\Request::except('page'))->render(); ?>

        <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/organs/index.blade.php ENDPATH**/ ?>