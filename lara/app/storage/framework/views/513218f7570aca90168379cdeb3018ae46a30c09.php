<?php $__env->startSection('content'); ?>

    <div class="header h-20 pt-8"><a href="<?php echo e(Route('trends.index')); ?>">Tendances</a></div>
    <div class="bg-white overflow-hidden shadow rounded-lg min-h-full">






        <?php $__currentLoopData = $trend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <h3 class=" h-20 pt-8 mx-8 font-bold"><a href="<?php echo e(Route('trends.index')); ?>">Nos projects</a><span class="text-[#94ae0e]"> > </span> <?php echo e($post['name']); ?></h3>




            <div class="border-b pb-8">
                <div class=" p-6 flex ">



                    
                    <h5 class=" text-green m-auto " >
                        <?php echo $post['name']; ?>

                    </h5>
                </div>

                
                <div class="pl-8 pb-8">
                    <a class="ribbon date mr-4 " title="14th January 2014" href="#" itemprop="url">
                        <div class="top ribbon-piece"><?php echo e(date("M", strtotime($post['created_at']))); ?></div>
                        <div class="bottom ribbon-piece"><?php echo e(substr($post['created_at'], 2, 2)); ?></div>
                        <div class="tail">
                            <div class="left ribbon-piece"></div>
                            <div class="right ribbon-piece"></div>
                        </div>

                    </a>
                </div>
                




                <div class=" text-sm mx-8 "><?php echo e($post['content']); ?></div>
                <div class="grid grid-rows-1 mt-4 ml-4 pb-4">
                    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="w-full"><img class="m-4 shadow-xl rounded" src=<?php echo e(asset("storage/$url")); ?>></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>




                
                <p class="text-xs text-center text-gray-400">posté le <?php echo e(date('M d, Y', strtotime($post['created_at']))); ?> par <span  class="text-green ">prontolux</span></p>
                <div class="inline-flex  w-full justify-center pt-4 pl-18 flex" >
                    
                    <span data-href="http://twitter.com/share" class="share-twitter twitter-share-button  w-3 h-5" data-url="https://prontolux.com/trends/3" data-count="" data-size="" data-text="" data-initialized="true">
                                    <iframe allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/tweet_button.html?url=https%3A%2F%2Fprontolux.blogspot.com%2F2012%2F12%2Fblog-post_16.html&amp;count=horizontal&amp;text=&amp;size=medium"></iframe></span>
                    
                    <span class="share-facebook  w-3 h-5" data-url="https://prontolux.com/trends/3" data-count="" data-layout="" data-text="" data-initialized="true">
                                    <iframe class="" allowtransparency="true" frameborder="0" scrolling="no" src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fprontolux.blogspot.com%2F2012%2F12%2Fblog-post_16.html&amp;send=false&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;colorscheme=light">
                                    </iframe>
                    </span>

                </div>



                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




            </div>
    </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/app/resources/views/layouts/default/project.blade.php ENDPATH**/ ?>