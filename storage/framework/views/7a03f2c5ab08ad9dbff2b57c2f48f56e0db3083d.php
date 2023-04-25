<?php $__env->startSection('content'); ?>





    <div class="flex">
        
        <div class="inline-flex  m-auto ml-6">
            <a href="/products/<?php echo e($previous); ?>" class="rounded bg-accent w-18 h-8 m-2 p-1 text-white">Precedent</a>
            <a href="/products/<?php echo e($next); ?>" class="rounded bg-accent w-18 h-8 m-2 p-1 text-white">Suivant</a>
        </div>
<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <div class="header h-20 pt-8 inline-flex m-auto">
            <a class=" m-auto" href="/products/<?php echo e($item['id']); ?>"> <?php echo e($item['name']); ?>

            </a>
        </div>
        
        <div class="inline-flex w-10 m-auto mr-6" >
            <button onclick="document.body.offsetHeight;window.print();">
                    <img class="w-6 h-6 text-gray-300" src="/storage/img/siteicons/print-button.svg">
            </button>
        </div>
    </div>

    
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg min-h-full">

    <div class="inline-flex  w-full flex">

        <div class="flex-col w-3/4">
            
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3 class=" h-20 pt-8 mx-8 font-bold">
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
            
                <div class=" text-sm mx-8 ">
                    <?php echo $item['description']; ?>

                </div>
        </div>


        
        <div class="inline-flex pt-6 ml-1 flex-raw  end pr-4">
            <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" end">
                    <img class="w-10 h-10 m-{20px} p-1" src="/storage/<?php echo e($icon->icon_url); ?>" title="<?php echo e($icon->icon_info); ?>">
                    <p class="text-xs pl-2 text-gray-500 text-center"><?php echo e($icon->icon_value); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>

            
        <div class=" text-sm mx-8 pt-8">
            <?php echo $item['content']; ?>

        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex inline-flex mt-4 ml-4">
                       <img class="w-50 h-50 m-4  columns-1 shadow rounded" src=<?php echo e(asset("storage/$url")); ?>>
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


            
            <div class="grid grid-cols-2 mt-4 ml-7">
                <a class="w-50 h-50 m-4 shadow rounded bg-blue-50 text-center" href="/<?php echo e($tableurl); ?>">Telecharger fichier</a>
            </div>






    </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /applications/XAMPP/xamppfiles/htdocs/lara/app/resources/views/layouts/default/product.blade.php ENDPATH**/ ?>