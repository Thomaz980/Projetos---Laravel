<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/mostrar.css') }}">
    <title>Controlador de Custos</title>
</head>
<body>
    <h1>Controlador de Custos</h1>
    <form action="{{route("registro")}}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Gasto">
        <input type="text" name="valor" placeholder="Valor">
        <select id="tipo" name="tipo">
            <option disabled selected>Tipo de Entrada</option>
            <option value="Entrada">Entrada</option>
            <option value="Saída">Saída</option>
        </select>
        <input type="date" name="data" placeholder="Data de Referência">
        <input type="text" name="descricao" placeholder="Descrição">
        <button type="submit">Registrar</button>
    </form>

    {{-- <h2>Caso queira insira aqui seu arquivo CSV</h2>
    <form action="{{route("csv")}}" method="post">
        @csrf
        <input type="file" enctype="multipart/form-data" name="csv">
        <button type="submit">Enviar</button>
    </form> --}}

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
                <td><a href="/editar/{{$custo['id']}}">Editar</a></td>
                <td><a href="/deletar/{{$custo['id']}}">Deletar</a></td>
            </tr>
        @endforeach
    </Table>
</body>
</html>
