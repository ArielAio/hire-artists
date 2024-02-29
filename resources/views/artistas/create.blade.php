@extends('layouts.app')

@section('title', 'Criação de Artista')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center mb-4">Adicionar Novo Artista</h1>
            <form action="{{ route('artistas.store') }}" method="POST">
                @csrf
                <div class="form-group mb-4"> <!-- Adicionando margem na parte inferior -->
                    <label for="nome" class="form-label">Nome do Artista:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome do artista">
                </div>
                <div class="form-group mb-4"> <!-- Adicionando margem na parte inferior -->
                    <label for="categoria" class="form-label">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria do artista">
                </div>
                <div class="form-group text-center"> <!-- Botão de cadastro centralizado -->
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
