<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('adm/styles/requerimentos.css') }}">
    <!-- link favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logoPortal.png') }}" type="image/x-icon" />
    <!-- icons bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <title>Requerimentos</title>
</head>

<body>
         <aside>
            <a href="#" class="header-aside">
                <h2 id="h2-aside">Painel administrativo</h2>
                <h3 id="h3-aside">Campus Virtual</h3>
            </a>
            <div class="anchors">
                <a id="a-aside" href="#"><i class="bi bi-people-fill"></i>Alunos</a>

                <a id="a-aside" href="#"><i class="bi bi-file-earmark-text-fill"></i>Requerimentos</a>

                <a id="a-aside" href="#" id="card-center"><i class="bi bi-easel2-fill"></i>Turmas</a>

                <a id="a-aside" href="#"><i class="bi bi-book-half"></i>Disciplinas</a>

                <a id="a-aside" href="#"><i class="bi bi-c-square-fill"></i>Cursos</a>
            </div>

            <a href="#" id="logoAside">
                <img src="{{ asset('img/logoPortal.png') }}" alt="Campus Virtual" id="logoAsideImg">
            </a>
        </aside>
        <section>
            <div class="header-section">
                <h1>Requerimentos</h1>
                <div class="form-procurar">
                    <input type="text" class="input" name="txt" id="procurar" placeholder="Procure por nome ou email" />
                    <button onclick="procurar()" type="submit" id="form-button"><i class="bi bi-search"></i></button>
                </div>

                <div class="filters">
                    <span>Ordenar por:</span>
                    <div class="buttons">
                        <button style="cursor:pointer;" onclick="location.href='requerimentos.php?ordem=data'">Data</button>
                        <button onclick="location.href='requerimentos.php?ordem=tipo'">Tipo</button>
                    </div>
                </div>
            </div>
            <div class="main">
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
                            <td>{{ $requerimento['tipo_requerimento'] }}</td>
                            <td>{{ $requerimento['observacoes'] }}</td>
                            <td>
                                <select id='status-select-'>
                                    <option value="pendente">Pendente</option>
                                    <option value="aprovado">Aprovado</option>
                                    <option value="reprovado">Reprovado</option>
                                </select>
                            </td>
                            <td>{{ $requerimento['data_requerimento'] }}</td>
                            <td>
                                <a href="/editar/{{ $requerimento['id'] }}">Atualizar</button>
                            </td>
                            <td>
                                <button onclick="location.href='#'">
                                    Excluir
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </section>
        <script>
            var inputSearch = document.getElementById('procurar');

            inputSearch.addEventListener('keydown', event => {
                if (event.key === "Enter") {
                    procurar();
                }
            });

            function procurar() {
                window.location = `requerimentos.php?search=${inputSearch.value}`;
            }

            function updateStatus(requerimentoId) {
                var selectElement = document.getElementById('status-select-' + requerimentoId);
                var novoStatus = selectElement.value;
                var mensagem = `Seu requerimento foi atualizado para `;
                var xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {

                        console.log("Status atualizado com sucesso!");

                        selectElement.className = novoStatus;

                    };
                };

                xhttp.open("POST", "../../controllers/atualizar_status.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("requerimento_id=" + requerimentoId + "&status=" + novoStatus + "&mensagem=" + mensagem);
            };

        </script>
    </body>
</html>
