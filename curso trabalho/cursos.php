<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./frufru.css">
   <title>Document</title>
</head>
<body>
   
</body>
</html>
<div>Selecione o curso que você quer fazer!</div>
<?php

echo "<form method='POST' action='php_action/curaluno.php' id='formlogin' name='formlogin'>";

require_once 'php_action/conexao.php';

$sql = "SELECT * FROM cursos";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
   echo "<p><input type='radio' name='nomecurso' value='" . $row['id_cursos'] . "'>" . $row['nome'] ."<br>Preço ".$row['preco']. "<br>"."Vagas:".$row['vaga']."<br>";

}

echo "<input type='submit' value='Enviar'>";

?>
</form>
<a href='.//site.php'><button>Voltar</button></a>

