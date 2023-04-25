<?php $__env->startSection('content'); ?>

                        <div class="header h-20 pt-8"><a href=<?php echo e(Route('projects.index')); ?>>Nos projects</a></div>
                        <div class="bg-white overflow-hidden shadow rounded-lg md:p-8 bodybox">





                            <div class="grid grid-cols-2 md:grid-cols-4 md:my-8">
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <div class="bg-white w-50 h-72 col-span-1 m-4 rounded text-card shadow-lg flex flex-col justify-between "><a href="/projects/<?php echo e($post['id']); ?>">
                                            <div class=" text-sm text-center h-16 pt-6 pb-2 "><?php echo e($post['name']); ?></div>
                                            <img class="w-44 h-40 mx-auto rounded" src="storage/<?php echo e($post['image']); ?>">
                                        </a><div class="text-xs text-[#557b97] mb-6 text-center"><a href="/projects/<?php echo e($post['id']); ?>">Lire plus..</a></div>


                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>


                        </div>
                </div>





<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/app/resources/views/layouts/default/projects.blade.php ENDPATH**/ ?>