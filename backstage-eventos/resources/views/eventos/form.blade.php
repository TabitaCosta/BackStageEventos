@csrf

<div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ old('nome', $evento->nome ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control">{{ old('descricao', $evento->descricao ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="data_inicio" class="form-label">Data de Início</label>
    <input type="date" name="data_inicio" class="form-control" value="{{ old('data_inicio', $evento->data_inicio ?? '') }}">
</div>

<div class="mb-3">
    <label for="data_fim" class="form-label">Data de Fim</label>
    <input type="date" name="data_fim" class="form-control" value="{{ old('data_fim', $evento->data_fim ?? '') }}">
</div>

<button type="submit" class="btn btn-success">Salvar</button>
