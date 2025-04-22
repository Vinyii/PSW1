<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aqui sera digitado todos os numeros de 1 a 100:</h1>
    
    <form method="post">
    <input type="submit" name="iniciar" value="iniciar escrita">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["iniciar"])) {
    echo "<div class='container'>";
    for ($i = 1; $i <= 100; $i++) {
      echo "<span class='numero'>$i, </span>";
    }
    echo "</div>";
  }
  ?>
</body>
</html>