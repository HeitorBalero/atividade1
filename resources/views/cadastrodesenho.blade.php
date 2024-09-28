@extends('layout')
@section('content')
<div class="container mt-5">
    <h2>Formulário de Desenhos</h2>
    <form>
        <div class="form-group">
            <label for="nomeDesenho">Nome do Desenho</label>
            <input type="text" class="form-control" id="nomeDesenho" name="nomeDesenho" required>
        </div>

        <div class="form-group">
            <label for="dataDesenho">Data do Desenho</label>
            <input type="date" class="form-control" id="dataDesenho" name="dataDesenho" required>
        </div>

        <div class="form-group">
            <label for="tipoDesenho">Tipo do Desenho</label>
            <input type="text" class="form-control" id="tipoDesenho" name="tipoDesenho" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


@extension