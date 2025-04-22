<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $mensagem = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['velocidade'])) {
      $vel = floatval($_POST['velocidade']);

      if ($vel > 110) {

        $mensagem = "Você está excedendo o limite! que corre por que? vai pari!";
      
    } elseif ($vel <= 110) {
        $mensagem = "Parabéns! Você está dentro do limite, não vai ser multado hoje";
      
    } 
    }
  ?>

  <div class="popo">

    <div class="formulario">
      <h2>Qual a velocidade do carro:</h2>
      <form method="post">
        <input type="number" name="velocidade" placeholder="Velocidade" required min="0" max="320">
        <br> <br>
        <input type="submit" value="Relação de velocidade">
      </form>

      <?php if (!empty($mensagem)) {
        echo "<div class='mensagem'>$mensagem</div>";
      } ?>
    </div>
  </div>
</body>
</html>