@extends('layouts.app') <!-- Extend the 'app' layout -->

@section('title', 'Edição de Artista') <!-- Set the title -->

@section('content') <!-- Content section -->
<div class="container mt-5"> <!-- Container for form -->
    <div class="row justify-content-center"> <!-- Row for center alignment -->
        <div class="col-md-6"> <!-- Column for form -->
            <h1 class="text-center">Editar Artista</h1> <!-- Heading -->
            <hr> <!-- Horizontal line -->
            <form action="{{ route('artistas.update', ['id' => $artistas->id]) }}" method="POST"> <!-- Form for editing artist -->
                @csrf <!-- CSRF token -->
                @method('PUT') <!-- Method override for PUT request -->
                <div class="form-group"> <!-- Form group for artist name -->
                    <label for="nome">Nome do Artista:</label> <!-- Label for artist name -->
                    <input type="text" class="form-control" name="nome" value="{{ $artistas->nome }}" placeholder="Digite o nome do artista"> <!-- Input for artist name -->
                </div>
                <div class="form-group"> <!-- Form group for category -->
                    <label for="categoria">Categoria:</label> <!-- Label for category -->
                    <input type="text" class="form-control" name="categoria" value="{{ $artistas->categoria }}" placeholder="Digite a categoria do artista"> <!-- Input for category -->
                </div>
                <div class="form-group mt-3 text-center"> <!-- Form group for button -->
                    <button type="submit" class="btn btn-primary">Atualizar</button> <!-- Submit button -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection <!-- End of content section -->
