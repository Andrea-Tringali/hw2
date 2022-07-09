<!DOCTYPE html>
<html>

<head>

    <link rel="preconnect" href='{{url("https://fonts.gstatic.com")}}'>
    <link href='{{url("https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@700&display=swap")}}'rel="stylesheet">

    <link rel="preconnect" href='{{url("https://fonts.gstatic.com")}}'>
    <link href='{{url("https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap")}}' rel="stylesheet">

    <link rel="preconnect" href='{{url("https://fonts.gstatic.com")}}'>
    <link href='{{url("https://fonts.googleapis.com/css2?family=Prata&display=swap")}}' rel="stylesheet">

    <link rel='stylesheet' href='{{url("css/profilo.css")}}'>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> BookFind </title>

</head>

<body>
    @csrf
    <nav>

        <div class="collegamenti">
            <a href='{{url("/home")}}' id="return"> </a>
            <a href='{{url("/home")}}'>Torna all'homepage</a>
        </div>

    </nav>


    <section class="profilo">

        <h1><strong> Il tuo profilo </strong></h1>

        <div class="dati">
            <div id="benvenuto_e_logout">
                <h1>@</h1><span id="username"> {{ $username }}</span>
            </div>

            <div class="area1">
                <h4>Nome: <span> {{ $nome }}</span></h4>
                <h4>Cognome: <span> {{ $cognome }}</span></h4>
                <h4>Username: <span>{{ $username }}</span></h4>
                <h4>Email: <span>{{ $email }}</span></h4>
            </div>
        </div>

    </section>

    <section class="mod">
        <h1><img src='{{url("../images/settings.svg")}}'><strong>Impostazioni</strong></img></h1>
        <div>
            > <a href='{{url("/change-password")}}'>Modifica password</a>
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

</html>