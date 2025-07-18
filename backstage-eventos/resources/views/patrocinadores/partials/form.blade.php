<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome', $patrocinador->nome ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="site" class="form-label">Site</label>
    <input type="url" name="site" class="form-control" value="{{ old('site', $patrocinador->site ?? '') }}">
</div>

<div class="mb-3">
    <label for="logo" class="form-label">Logo</label>
    <input type="file" name="logo" class="form-control">
    @if(isset($patrocinador) && $patrocinador->logo)
        <img src="{{ asset('storage/' . $patrocinador->logo) }}" alt="Logo atual" height="50" class="mt-2">
    @endif
</div>
