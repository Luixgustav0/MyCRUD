<?php 
 
$servidor = ('localhost');
$usr = ('root');
$psswr = ("");
$db = ('usuario');

if( $cnc = mysqli_connect($servidor,$usr,$psswr,$db) ) {
  //echo "CONECTADO!";
} else
    echo"ERRO!";

    
?>

