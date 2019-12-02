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
            <td><a href="<?php echo e(route('office.create')); ?>" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="50px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('ردیف'));?></td>
                <td width="150px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('نام دفتر'));?></td>
                <td width="120px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('کد دفتر'));?></td>
                <td width="150px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('استان'));?></td>
                <td width="150px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('شهر'));?></td>
                <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('نام مسئول'));?></td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            <?php if($offices->count()): ?>
              <?php $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($office->id); ?></td>
                    <td><?php echo e($office->officename); ?></td>
                    <td><?php echo e($office->officecode); ?></td>
                    <td><?php echo e($office->province); ?></td>
                    <td><?php echo e($office->city); ?></td>
                    <td><?php echo e($office->provincecouncil); ?></td>
                    <td width="25px"><a href="<?php echo e(route('office.show',$office->id)); ?>" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="<?php echo e(route('office.edit',$office->id)); ?>" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="<?php echo e(route('office.destroy', $office->id)); ?>" method="post">
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
            <?php echo $offices->appends(\Request::except('page'))->render(); ?>

        <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/baseinfo/office/index.blade.php ENDPATH**/ ?>