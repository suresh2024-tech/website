<!-- resources/views/services.blade.php -->



<?php $__env->startSection('title', 'Captured Moments - Services'); ?>

<?php $__env->startSection('content'); ?>
<div class="site-section" data-aos="fade">
  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="row mb-5">
          <div class="col-12 ">
            <h2 class="site-section-heading text-center">My Services</h2>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
        <div class="h-100 p-4 p-lg-5 site-block-feature-7">
          <span class="icon <?php echo e($service['icon']); ?> display-3 text-primary mb-4 d-block"></span>
          <h3 class="text-white h4"><?php echo e($service['title']); ?></h3>
          <p><?php echo e($service['description']); ?></p>
          <p><strong class="font-weight-bold text-primary">Rs.<?php echo e($service['price']); ?></strong></p>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout_services', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylaravelproject\resources\views/frontend/services.blade.php ENDPATH**/ ?>