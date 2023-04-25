
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title>admin</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>







        <style>
            .nav-item{align-items: flex-start; justify-content: flex-start; flex: border-box; width=200px; border-right:1px solid grey; }
            .navbar{width: 300px; height: 3600px;}
            .main{ width: 2400px;}
        </style>
    </head>

    <body class="font-sans antialiased">


        
        <div class="min-h-screen bg-gray-100">

        <?php echo $__env->make('admin.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <!-- TOP WHITE HEADER (dublicate preview) -->
                <header class="bg-white shadow">

                    <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
                        

                    </div>

                </header>



            <!-- MAIN CONTAINER FOR CONTENT -->
            <main class=" w-full">
                
                <div class="flex">
                    <?php echo $__env->yieldContent('admin.dashboard'); ?>

                </div>
            </main>
        </div>



        

        <footer class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true">footer from dashboard</span>
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






    </body>
</html>
<?php /**PATH /applications/XAMPP/xamppfiles/htdocs/lara/app/resources/views/app.blade.php ENDPATH**/ ?>