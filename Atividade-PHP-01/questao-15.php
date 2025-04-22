<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcule a area de um retangulo: </h1>

<form method="post">
    <div>
      <label for="largura"><strong>Largura:</strong></label><br>
      <input type="number" name="largura" id="largura" required min="0">
    </div>
    <div>
      <label for="altura"><strong>Altura:</strong></label><br>
      <input type="number" name="altura" id="altura" required min="0">
    </div> <br> 
    <input type="submit" value="Calcular">
  </form>

  <?php

  function calculo($largura, $altura) {
      return $largura * $altura;
  }


  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $largura = floatval($_POST["largura"]);
    $altura = floatval($_POST["altura"]);
    $area = calculo($largura, $altura);

    echo "<div class='resultado'><strong>Área:</strong> $area</div>";
  }
  ?>
</body>
</html>