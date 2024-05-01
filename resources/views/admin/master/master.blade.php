<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Estilo principal -->
    <link rel="stylesheet" href="{{ url(mix('backend/assets/css/main.css')) }}">
</head>

<body>

    <div class="edu-container" style="border: 2px dashed green;">

        <h1>Olá, mundo!</h1>

        <p>lorem ipsum dolor sit amet, consectet</p>

        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>

        <div class="edu-row" style="margin-bottom: 20px;">
            <div class="edu-flex-6 edu-flex-md-3" style="border: 1px solid red;">1</div>
            <div class="edu-flex-6 edu-flex-md-3" style="border: 1px solid red;">2</div>
            <div class="edu-flex-6 edu-flex-md-3" style="border: 1px solid red;">3</div>
            <div class="edu-flex-6 edu-flex-md-3" style="border: 1px solid red;">4</div>
            <div class="edu-flex-10" style="border: 1px solid red;">10</div>

            <div class="edu-offset-2 edu-flex-6" style="border: 1px solid blue; padding: 10px 20px;">Olá offset 2</div>
        </div>

        <div class="edu-offset-2" style="border: 1px solid blue; padding: 10px 20px;">Olá offset 2</div>
        <div class="edu-offset-12" style="border: 1px solid blue; padding: 10px 20px;">Olá offset 12</div>

    </div>

    <script src="{{ url(mix('backend/assets/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('backend/assets/js/app.js')) }}"></script>
</body>

</html>
