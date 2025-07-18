@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Patrocinador</h1>

        <form action="{{ route('patrocinadores.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('patrocinadores.partials.form', ['patrocinador' => null])

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
@endsection
