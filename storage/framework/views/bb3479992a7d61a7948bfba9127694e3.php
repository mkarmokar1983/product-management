<?php $__env->startSection('content'); ?>
    <div class="bodyContainer">
        <!-- Sub Header -->
        <div class="subHeader">
            <h4>Update Product</h4>
        </div>

        <div class="showForm">
            <div class="showFormContainer">
                <div class="subHeader">
                    <h4>Product Update</h4>
                </div>


                <form class="showFormContent" action="<?php echo e(route('product.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <label for="product_id">Product ID</label>
                    <div>
                        <input type="text" name="product_id" value="<?php echo e($product->product_id); ?>"
                            placeholder="Enter Product ID">
                        <?php $__errorArgs = ['product_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <label for="name">Product Name</label>
                    <div>
                        <input type="text" name="name" value="<?php echo e($product->name); ?>" placeholder="Enter Product Name">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <label for="description">Product Description</label>
                    <input type="text" name="description" value="<?php echo e($product->description); ?>"
                        placeholder="Enter Product Description">

                    <label for="price">Product Price</label>
                    <div>
                        <input type="text" name="price" value="<?php echo e($product->price); ?>"
                            placeholder="Enter Product Price">
                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <label for="stock">Product Stock</label>
                    <div>
                        <input type="text" name="stock" value="<?php echo e($product->stock); ?>"
                            placeholder="Enter Product Stock Quantity">
                        <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <label for=""></label>
                    <img style="height: 34px; width:60px; border: 1px solid white; border-radius:4px" src="<?php echo e(asset('./product-image/' . $product->image)); ?>"
                        alt="No Img">
                    <label for="image">Change Image</label>
                    <input type="file" name="image" id="" value="<?php echo e($product->image); ?>">
                    <label for=""></label>
                    <div class="showFormBtn">
                        <button><a href="<?php echo e(route('products.index')); ?>">Cancel</a></button>
                        <button type="submit">Update</button>
                        
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\product-management\resources\views/editProduct.blade.php ENDPATH**/ ?>