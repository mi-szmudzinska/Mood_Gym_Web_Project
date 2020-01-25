<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
<div id="app">
    <?php if(Auth::user() && Auth::user()->role === 'admin'): ?>
        <?php echo $__env->make('includes.navbar-admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="container mt-2 mb-2">
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        </div>
    <?php endif; ?>
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Mood_Gym_Web_Project\moodgym\resources\views/layouts/app.blade.php ENDPATH**/ ?>