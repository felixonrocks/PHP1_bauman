<?php $__env->startSection('default.products'); ?>


                <div class="header">Tous les produits</div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">
                    <div class="pt-2 ml-12 font-semibold"><a href=<?php echo e(Route('products.index')); ?> >Produits</a><span class="px-1 text-amber-300 ">></span></div>
                
                    <div class="grid grid-cols-1 md:grid-cols-4">

                        
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="p-6 border-r border-b">
                            <div class="">
                                <img  src=""<?php echo e(asset($product['image'])); ?>" class="w-40 h-40 mx-auto shadow-lg"></img>
                                <div class="ml-4 text-xs leading-3 font-semibold h-8 pt-3">
                                    <a href="https://laravel.com/docs" class=" text-gray-700 dark:text-white"><?php echo e($product['name']); ?></a></div>
                                </div>

                            <div class="ml-4 text-[13px] h-14 pt-1">
                              <?php echo e($product['description']); ?>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /applications/XAMPP/xamppfiles/htdocs/lara/app/resources/views/default/products.blade.php ENDPATH**/ ?>