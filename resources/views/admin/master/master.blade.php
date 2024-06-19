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
                    </div>
                    <ul class="edu-header__navitems edu-header__sidebar-md-3 edu-header__sidebar-md-2" id="main-menu">

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
                                        class="ri-folders-line edu-mg-r-10"></i>Direção</span>
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
                    <div class="edu-header__right edu-d-flex e-align-center">

                        <div class="theme-control edu-mg-r-10">
                            <button type="button" class="theme-switcher edu-btn-icon" data-current-theme="dark">
                                <i class="ri-moon-line theme-dark"></i>
                                <i class="ri-sun-line theme-light"></i>
                            </button>
                        </div>

                        <div class="edu-dropdown edu-dropdown-abs-right edu-d-in-flex edu-align-center">

                            <button type="button" class="edu-avat edu-avat-35" data-dropdown-target="profile">
                                <img src="{{ asset('backend/assets/images/user-f-1.jpg') }}" alt=""
                                    class="edu-avat__img">
                            </button>

                            <div class="edu-dropdown__menu" id="profile">

                                <div class="dropdown-header edu-pd-20">

                                    <div class="edu-d-flex edu-align-center">

                                        <div class="user-img edu-mg-r-10">
                                            <div class="edu-avat edu-avat-40">
                                                <img src="{{ asset('backend/assets/images/user-f-1.jpg') }}"
                                                    alt="User" class="edu-avat__img">
                                            </div>
                                        </div>

                                        <div class="user-details">
                                            <span class="edu-fw-bld edu-fs-14 edu-d-block">Grazi</span>
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
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="dashboard">
            <div class="edu-container">
                <div class="edu-offset-12 odu-offset-md-3 edu-offset-lg-2">
                    <div class="section-heading edu-pd-y-20">
                        <h4 class="title">Bom dia, Grazi!</h4>
                        <p class="subtitle">Bem vindo(a) ao seu sistema de gerenciamento</p>
                    </div>

                    <section class="overview edu-pd-y-20">

                        <div class="edu-row">

                            <div class="edu-flex-sm-6 edu-flex-lg-3 edu-mg-b-20 edu-mg-b-0-lg">
                                <div class="edu-card">
                                    <div class="edu-card__header edu-card__show">
                                        <span class="edu-card__title edu-fw-bld">Direção</span>
                                        <span class="edu-btn-icon edu-btn-icon-static">
                                            <i class="ri-bar-chart-line"></i>
                                        </span>
                                    </div>

                                    <div class="edu-card__body edu-d-flex edu-justify-between edu-align-end">
                                        <div class="left-side">
                                            <h2 class="edu-mg-b-10">12</h2>
                                            <p class="edu-fs-12 edu-d-flex edu-align-center">
                                                <span class="faded-text">Diretores cadastrados</span>
                                            </p>
                                        </div>

                                        <div class="right-side">
                                            <div class="edu-bdg edu-bdg-danger bdg"><i class="ri-folders-line"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="edu-flex-sm-6 edu-flex-lg-3 edu-mg-b-20 edu-mg-b-0-lg">
                                <div class="edu-card">
                                    <div class="edu-card__header edu-card__show">
                                        <span class="edu-card__title edu-fw-bld">Docente</span>
                                        <span class="edu-btn-icon edu-btn-icon-static">
                                            <i class="ri-bar-chart-line"></i>
                                        </span>
                                    </div>

                                    <div class="edu-card__body edu-d-flex edu-justify-between edu-align-end">
                                        <div class="left-side">
                                            <h2 class="edu-mg-b-10">12</h2>
                                            <p class="edu-fs-12 edu-d-flex edu-align-center">
                                                <span class="faded-text">Docentes cadastrados</span>
                                            </p>
                                        </div>

                                        <div class="right-side">
                                            <div class="edu-bdg edu-bdg-secondary bdg"><i
                                                    class="ri-presentation-line"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="edu-flex-sm-6 edu-flex-lg-3 edu-mg-b-20 edu-mg-b-0-lg">
                                <div class="edu-card">
                                    <div class="edu-card__header edu-card__show">
                                        <span class="edu-card__title edu-fw-bld">Disciplina / Notas</span>
                                        <span class="edu-btn-icon edu-btn-icon-static">
                                            <i class="ri-bar-chart-line"></i>
                                        </span>
                                    </div>

                                    <div class="edu-card__body edu-d-flex edu-justify-between edu-align-end">
                                        <div class="left-side">
                                            <h2 class="edu-mg-b-10">12</h2>
                                            <p class="edu-fs-12 edu-d-flex edu-align-center">
                                                <span class="faded-text">Disciplinas cadastradas</span>
                                            </p>
                                        </div>

                                        <div class="right-side">
                                            <div class="edu-bdg edu-bdg-success bdg"><i class="ri-slideshow-line"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="edu-flex-sm-6 edu-flex-lg-3 edu-mg-b-20 edu-mg-b-0-lg">
                                <div class="edu-card">
                                    <div class="edu-card__header edu-card__show">
                                        <span class="edu-card__title edu-fw-bld">Turma</span>
                                        <span class="edu-btn-icon edu-btn-icon-static">
                                            <i class="ri-bar-chart-line"></i>
                                        </span>
                                    </div>

                                    <div class="edu-card__body edu-d-flex edu-justify-between edu-align-end">
                                        <div class="left-side">
                                            <h2 class="edu-mg-b-10">12</h2>
                                            <p class="edu-fs-12 edu-d-flex edu-align-center">
                                                <span class="faded-text">Turmas cadastrados</span>
                                            </p>
                                        </div>

                                        <div class="right-side">
                                            <div class="edu-bdg edu-bdg-warn bdg"><i class="ri-team-line"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <section class="students-updates edu-pd-y-20">
                        <div class="edu-row">
                            <div class="edu-flex-md-12 edu-mg-b-20 edu-mg-b-0-md">
                                <div class="edu-card">

                                    <div class="edu-card__header">
                                        <span class="edu-card__title edu-fw-bld">Usuários</span>

                                        <div class="edu-d-flex edu-align-end">
                                            <button type="button"
                                                class="edu-btn edu-btn-sm edu-btn-primary edu-fw-bld edu-mg-r-8 edu-pd-y-6">
                                                Exportar
                                            </button>

                                            <button type="button"
                                                class="edu-btn edu-btn-sm edu-btn-success edu-fw-bld">
                                                Inserir
                                            </button>
                                        </div>
                                    </div>

                                    <div class="edu-card__body edu-pd-0">
                                        <div class="edu-overflow-auto">

                                            <table class="edu-tbl">

                                                <thead class="edu-tbl__header">
                                                    <tr class="edu-tbl__row">
                                                        <th class="edu-tbl__head">
                                                            Nome
                                                        </th>
                                                        <th class="edu-tbl__head">
                                                            CPF
                                                        </th>
                                                        <th class="edu-tbl__head">
                                                            Data de Nascimento
                                                        </th>
                                                        <th class="edu-tbl__head">
                                                            Opções
                                                        </th>
                                                    </tr>
                                                </thead>

                                                <tbody class="edu-tbl__body">
                                                    <tr class="edu-tbl__row">
                                                        <td class="edu-tbl__data">Giacomo Guillizoni</td>
                                                        <td class="edu-tbl__data">123.456.789-00</td>
                                                        <td class="edu-tbl__data">12/12/1982</td>
                                                        <td class="edu-tbl__data actions">
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-edit-color edu-btn-secondary edu-fw-bld edu-mg-r-10">
                                                                Alterar
                                                            </a>
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-delete-color edu-btn-danger edu-fw-bld edu-mg-r-0">
                                                                Excluir
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="edu-tbl__row">
                                                        <td class="edu-tbl__data">Giacomo Guillizoni</td>
                                                        <td class="edu-tbl__data">123.456.789-00</td>
                                                        <td class="edu-tbl__data">12/12/1982</td>
                                                        <td class="edu-tbl__data actions">
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-edit-color edu-btn-secondary edu-fw-bld edu-mg-r-10">
                                                                Alterar
                                                            </a>
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-delete-color edu-btn-danger edu-fw-bld edu-mg-r-0">
                                                                Excluir
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="edu-tbl__row">
                                                        <td class="edu-tbl__data">Giacomo Guillizoni</td>
                                                        <td class="edu-tbl__data">123.456.789-00</td>
                                                        <td class="edu-tbl__data">12/12/1982</td>
                                                        <td class="edu-tbl__data actions">
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-edit-color edu-btn-secondary edu-fw-bld edu-mg-r-10">
                                                                Alterar
                                                            </a>
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-delete-color edu-btn-danger edu-fw-bld edu-mg-r-0">
                                                                Excluir
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="edu-tbl__row">
                                                        <td class="edu-tbl__data">Giacomo Guillizoni</td>
                                                        <td class="edu-tbl__data">123.456.789-00</td>
                                                        <td class="edu-tbl__data">12/12/1982</td>
                                                        <td class="edu-tbl__data actions">
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-edit-color edu-btn-secondary edu-fw-bld edu-mg-r-10">
                                                                Alterar
                                                            </a>
                                                            <a href=""
                                                                class="edu-btn edu-btn-link change-delete-color edu-btn-danger edu-fw-bld edu-mg-r-0">
                                                                Excluir
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </main>

    <script src="{{ url(mix('backend/assets/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('backend/assets/js/app.js')) }}"></script>
</body>

</html>
