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
                <nav class="edu-header__nav edu-d-flex edu-justify-between edu-align-center">

                    <div class="edu-header__left edu-d-flex edu-align-center edu-mg-r-10 edu-mg-r-0-md">

                        <div class="edu-header__mobile edu-mg-r-10 edu-d-none-md">
                            <button type="button" class="edu-icon-btn edu-header__mobile--trigger"
                                data-menu-target="main-menu">
                                <i class="ri-menu-2-line edu-fs-16"></i>
                            </button>
                        </div>
                        <div class="edu-header__form">
                            <form class="edu-form">
                                <div class="edu-form__group">
                                    <input type="text" class="edu-form__input" placeholder="Pesquisar" />
                                    <i class="ri-search-line edu-form__icon"></i>
                                </div>
                            </form>
                        </div>
                    </div>

                    <ul class="edu-header__navitems edu-header__sidebar-md-3 edu-header__sidebar-lg-2 edu-pd-y-20"
                        id="main-menu"></ul>

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
