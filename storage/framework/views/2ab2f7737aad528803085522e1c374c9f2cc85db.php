<?php $__env->startSection('content'); ?>

    <div class="header"><a href="<?php echo e(Route('posts.index')); ?>">Nouveautés</a></div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg">





                    <div class="grid grid-cols-4 min-h-full">
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bg-white w-22 h-22 col-span-1 m-4 rounded-md text-card shadow-md flex flex-col justify-between">
                                <div class=" text-sm m-2 text-center "><?php echo e($post['name']); ?></div>
                                <div class="text-xs text-gray-300 text-left mx-4"><?php echo e($post['content']); ?></div>
                                <div class="text-xs text-[#557b97] mb-4 text-center"><a href="posts/<?php echo e($post['id']); ?>">Lire plus..</a></div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>


                </div>
                </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /applications/XAMPP/xamppfiles/htdocs/lara/app/resources/views/layouts/default/news.blade.php ENDPATH**/ ?>