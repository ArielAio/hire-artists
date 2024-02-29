@extends('layouts.app')

@section('title', 'Contratação Confirmada')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h1 class="display-4">Contratação Confirmada!</h1>
                    <p class="lead">Parabéns! Seu artista foi contratado com sucesso.</p>
                    <hr class="my-4">

                    <div class="d-grid gap-3 d-md-flex justify-content-md-center">
                        <a class="btn btn-primary btn-lg" href="{{ route('artistas.lista') }}" role="button">Ver Contratados</a>
                        <a class="btn btn-secondary btn-lg" href="{{ route('artistas.index') }}" role="button">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
