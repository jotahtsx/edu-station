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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Estilo principal -->
    <link rel="stylesheet" href="{{ url(mix('backend/assets/css/icons.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('backend/assets/css/main.css')) }}">
</head>

<body>

    <div class="edu-container" style="border:2px dashed green;">

        <h1>Olá, mundo cruel!</h1>

        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s
        </p>

        <h1>Título 1</h1>
        <h2>Título 2</h2>
        <h3>Título 3</h3>
        <h4>Título 4</h4>
        <h5>Título 5</h5>
        <h6>Título 6</h6>

        <div class="edu-row" style="margin-bottom:20px;">
            <div class="edu-flex-6 edu-flex-md-3 edu-mg-b-20 edu-mg-b-0-md" style="border: 1px solid red;">1</div>
            <div class="edu-flex-6 edu-flex-md-3 edu-mg-b-20 edu-mg-b-0-md" style="border: 1px solid red;">2</div>
            <div class="edu-flex-6 edu-flex-md-3" style="border: 1px solid red;">3</div>
            <div class="edu-flex-6 edu-flex-md-3" style="border: 1px solid red;">4</div>
            <div class="edu-flex-10" style="border: 1px solid red;">10</div>
            <div class="edu-offset-2 edu-flex-6" style="border: 1px solid blue; padding: 10px 20px;">
                teste
            </div>
        </div>

        <div class="edu-offset-2" style="border: 1px solid blue; padding: 10px 20px;">
            teste
        </div>

        <!--Buttons-->
        <div class="edu-offset-12" style="border: 1px solid blue; padding: 10px 20px;">
            teste
        </div>

        <!--Badges-->
        <div class="edu-mg-x-2 edu-overflow-hidden-vh">teste</div>

        <!--Avatars-->
        <div class="edu-mg-y-20">
            <a href="" class="edu-btn">Sair</a>
            <a href="" class="edu-btn edu-btn-primary">Primário</a>
            <a href="" class="edu-btn edu-btn-secondary">Secundário</a>
            <a href="" class="edu-btn edu-btn-success">Sucesso</a>
            <a href="" class="edu-btn edu-btn-warn">Aviso</a>
            <a href="" class="edu-btn edu-btn-danger">Perigo</a>

            <button class="edu-btn edu-btn-primary edu-btn-sm">
                <i class="ri-arrow-up-line edu-mg-r-10"></i>
                Exportar
            </button>

            <button class="edu-btn edu-btn-primary edu-btn-sq">
                <i class="ri-arrow-up-line"></i>
            </button>

            <a href="" class="edu-btn edu-btn-link edu-btn-secondary">Link de Botão</a>

            <div class="edu-mg-y-20">
                <div class="edu-bdg edu-bdg-success">Completo</div>
                <div class="edu-bdg edu-bdg-secondary">Em progresso</div>
                <div class="edu-bdg edu-bdg-warn">Pendente</div>
                <div class="edu-bdg edu-bdg-danger">Cancelado</div>
            </div>

            <div class="edu-mg-y-20">
                <div class="edu-avat edu-avat-30">
                    <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt="" title=""
                        class="edu-avat__img" />
                </div>
                <div class="edu-avat edu-avat-35">
                    <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt="" title=""
                        class="edu-avat__img" />
                </div>
                <div class="edu-avat edu-avat-40">
                    <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt="" title=""
                        class="edu-avat__img" />
                </div>
                <div class="edu-avat edu-avat-45">
                    <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt="" title=""
                        class="edu-avat__img" />
                </div>
                <div class="edu-avat edu-avat-50">
                    <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt="" title=""
                        class="edu-avat__img" />
                </div>

                <div class="edu-avat-group">
                    <div class="edu-avat edu-avat-30">
                        <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt="" title=""
                            class="edu-avat__img" />
                    </div>
                    <div class="edu-avat edu-avat-30">
                        <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt="" title=""
                            class="edu-avat__img" />
                    </div>
                    <div class="edu-avat edu-avat-30">
                        <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt=""
                            title="" class="edu-avat__img" />
                    </div>
                    <div class="edu-avat edu-avat-30">
                        <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt=""
                            title="" class="edu-avat__img" />
                    </div>
                    <div class="edu-avat edu-avat-30">
                        <img src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt=""
                            title="" class="edu-avat__img" />
                    </div>
                </div>
            </div>
        </div>

        <!--Cards-->
        <div class="edu-card edu-mg-y-20">
            <div class="edu-card__header">
                <span class="edu-card__title edu-fw-bld">Projetos ativos</span>
                <span>
                    <i class="ri-arrow-up-line"></i>
                </span>
            </div>
            <div class="edu-card__body">
                <p>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                    deleniti atque corrupti
                </p>
            </div>
        </div>
    </div>

    <script src="{{ url(mix('backend/assets/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('backend/assets/js/app.js')) }}"></script>
</body>

</html>
