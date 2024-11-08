<?php $__env->startSection('content'); ?>
    <div class="bodyContainer">
        <!-- Sub Header -->
        <div class="subHeader">
            <h4>Product Detail</h4>
        </div>

        <div class="showForm">
            <div class="showFormContainer">
                <div class="subHeader">
                    <h4>Product Detail</h4>
                </div>
                <div class="showFormContent">

                    <label for="product_id">Product ID:</label>
                    <p><?php echo e($product->product_id); ?></p>
                    <label for="name">Product Name:</label>
                    <p><?php echo e($product->name); ?></p>
                    <label for="description">Product Description</label>
                    <p><?php echo e($product->description); ?></p>
                    <label for="price">Product Price:</label>
                    <p><?php echo e($product->price); ?></p>
                    <label for="stock">Product Stock:</label>
                    <p><?php echo e($product->stock); ?></p>
                    <label for="image">Image:</label>
                    <p><?php echo e($product->image); ?></p>
                    
                    <label for="image">Created at:</label>
                    <p><?php echo e($product->created_at); ?></p>
                    <label for="image">Updated at:</label>
                    <p><?php echo e($product->updated_at); ?></p>
                    <label for=""></label>
                    <div class="showFormBtn">
                        <button><a href="<?php echo e(route('products.index')); ?>">Back</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\product-management\resources\views\showProduct.blade.php ENDPATH**/ ?>