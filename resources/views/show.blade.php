<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Dados</title>
</head>
<body>
    @foreach($custos as $custo)
        <ul>
            <li>Nome: {{$custo['nome']}}</li>
            <li>Valor: {{$custo['valor']}}</li>
            <li>Tipo: {{$custo['tipo']}}</li>
            <li>Data: {{$custo['data']}}</li>
            <li>Descrição: {{$custo['descricao']}}</li>
        </ul>
    @endforeach
</body>
</html>
