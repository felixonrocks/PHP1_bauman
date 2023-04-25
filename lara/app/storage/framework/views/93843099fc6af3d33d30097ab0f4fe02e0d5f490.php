<?php $__env->startSection('content'); ?>

                <?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="mt-0 bg-white overflow-hidden shadow rounded-lg">

                    
                    <div class="pt-4 ml-12 font-semibold ">
                        <a href="/products" >Produits</a>
                        <span class="px-1 text-green">> </span><?php echo e($cat); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="min-h-fit">
                    <div class="grid grid-cols-1 md:grid-cols-9 m-8 mt-4">
                        <?php $__currentLoopData = $subcats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <div class="px-4">
                                <div class=" w-20 align-middle">
                                    <img  src="/storage/<?php echo e($subcat['image']); ?>" class="w-20 h-20 shadow-lg rounded-md">
                                       </img>
                                    <div class=" text-xs leading-3 font-semibold h-8 pt-3 text-center">
                                        <a href="/select/<?php echo e($subcat['id']); ?>" class=" text-gray-600 border-b-emerald-400"><?php echo e($subcat['cat_name']); ?></a>
                                    </div>
                                </div>

    
    
    
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    </div>

                    
                    <div class="min-h-full">
                        <div class="grid grid-cols-2 md:grid-cols-4 m-8">


                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                <div class="p-6 border rounded">
                                    <div class="">
                                        <img  src="/storage/<?php echo e($product['image'] ??''); ?>" class="w-40 h-40 mx-auto shadow-lg rounded-md">
                                        </img>
                                        <div class="ml-4 text-xs leading-3 font-semibold h-8 pt-3">
                                            <a href="/products/<?php echo e($product['id'] ??''); ?>" class=" text-gray-700 dark:text-white"><?php echo e($product['name'] ??''); ?></a></div>
                                    </div>

                                    <div class="ml-4 text-[13px] h-14 pt-1">
                                        <?php echo $product['description']; ?>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/prontolux.ch/httpdocs/lara/app/resources/views/layouts/default/catsubmenu.blade.php ENDPATH**/ ?>