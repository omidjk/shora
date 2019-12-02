
<li data-id="<?php echo e($menu->id); ?>" class="menu_item">
    <a href="<?php echo e(($menu->url != '') ? $menu->url : '#'); ?>">
       <span class="menu-icon"></span><?php echo $menu->icon; ?> 
        <span class="menu-title"><?php echo e($menu->title); ?></span>
    </a>
    <?php if(count($menu->children) > 0): ?>
        <ul class="
        level_<?php echo e(++$i); ?>

        <?php echo e(menu_lebel_show($settings['levels'], 'level_'.$i)); ?>

        <?php echo e(menu_lebel_position($settings['levels'], 'level_'.$i)); ?>">
            <?php $__currentLoopData = $menu->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make(
                    'menu::menus.recursive',
                    [
                        'menu'=>$menu,
                        'settings'=>$settings,
                        'i' => $i
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</li>
<?php /**PATH D:\PhpstormProjects\shora\vendor\codexshaper\laravel-menu-builder\src/../resources/views/menus/recursive.blade.php ENDPATH**/ ?>