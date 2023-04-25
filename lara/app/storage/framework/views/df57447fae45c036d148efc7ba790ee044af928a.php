<?php $__env->startSection('content'); ?>

<div class="  mt-4 ml-4 w-8">
            
    
                <label id="hamburger" for="hamburger-input" class="md:hidden lg:hidden ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#3d4246" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </label>
     
    <input type="checkbox" id="hamburger-input" class=" " />
    <ul class="nav-menu text-base font-semibold  ">
        <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link=>$section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="py-1 " id="nav"><a href="/<?php echo e($link); ?>" class=""><?php echo e($section); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>

                <?php $__currentLoopData = $header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="header text-lg md:text-xl lg:text-xl"><a href="<?php echo e(Route('categories.show', $id)); ?>"><?php echo e($cat); ?></a></div>
                <div class="md:mt-8 lg:mt-8 bg-white overflow-hidden shadow rounded-lg">

                    
                    <div class="pt-4 ml-12 font-semibold ">
                        <a href="/products" >Produits</a>
                        <span class="px-1 text-amber-300 ">></span><?php echo e($cat); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="min-h-full">
                    <div class="grid grid-cols-1 md:grid-cols-4 m-8">


                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="p-6 border rounded">
                            <div class="">
                                <img  src="/storage/<?php echo e($product['image']); ?>" class="w-40 h-40 mx-auto shadow-lg rounded-md">
                                   </img>
                                <div class="ml-4 text-xs leading-3 font-semibold h-8 pt-3">
                                    <a href="/products/<?php echo e($product['id']); ?>" class=" text-gray-700"><?php echo e($product['name']); ?></a></div>
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

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/app/resources/views/layouts/default/products.blade.php ENDPATH**/ ?>