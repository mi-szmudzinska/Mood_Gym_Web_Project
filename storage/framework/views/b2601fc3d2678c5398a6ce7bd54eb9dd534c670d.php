<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-150">
                    <div class="card-body">
                        <div class="logo-container">
                            <img src="<?php echo e(asset('img/logo2.png')); ?>" alt="Logo">
                        </div>

                        <h1 class="text-center login-header">Zaloguj się</h1>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="container">
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-group">
                                        <label for="email"
                                               class="col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                                        <input id="email" type="email"
                                               class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                               value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                    </div>
                                    <div class="form-group">
                                        <label for="password"
                                               class="col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                                        <input id="password" type="password"
                                               class="form-control form-control-lg <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                               required autocomplete="current-password">

                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="btn-container">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        <?php echo e(__('Login')); ?>

                                    </button>
                                    <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">
                                        <?php echo e(__('Register')); ?>

                                    </a>

                                    <?php if(Route::has('password.request')): ?>
                                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                            <?php echo e(__('Forgot Your Password?')); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Mood_Gym_Web_Project\moodgym\resources\views/auth/login.blade.php ENDPATH**/ ?>