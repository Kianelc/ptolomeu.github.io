  <?php
  //CONEXÃO BANCO

  try{
  $con = new PDO("mysql:host=localhost:3306;dbname=formulario", "root", "");

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
}catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


  ?>
