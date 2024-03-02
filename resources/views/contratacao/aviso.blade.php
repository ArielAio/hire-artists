@extends('layouts.app') <!-- Extend the 'app' layout -->

@section('title', 'Contratação Confirmada') <!-- Set the title -->

@section('content') <!-- Content section -->
<div class="container mt-5"> <!-- Container for card -->
    <div class="row justify-content-center"> <!-- Row for center alignment -->
        <div class="col-md-8"> <!-- Column for card -->
            <div class="card text-center shadow"> <!-- Card -->
                <div class="card-body"> <!-- Card body -->
                    <h1 class="display-4">Contratação Confirmada!</h1> <!-- Heading -->
                    <p class="lead">Parabéns! Seu artista foi contratado com sucesso.</p> <!-- Lead text -->
                    <hr class="my-4"> <!-- Horizontal line -->
                    <div class="d-grid gap-3 d-md-flex justify-content-md-center"> <!-- Button group -->
                        <a class="btn btn-primary btn-lg" href="{{ route('artistas.lista') }}" role="button">Ver Contratados</a> <!-- Button for viewing contracted artists -->
                        <a class="btn btn-secondary btn-lg" href="{{ route('artistas.index') }}" role="button">Voltar</a> <!-- Button for going back -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection <!-- End of content section -->