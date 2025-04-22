<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<div class="calculo">


    <h1>Digite um numero que eu acertarei se ele é par ou impar:</h1>

    <form method="post">

      <input type="number" name="numero" placeholder="Digite um número inteiro" required>
      <br> <br>
      <input type="submit" value="Pensar">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numero"])) {

        $valor = intval($_POST["numero"]);

      if ($valor % 2 == 0) {
        $resposta = "O valor $valor é <strong>PAR</strong>.";
      } else {
        $resposta = "O valor $valor é <strong>ÍMPAR</strong>.";
      }

      echo "<div class='resultado'>$resposta</div>";
    }
    ?>
  </div>

</body>
</html>