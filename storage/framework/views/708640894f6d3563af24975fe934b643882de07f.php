<!DOCTYPE html>
<html>

<head>

    <script>
        const csrf_token = '<?php echo e(csrf_token()); ?>';
    </script>

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@700&display=swap")); ?>' rel="stylesheet">

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Prata&display=swap")); ?>' rel="stylesheet">

    <link rel='stylesheet' href='<?php echo e(url("css/preferiti.css")); ?>'>
    <script src='<?php echo e(url("js/preferiti.js")); ?>' defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> BookFind </title>

</head>

<body>
    <?php echo csrf_field(); ?>

    <nav>

        <div class="collegamenti">
            <a href="/home" id="return"> </a>
            <a href="/home">Torna all'homepage</a>
        </div>

    </nav>

    <section>
        
            <h1><strong> I tuoi libri preferiti </strong></h1>

            <div id="fav-list"></div>
        
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

</html><?php /**PATH C:\xampp\htdocs\homework\resources\views/preferiti.blade.php ENDPATH**/ ?>