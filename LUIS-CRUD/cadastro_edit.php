<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


    <title>Alteração de Cadastro</title>
  </head>
  <body>
    <?php 
       include "conexao.php";
      $id = $_GET['id'] ?? '';
      $sql = "SELECT * FROM usuario WHERE id = $id";

      $dados = mysqli_query($link , $sql);
      $linha = mysqli_fetch_assoc($dados);

    
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>EDITAR CADASTRO</h1>
                <form action ="edit_script.php" method="POST">
                    <div class="form-group">                 
                        <label for="nome">Insira Seu Nome</label>
                        <input type="txt" class="form-control" placeholder="Seu Nome" name='nome' required value="<?php echo $linha['nome']; ?>">    
                    </div>
                    <div class ="form-group">
                     <label for="email">Insira Seu Email</label>
                     <input type="txt" class="form-control" placeholder="Seu Email" name='email'  required value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class ="form-group">
                     <label for="idade">Insira Sua Idade</label>
                     <input type="txt" class="form-control" placeholder="Sua Idade" name='idade'  required value="<?php echo $linha['idade']; ?>">
                    </div>
                    <div class ="form-group">
                     <input type="submit" class="btn btn-success" value="Salvar Alterações">
                     <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                    </div>
                 </form>
                 <a href="index.php" class="btn btn-dark">Voltar para o início</a>                                                  
            </div>
        </div>
    </div>
 

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>