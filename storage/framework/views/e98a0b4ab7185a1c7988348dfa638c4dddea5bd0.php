<ul class="level_root <?php echo e($settings['levels']['root']['style']); ?>">

    <?php $__currentLoopData = $menuItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make(
        	'menu::menus.recursive', 
        	[
        		'menu'=>$menu,
        		'settings'=>$settings,
        		'i' => 0
        	], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH D:\PhpstormProjects\shora\vendor\codexshaper\laravel-menu-builder\src/../resources/views/menus/generate-menu.blade.php ENDPATH**/ ?>