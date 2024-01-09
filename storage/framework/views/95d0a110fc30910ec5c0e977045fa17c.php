

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Employee List</h2>
        
        <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-flex" role="search">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>

        <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-success mb-2">Add Employee</a>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee Department</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($employee->id); ?></td>
                        <td><?php echo e($employee->name); ?></td>
                        <td><?php echo e($employee->email); ?></td>
                        <td><?php echo e($employee->department); ?></td>
                        <td>
                            <a href="<?php echo e(route('employees.edit', ['employee' => $employee->id])); ?>" class="btn btn-primary">Edit</a>

                            <form action="<?php echo e(route('employees.destroy', $employee->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="5">No employees found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Mai\resources\views/employees/index.blade.php ENDPATH**/ ?>