@extends('base')
@section('title', 'Inicio')
@section('navbar')
    @include('nav.nav')
@endsection
@section('header', 'Pagina de bienvenida')
@section('body')
    <div class="d-flex justify-content-center flex-column align-items-center">
        <p class="display-3">Bienvenid@ <span style="font-weight: bold; color: #8A5393"></span>
        </p>
        <i style="font-size: 15rem; color: #6F7073;" class="fas fa-user-cog"></i>
    </div>
@endsection