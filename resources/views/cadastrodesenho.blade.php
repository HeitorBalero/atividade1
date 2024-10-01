@extends('layout')
@section('content')
''
<div class="container mt-5">
    <h2>Cadastro de Desenho</h2>
    <form method="post" action="{{route('cadastra-desenho')}}">
        @csrf
        <div class="form-group">
            <label for="nomeDesenho">Nome do Desenho</label>
            <input type="text" class="form-control" id="nomeDesenho" name="nomeDesenho" required>
        </div>

        <div class="form-group">
            <label for="dataDesenho">Data do Desenho</label>
            <input type="date" class="form-control" id="dataDesenho" name="dataDesenho" required>
        </div>

        <div class="form-group">
            <label for="generoDesenho">Gênero do Desenho</label>
            <input type="text" class="form-control" id="generoDesenho" name="generoDesenho" required>
        </div>

        <div class="form-group">
            <label for="autorDesenho">Autor do Desenho</label>
            <input type="text" class="form-control" id="autorDesenho" name="autorDesenho" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Desenho</button>
    </form>
</div>

@endsection