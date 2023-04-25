<?php $__env->startSection('content'); ?>

    <div class="header h-20 pt-8"><a href=<?php echo e(Route('trends.index')); ?>>Tendances</a></div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg p-8 bodybox">





        <div class="grid grid-cols-4 my-8">
            <?php $__currentLoopData = $trends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="bg-white w-46 h-72 col-span-1 m-4 rounded text-card shadow-lg flex flex-col justify-between "><a href="/trends/<?php echo e($id); ?>">
                    <div class=" text-sm text-center h-16 pt-6 pb-2 "><?php echo e($post); ?></div>
                        <img class="w-40 h-40 mx-auto rounded" src="storage/img/trends/<?php echo e($id); ?>/1.jpeg">
                    </a><div class="text-xs text-[#557b97] mb-6 text-center"><a href="/trends/<?php echo e($id); ?>">Lire plus..</a></div>







                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


    </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /applications/XAMPP/xamppfiles/htdocs/lara/app/resources/views/layouts/default/trends.blade.php ENDPATH**/ ?>