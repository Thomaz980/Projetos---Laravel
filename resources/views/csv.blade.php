<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Dados</title>
</head>
<body>
    @foreach($record as $rec)
        <ul>
            <li>Nome: {{$rec['nome']}}</li>
            <li>Email: {{$rec['email']}}</li>
        </ul>
    @endforeach
</body>
</html>
