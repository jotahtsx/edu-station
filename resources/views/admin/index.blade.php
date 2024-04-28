<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url(mix('backend/assets/css/login.css')) }}" />

    <title>{{ config('app.name') }}</title>
</head>

<body>

    <section class="area-login">
        <div class="login">
            <img src="backend/assets/images/logo.svg" />
            <form method="POST">
                <input type="text" name="email" placeholder="Seu email" onfocus />
                <input type="password" name="password" placeholder="Seu senha" />
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
