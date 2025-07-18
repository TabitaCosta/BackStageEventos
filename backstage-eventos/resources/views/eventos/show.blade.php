@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $evento->nome }}</h1>

    <p><strong>Descrição:</strong> {{ $evento->descricao }}</p>
    <p><strong>Data de Início:</strong> {{ $evento->data_inicio }}</p>
    <p><strong>Data de Fim:</strong> {{ $evento->data_fim }}</p>

    <a href="{{ route('eventos.edit', $evento) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('eventos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
