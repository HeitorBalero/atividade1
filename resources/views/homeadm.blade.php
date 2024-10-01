<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenho</title>
    <style>
        body {
            background-image: url('assets/bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            overflow: hidden;
            margin: 0;
        }
    </style>
</head>
@extends('layout')
@section('content')

<div class="container mt-5">

    <h1>Bem-vindo ao Cadastro de Desenhos!</h1>
    <p>Este é um sistema para cadastrar e gerenciar desenhos. Use o menu acima para navegar entre as opções.</p>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Sobre o Sistema</h5>
            <p class="card-text">Aqui você pode cadastrar novos desenhos, visualizar os desenhos cadastrados e aprender mais sobre o sistema. Aproveite!</p>
            <a href="{{ route('show-cadastro-desenho') }}" class="btn btn-primary">Começar a Cadastrar</a>

        </div>
    </div>
</div>

@endsection

</html>