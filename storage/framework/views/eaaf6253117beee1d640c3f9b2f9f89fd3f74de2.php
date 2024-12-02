<?php $__env->startSection('title', 'Gallery - Captured Moments'); ?>

<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <h1 class="text-center mb-5">Our Gallery</h1>
    <div class="row">
        <?php for($i = 1; $i <= 12; $i++): ?>
            <div class="col-md-4 col-sm-6 gallery-item">
                <img src="https://picsum.photos/id/<?php echo e($i + 10); ?>/400/300" alt="Gallery Image <?php echo e($i); ?>" class="img-fluid">
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout_gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ananda/Downloads/mylaravelproject/resources/views/frontend/gallery.blade.php ENDPATH**/ ?>