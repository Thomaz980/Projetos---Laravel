<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>

    <h1>Cronograma de Estudos</h1>

    <h2>Cadastre aqui um novo assunto</h2>
    <form action="/cadastro-assunto" method="POST">
        @csrf
        <label for="">Disciplina</label>
        <input type="text" placeholder="Digite seu nome">
        <br /> <br />
        <label for="">Assunto</label>
        <input type="text" placeholder="Digite seu e-mail">
        <br /> <br />
        <label for="">Referência</label>
        <input type="text" placeholder="Digite seu e-mail">
        <br /> <br />
        <button>Enviar cadastro</button>
    </form>
</body>
</html>
