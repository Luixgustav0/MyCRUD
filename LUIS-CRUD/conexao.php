<?php 
 
$servidor = ('localhost');
$usr = ('root');
$psswr = ("");
$db = ('usuario');

if( $link = mysqli_connect($servidor,$usr,$psswr,$db) ) {
  //echo "CONECTADO!";
} else
    echo"ERRO!";

    function mensagem($texto, $tipo){
      echo"<div class= 'alert alert $tipo' role='alert'>
          $texto
          </div>";
    }




?>

