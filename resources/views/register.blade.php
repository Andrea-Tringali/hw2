<!DOCTYPE html>
<html>

<head>
    <title>Registrazione</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='{{url("css/signup.css")}}' />
    <script src='{{url("js/signup.js")}}' defer></script>
</head>

<body>
    <form name="Form" method="POST" action="/register">
        @csrf
        <div id="logo">

        </div>

        <div class="registrazione">
            <h1>Registrazione</h1>
            <div class="username">
                <div><label for='username'>Nome utente</label></div>
                <div><input type='text' name='username'></div>
                <span></span>
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
                <span></span>
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

            <div class="signin">Hai già un account? <a href='{{url("/login")}}'>Accedi</a></div>
        </div>
    </form>
</body>

</html>