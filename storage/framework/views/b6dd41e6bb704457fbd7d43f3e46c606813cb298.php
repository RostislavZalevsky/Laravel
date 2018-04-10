<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Table</title>
</head>
<body>
<?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($row->Id); ?>) <?php echo e($row->Name); ?>

    <a href='edit/<?php echo e($row->Id); ?>'>Edit</a>
    <a href = 'delete/<?php echo e($row->Id); ?>'>Delete</a>
    <br/>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<a href="/insert">New</a>
</body>
</html>