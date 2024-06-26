@extends('admin.master.master')
@section('title', 'Direção')
@section('content')

    <div class="content">
        <div class="edu-content">

            <div class="edu-offset-12 odu-offset-md-3 edu-offset-lg-2">

                <div class="section-heading edu-pd-y-20">
                    <h4 class="title">Direção</h4>
                    <p class="subtitle">Liderança focada no futuro dos estudantes</p>
                </div>

                <section class="students-updates edu-pd-y-20">
                    <div class="edu-row">
                        <div class="edu-flex-md-12 edu-mg-b-20 edu-mg-b-0-md">
                            <div class="edu-card">

                                <div class="edu-card__header">
                                    <span class="edu-card__title edu-fw-bld">Direção</span>

                                    <div class="edu-d-flex edu-align-end">

                                        <a href="{{ route('admin.direcao.create') }}" type="button"
                                            class="edu-btn edu-btn-sm edu-btn-success edu-fw-bld">
                                            Inserir
                                        </a>
                                    </div>
                                </div>

                                <div class="edu-card__body">
                                    <div class="edu-overflow-auto">

                                        <table id="eduTable" class="edu-tbl">

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

                                            <tbody class="edu-tbl__body edu-pd-0">
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
