<?php $__env->startSection('title', 'galeria ver mas'); ?>

<?php $__env->startSection('content'); ?>


<section class="section see_more">         
                <img src="<?php echo e($product->url_path); ?>">
                <div>
                <h2><?php echo e($product->title); ?></h2>
                <p class="text"><?php echo $product->description; ?></p>
                <div class="section_publications"> 
                  <a href="<?php echo e(url()->previous()); ?>"><button>Volver</button></a>
                  <a href="#"><button>Descargar</button></a>
                </div>
                </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/petel/Work/blog-and-shop/resources/views/see_more/gallery_see.blade.php ENDPATH**/ ?>