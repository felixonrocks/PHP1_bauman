<?php $__env->startSection('content'); ?>

    <div class="header h-20 pt-8"><a href="<?php echo e(Route('posts.index')); ?>">News</a></div>
    <div class="bg-white overflow-hidden shadow rounded-lg min-h-full">






            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title=>$content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <h3 class=" h-20 pt-8 mx-8 font-bold"><a href="<?php echo e(Route('posts.index')); ?>">News</a><span class="text-[#94ae0e]"> > </span> <?php echo e($title); ?></h3>
                <div class=" text-sm mx-8 "><?php echo e($content); ?></div>
                <div class="grid grid-cols-4 mt-4 ml-4">







                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




    </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/app/resources/views/layouts/default/post.blade.php ENDPATH**/ ?>