  <?php
  //CONEXÃO BANCO
  $con = new PDO("mysql:host=localhost:3307;dbname=formulario", "root", "usbw");

  $nome = $_POST ["nome"];
  $email = $_POST ["email"];
  $unidade = $_POST["unidade"];
  $news = $_POST["news"];

  $stmt = $con->prepare("INSERT INTO cadastro(nome, email, unidade, news) VALUES(?, ?, ?, ?)");
  $stmt->bindParam(1,$nome);
  $stmt->bindParam(2,$email);
  $stmt->bindParam(3,$unidade);
  $stmt->bindParam(4,$news);
  $stmt->execute();

  ?>
