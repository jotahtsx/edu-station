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

                @if ($errors->all())
                    <div class="edu-error-container">
                        @foreach ($errors->all() as $error)
                            <div class="edu-error-message">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div>
                    <form class="form-definition" action="{{ route('admin.direcao.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="edu-form__group">
                                <label class="label" for="name">Foto:</label>
                                <input class="edu-form__input" type="file" id="cover" name="cover">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="edu-form__group">
                                <label class="label" for="name">Nome:</label>
                                <input class="edu-form__input input @error('name') input-error @enderror" type="text"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="edu-form__group">
                                <label class="label" for="document">CPF:</label>
                                <input type="tel"
                                    class="edu-form__input input document @error('document') input-error @enderror"
                                    id="document" name="document" value="{{ old('document') }}">
                                @error('document')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="edu-form__group">
                                <label class="label" for="date_of_birth">Data de Nascimento:</label>
                                <input type="tel" placeholder="Data de Nascimento"
                                    class="edu-form__input birth_date @error('birth_date') input-error @enderror"
                                    id="birth_date" name="birth_date">
                                @error('birth_date')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="edu-form__group">
                                <label class="label" for="email">Email:</label>
                                <input class="edu-form__input email @error('email') input-error @enderror" type="email"
                                    placeholder="Seu melhor email" id="email" name="email">
                                @error('email')
                                    <div class="error-message">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="edu-form__group">
                                <label class="label" for="password">Senha:</label>
                                <input class="edu-form__input" type="password" id="password" name="password">
                            </div>
                            <div class="edu-form__group">
                                <label class="label" for="password_confirmation">Confirmar senha:</label>
                                <input class="edu-form__input" type="password" id="password_confirmation"
                                    name="password_confirmation">
                            </div>
                        </div>
                        <button class="edu-btn edu-btn-lg edu-btn-success edu-fw-bld" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
