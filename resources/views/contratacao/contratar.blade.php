@extends('layouts.app') <!-- Extend the 'app' layout -->

@section('title', 'Contratar Artista') <!-- Set the title -->

@section('content') <!-- Content section -->
<div class="container my-5"> <!-- Container for form -->
    <div class="row justify-content-center"> <!-- Row for center alignment -->
        <div class="col-md-8"> <!-- Column for form -->
            <div class="card p-4 shadow-sm"> <!-- Card -->
                <h1 class="text-center mb-4">Contratar {{ $artista->nome }}</h1> <!-- Heading -->
                <form action="{{ route('artistas.sucesso') }}" method="POST"> <!-- Form for hiring artist -->
                    @csrf <!-- CSRF token -->
                    <input type="hidden" name="artista_id" value="{{ $artista->id }}"> <!-- Hidden input for artist ID -->
                    <div class="mb-3"> <!-- Form group for artist name -->
                        <label for="nome_artista" class="form-label">Nome do Artista</label> <!-- Label for artist name -->
                        <input type="text" class="form-control" id="nome_artista" name="nome_artista" value="{{ $artista->nome }}" required readonly> <!-- Input for artist name -->
                    </div>
                    <div class="mb-3"> <!-- Form group for category -->
                        <label for="categoria_artista" class="form-label">Categoria</label> <!-- Label for category -->
                        <input type="text" class="form-control" id="categoria_artista" name="categoria_artista" value="{{ $artista->categoria }}" required readonly> <!-- Input for category -->
                    </div>
                    <div class="mb-3"> <!-- Form group for contractor name -->
                        <label for="nome_contratante" class="form-label">Nome do Contratante</label> <!-- Label for contractor name -->
                        <input type="text" class="form-control" id="nome_contratante" name="nome_contratante" required> <!-- Input for contractor name -->
                    </div>
                    <div class="mb-3"> <!-- Form group for fee -->
                        <label for="cache" class="form-label">Cachê</label> <!-- Label for fee -->
                        <input type="number" class="form-control" id="cache" name="cache" required> <!-- Input for fee -->
                    </div>
                    <div class="mb-3"> <!-- Form group for event date -->
                        <label for="data_evento" class="form-label">Data do Evento</label> <!-- Label for event date -->
                        <input type="date" class="form-control" id="data_evento" name="data_evento" required> <!-- Input for event date -->
                    </div>
                    <div class="mb-3"> <!-- Form group for address -->
                        <label for="endereco" class="form-label">Endereço</label> <!-- Label for address -->
                        <input type="text" class="form-control" id="endereco" name="endereco" required> <!-- Input for address -->
                    </div>
                    <div class="d-grid gap-2"> <!-- Button group -->
                        <button type="submit" class="btn btn-primary">Contratar</button> <!-- Submit button -->
                        <a href="{{ route('artistas.index') }}" class="btn btn-secondary">Cancelar</a> <!-- Cancel button -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection <!-- End of content section -->