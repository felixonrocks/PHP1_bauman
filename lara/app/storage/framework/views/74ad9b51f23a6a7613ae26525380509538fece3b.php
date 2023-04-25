    <section class="flex flex-none pt-header min-h-screen w-sidebar ">


        
        <nav class="columns-1 border-r navbar bg-primary text-white min-h-screen ">
             <ul class="">
                    <li class="logo text-xs font-bold pl-8 cursor-pointer flex items-center dim mb-8 no-underline router-link-exact-active router-link-active bg-[#252d37]">Prontolux</li>

                <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="pt-2 flex pl-6  left_col nav-item" style="border: 0;">
                        <ul class="pt-2 flex pl-6  left_col nav-item pb-0 font-normal text-white">
                            <img src= "/storage/<?php echo e($section['icon']); ?>" class=" w-4 mx-1" style="color:lightslategrey">
                            <a href="/admins/<?php echo e($section['link']); ?>" class="text-base place-self-start ml-2 "><?php echo e($section['leftsection']); ?></a>
                        </ul>




                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        </nav>


        
        <main class=" main" >

            
            <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                 <?php $__env->slot('header', null, []); ?> 
                    <div class="font-normal text-2xl text-gray-600 text-90 leading-tight pt-12 pl-10">
                        <?php echo e($header); ?>

                    </div>


                    
                 <?php $__env->endSlot(); ?>


            

            <?php echo $__env->yieldContent('content'); ?>

        </main>



        <footer class="sidebar-footer text-xs  text-center text-zinc-500 pb-16">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true">@ 2021 <span class="text-blue-400">Pronto</span> footer</span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </footer>

    </section>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>





<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u901121957/domains/idistance.school/lara/app/resources/views/dashboard.blade.php ENDPATH**/ ?>