@extends('layouts.app')

@section('title', 'Edição de Artista')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Editar Artista</h1>
            <hr>
            <form action="{{ route('artistas.update', ['id' => $artistas->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nome">Nome do Artista:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $artistas->nome }}" placeholder="Digite o nome do artista">
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $artistas->categoria }}" placeholder="Digite a categoria do artista">
                </div>
                <div class="form-group mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
