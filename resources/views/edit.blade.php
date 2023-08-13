<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- linkar css --}}
    <link rel="stylesheet" href="{{asset('css/mostrar.css')}}">
    <title>Controlador de Custos</title>
</head>
<body>
    <h1>Edite os Dados Necessários</h1>

    <form action="{{route("editar")}}"  method="post">
        @csrf
        @method('PUT')
        {{-- label --}}
        <label for="id">ID</label>
        <input type="text" name="id" value="{{$custo['id']}}">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{$custo['nome']}}">
        <label for="valor">Valor</label>
        <input type="text" name="valor" value="{{$custo['valor']}}">
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" value="{{$custo['tipo']}}">
        <label for="data">Data</label>
        <input type="date" name="data" value="{{$custo['data']}}">
        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" value="{{$custo['descricao']}}">
        <button type="submit">Atualizar Informações</button>
    </form>
</body>
</html>
