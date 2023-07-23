<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>

    <h1>Cadastro de candidato</h1>

    <form action="/cadastro" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="sobrenome" placeholder="sobrenome">
        <input type="email" name="email" placeholder="email">
        <input type="text" name="telefone" placeholder="telefone">
        <button>Enviar cadastro</button>
    </form>
</body>
</html>
