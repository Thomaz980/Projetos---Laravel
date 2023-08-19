<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome do Aluno</th>
            <th>Matricula</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Observações</th>
            <th>Status</th>
            <th>Data de Solicitação</th>
            <th>Atualizar Status</th>
            <th>Excluir</th>
        </tr>
        @foreach ($requerimentos as $requerimento)
            <tr>
                <td>{{ $requerimento['nome'] }}</td>
                <td>{{ $requerimento['matricula'] }}</td>
                <td>{{ $requerimento['email'] }}</td>
                <td>{{ $requerimento['tipo'] }}</td>
                <td>{{ $requerimento['observacoes'] }}</td>
                <td>
                    <select>
                        <option value="pendente">Pendente</option>
                        <option value="aprovado">Aprovado</option>
                        <option value="reprovado">Reprovado</option>
                    </select>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
