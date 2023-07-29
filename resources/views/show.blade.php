<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Rota Mostrar</h1>

{{-- Mostrar os dados do json passado ela rota --}}
    {{-- <p>Nome: {{ $candidato['nome'] }}</p>
    <p>Sobrenome: {{ $candidato['sobrenome'] }}</p>
    <p>Email: {{ $candidato['email'] }}</p>
    <p>Telefone: {{ $candidato['telefone'] }}</p> --}}

    {{-- <p>Nome: {{ $candidato['nome']}}</p>
    <p>Sobrenome: {{ $candidato['sobrenome']}}</p>
    <p>Email: {{ $candidato['email']}}</p>
    <p>Telefone: {{ $candidato['telefone']}}</p> --}}

    @foreach ($candidato as $can)
        <ul>
            <li>Nome: {{ $can['nome']}}</li>
            <li>Sobrenome: {{ $can['sobrenome']}}</li>
            <li>Email: {{ $can['email']}}</li>
            <li>Telefone: {{ $can['telefone']}}</li>
            <li><a href="/deletar/{{$can['id']}}">Excluir: {{$can['id']}}</a></li>
            <li><a href="/editar/{{$can['id']}}">Editar: {{$can['id']}}</a></li>
        </ul>
    @endforeach
</body>
</html>
