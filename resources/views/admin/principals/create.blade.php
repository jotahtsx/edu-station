@extends('admin.master.master')
@section('title', 'Cadastrar')
@section('content')
    <div class="content">
        <div class="edu-content">
            <div class="edu-offset-12 edu-offset-md-3 edu-offset-lg-2">
                <div class="section-heading edu-pd-y-20">
                    <h4 class="title">Cadastro de Diretor(a)</h4>
                    <p class="subtitle">Liderança focada no futuro dos estudantes</p>
                </div>
                <div>
                    <form class="form-definition" action="{{ route('admin.direcao.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="edu-form__group">
                                <label for="name">Foto:</label>
                                <input class="edu-form__input" type="file" id="cover" name="cover">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="edu-form__group">
                                <label for="name">Nome:</label>
                                <input class="edu-form__input" type="text" id="name" name="name">
                            </div>
                            <div class="edu-form__group">
                                <label for="document">CPF:</label>
                                <input class="edu-form__input" type="number" id="document" name="document">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="edu-form__group">
                                <label for="date_of_birth">Data de Nascimento:</label>
                                <input class="edu-form__input" type="date" id="date_of_birth" name="date_of_birth">
                            </div>
                            <div class="edu-form__group">
                                <label for="email">Email:</label>
                                <input class="edu-form__input" type="email" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="edu-form__group">
                                <label for="password">Senha:</label>
                                <input class="edu-form__input" type="password" id="password" name="password">
                            </div>
                            <div class="edu-form__group">
                                <label for="password_confirmation">Confirmar senha:</label>
                                <input class="edu-form__input" type="password" id="password_confirmation"
                                    name="password_confirmation">
                            </div>
                        </div>
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
