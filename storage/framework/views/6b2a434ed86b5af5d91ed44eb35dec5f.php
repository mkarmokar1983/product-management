<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<?php $__env->startSection('content'); ?>
    
    <!-- Body Excluding Header footer -->
    <div class="bodyContainer">
        <!-- Sub Header -->
        <div class="subHeader">
            <h4>Product Information</h4>
        </div>
        <!-- SUB CONTAINER -->
        <div class="subContainer appBody">
            <!-- Searshing Section -->
            <div class="searchAdd">
                <div>
                    <form action="<?php echo e(route('products.index')); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <input id= "search" type="text" name="search" placeholder="Search by Product ID or Description"
                            value="<?php echo e(request('search')); ?>">
                        <button type="submit">Search</button>
                    </form>
                </div>

                

                <div class="sort">
                    <form action="<?php echo e(route('products.index')); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <select name="sort" id="sort">
                            
                            <option value="name_asc" selected>Sort By Name (A-Z)</option>
                            <option value="name_desc">Sort By Name (Z-A)</option>
                            <option value="price_asc">Sort By Price (A-Z)</option>
                            <option value="price_desc">Sort By Price (Z-A)</option>
                        </select>

                        <button type="submit">Sort</button>
                    </form>
                </div>

                <div>
                    <button style="background-color: green"><a href="<?php echo e(route('product.create')); ?>">Create</a></button>
                </div>
            </div>

            <!-- Table Section -->
            <div>
                <table class="tableGlobal">
                    <thead>
                        <tr class="tr-sicky">
                            <th>SL</th>
                            <th>Product_ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>price</th>
                            <th>Stock</th>
                            <th style="text-align: center; width:100px;">Image</th>
                            <th style="text-align:center; width:80px">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sl = 0;
                        ?>

                        <?php if($products->isNotEmpty()): ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($sl += 1); ?></td>
                                    <td><?php echo e($product->product_id); ?></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><?php echo e($product->description); ?></td>
                                    <td><?php echo e($product->price); ?></td>
                                    <td><?php echo e($product->stock); ?></td>
                                    <td>
                                        <div class="product-image">
                                            <img style="opacity: 100%; padding:1px" src="<?php echo e(asset('./product-image/' . $product->image)); ?>"
                                                alt="No-Image">
                                        </div>

                                    </td>
                                    <td class="tdAction">
                                        <div>

                                            <button class="showButton"><a
                                                    href="<?php echo e(route('product.show', $product->id)); ?>">Show</a></button>
                                        </div>
                                        <div>
                                            <button class="editButton"><a
                                                    href="<?php echo e(route('product.edit', $product->id)); ?>">Edit</a></button>
                                        </div>
                                        <div style="max-width: 50px; max-height:25px">
                                            <form action="<?php echo e(route('product.delete', $product->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>

                                                <button class="deleteButton" type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <tr>
                                <td>No Product Found!</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div><?php echo e($products->links('pagination::bootstrap-5')); ?></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\product-management\resources\views/index.blade.php ENDPATH**/ ?>