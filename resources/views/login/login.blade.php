@extends('base')
@section('title', 'Inicia sesión')
@section('body')
    <div class="row">
        <div class="col-12 vh-100 d-flex flex-column justify-content-center align-items-center gap-3">
            <img src="{{ asset('img/logo.png') }}" width="15%" />
            <input type="input" autocomplete="off" placeholder="Usuario" name="user" id='user' required />
            <input type="input" autocomplete="off" placeholder="Contraseña" name="password" id='password' required />
            <button class="btn btn-success">Ingresar</button>
        </div>
    </div>
@endsection
