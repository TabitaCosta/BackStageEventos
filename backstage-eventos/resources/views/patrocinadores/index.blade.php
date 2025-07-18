@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Patrocinadores</h1>

        <a href="{{ route('patrocinadores.create') }}" class="btn btn-primary mb-3">Novo Patrocinador</a>

        @if ($patrocinadores->count())
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>Logo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patrocinadores as $patrocinador)
                        <tr>
                            <td>{{ $patrocinador->nome }}</td>
                            <td><a href="{{ $patrocinador->site }}" target="_blank">{{ $patrocinador->site }}</a></td>
                            <td>
                                @if ($patrocinador->logo)
                                    <img src="{{ asset('storage/' . $patrocinador->logo) }}" alt="Logo" height="50">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('patrocinadores.edit', $patrocinador) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('patrocinadores.destroy', $patrocinador) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum patrocinador cadastrado.</p>
        @endif
    </div>
@endsection
