<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<?php $__env->startSection('sidebar'); ?>
    This is the master sidebar
<?php echo $__env->yieldSection(); ?>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>