<html>

<head>

    <script>
        const csrf_token = '<?php echo e(csrf_token()); ?>';
    </script>

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@700&display=swap")); ?>'rel="stylesheet">

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap")); ?>' rel="stylesheet">

    <link rel="preconnect" href='<?php echo e(url("https://fonts.gstatic.com")); ?>'>
    <link href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Prata&display=swap")); ?>' rel="stylesheet">

    <link rel='stylesheet' href='<?php echo e(url("css/homepage.css")); ?>'>
    <script src='<?php echo e(url("js/free.js")); ?>' defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> BookFind </title>

</head>

<body>
    <?php echo csrf_field(); ?>
    <nav>

        <div class="collegamenti">
            <a href='<?php echo e(url("/home")); ?>'>Homepage</a>
            <a href='<?php echo e(url("/preferiti")); ?>'>Preferiti</a>
            <a href='<?php echo e(url("/profilo")); ?>'> Area Privata</a>
        </div>
        
        <div id="benvenuto_e_logout">
            <h2>Benvenuto</h2> 
            <span id="username"> <?php echo e($username); ?></span>
            <a id="logout" href="/logout">Logout</a>
        </div>

        <div class="mobile">
            <a class="menu" href='<?php echo e(url("/home")); ?>'>Homepage</a>
            <a class="menu" href='<?php echo e(url("/preferiti")); ?>'>Preferiti</a>
            <a class="menu" href='<?php echo e(url("/profilo")); ?>'> Area Privata</a>
            <a class="menu" href="/logout">Logout</a>
        </div>

        <button class="H">
            <div>
                <i class="open_menu"><img src='<?php echo e(url("images/open.svg")); ?>'></i>
                <i class="close_menu"><img src='<?php echo e(url("images/close.svg")); ?>'></i>
            </div>
        </button>
        
    </nav>

    <header>
        <p><strong>BookFind</strong></p>
    </header>


    <section class=box>
        <form id='cerca' method='GET'>
            <div id="input">
                <input type='text' id='name' class="view" placeholder="Cerca">
                <button type='submit' id='Login' class="view" onclick="">Search</button>
            </div>
        </form>
    </section>

    <div id="book-list">
    </div>

    <footer>
        <div id="footer">
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
        </div>

        <div id="logo">
            Powered by <a id="photo" href='<?php echo e(url("https://play.google.com/store/books?hl=it&gl=US")); ?>'> <img id="logoG"src='<?php echo e(url("images/google.png")); ?>'> </img></a>
        </div>

    </footer>

</body>

</html><?php /**PATH C:\xampp\htdocs\homework\resources\views/home.blade.php ENDPATH**/ ?>