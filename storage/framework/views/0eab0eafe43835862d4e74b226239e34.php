<!-- Header Body Start -->
<div class="header">
    <div class="logo">
        <!-- Header Image Logo -->
        <img src="<?php echo e(asset("./images/logo.png")); ?>" alt="Product Management.">
    </div>
    <!-- Menue item inside Header -->
    <div class="menueBar">
        
        <ul>
            
            <li class="menue"> Product&#9662;
                <ul class="subMenue">
                    <li><a href="<?php echo e(route('products.index')); ?>">Product List</a></li>
                    <li><a href="<?php echo e(route('product.create')); ?>">Create Product</a></li>
                </ul>
            </li>
        </ul>

    </div>

    <!-- User Information inside Header -->
    <div class="user">
        <img src="<?php echo e(asset("./images/userimage.jpg")); ?>" alt="User Image">
        <span>Mrinal Karmokar</span>
    </div>
</div>


<?php /**PATH D:\xampp\htdocs\product-management\resources\views/Layout/header.blade.php ENDPATH**/ ?>