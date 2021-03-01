<!doctype html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Alterar Dados</title>
  </head>
  <body>

    <?php
      include "conexao.php";
      $id = $_GET['id'] ?? '';
      $sql = "SELECT * FROM pessoas WHERE id_pessoa = $id";
      $dados = mysqli_query($connection, $sql);
      $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container" style="width: 1080px">
      <div class="row">
        <div class="col" style="background-color: #F4F4F4F4; border-radius: 10px; margin: 30px; margin-top: 40px; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2)">
          <form action="edit_script.php" method="POST">
            <h1>Autalziar Dados</h1>
            <div class="mb-3">
              <label for="nome" class="form-label">Nome Completo*</label>
              <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required value="<?php echo $linha['nome'];?>">
            </div>
            <div class="mb-3">
              <label for="endereco" class="form-label">Endereço*</label>
              <input type="text" class="form-control" placeholder="Endereço" name="endereco" required value="<?php echo $linha['endereco'];?>">
            </div>
            <div class="mb-3">
              <label for="telefone" class="form-label">Telefone*</label>
              <input type="text" class="form-control" placeholder="Telefone" name="telefone" required value="<?php echo $linha['telefone'];?>">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email*</label>
              <input type="email" class="form-control" placeholder="Email" name="email" required value="<?php echo $linha['email'];?>">
              <div class="mb-3">
                <label for="data" class="form-label" style="margin-top: 15px">Data de Nascimento*</label>
                <input type="date" class="form-control" name="data_nascimento" required value="<?php echo $linha['data_nascimento'];?>">
            </div>
            <div class="mb-3">
              <input type="submit" class="btn btn-success" value="Salvar Alterações">
              <input type="hidden" name="id" value="<?php echo $linha['id_pessoa'];?>">
              <a href="index.php" class="btn btn-info">Voltar ao Início</a>
           </div>     
          </form>
        </div>
      </div>
    </div>
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