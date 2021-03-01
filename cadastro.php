<!doctype html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Formulário de Cadastro</title>
  </head>
  <body>
    <div class="container" style="width: 1080px">
      <div class="row">
        <div class="col" style="background-color: #F4F4F4F4; border-radius: 10px; margin: 30px; margin-top: 40px; box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2)">
          <form action="cadastro_script.php" method="POST">
            <h1>Cadastro</h1>
            <div class="mb-3">
              <label for="nome" class="form-label">Nome Completo*</label>
              <input type="text" class="form-control" placeholder="Nome Completo" name="nome" required>
            </div>
            <div class="mb-3">
              <label for="endereco" class="form-label">Endereço*</label>
              <input type="text" class="form-control" placeholder="Endereço" name="endereco" required>
            </div>
            <div class="mb-3">
              <label for="telefone" class="form-label">Telefone*</label>
              <input type="text" class="form-control" placeholder="Telefone" name="telefone" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email*</label>
              <input type="email" class="form-control" placeholder="Email" name="email" required>
              <div class="mb-3">
                <label for="data" class="form-label" style="margin-top: 15px">Data de Nascimento*</label>
                <input type="date" class="form-control" name="data_nascimento" required>
            </div>
            <div class="mb-3">
              <input type="submit" class="btn btn-success">
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