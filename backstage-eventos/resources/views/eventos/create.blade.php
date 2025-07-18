@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Evento</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('eventos.store') }}" method="POST">
        @include('eventos.form')
    </form>
</div>
@endsection
