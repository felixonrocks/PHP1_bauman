<?php $__env->startSection('content'); ?>
                <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title => $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                

                <div class="header">

                    <?php echo e($title); ?>

                </div>

                
                <main class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg h-full">


                <h5 class="font-semibold p-8">
                    Menu <span class="font-bold text-green-400">></span>
                    <?php echo e($title ??''); ?>

                </h5>

                    <div class="p-8 border-r border-b main">
                            <?php echo $section; ?>

                        </div>


                </main>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /applications/XAMPP/xamppfiles/htdocs/lara/app/resources/views/layouts/default/section.blade.php ENDPATH**/ ?>