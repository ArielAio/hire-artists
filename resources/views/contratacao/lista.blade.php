@extends('layouts.app') <!-- Extend the 'app' layout -->

@section('title', 'Artistas Contratados') <!-- Set the title -->

@section('content') <!-- Content section -->
<div class="container mt-5"> <!-- Container for list -->
    <div class="row"> <!-- Row -->
        <div class="col-md-11"> <!-- Column for title -->
            <h1>Artistas Contratados</h1> <!-- Title -->
        </div>
        <div class="col-md-1"> <!-- Column for back button -->
            <a href="{{ route('artistas.index') }}" class="btn btn-secondary">Voltar</a> <!-- Button to go back -->
        </div>
        <table class="table table-hover mt-3"> <!-- Table for contracted artists -->
            <thead> <!-- Table header -->
                <tr> <!-- Table row for headers -->
                    <th>Nome do Artista</th> <!-- Header for artist name -->
                    <th>Categoria</th> <!-- Header for category -->
                    <th>Nome do Contratante</th> <!-- Header for contractor's name -->
                    <th>Cache</th> <!-- Header for fee -->
                    <th>Data do Evento</th> <!-- Header for event date -->
                    <th>Endereço</th> <!-- Header for address -->
                </tr>
            </thead>
            <tbody> <!-- Table body -->
                @foreach ($contratados as $contratado) <!-- Loop through contracted artists -->
                <tr> <!-- Table row for each contracted artist -->
                    <td>{{ $contratado->nome_artista }}</td> <!-- Display artist's name -->
                    <td>{{ $contratado->categoria_artista }}</td> <!-- Display category -->
                    <td>{{ $contratado->nome_contratante }}</td> <!-- Display contractor's name -->
                    <td>R$ {{ $contratado->cache }}</td> <!-- Display fee -->
                    <td>{{ $contratado->data_evento }}</td> <!-- Display event date -->
                    <td>{{ $contratado->endereco }}</td> <!-- Display address -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection <!-- End of content section -->