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
            <td><a href="<?php echo e(route('maps.create')); ?>" class="btn btn-primary">افزودن</a></td>
        </div>
        <table class="table table-striped">
            <thead>
            <tr >
                <td width="30px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('ردیف'));?></td>
                <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('جهت'));?></td>
                <td width="120px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('خیابان'));?></td>
                <td width="300px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('از'));?></td>
                <td width="300px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('تا'));?></td>
                <td width="50px">وضعیت</td>
            </tr>
            </thead>
            <tbody>
            <?php if($maps->count()): ?>
              <?php $__currentLoopData = $maps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $map): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($map->id); ?></td>
                    <td><?php echo e($map->direction); ?></td>
                    <td><?php echo e($map->street); ?></td>
                    <td width="600px"><?php echo e($map->place1." ".$map->beetween1); ?></td>
                    <td width="600px"><?php echo e($map->place2." ".$map->beetween2); ?></td>
                    <td width="25px"><a href="<?php echo e(route('property.index','id='.$map->id)); ?>" class="btn btn-primary">ملک</a></td>
                    <td width="25px"><a href="<?php echo e(route('maps.show',$map->id)); ?>" class="btn btn-primary">نمایش</a></td>
                    <td width="25px"><a href="<?php echo e(route('maps.edit',$map->id)); ?>" class="btn btn-primary">ویرایش</a></td>
                    <td width="25px">
                        <form action="<?php echo e(route('maps.destroy', $map->id)); ?>" method="post">
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
            <?php echo $maps->appends(\Request::except('page'))->render(); ?>

        <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/map/index.blade.php ENDPATH**/ ?>