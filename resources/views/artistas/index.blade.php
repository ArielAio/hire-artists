@extends('layouts.app')

@section('title', 'Listagem de Artistas')

@section('content')
<style>
    .table-hover tr:hover td {
        transform: scale(1.03);
        transition: transform 0.5s ease;
    }
    .table-hover th {
        transform: none;
    }
    .clickable-row:hover {
        background-color: #f5f5f5;
    }
</style>
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col">
            <h1>Listagem de Artistas</h1>
        </div>
        <div class="col-auto d-flex align-items-center">
            <a href="{{ route('artistas.create') }}" class="btn btn-outline-primary me-3">Novo Artista</a>
            <a href="{{ route('artistas.lista') }}" class="btn btn-outline-primary">Contratados</a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <form action="{{ route('artistas.search') }}" method="GET" class="d-flex">
                <input type="text" name="q" class="form-control me-2" placeholder="Buscar por nome...">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome do Artista</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artistas as $artista)
            <tr class="clickable-row" data-href="{{ route('artistas.contratar', ['id' => $artista->id]) }}">
                <td>{{ $artista->nome }}</td>
                <td>{{ $artista->categoria }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('artistas.edit', ['id' => $artista->id]) }}" class="btn btn-primary me-2" title="Editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                            </svg>
                        </a>
                        <form id="delete-form-{{ $artista->id }}" action="{{ route('artistas.destroy', ['id' => $artista->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Excluir">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var rows = document.querySelectorAll(".clickable-row");
        rows.forEach(function (row) {
            row.addEventListener("click", function () {
                window.location.href = this.dataset.href;
            });
        });
    });
    
</script>
@endsection
