@extends('layouts.app')

@section('title', 'Sistema de Contratação de Artistas')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h1 class="display-4">Bem-vindo ao Sistema de Contratação de Artistas</h1>
                    <p class="lead">Encontre e contrate os melhores artistas para o seu evento!</p>
                    <a class="btn btn-primary btn-lg" href="{{ route('artistas.index') }}" role="button">Contratar Artistas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
