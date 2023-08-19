<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link Css -->
    <!-- <link rel="stylesheet" href="../css/darkMode/styleHome.css " /> -->
    <link rel="stylesheet" href="../css/geral/styleHome.css" />
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="../img/logoPortal.png"
      type="image/x-icon"
    />
    <!-- Bootstrap Css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <!-- Icons Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"
    />
    <!-- Script -->
    <script src="./js/scriptHome.js" defer></script>
    <title>Campus Virtual</title>
  </head>
  <body>
    <!-- Header, Nav -->
    <div class="screen-one container-fluid">
      <header>
        <nav class="navbar navbar-expand-lg bg-transparent container-fluid">
          <div class="container-fluid mt-2 nav-bar">
            <a href="{{route('inicio')}}" class="navbar-brand"
              ><img class="img-logo" src="../img/logoPortal.png "
            /></a>
            <input type="checkbox" id="mudarCss" />
            <label for="mudarCss">
              <img src="../img/sun-svgrepo-com.svg" class="sun" alt="" />
              <img src="../img/moon-svgrepo-com.svg" class="moon" alt="" />
            </label>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse container-fluid"
              id="navbarNavAltMarkup"
            >
              <ul class="navbar-nav justify-content-end container-fluid gap-3">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link text-black fw-medium"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <p class="text-nav">
                      Ajuda <i class="bi bi-chevron-down"></i>
                    </p>
                  </a>
                  <ul class="dropdown-menu"></ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link text-black fw-medium"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <p class="text-nav">
                      Sobre nós <i class="bi bi-chevron-down"></i>
                    </p>
                  </a>
                  <ul class="dropdown-menu"></ul>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link text-black fw-medium"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <p class="text-nav">
                      Contacte-nos
                      <i class="bi bi-chevron-down"></i>
                    </p>
                  </a>
                  <ul class="dropdown-menu"></ul>
                </li>
                <a href="{{route('login')}}">
                  <button
                    id="button-login"
                    class="justify-content-end me-5 pe-3 ms-3 ps-3 rounded-2 fw-medium fs-6 button-entrar"
                  >
                    Entrar
                  </button></a
                >
              </ul>
            </div>
          </div>
        </nav>
      </header>
    </div>

    <!-- Conteudo, Texts, Carousel -->
    <div class="main">
      <section class="container-fluid section-main">
        <div class="content d-flex flex-column section-left">
          <h1 class="title-campus ms-2 mb-4 ms-2">Campus Virtual</h1>
          <h2 class="text-h2-section ms-2">
            Ajudando estudantes a <br />
            <span class="fs-1 fw-medium"> Gerenciar seus estudos</span>
          </h2>
          <p class="ms-2 paragraph-section">
            Bem vindo ao Campus Virtual, um site que irá lhe ajudar a gerenciar
            os estudos!
          </p>
          <div>
            <a href="{{route('login')}}">
              <button
                class="button-section ms-2 fw-bold fs-5 mt-2 ms-2 rounded-2"
              >
                Entrar
              </button>
            </a>
          </div>
        </div>
        <!-- Carousel -->

        <div
          id="carouselExampleInterval"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
              <img
                src="../img/image1.jpg"
                class="d-block w-100 img-carousel"
                alt="..."
              />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img
                src="../img/image2.jpg"
                class="d-block w-100 img-carousel"
                alt="..."
              />
            </div>
            <div class="carousel-item" data-bs-interval="4000">
              <img
                src="../img/image3.jpg"
                class="d-block w-100 img-carousel"
                alt="..."
              />
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleInterval"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </div>
    <!-- footer -->
    <div class="d-flex flex-row justify-content-center align-items-center">
      <footer
        class="bg-light border border-secondary d-flex flex-row justify-content-center align-items-center"
      >
        <div class="itens-footer">
          <span class="text-black">Alunos IFPE &copy; 2023</span>
          <a
            class="ms-2"
            target="_blank"
            href="https://github.com/CampusVirtualOrg"
            >GitHub</a
          >
          <a target="_blank" href="https://github.com/Q-Academico"
            ><i class="bi bi-github ms-2 fs-5 text-black"></i
          ></a>
        </div>
      </footer>
    </div>
    <script>
      const input = document.getElementById("mudarCss");
      const homeLink = document.querySelector(
        'link[href="../css/geral/styleHome.css"]'
      );
      const loginLink = document.querySelector(
        'link[href="../css/geral/login.css"]'
      );

      input.addEventListener("click", function () {
        if (input.checked) {
          homeLink.href = "../css/darkMode/styleHome.css";
          setMode("dark");
          setCookie("mode", "dark");
        } else {
          homeLink.href = "../css/geral/styleHome.css";
          setMode("light");
          setCookie("mode", "light");
        }

        updateLoginStyle();
      });

      window.addEventListener("load", function () {
        const mode = getCookie("mode");

        if (mode === "dark") {
          input.checked = true;
          homeLink.href = "../css/darkMode/styleHome.css";
        }

        updateLoginStyle();
      });

      function setMode(mode) {
        localStorage.setItem("mode", mode);
      }

      function getMode() {
        return localStorage.getItem("mode") || "light";
      }

      function setCookie(name, value) {
        document.cookie = name + "=" + value + "; path=/";
      }

      function getCookie(name) {
        const cookieValue = document.cookie.match(
          "(^|;)\\s*" + name + "\\s*=\\s*([^;]+)"
        );
        return cookieValue ? cookieValue.pop() : "";
      }

      function updateLoginStyle() {
        const loginStyle = document.getElementById("loginStyle");

        if (loginStyle) {
          const mode = getMode();

          if (mode === "dark") {
            loginStyle.href = "../css/darkMode/login.css";
          } else {
            loginStyle.href = "../css/geral/login.css";
          }
        }
      }
    </script>
    <!-- Script Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
