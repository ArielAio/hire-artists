@extends('layouts.app')

@section('title', 'Contratar Artista')

@section('content')
<div class="container my-5"> <!-- Adicionando margem inferior -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4 shadow-sm"> <!-- Adicionando sombra ao card -->
                <h1 class="text-center mb-4">Contratar {{ $artista->nome }}</h1>
                <form action="{{ route('artistas.sucesso') }}" method="POST">
                    @csrf
                    <input type="hidden" name="artista_id" value="{{ $artista->id }}">

                    <div class="mb-3">
                        <label for="nome_artista" class="form-label">Nome do Artista</label>
                        <input type="text" class="form-control" id="nome_artista" name="nome_artista"
                            value="{{ $artista->nome }}" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="categoria_artista" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="categoria_artista" name="categoria_artista"
                            value="{{ $artista->categoria }}" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nome_contratante" class="form-label">Nome do Contratante</label>
                        <input type="text" class="form-control" id="nome_contratante" name="nome_contratante" required>
                    </div>
                    <div class="mb-3">
                        <label for="cache" class="form-label">Cachê</label>
                        <input type="number" class="form-control" id="cache" name="cache" required>
                    </div>
                    <div class="mb-3">
                        <label for="data_evento" class="form-label">Data do Evento</label>
                        <input type="date" class="form-control" id="data_evento" name="data_evento" required>
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Contratar</button>
                        <a href="{{ route('artistas.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
