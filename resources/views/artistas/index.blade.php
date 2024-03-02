@extends('layouts.app') <!-- Extend the 'app' layout -->

@section('title', 'Listagem de Artistas') <!-- Set the title -->

@section('content') <!-- Content section -->
<style> <!-- Style for table -->
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

<div class="container mt-5"> <!-- Container for table -->
    <div class="row mb-3"> <!-- Row for headings and buttons -->
        <div class="col"> <!-- Column for heading -->
            <h1>Listagem de Artistas</h1> <!-- Heading -->
        </div>
        <div class="col-auto d-flex align-items-center"> <!-- Column for buttons -->
            <a href="{{ route('artistas.create') }}" class="btn btn-outline-primary me-3">Novo Artista</a> <!-- Button for creating a new artist -->
            <a href="{{ route('artistas.lista') }}" class="btn btn-outline-primary">Contratados</a> <!-- Button for viewing contracted artists -->
        </div>
    </div>
    <div class="row mb-3"> <!-- Row for search form -->
        <div class="col"> <!-- Column for search form -->
            <form action="{{ route('artistas.search') }}" method="GET" class="d-flex"> <!-- Form for searching artists -->
                <input type="text" name="q" class="form-control me-2" placeholder="Buscar por nome..."> <!-- Input for search term -->
                <button type="submit" class="btn btn-primary">Buscar</button> <!-- Search button -->
            </form>
        </div>
    </div>
    <table class="table table-hover"> <!-- Table for displaying artist details -->
        <thead> <!-- Table header -->
            <tr> <!-- Table row -->
                <th scope="col">Nome do Artista</th> <!-- Table heading for artist name -->
                <th scope="col">Categoria</th> <!-- Table heading for category -->
                <th scope="col">Ações</th> <!-- Table heading for actions -->
            </tr>
        </thead>
        <tbody> <!-- Table body -->
            @foreach ($artistas as $artista) <!-- Loop through artists -->
            <tr class="clickable-row" data-href="{{ route('artistas.contratar', ['id' => $artista->id]) }}"> <!-- Table row with link -->
                <td>{{ $artista->nome }}</td> <!-- Display artist name -->
                <td>{{ $artista->categoria }}</td> <!-- Display category -->
                <td> <!-- Actions column -->
                    <div class="d-flex"> <!-- Div for buttons -->
                        <a href="{{ route('artistas.edit', ['id' => $artista->id]) }}" class="btn btn-primary me-2" title="Editar"> <!-- Button for editing artist -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16"> <!-- Edit icon -->
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" /> <!-- Edit icon path -->
                            </svg>
                        </a>
                        <form id="delete-form-{{ $artista->id }}" action="{{ route('artistas.destroy', ['id' => $artista->id]) }}" method="POST"> <!-- Form for deleting artist -->
                            @csrf <!-- CSRF token -->
                            @method('DELETE') <!-- Method override for DELETE request -->
                            <button type="submit" class="btn btn-danger" title="Excluir"> <!-- Button for deleting artist -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"> <!-- Trash icon -->
                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" /> <!-- Trash icon path -->
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
@endsection <!-- End of content section -->

@section('scripts') <!-- Scripts section -->
<script> <!-- JavaScript for making rows clickable -->
    document.addEventListener("DOMContentLoaded", function () {
        var rows = document.querySelectorAll(".clickable-row");
        rows.forEach(function (row) {
            row.addEventListener("click", function () {
                window.location.href = this.dataset.href;
            });
        });
    });
</script>
@endsection <!-- End of scripts section -->