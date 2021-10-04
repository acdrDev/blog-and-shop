<?php $__env->startSection('title', 'Publicaciones'); ?>
    
      <!-----------------------------------Creacion de Las Secciones------------------------------------>
      <?php $__env->startSection('content'); ?>
          
   
<div class="justify_section">
<div class="section_shot_justify">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2 class="section subtitle"> <?php echo e($post->title); ?></h2>
    <section class="section">
        <div class="section_publications">
          <img src=" <?php echo e($post->url_path); ?>" alt="<?php echo e($post->title); ?>">
            <p><?php echo $post->content; ?></p>
           <!-- <h3>Categoria: {$category->category}</h3>-->
            <a href="<?php echo e(route('see_more', $post)); ?>"><button>Ver más</button></a>
        </div>
    </section>    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
 <!---------------------------------Elavoracion Del Aside-------------------------------------------->
 <div class="aside_justify">
    <?php echo $__env->make('layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div> 
</div>   
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/petel/Work/blog-and-shop/resources/views/post.blade.php ENDPATH**/ ?>