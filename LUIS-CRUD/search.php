<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Pesquisa</title>
  </head>
  <body>
    <?php 
    
     $pesquisa = $_POST['busca'] ?? '';

     include "conexao.php";

     $sql = "SELECT * FROM usuario WHERE nome LIKE '%$pesquisa%'";

     $dados = mysqli_query($link, $sql);
     ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>FAÇA UMA PESQUISA</h1>
              <nav class="navbar navbar-light bg-light">
              <form class="form-inline" action="search.php" method="POST">
                <input class="form-control mr-sm-2" type="search" placeholder="Busque um nome" aria-label="search" name="busca" autofocus>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
              </form>            
            </nav>
            <table class="table table-hover">
              <thead>
                 <tr>
                   <th scope="col">Nome</th>
                   <th scope="col">Email</th>
                   <th scope="col">Idade</th>
                   <th scope="col">Funções</th>
                 </tr>
             </thead>
              <tbody>

                    <?php 

                     while ($linha = mysqli_fetch_assoc($dados)) {
                        $id = $linha ['id'];
                        $nome = $linha['nome'];
                        $email = $linha['email'];
                        $idade = $linha['idade'];

                        echo "<tr>
                                <td>$nome</td>
                                <td>$email</td>
                                <td>$idade</td>
                                <td>
                                    <a href='cadastro_edit.php?id=$id'class='btn btn-primary btn-sm'>Editar</a>
                                    <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                                    onclick=" .'"' ."pegar_dados($id, '$nome')" .'"' .">Excluir</a>
                                </td>
                             </tr>";
                         }
                    
                    ?>
             </tbody>
          </table>
                 
                 <a href="index.php" class="btn btn-dark">Voltar para o início</a>                                                  
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="excluir_script.php" method="POST">
        <p>Confirme a exclusão de <b id="nome"> Nome da pessoa</b>?</p>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
          <input type="hidden" name="nome" id="nome" value="">
          <input type="hidden" name="id" id="id" value="">
          <input type="submit" class="btn btn-danger" value="Sim">
        </form>
      </div>
    </div>
  </div>
</div>



   <script type="text/javascript">
      function pegar_dados(id, nome) {
        document.getElementById('nome').innerHTML = nome;
        document.getElementById('id').value = id;
        document.getElementById('nome').value = nome;
      }


    </script>
 

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>