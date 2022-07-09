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
        <form name="loginForm" method="post" action='<?php echo e(url("/login")); ?>'>
            
         
            <div id="logo">

            </div>

            <div class="accesso"> 
                
                <h1>Accedi</h1>
                
                <input type="text" id="username" placeholder="Username" name="username" maxlength="20" required>
                <p id='segnalazione' class='erroreU hidden'>"Inserisci l'username"</p>
            
                <input type="password" id="password" placeholder="Password" name="password" maxlength="15" required>
                <p id='segnpass' class='erroreP hidden'>Inserisci la password</p>
                
                <button id="bottone" type="submit" name="access">Accedi</button>

            <div class="login">Non sei registrato? <a href='<?php echo e(url("/register")); ?>'>Registrati</a></div>
            </div>
            </div>
        </form>
    </body>
</html><?php /**PATH C:\xampp\htdocs\homework\resources\views//login.blade.php ENDPATH**/ ?>