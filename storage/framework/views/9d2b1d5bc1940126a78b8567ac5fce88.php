

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Add Employee</h2>

        <form action="<?php echo e(route('employees.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Employee</button>
            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Mai\resources\views/employees/create.blade.php ENDPATH**/ ?>