<!DOCTYPE html>
<html>

<head>
    <title>Accedi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='{{url("css/login.css")}}' />
    <script src='{{url("js/login.js")}}' defer></script>
</head>

<body>
    <form name="loginForm" method="POST" action="/login">
        @csrf

        <div id="logo">

        </div>

        <div class="accesso">

            <h1>Accedi</h1> 
            
            <span class = 'errore hidden'>Compila tutti i campi</span>

            <input type="text" id="username" placeholder="Username" name="username" maxlength="20" required>
            <p id='segnalazione' class='erroreU hidden'>Inserisci l'username</p>

            <input type="password" id="password" placeholder="Password" name="password" maxlength="15" required>
            <p id='segnpass' class='erroreP hidden'>Inserisci la password</p>

            @if(isset($error))
                <p class='errore'>{{ $error }}</p>
            @endif

            <button id="bottone" type="submit" name="access">Accedi</button>

            <div class="login">Non sei registrato? <a href="/signup">Registrati</a></div>
        </div>
    </form>
</body>

</html>