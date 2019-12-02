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
            <td><a href="<?php echo e(route('rite.create')); ?>" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="30px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('ردیف'));?></td>
                <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('مراسم'));?></td>
                <td width="120px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('سال'));?></td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            <?php if($rite->count()): ?>
              <?php $__currentLoopData = $rite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $rites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($rites->id); ?></td>
                    <td><?php echo e($rites->ritename); ?></td>
                    <td><?php echo e($rites->riteyear); ?></td>
                    <td width="25px"><a href="<?php echo e(route('rite.show',$rites->id)); ?>" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="<?php echo e(route('rite.edit',$rites->id)); ?>" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="<?php echo e(route('rite.destroy', $rites->id)); ?>" method="post">
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
            <?php echo $rite->appends(\Request::except('page'))->render(); ?>

        <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/rite/index.blade.php ENDPATH**/ ?>