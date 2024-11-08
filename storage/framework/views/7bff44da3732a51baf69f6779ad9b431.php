<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
<link rel="stylesheet" href="<?php echo e(asset(".\css\main.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset(".\css\headerfooter.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset(".\css\login.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset(".\css\modal.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset(".\css\dashboard.css")); ?>">
<link rel="stylesheet" href="<?php echo e(asset(".\css\hightcontrol.css")); ?>">


</head>
<body>

    <section>
        <?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    

    <section>
        <?php echo $__env->yieldContent('content'); ?>
    </section>
    
    
    <section>
        <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

   <script src="<?php echo e(asset(".\js\modal.js")); ?>"></script>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\product-management\resources\views/Layout/app.blade.php ENDPATH**/ ?>