<?php $__env->startSection('content'); ?>

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <form method="post" action="<?php echo e(route('admin.albums.save')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Album Title</label>
                    <input type="text" name="title" class="form-control">

                </div>

                <div class="form-group">
                    <label for="">Album Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Cover Image</label>
                    <input type="file" name="cover_image">
                </div>

                <input type="submit" value="save" name="save" class="btn btn-primary">


            </form>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mylaravelproject\resources\views/admin/create_album.blade.php ENDPATH**/ ?>