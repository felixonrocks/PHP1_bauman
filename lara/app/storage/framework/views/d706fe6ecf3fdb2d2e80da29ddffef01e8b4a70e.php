<?php $__env->startSection('content'); ?>

    <div class="header h-20 pt-8"><a href=<?php echo e(Route('trends.index')); ?>>Tendances</a></div>
    <div class="bg-white overflow-hidden shadow rounded-lg p-4 md:p-8 lg:p-8 bodybox">





        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 my-8">
            <?php $__currentLoopData = $trends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id=>$post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="bg-white w-46 md:w-46 h-72 col-span-1 m-1 mb-3 md:m-4 lg:m-4 rounded text-card shadow-lg flex flex-col justify-between "><a href="/trends/<?php echo e($id); ?>">
                    <div class=" text-sm text-center h-16 pt-2 md:pt-6 lg:pt-6 "><?php echo e($post); ?></div>
                        <img class="w-40 h-40 mx-auto rounded" src="storage/img/trends/<?php echo e($id); ?>/1.jpeg">
                    </a><div class="text-xs text-[#557b97] mb-6 text-center"><a href="/trends/<?php echo e($id); ?>">Lire plus..</a></div>







                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


    </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/vhosts/prontolux.ch/httpdocs/lara/app/resources/views/layouts/default/trends.blade.php ENDPATH**/ ?>