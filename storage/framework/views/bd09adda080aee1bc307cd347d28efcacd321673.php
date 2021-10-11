<section class="section aside">
    <p>Publicaciones Recientes</p>
        <ul>
            <li><a href="#">> Lorem ipsum</a></li>
            <li><a href="#">> Lorem ipsum</a></li>
            <li><a href="#">> Lorem ipsum</a></li>
        </ul>        
</section>
<section class="section aside">
    <p>Categoria</p>
    
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach ($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
    <div class="aside--input"> 
    <a href="<?php echo e(route($route, ["ct"=>$category])); ?>"> <?php echo e($category->category); ?></a></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="aside--input"> 
    <a href="<?php echo e(route($route)); ?>">Ver Todo</a></div>
<?php /**PATH /home/petel/Work/blog-and-shop/resources/views/layouts/aside.blade.php ENDPATH**/ ?>