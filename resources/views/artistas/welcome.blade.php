@extends('layouts.app') <!-- Extend the 'app' layout -->

@section('title', 'Sistema de Contratação de Artistas') <!-- Set the title -->

@section('content') <!-- Content section -->
<div class="container mt-5"> <!-- Container for card -->
    <div class="row justify-content-center"> <!-- Row for center alignment -->
        <div class="col-md-8"> <!-- Column for card -->
            <div class="card text-center shadow"> <!-- Card -->
                <div class="card-body"> <!-- Card body -->
                    <h1 class="display-4">Bem-vindo ao Sistema de Contratação de Artistas</h1> <!-- Heading -->
                    <p class="lead">Encontre e contrate os melhores artistas para o seu evento!</p> <!-- Lead text -->
                    <a class="btn btn-primary btn-lg" href="{{ route('artistas.index') }}" role="button">Contratar Artistas</a> <!-- Button for hiring artists -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection <!-- End of content section -->