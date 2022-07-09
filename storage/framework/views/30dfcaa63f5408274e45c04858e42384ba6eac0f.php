<!DOCTYPE html>
<html>

<head>

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@700&display=swap")); ?>'rel="stylesheet">

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap")); ?>' rel="stylesheet">

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Prata&display=swap")); ?>' rel="stylesheet">

    <link rel='stylesheet' href='<?php echo e(url("css/profilo.css")); ?>'>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> BookFind </title>

</head>

<body>
    <?php echo csrf_field(); ?>
    <nav>

        <div class="collegamenti">
            <a href='<?php echo e(url("/home")); ?>' id="return"> </a>
            <a href='<?php echo e(url("/home")); ?>'>Torna all'homepage</a>
        </div>

    </nav>


    <section class="profilo">

        <h1><strong> Il tuo profilo </strong></h1>

        <div class="dati">
            <div id="benvenuto_e_logout">
                <h1>@</h1><span id="username"> <?php echo e($username); ?></span>
            </div>

            <div class="area1">
                <h4>Nome: <span> <?php echo e($nome); ?></span></h4>
                <h4>Cognome: <span> <?php echo e($cognome); ?></span></h4>
                <h4>Username: <span><?php echo e($username); ?></span></h4>
                <h4>Email: <span><?php echo e($email); ?></span></h4>
            </div>

        </div>

    </section>

    <section class="mod">
        <h1><img src='<?php echo e(url("../images/settings.svg")); ?>'><strong>Impostazioni</strong></img></h1>
        <div>
            > <a href='<?php echo e(url("/change-password")); ?>'>Modifica password</a>
        </div>
    </section>

    <footer>

        <div>
            <h2>BookFind</h2>
            <a>Informativa e privacy</a>
        </div>

        <div>
            <h2>Business</h2>
            <a>Lavora con noi</a>
        </div>

        <div>
            <h2>Social</h2>
            <a>Facebook</a>
            <a>Instagram</a>
            <a>Twitter</a>
        </div>

        <div>
            <h2>Contatti</h2>
            <a>Assistenza chat</a>
            <a>Reclami</a>
        </div>

        <div id="nomecognome">
            <h2>Andrea</h2>
            <h2>Tringali</h2>
            <h2>1000002012</h2>
        </div>

    </footer>

</body>

</html><?php /**PATH C:\xampp\htdocs\homework\resources\views/profilo.blade.php ENDPATH**/ ?>