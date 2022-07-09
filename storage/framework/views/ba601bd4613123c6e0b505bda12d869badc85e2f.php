<!DOCTYPE html>
<html>

<head>
    <title>Accedi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo e(url("css/login.css")); ?>' />
    <script src='<?php echo e(url("js/login.js")); ?>' defer></script>
</head>

<body>
    <form name="loginForm" method="POST" action="/login">
        <?php echo csrf_field(); ?>

        <div id="logo">

        </div>

        <div class="accesso">

            <h1>Accedi</h1> 
            
            <span class = 'errore hidden'>Compila tutti i campi</span>

            <input type="text" id="username" placeholder="Username" name="username" maxlength="20" required>
            <p id='segnalazione' class='erroreU hidden'>Inserisci l'username</p>

            <input type="password" id="password" placeholder="Password" name="password" maxlength="15" required>
            <p id='segnpass' class='erroreP hidden'>Inserisci la password</p>

            <?php if(isset($error)): ?>
                <p class='errore'><?php echo e($error); ?></p>
            <?php endif; ?>

            <button id="bottone" type="submit" name="access">Accedi</button>

            <div class="login">Non sei registrato? <a href="/signup">Registrati</a></div>
        </div>
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\homework\resources\views/login.blade.php ENDPATH**/ ?>