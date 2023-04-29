<?php

require_once 'conexao.php';

echo"<p>Todos os registros de alunos</p>";

$sql = "SELECT * FROM alunos";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<h2>".$row['nome']."</h2>";

    }
} 

echo "Registros dos cursos";

$sql1 = "SELECT * FROM cursos";
$result1 = $con->query($sql1);

if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
        echo "<h2>".$row['nome']."</h2>"." ".$row['preco']."R$";
    }
} 

$con->close();

?> 
  <!DOCTYPE html>
  <html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./botao.css">
    <title>Document</title>
  </head>
  <body>
  <p><a href='../inserircursos.php'><button>Novo curso</button></a></p>
 <p><a href='deslog.php'><button>Deslog</button></a></p>
  </body>
  </html>






