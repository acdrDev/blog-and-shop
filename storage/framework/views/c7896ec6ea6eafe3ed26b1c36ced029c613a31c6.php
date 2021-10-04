<?php $__env->startSection('title', $post->title); ?>
<body>
<div class="content">
<?php $__env->startSection('content'); ?>

<!------------------------------Creacion de Las Secciones------------------------------> 
<h2 class="section subtitle"><?php echo e($post->title); ?></h2>
<section class="section">         
                <img src="<?php echo e($post->url_path); ?>">
                <div class="text"><?php echo $post->content; ?></div>
                <div class="section_publications" style="margin-left: 3em;"> 
                  <a href="<?php echo e(url()->previous()); ?>"><button>Volver</button></a>
                </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/petel/Work/blog-and-shop/resources/views/see_more/see_more.blade.php ENDPATH**/ ?>