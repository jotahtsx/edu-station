<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Estilo principal -->
    <link rel="stylesheet" href="{{ url(mix('backend/assets/css/icons.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('backend/assets/css/main.css')) }}">
</head>

<body>

    <header class="edu-header edu-header-fixed edu-d-flex edu-justify-between edu-align-center">
        <div class="edu-container">
            <div class="edu-offset-12 edu-offset-md-3 edu-offset-lg-2">
                <nav class="edu-header__nav edu-d-flex edu-justify-end edu-align-center">
                    <ul class="edu-header__navitems edu-header__sidebar-md-3 edu-header__sidebar-lg-2" id="main-menu">

                        <li class="edu-header__list">
                            <a href="{{ route('admin.home') }}"
                                class="edu-header__link--logo edu-pd-20 edu-d-flex edu-align-center edu-justify-center">
                                <img src="{{ url(asset('backend/assets/images/logo.svg')) }}" />
                            </a>
                        </li>

                        <li class="edu-header__list">
                            <a href=""
                                class="edu-header__link edu-pd-20 edu-d-flex edu-align-center edu-justify-between">
                                <span class="edu-fs-14 edu-d-flex edu-align-center"><i
                                        class="ri-task-line edu-mg-r-10"></i>Direção</span>
                            </a>
                        </li>

                        <li class="edu-header__list">
                            <a href=""
                                class="edu-header__link edu-pd-20 edu-d-flex edu-align-center edu-justify-between">
                                <span class="edu-fs-14 edu-d-flex edu-align-center"><i
                                        class="ri-presentation-line edu-mg-r-10"></i>Docente</span>
                            </a>
                        </li>

                        <li class="edu-header__list">
                            <a href=""
                                class="edu-header__link edu-pd-20 edu-d-flex eedu-align-center edu-justify-between">
                                <span class="edu-fs-14 edu-d-flex edu-align-center"><i
                                        class="ri-graduation-cap-line edu-mg-r-10"></i>
                                    Aluno(a)</span>
                            </a>
                        </li>
                        <li class="edu-header__list">
                            <a href=""
                                class="edu-header__link edu-pd-20 edu-d-flex eedu-align-center edu-justify-between">
                                <span class="edu-fs-14 edu-d-flex edu-align-center"><i
                                        class="ri-slideshow-line edu-mg-r-10"></i>Disciplina / Notas</span>
                            </a>
                        </li>
                        <li class="edu-header__list">
                            <a href=""
                                class="edu-header__link edu-pd-20 edu-d-flex eedu-align-center edu-justify-between">
                                <span class="edu-fs-14 edu-d-flex edu-align-center"><i
                                        class="ri-team-line edu-mg-r-10"></i>Turma</span>
                            </a>
                        </li>
                    </ul>

                    <div class="edu-header__right edu-d-flex edu-align-center">
                        <div class="edu-dropdown edu-dropdown-abs-right edu-d-in-flex edu-mg-r-10">
                            <div class="edu-dropdown edu-dropdown-abs-right edu-d-in-flex edu-align-center">
                                <div class="theme-control edu-mg-r-10">
                                    <button type="button" class="theme-switcher edu-btn-icon"
                                        data-current-theme="light">
                                        <i class="ri-moon-line theme-dark"></i>
                                        <i class="ri-sun-line theme-light"></i>
                                    </button>
                                </div>

                                <button type="button" class="edu-avat edu-avat-35" data-dropdown-target="profile">
                                    <img class="edu-avat__img"
                                        src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}" alt=""
                                        title="" />
                                </button>

                                <div class="edu-dropdown__menu" id="profile">
                                    <div class="dropdown-header edu-pd-20">
                                        <div class="edu-d-flex edu-align-center">

                                            <div class="user-img edu-mg-r-10">
                                                <div class="edu-avat edu-avat-40">
                                                    <img class="edu-avat__img"
                                                        src="{{ url(asset('backend/assets/images/user-f-1.jpg')) }}"
                                                        alt="" title="" />
                                                </div>
                                            </div>

                                            <div class="user-details">
                                                <span class="edu-fw-bld edu-fs-14 edu-d-block">Grazi Massafera</span>
                                                <span class="edu-fs-12">Gerente de projetos</span>
                                            </div>

                                        </div>
                                    </div>

                                    <ul class="dropdown-content">
                                        <li class="dropdown-list">
                                            <a href="#"
                                                class="dropdown-link edu-d-flex edu-align-center edu-pd-x-20 edu-pd-y-10">
                                                <i class="ri-equalizer-line edu-fs-16 edu-mg-r-10"></i>
                                                <span class="edu-fs-14 edu-fw-bld">
                                                    Configurações
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="dropdown-footer">
                                        <a href="#"
                                            class="dropdown-link edu-d-flex edu-align-center edu-pd-x-20 edu-pd-y-10">
                                            <i class="ri-logout-box-r-line edu-fs-18 edu-mg-r-10"></i>
                                            <span class="edu-fs-14 edu-fw-bld">
                                                Sair
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>

    </main>

    <script src="{{ url(mix('backend/assets/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('backend/assets/js/app.js')) }}"></script>
</body>

</html>
