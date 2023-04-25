<?php $__env->startSection('content'); ?>

                
                <div class="header text-black pt-8 pb-0">Contactez-nous et nos experts </div>
                <div class="header text-black pt-1">pourront repondre aux tous vos questions</div>


                
                <div class="mt-8 dark:bg-gray-800 overflow-hidden shadow rounded-lg h-full">
                <section class="flex inline-flex pr-4">
                    <div class="w-2/3 px-8">

                        <form class="w-2/3 m-auto" action="<?php echo e(route('contact.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            
                            <?php if(Session::has('success')): ?>
                                <p class=" text-accent"><?php echo e(Session::get('success')); ?></p>
                            <?php endif; ?>
                            <input class="bg-white w-full border-none rounded shadow-lg h-8 m-2 mt-0 text-sm text-gray-600" type="text" placeholder="  Nom*" name="name" id="name">
                            <input class="bg-white w-full border-none rounded shadow-lg h-8 m-2 text-sm" type="email" placeholder="  E-mail*" name="email" id="email" >
                            <input class="bg-white w-full border-none rounded shadow-lg h-8 m-2 text-sm" type="text" placeholder="  Companie" name="companie" id="company">

                            <p class="text-xs text-gray-500 p-2">Etes vous client existant?</p>
                            <div class="pl-5 text-xs text-gray-500 ">
                                <input class="rounded-full w-3 pb-2" type="radio" checked="checked" name="client" id="client" value="1">oui</input>
                                <input type="radio" class=" ml-4 w-3" name="client" id="client" value="0" unchecked">non</select>
                            </div>
                            <input class="bg-white w-full h-80 border-none rounded shadow-lg m-2 mb-0 text-sm" type="text" name="message" id="message"  placeholder=" Votre message*">
                            <input class="bg-accent w-full h-8 border-none rounded shadow-lg m-2 mb-0 text-sm text-white" type="submit" name="send" value="Submit" >
                        </form>
                    </div>



                    
                    <div class="bg-white  p-6 border-r border-b main  w-1/2 rounded shadow-lg">
                            <p class="font-semibold"> Rencontrez nottre equipe des experts et designers:</p>
                            <p class="text-xs py-4 text-gray-500">Support du lundi-vendredi 8.00 -16.00</p>
                            <hr class="pb-4 text-gray-300">
                            <section class="flex inline-flex m-auto  w-full">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="p-2 m-auto">
                                            <img class="photo rounded-full max-w-18 max-h-18 p-2 m-auto" src="storage/<?php echo e($user['avatar']); ?>">
                                        <p class="text-xs text-gray-500 text-center"><?php echo e($user['first_name']); ?> <?php echo e($user['name']); ?></p>
                                    </div>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </section>
                    </div>


                    </div>
                </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /applications/XAMPP/xamppfiles/htdocs/lara/app/resources/views/layouts/default/contactus.blade.php ENDPATH**/ ?>