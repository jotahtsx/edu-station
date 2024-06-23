@extends('admin.master.master')
@section('title', 'Home')
@section('content')
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
                                        <div class="edu-bdg edu-bdg-secondary bdg"><i class="ri-presentation-line"></i>
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

                                        <button type="button" class="edu-btn edu-btn-sm edu-btn-success edu-fw-bld">
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
@endsection
