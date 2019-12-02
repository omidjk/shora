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
            <td><a href="<?php echo e(route('item.create','ghorfehid='.$id)); ?>" class="btn btn-primary">افزودن</a></td>
            <td><a href="<?php echo e(route('ghorfeha.index')); ?>" class="btn btn-primary">ّبازگشت</a></td>

        </div>
            <table class="table table-striped">
                <thead>
                <tr >
                    <td width="100px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('ردیف'));?></td>
                    <td width="100px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('کد غرفه'));?></td>
                    <td width="300px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('نوع پذیرایی'));?></td>
                    <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('شرح '));?></td>
                    <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('تعداد'));?></td>
                    <td  width="50px" class="align-middle" >وضعیت</td>
                </tr>
                </thead>
                <tbody>
                <?php if($item->count()): ?>
                    <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($items->id); ?></td>
                            <td><?php echo e($items->ghorfehid); ?></td>
                            <td><?php echo e($items->itemtype); ?></td>
                            <td><?php echo e($items->itemname); ?></td>
                            <td><?php echo e($items->itemnumber); ?></td>
                            <td width="25px"><a href="<?php echo e(route('item.show',$items->id)); ?>" class="btn btn-primary">نمایش</a></td>
                            <td width="25px"><a href="<?php echo e(route('item.edit',$items->id)); ?>" class="btn btn-primary">ویرایش</a></td>
                            <td width="25px">
                                <form action="<?php echo e(route('item.destroy', $items->id)); ?>" method="post">
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

            <?php echo $item->appends(\Request::except('page'))->render(); ?>

        <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/item/index.blade.php ENDPATH**/ ?>