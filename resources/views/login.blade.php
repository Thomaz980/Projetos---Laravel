<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    {{-- Form Login --}}
    <form action="{{ route('login') }}" method="post">
        @csrf
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
