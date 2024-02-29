<?php
$server = "localhost";
$user = "root";
$senha = "1234";
$banco = "empresaCrud";
$conn = mysqli_connect($server, $user, $senha, $banco);

function mensagem($texto, $tipo)
{
    echo "<div class='alert alert-$tipo role='alert'>
          $texto
       </div>";
}