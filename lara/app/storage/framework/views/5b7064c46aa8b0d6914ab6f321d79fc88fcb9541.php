<?php $__env->startSection('content'); ?>





    <div class="flex">
        
        <div class="inline-flex  m-auto md:ml-6 lg:ml-6">
            <a href="/products/<?php echo e($previous); ?>" class="rounded bg-accent w-18 h-8 m-2 p-1 text-white">Precedent</a>
            
            <a href="/products/<?php echo e($next); ?>" class="rounded bg-accent w-18 h-8 m-2 p-1 text-white hidden md:block lg:block">Suivant</a>
        </div>
<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="header h-20 pt-8 inline-flex m-auto text-lg md:text-xl lg:text-xl ">
            <a class=" m-auto" href="/products/<?php echo e($item['id']); ?>"> <?php echo e($item['name']); ?>

            </a>
        </div>
        
        <div class="inline-flex w-10 m-auto mr-6 hidden md:block lg:block">

            <button onclick="document.body.offsetHeight;window.print();" class=" " >
                    <img class="w-6 h-6 text-gray-300" src="/storage/img/siteicons/print-button.svg">
            </button>
        </div>
        <!--SUIVANT BUTTON-->
        <div class="m-auto md:ml-6 lg:ml-6">        
            <a href="/products/<?php echo e($next); ?>" class="rounded bg-accent w-18 h-8 m-2 p-1 text-white display:block md:hidden lg:hidden" >Suivant</a></div>
    </div>

    
    <div class="bg-white overflow-hidden shadow rounded-lg min-h-full">

    <div class=" md:inline-flex md:flex-row lg:inline-flex  w-full flex">

        <div class="flex-col md:w-3/4 lg:w-3/4">
            
          
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class=" h-20 pt-8 ml-1 md:mx-8 lg:mx-8 font-bold">
                    <a href="/products">Products</a>
                    <span class="text-green"> > </span>
                    <?php if(!empty($parentcat[0])): ?>
                    <a href="/categories/<?php echo e($cat['parent_cat_id']); ?>"><?php echo e($parentcat[0] ??''); ?></a>
                    <span class="text-green"> > </span>
                    <?php else: ?>
                    <a href="/categories/<?php echo e($cat['id']); ?>"><?php echo e($cat['cat_name']); ?></a>
                    <span class="text-[#94ae0e]"> > </span>
                    <?php endif; ?>
                    
                </h3>
              
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>

        


        
        <div class="inline-flex end pt-6 ml-1 flex-row pr-0  md:pr-4 lg:pr-4">
            <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" end">
                    <img class="w-10 h-10 md:m-{20px} p-1" src="/storage/<?php echo e($icon->icon_url); ?>" title="<?php echo e($icon->icon_info); ?>">
                    <p class="text-xs pl-2 text-gray-500 text-center"><?php echo e($icon->icon_value); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
    
                
                <div class=" text-sm ml-1 md:mx-8 lg:mx-8 w-full mt-4">
                    <?php echo $item['description']; ?>

                </div>

            
        <div class=" text-sm mx-0 md:mx-8 lg:mx-8 pt-0 md:pt-8">
            <?php echo $item['content']; ?>

        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex inline-flex md:mt-4 ml-0 md:ml-8 lg:ml-8">
                       <img class="md:w-50 md:h-50 md:-4  columns-1 shadow rounded" src=<?php echo e(asset("storage/$url")); ?>>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



        

            <div class="grid grid-cols-2 mt-4 ml-8 ">
                <table class=" p-2">
                    <tbody class="shadow rounded-lg ">
                        <?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key == 0): ?>
                                    <tr class=" text-xs font-semibold bg-gray-50 rounded-lg text-center">
                                <?php else: ?>
                                    <tr class=" text-xs text-center">
                                <?php endif; ?>
                                        <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <td class="px-2"><?php echo e($line ??''); ?></td>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>


            
            <div class="grid grid-cols-2 my-4 ml-16 md:ml-7 lg:ml-7 w-full">
                <button class="w-50 h-50 m-4 shadow rounded bg-blue-50 text-center" href="/<?php echo e($tableurl); ?>">Telecharger fichier</button>
            </div>






    </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/app/resources/views/layouts/default/product.blade.php ENDPATH**/ ?>