@extends('layouts.app') <!-- Extend the 'app' layout -->

@section('title', 'Criação de Artista') <!-- Set the title -->

@section('content') <!-- Content section -->
<div class="container mt-5"> <!-- Container for form -->
    <div class="row justify-content-center"> <!-- Row for center alignment -->
        <div class="col-md-6"> <!-- Column for form -->
            <h1 class="text-center mb-4">Adicionar Novo Artista</h1> <!-- Heading -->
            <form action="{{ route('artistas.store') }}" method="POST"> <!-- Form for adding artist -->
                @csrf <!-- CSRF token -->
                <div class="form-group mb-4"> <!-- Form group for artist name -->
                    <label for="nome" class="form-label">Nome do Artista:</label> <!-- Label for artist name -->
                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome do artista"> <!-- Input for artist name -->
                </div>
                <div class="form-group mb-4"> <!-- Form group for category -->
                    <label for="categoria" class="form-label">Categoria:</label> <!-- Label for category -->
                    <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria do artista"> <!-- Input for category -->
                </div>
                <div class="form-group text-center"> <!-- Form group for button -->
                    <button type="submit" class="btn btn-primary">Cadastrar</button> <!-- Submit button -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection <!-- End of content section -->
