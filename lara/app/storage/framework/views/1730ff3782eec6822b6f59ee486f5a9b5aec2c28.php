<?php $__env->startSection('content'); ?>
        
                

                <div class="header">

                    Search results 
                </div>

                
                <main class="mt-8 bg-white overflow-hidden shadow rounded-lg h-full">


                <h5 class="font-semibold p-8">
                    Menu <span class="font-bold text-green">></span>
                     Resultats de recherches: 
                     <?php echo e($query); ?>

                </h5>

                    <div class="p-8 border-r border-b main ">
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/products/<?php echo e($result->id); ?>"><?php echo e($result->name ??''); ?></a>
                            <hr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                            
                           

                        </div>


                </main>
                </div>
           



<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/app/resources/views/layouts/default/search.blade.php ENDPATH**/ ?>