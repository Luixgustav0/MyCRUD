<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>My CRUD</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <?php

            include "conexao.php";
             
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $idade = $_POST['idade'];
            $query = 'SELECT id FROM usuario WHERE nome = '.$nome.'";
            $sql = mysqli_query($link, $query);
            if (mysqli_num_rows($sql) == 0) {
            //executa insert
            } else {
            //aparece mensagem na tela
              echo "Usuario já cadastrado!";   
            }   
            
            $sql = "INSERT INTO `usuario`(`nome`,`email`, `idade`) 
            VALUES ('$nome','$email','$idade')";
            if ( mysqli_query($link, $sql)) {
                echo"Cadastrado com Sucesso !"; 
            } else
               echo "Falha ao Cadastrar !" ;
             ?>  
        </div>
    </div>
 

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
