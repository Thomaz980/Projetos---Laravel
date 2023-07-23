<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Dados</h1>
    {{-- <p>Id: {{$candidato['id']}}</p>
    <p>Nome: {{$candidato['nome']}}</p>
    <p>Sobrenome: {{$candidato['sobrenome']}}</p>
    <p>Email: {{$candidato['email']}}</p>
    <p>Telefone: {{$candidato['telefone']}}</p> --}}

    <form action="/update/{{$candidato->id}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="{{$candidato['nome']}}">
        <input type="text" name="sobrenome" placeholder="{{$candidato['sobrenome']}}">
        <input type="email" name="email" placeholder="{{$candidato['email']}}">
        <input type="text" name="telefone" placeholder="{{$candidato['telefone']}}">
        <button>Enviar cadastro</button>
    </form>
</body>
</html>
