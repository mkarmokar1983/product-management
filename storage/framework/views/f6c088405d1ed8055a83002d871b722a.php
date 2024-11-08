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
                    <button><a href="<?php echo e(route('product.create')); ?>">Create</a></button>
                </div>
            </div>

            <!-- Table Section -->
            <div class="tableHeight">
                <table class="tableGlobal">
                    <thead>
                        <tr class="tr-sicky">
                            <th>SL</th>
                            <th>Product_ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>price</th>
                            <th>Stock</th>
                            <th>Image</th>
                            <th style="width: 160px">Actions</th>

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
                                    <td><?php echo e($product->image); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('product.show', $product->id)); ?>">Show</a> &nbsp;&nbsp;
                                        <a href="<?php echo e(route('product.edit', $product->id)); ?>">Edit</a>&nbsp;&nbsp;
                                        <a href="<?php echo e(route('product.delete', $product->id)); ?>">Delete</a>

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
            </div>
            <!-- Pagination Section -->
            <div class="paginationBody">

                <div class="pagination">
                    <button>&lt &lt</button>
                    <button>&gt &gt</button>
                    <select name="" id="">
                        <option value="">1</option>
                        <option value="">2</option>
                    </select>
                    <button>Go</button>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\product-management\resources\views\index.blade.php ENDPATH**/ ?>