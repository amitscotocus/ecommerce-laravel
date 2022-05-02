

<?php $__env->startSection('admin_content'); ?>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="">Dashboard</a>
        <span class="breadcrumb-item active">Products</span>
    </nav>

    <div class="sl-pagebody">

        <div class="row row-sm">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Update Product</h6>
                <form action="<?php echo e(route('update.products')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden"name="id" value="<?php echo e($product->id); ?>">
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Name <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_name"
                                        value="<?php echo e($product->product_name); ?>" placeholder="Enter product name">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product Code: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_code"
                                        value="<?php echo e($product->product_code); ?>" placeholder="Enter product code">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Price<span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="price" value="<?php echo e($product->price); ?>"
                                        placeholder="Enter price">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Quantity <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_quantity"
                                        value="<?php echo e($product->product_quantity); ?>" placeholder="Enter Product Quantity">
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name="category_id"
                                        data-placeholder="Choose country">
                                        <option label="Choose category"></option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"
                                            <?php echo e($product->category_id == $category->id ? 'selected' : ''); ?>><?php echo e($category->category_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name="brand_id"
                                        data-placeholder="Choose country">
                                        <option label="Choose Brand"></option>
                                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($brand->id); ?>"
                                            <?php echo e($product->brand_id == $brand->id ? 'selected' : ''); ?>><?php echo e($brand->brand_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Short Descriptions</label>
                                    <input class="form-control" name="short_description" type="text" value="<?php echo e($product->short_description); ?>">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Long Descriptions</label>
                                    <input class="form-control" name="long_description" type="text" value="<?php echo e($product->long_description); ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Main Thumbnail</label>
                                    <img src="<?php echo e(asset(asset('images/products/'.$product->image_one))); ?>" height="40px"; width="40"; alt="">
                                    <input class="form-control" type="file" name="image_one">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Image two</label>
                                    <img src="<?php echo e(asset(asset('images/products/'.$product->image_two))); ?>" height="40px"; width="40"; alt="">
                                    <input class="form-control" type="file" name="image_two">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Image three</label>
                                    <img src="<?php echo e(asset(asset('images/products/'.$product->image_three))); ?>" height="40px"; width="40"; alt="">
                                    <input class="form-control" type="file" name="image_three">
                                </div>
                            </div>

                        </div>

                    </div><!-- row -->

                    <!-- row -->

                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-success">Update Product</button>
                    </div>
                </form>
            </div><!-- form-layout -->
        </div><!-- card -->
    </div>


</div><!-- sl-mainpanel -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce-laravel\resources\views\admin\product\edit_product.blade.php ENDPATH**/ ?>