<?php $__env->startSection('content'); ?>

        <div class="cx-main-pannel">

             <div class="cx-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <draggable-menu :menu="<?php echo e($menu); ?>" prefix="<?php echo e(menu_prefix()); ?>"></draggable-menu>
                        </div>
                    </div>
                 </div>
            </div>

       </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('menu::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PhpstormProjects\shora\vendor\codexshaper\laravel-menu-builder\src/../resources/views/menus/builder.blade.php ENDPATH**/ ?>