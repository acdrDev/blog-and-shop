<?php $__env->startSection('title','Galeria'); ?>
    
<?php $__env->startSection('content'); ?>

      <!----------------------------Creacion de Las Secciones-------------------------------->
<div class="justify_section">
<div class="shot_justify">
    <h2 class="section subtitle">Galeria</h2> 
    <section class="section shot_content">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="products letters">
                <img src="<?php echo e($product->url_path); ?>" alt="<?php echo e($product->title); ?>">
                <p><?php echo e($product->title); ?></p>
                <h3><?php echo e($product->price); ?></h3>
                <a href="<?php echo e(route('gallery_see', $product )); ?>"><button>Ver mas</button></a>
            </div>     
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </section>
</div>
        <!---------------------------Elavoracion Del Aside------------------------------------->
        <div class="aside_justify">
            
            <?php echo $__env->make('layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div> 
        
            </div> 
            
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/petel/Work/blog-and-shop/resources/views/gallery.blade.php ENDPATH**/ ?>