@extends('layouts.app')

@section('title', 'Edição de Artista')

@section('content')
<div class="container mt-5">
    <h1>Editar Artista</h1>
    <hr>
    <form action="{{ route('artistas.update', ['id' => $artistas->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome">Nome do Artista:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $artistas->nome }}" placeholder="Digite o nome do artista">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $artistas->categoria }}" placeholder="Digite a categoria do artista">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection