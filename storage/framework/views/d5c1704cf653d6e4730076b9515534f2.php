<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(env('APP_NAME')); ?></title>

</head>
<body>
    <header>
        <nav>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Contact</a></li>
        </nav>
    </header>
<div class="container">
    <?php echo $__env->yieldContent('div'); ?>
</div>
</body>
</html>
<?php /**PATH C:\laragon\www\learning1\resources\views/sidebar.blade.php ENDPATH**/ ?>