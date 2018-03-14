<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
  <title>Ptolomeu</title>
</head>
<body>
  <?php
  //CONEXÃO BANCO
  $host='localhost:3306';
  $bd = 'formulario';
  $user = 'root';
  $senha = '';

  $nome = $_POST ["nome"];
  $email = $_POST ["email"];
  $unidade = $_POST["unidade"];
  $news = $_POST["news"];

  $conexao = mysql_connect($host, $user, $senha);
  if(!$conexao){
    die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
  }
  $banco = mysql_select_db($bd, $conexao);
  if(!$banco){
    die("Erro de conexão com o banco de dados, o seguinte erro ocorreu ->".mysql_error());
  }

  $query = "INSERT INTO `cadastro` (`nome`, `email`, `unidade`, `news`) VALUES ('$nome', '$email', '$unidade', '$news')";

  mysql_query($query, $conexao);
  echo "Seu cadastro foi realizado com sucesso!"
  ?>
</body>
</html>
