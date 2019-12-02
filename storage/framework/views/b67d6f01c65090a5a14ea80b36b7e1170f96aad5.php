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
            <td><a href="<?php echo e(route('ghorfeha.create','organid='.$id)); ?>" class="btn btn-primary">افزودن</a></td>
            <td><a href="<?php echo e(route('organs.index')); ?>" class="btn btn-primary">ّبازگشت</a></td>
        </div>
            <table class="table table-striped">
                <thead>
                <tr >
                    <td width="80px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('ردیف'));?></td>
                    <td width="120px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('سال'));?></td>
                    <td width="120px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('مسئول غرفه'));?></td>
                    <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('تلفن'));?></td>
                    <td width="200px"><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('متراژ'));?></td>
                    <td  width="50px" class="align-middle" >وضعیت</td>
                </tr>
                </thead>
                <tbody>
                <?php if($ghorfeha->count()): ?>
                    <?php $__currentLoopData = $ghorfeha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $ghorfehas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($ghorfehas->id); ?></td>
                            <td><?php echo e($ghorfehas->yearofreq); ?></td>
                            <td><?php echo e($ghorfehas->ghormasname." ".$ghorfehas->ghormasfamily); ?></td>
                            <td><?php echo e($ghorfehas->ghormasmobile); ?></td>
                            <td><?php echo e($ghorfehas->meteraj); ?></td>
                            <td width="25px"><a href="<?php echo e(route('item.index','id='.$ghorfehas->id)); ?>" class="btn btn-primary">اقلام</a></td>
                            <td width="25px"><a href="<?php echo e(route('ghorfeha.show',$ghorfehas->id)); ?>" class="btn btn-primary">نمایش</a></td>
                            <td width="25px"><a href="<?php echo e(route('ghorfeha.edit',$ghorfehas->id)); ?>" class="btn btn-primary">ویرایش</a></td>
                            <td width="25px">
                                <form action="<?php echo e(route('ghorfeha.destroy', $ghorfehas->id)); ?>" method="post">
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

            <?php echo $ghorfeha->appends(\Request::except('page'))->render(); ?>

        <div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\resources\views/ghorfeh/ghorfeha/index.blade.php ENDPATH**/ ?>