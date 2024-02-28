@extends('layouts.app')

@section('title', 'Artistas Contratados')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-11">
            <h1>Artistas Contratados</h1>
        </div>
        <div class="col-md-1">
            <a href="{{ route('artistas.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>Nome do Artista</th>
                    <th>Categoria</th>
                    <th>Nome do Contratante</th>
                    <th>Cache</th>
                    <th>Data do Evento</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contratados as $contratado)
                <tr>
                    <td>{{ $contratado->nome_artista }}</td>
                    <td>{{ $contratado->categoria_artista }}</td>
                    <td>{{ $contratado->nome_contratante }}</td>
                    <td>R$ {{ $contratado->cache }}</td>
                    <td>{{ $contratado->data_evento }}</td>
                    <td>{{ $contratado->endereco }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection