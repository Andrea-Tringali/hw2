<!--

<?php $__env->startSection('title', '| Registrazione'); ?>

<?php $__env->startSection('script'); ?>
<script src='<?php echo e(asset('js/signup.js')); ?>' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "<?php echo e(route('register')); ?>";
</script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<h1>Presentati</h1>

<form name='signup' method='post' enctype="multipart/form-data" autocomplete="off" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>
    <div class="names">
        <div class="name <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <div><label for='name'>Nome</label></div>
            <div><input type='text' name='name' value='<?php echo e(old('name')); ?>'></div>
            <span>Nome strano</span>
        </div>
        <div class="surname <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
            <div><label for='surname'>Cognome</label></div>
            <div><input type='text' name='surname' value='<?php echo e(old('surname')); ?>'></div>
            <span>Cognome strano</span>
        </div>
    </div>
    <div class="username <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <div><label for='username'>Nome utente</label></div>
        <div><input type='text' name='username' value='<?php echo e(old('username')); ?>'></div>
        <span>&nbsp;<?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <div class="email <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <div><label for='email'>Email</label></div>
        <div><input type='text' name='email' value='<?php echo e(old('email')); ?>' autocomplete="email"></div>
        <span>&nbsp;<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <div class="password <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <div><label for='password'>Password</label></div>
        <div><input type='password' name='password'></div>
        <span>&nbsp;<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
    </div>
    <div class="confirm_password <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <div><label for='password_confirmation'>Conferma Password</label></div>
        <div><input type='password' name='password_confirmation'></div>
        <span>&nbsp;</span>
    </div>
    <div class="allow <?php $__errorArgs = ['allow'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"> 
        <div><input type='checkbox' name='allow' value="1" <?php echo e((! empty(old('allow')) ? 'checked' : '')); ?>></div>
        <div><label for='allow'>Acconsento al trattamento dei dati personali</label></div>
    </div>
    <div class="submit">
        <input type='submit' value="Registrati" id="submit" >
    </div>
</form>
<div class="signup">Hai un account? <a href="<?php echo e(route('login')); ?>">Accedi</a>
<?php $__env->stopSection(); ?>
-->

<!DOCTYPE html> 
<html>
    <head>
        <title>Registrazione</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href='<?php echo e(url("signup.css")); ?>' />  
        <script src='<?php echo e(url("signup.js")); ?>' defer></script>
    </head>
    <body>
        <form name="Form" method="POST">
                   
            <div id="logo">
                
            </div>

           <div class="registrazione"> 
            <h1>Registrazione</h1>
            <div class="username">
            <div><label for='username'>Nome utente</label></div>
            <div><input type='text' name='username'></div>
            <span>Username già in utilizzo.</span>
            </div>

            <div class="nome">
            <div><label for='nome'>Nome</label></div>
            <div><input type='text' name='nome'></div>
            <span>Nome non valido</span>
            </div>

            <div class="cognome">
            <div><label for='cognome'>Cognome</label></div>
            <div><input type='text' name='cognome'></div>
            <span>Cognome non valido</span>
            </div>

            <div class="email">
            <div><label for='email'>Email</label></div>
            <div><input type='text' name='email'></div>
            <span>E-mail non valida</span>
            </div>

            <div class="password">
            <div><label for='password'>Password</label></div>
            <div><input type='password' name='password'></div>
            <span>Inserisci una password di almeno 8 caratteri</span>
            </div>



            <div class="conferma_password">
            <div><label for='conferma_password'>Conferma Password</label></div>
            <div><input type='password' name='conferma_password'></div>
            <span>Le password non coincidono</span>
            </div>

            <div class="allow"> 
                <div><input type='checkbox' id='verifica' name='allow' value="1"></div>
                <div><label for='allow'>Acconsento al trattamento dei dati personali</label></div>
            </div>

            <div class="submit"><input type='submit' name='submit' value='Registrati' id="submit" disabled></div>

            
            <div class="signin">Hai già un account? <a href='<?php echo e(url("/login")); ?>'>Accedi</a></div>
            </div>
        </form>
    </body>
</html>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\homework\resources\views//register.blade.php ENDPATH**/ ?>