 
<?php $__env->startSection('title', $viewData['title']); ?> 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="<?php echo e(asset('/img/sofa.png')); ?>" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="<?php echo e(asset('/img/meja.png')); ?>" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="<?php echo e(asset('/img/lemari.png')); ?>" class="img-fluid rounded">
    </div>
</div> <?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\OneDrive\Desktop\Install-Laravel\first-app\example-app\resources\views/home/index.blade.php ENDPATH**/ ?>