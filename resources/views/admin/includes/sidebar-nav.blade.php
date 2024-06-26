<ul class="edu-header__navitems edu-header__sidebar-md-3 edu-header__sidebar-md-2" id="main-menu">

    <li class="edu-header__list">
        <a href="{{ route('admin.home') }}"
            class="edu-header__link--logo edu-pd-20 edu-d-flex edu-align-center edu-justify-center">
            <img src="{{ url(asset('backend/assets/images/logo.svg')) }}" />
        </a>
    </li>

    <li class="edu-header__list">
        <a href="{{ route('admin.home') }}"
            class="{{ isActive('admin.home') }} edu-header__link edu-pd-20 edu-d-flex edu-align-center edu-justify-between">
            <span class="edu-fs-14 edu-d-flex edu-align-center"><i class="ri-home-line edu-mg-r-10"></i>Home</span>
        </a>
    </li>

    <li class="edu-header__list">
        <a href="{{ route('admin.direcao.index') }}"
            class="{{ isActive('admin.direcao') }} edu-header__link edu-pd-20 edu-d-flex edu-align-center edu-justify-between">
            <span class="edu-fs-14 edu-d-flex edu-align-center"><i
                    class="ri-folders-line edu-mg-r-10"></i>Direção</span>
        </a>
    </li>

    <li class="edu-header__list">
        <a href="" class="edu-header__link edu-pd-20 edu-d-flex edu-align-center edu-justify-between">
            <span class="edu-fs-14 edu-d-flex edu-align-center"><i
                    class="ri-presentation-line edu-mg-r-10"></i>Docente</span>
        </a>
    </li>

    <li class="edu-header__list">
        <a href="" class="edu-header__link edu-pd-20 edu-d-flex eedu-align-center edu-justify-between">
            <span class="edu-fs-14 edu-d-flex edu-align-center"><i class="ri-graduation-cap-line edu-mg-r-10"></i>
                Aluno(a)</span>
        </a>
    </li>
    <li class="edu-header__list">
        <a href="" class="edu-header__link edu-pd-20 edu-d-flex eedu-align-center edu-justify-between">
            <span class="edu-fs-14 edu-d-flex edu-align-center"><i class="ri-slideshow-line edu-mg-r-10"></i>Disciplina
                / Notas</span>
        </a>
    </li>
    <li class="edu-header__list">
        <a href="" class="edu-header__link edu-pd-20 edu-d-flex eedu-align-center edu-justify-between">
            <span class="edu-fs-14 edu-d-flex edu-align-center"><i class="ri-team-line edu-mg-r-10"></i>Turma</span>
        </a>
    </li>
</ul>
