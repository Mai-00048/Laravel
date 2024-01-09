

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(isset($employee)): ?>
            <h2>Edit Employee</h2>
            <form action="<?php echo e(route('employees.update', $employee->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
        <?php else: ?>
            <h2>Add Employee</h2>
            <form action="<?php echo e(route('employees.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
        <?php endif; ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $employee->name ?? '')); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email', $employee->email ?? '')); ?>" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" value="<?php echo e(old('department', $employee->department ?? '')); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">
                <?php if(isset($employee)): ?>
                    Update Employee
                <?php else: ?>
                    Add Employee
                <?php endif; ?>
            </button>
            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Mai\resources\views/employees/crud.blade.php ENDPATH**/ ?>