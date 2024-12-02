<?php


	//dump($albums);


?>


<?php $__env->startSection('content'); ?>
<section class="content">
      <div class="container-fluid">


      <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
      <?php endif; ?>

      <a href="<?php echo e(route('admin.albums.create')); ?>"
        class="btn btn-primary" style="margin-bottom: 10px;"
        >Create New Album</a>

        <!-- Small boxes (Stat box) -->
        <div class="row">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Cover Image</th>
	  <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
	<?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo e($album->title); ?></td>
      <td><?php echo e($album->description); ?></td>
	  <td>----</td>
      <td>

	  <a href="<?php echo e(route('admin.albums.edit',$album->id )); ?>">Edit</a>
	  <a href="<?php echo e(route('admin.albums.delete',$album->id )); ?>">Delete</a>
	  </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylaravelproject\resources\views/admin/albums.blade.php ENDPATH**/ ?>