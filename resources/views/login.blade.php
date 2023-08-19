<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/logoPortal.png" type="image/x-icon" />
  <!-- Link css -->
  <link id="loginStyle" rel="stylesheet" href="../css/geral/login.css" />
  <!-- <link rel="stylesheet" href="../css/darkMode/login.css" /> -->
  <!-- icons bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>
  <div class="container">
    <div class="container-left">
      <div class="img">
        <a href="{{route('inicio')}}">
          <img class="img-logo" id="logoNoJS" src="{{ asset('img/logoPortal.png') }}" alt="logo" />
        </a>
      </div>
      <div class="texts">
        <h2>Bem vindo de volta</h2>
        <span>Entre para acessar suas informações!</span>
      </div>
      <div class="first-access">
        <a href="{{route('registro')}}" class="first-access-text-class" id="first-access-text">Deseja realizar o primeiro acesso?</a>
      </div>
    </div>
    <div class="container-right">
      <div class="title">
        <h1>Login</h1>
        <?php if (isset($_GET['err'])) : ?>
          <div class="error">
            <span><i class="bi bi-exclamation-octagon-fill"></i><?= $_GET['err'] ?></span>
          </div>
        <?php endif ?>
      </div>
      <div class="forms">
        <form id="form" action="{{route('logar')}}" method="post">
            @csrf
          <div class="login-conjunt">
            <label for="login">Email</label>
            <input type="email" id="login" name="email" placeholder="Digite seu e-mail" required />
          </div>
          <div class="password-conjunt">
            <div class="password-subconjunt">
              <div class="password-conjunt">
                <div class="password-subconjunt">
                  <label for="password">Senha</label>
                  <input type="password" id="password" name="password" placeholder="Digite sua senha" required />
                </div><div class="password-subconjunt">
                    <label for="type">Tipo de usuário</label>
                    <select id="type" name="type">
                        <option disabled selected>Informe o tipo de usuário</option>
                        <option value="aluno">Aluno</option>
                        <option value="professor">Professor</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>
                <div class="esqueceu-password">
                  <a href="" id="esq-password">Esqueceu a senha?</a>
                </div>
              </div>
            </div>
            <input type="submit" id="form" class="entrance" value="Entrar">
        </form>
      </div>

    </div>
  </div>
  <script src="../js/scriptLogin.js"></script>
</body>

</html>
