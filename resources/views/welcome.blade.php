<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- linkar css --}}
    <link rel="stylesheet" href="{{asset('css/mostrar.css')}}">
    <title>Controlador de Custos</title>

<style>
    body{
        background-color: #f5f5f5;
    }

    form{
        margin-top: 50px;
        display: flex;
        align-items: center;
    }

    table{
        margin-top: 50px;
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #000;
        font-size: 18px;
    }
    td, li {
        border: 1px solid #000;
        padding: 5px;
    }
</style>
</head>
<body>
    <form action="{{route("registro")}}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Gasto">
        <input type="text" name="valor" placeholder="Valor">
        <input type="text" name="tipo" placeholder="Tipo de Gasto">
        <input type="date" name="data" placeholder="Data de Referência">
        <input type="text" name="descricao" placeholder="Descrição">
        <button type="submit">Registrar</button>
    </form>

    {{-- <form action="{{route("pesquisa")}}" method="post"> --}}

    <Table>
        <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        @foreach($custos as $custo)
            <tr>
                <td>{{$custo['nome']}}</td>
                <td>{{$custo['valor']}}</td>
                <td>{{$custo['tipo']}}</td>
                <td>{{$custo['data']}}</td>
                <td>{{$custo['descricao']}}</td>
                <td><a href="/editar">Editar</a></td>
                <td><a href="/deletar/{{$custo['id']}}">Deletar</a></td>
            </tr>
        @endforeach
    </Table>

</body>
</html>
