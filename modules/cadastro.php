<html>
<head>
  <meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
  <title>Ptolomeu</title>
</head>
<body>
  <?php
  //CONEXÃO BANCO
  $dsn = 'mysql:host=localhost;port=3307;dbname=formulario';
  $usuario = 'root';
  $senha = 'usbw';

  // Conectando
  try {
    $pdo = new PDO($dsn, $usuario, $senha);
  } catch (PDOException $e) {
    echo $e->getMessage();
    exit(1);
  }

  $nome = $_POST ["nome"];
  $email = $_POST ["email"];
  $unidade = $_POST["unidade"];
  $news = $_POST["news"];

  // Preparando statement
  $stmt = $pdo->prepare("INSERT INTO cadastro(nome, email, unidade, news) VALUES (:nome, :email, :unidade, :news)");
  $stmt->bindParam( ':nome', $nome );
  $stmt->bindParam( ':email', $email );
  $stmt->bindParam( ':unidade', $unidade );
  $stmt->bindParam( ':news', $news );

  //http://rberaldo.com.br/pdo-mysql/

  // Executando statement
  $stmt->execute();

  echo "Seu cadastro foi realizado com sucesso!"
  ?>
</body>
</html>
