@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Patrocinador</h1>

    <form action="{{ route('patrocinadores.update', $patrocinador) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome', $patrocinador->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="site" class="form-label">Site</label>
            <input type="url" name="site" class="form-control" value="{{ old('site', $patrocinador->site) }}">
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label><br>
            @if ($patrocinador->logo)
                <img src="{{ asset('storage/' . $patrocinador->logo) }}" alt="Logo" height="50"><br><br>
            @endif
            <input type="file" name="logo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('patrocinadores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
