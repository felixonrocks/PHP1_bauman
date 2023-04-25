<?php $__env->startSection('content'); ?>

    <div class="header"><a href="<?php echo e(Route('categories.show', '97')); ?>">Nouveautés</a></div>
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        
        <div class="grid grid-cols-1 md:grid-cols-4">
            

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-6 border-r">
                <div class="">
                    <img src="storage/<?php echo e($new['image']); ?>" class="w-40 h-40 text-gray-500 border mx-auto shadow-sm rounded-md">
                    <div class="ml-4 text-base leading-7 font-semibold">
                        <a href="/products/<?php echo e($new['id']); ?>" class=" text-gray-700 dark:text-white"><?php echo e($new['name']); ?></a></div>
                </div>

                <div class="ml-4 text-xs">
                    <?php echo e($new['description']); ?>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
    <div class="header bg-transparent">
        <button class="text-white p-1 m-5 button1 bg-[#557b97]" type="button" >tous</button>
    </div>


    


    <div class="header bg-white ">
        <div class="header m-5"><a href="<?php echo e(Route('trends.index')); ?>">Tendances en eclairage </a></div>
    </div>
    <div class="banner" >
        <img src=<?php echo e(asset('/storage/img/welcome/Gweilo.jpg')); ?> class="banner">
    </div>
    <div class="header bg-white">
        <button class="text-white p-1 m-5 button1 bg-[#557b97]"><a href="<?php echo e(Route('trends.index')); ?>">lire</a></button>
    </div>



    
    <div class="header news" >

        <div class=" header my-5">News</div>

        <div class="grid grid-cols-4">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white w-22 h-22 col-span-1 m-4 rounded-md text-card shadow-md rotate-1 flex flex-col justify-between">
                <div class=" text-sm m-2 "><?php echo e($post['name']); ?></div>
                <div class="text-xs text-gray-300 text-left mx-4"><?php echo e($post['content']); ?></div>
                <div class="text-xs text-[#557b97] mb-2"><a href= "/<?php echo e($post['id']); ?>"}>Lire plus..</a></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        <button class="text-white button1 bg-[#557b97]  mt-11 "><a href="<?php echo e(Route('posts.index')); ?>">tous</a></button>

    </div>

    

    <div class="header bg-white" >

        <div class=" header m-5">Nos projects</div>
    </div>

    <img src=<?php echo e(asset('/storage/img/welcome/panzeri.jpeg')); ?> class="banner">

    <button class="text-white button1 bg-[#557b97]  mt-11 "><a href="<?php echo e(Route('projects.index')); ?>">tous</a></button>

    

    <div class="header bg-white" >

     <div class=" header m-5">Technologie LED</div>
    </div>

    <img src="<?php echo e(asset('/storage/img/welcome/technologie.jpeg')); ?>" class="banner h-68">

    <button class="text-white button1 bg-[#557b97]  mt-11 "><a href="<?php echo e(Route('technologies.index')); ?>">tous</a></button>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/resources/views/layouts/default/default.blade.php ENDPATH**/ ?>