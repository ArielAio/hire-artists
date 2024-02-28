@extends('layouts.app')

@section('title', 'Criação de Artista')

@section('content')
<div class="container mt-5">
    <h1>Adicionar Novo Artista</h1>
    <hr>
    <form action="{{ route('artistas.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3"> <!-- Adicionando margem na parte inferior -->
                    <label for="nome">Nome do Artista:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome do artista">
                </div>
                <div class="form-group mb-4"> <!-- Adicionando margem na parte inferior -->
                    <label for="categoria">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria do artista">
                </div>
                <div class="form-group"> <!-- Botão de cadastro separado -->
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection