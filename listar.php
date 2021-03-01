<!doctype html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Pesquisar</title>
  </head>
  <body>

      <?php
        include "funcoes.php";
        include "conexao.php";

        $pesquisa = $_POST['busca'] ?? '';

        $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

        $dados = mysqli_query($connection, $sql);
      ?>

    <div class="container" style="width: 1080px">
      <div class="row">
        <div class="col" style="background-color: #F4F4F4F4; border-radius: 10px; margin: 30px; margin-top: 40px; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2)">
          <h1 style="margin-bottom: 16px">Pesquisar</h1>
          <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <form class="d-flex" action="listar.php" method="POST" style="margin-left: -25px; margin-bottom: 10px; margin-top: 10px">
                <input class="form-control me-2" type="search" placeholder="Digite o Nome" aria-label="Search" name="busca" autofocus>
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
              </form>
            </div>
          </nav>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Funções</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  while($linha = mysqli_fetch_assoc($dados)){
                    $id_pessoa = $linha['id_pessoa'];
                    $nome = $linha['nome'];
                    $endereco = $linha['endereco'];
                    $telefone = $linha['telefone'];
                    $email = $linha['email'];
                    $data_nascimento = $linha['data_nascimento'];
                    $data_nascimento = inverte_data($data_nascimento);

                    echo "<tr>
                          <th scope='row'>$nome</th>
                          <td>$endereco</td>
                          <td>$telefone</td>
                          <td>$email</td>
                          <td>$data_nascimento</td>
                          <td width=150px>
                            <a href='cadastro_edit.php?id=$id_pessoa' class='btn btn-success btn-sm'>Editar</a>
                            <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirmar' onclick=" .'"' ."get_data($id_pessoa, '$nome')" .'"' .">Excluir</a>
                          </td>
                        </tr>";
                  }
                ?>
            </tbody>
          </table>

          <a href="index.php" class="btn btn-info" style="margin-bottom: 16px; margin-top: 16px">Voltar ao Início</a>
        </div>
      </div>
    </div>

    <div class="modal fade" id="confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmar Exculsão</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="excluir.php" method="POST">
              <p>Deseja realmente excluir <b id="nome_pessoa">Nome da pessoa</b>?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Não</button>
                <input type="hidden" name="id" id="id_pessoa" value="">
                <input type="hidden" name="nome" id="nome_pessoa_env" value="">
                <input type="submit" class="btn btn-danger" value="Sim">
            </form>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      function get_data(id, nome){
        document.getElementById('nome_pessoa').innerHTML = nome;
        document.getElementById('id_pessoa').value = id;
        document.getElementById('nome_pessoa_env').value = nome;
      }
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>