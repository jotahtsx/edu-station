<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url(mix('backend/assets/css/login.css')) }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>{{ config('app.name') }}</title>
</head>

<body>

    <section class="area-login">
        <div class="login">
            <img class="login-brand" src="{{ url(asset('backend/assets/images/logo.svg')) }}" />
            <form method="POST">
                <input type="text" name="email" placeholder="Seu email" onfocus />
                <input type="password" name="password" placeholder="Sua senha" />
                <button class="login-do" type="submit">Fazer Login</button>
                <a class="register" href="">Primeira vez aqui?</a>
                <a class="recover" href="">Esqueceu a senha?</a>
            </form>
        </div>
    </section>

    <script src="{{ url(mix('backend/assets/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('backend/assets/js/login.js')) }}"></script>
</body>

</html>
