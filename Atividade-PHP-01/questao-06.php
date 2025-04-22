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

  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['temperatura'])) {
    $temp = floatval($_POST['temperatura']);

    if ($temp >= 38) {
    
      $mensagem = "Voce esta começando a ter febre recomendo um remedim.";
    } elseif ($temp >= 36 && $temp <= 36.7) {
    
      $mensagem = "Sua temperatura esta normal.";
    }
}
?>
    <div class="formulario">
      <h2>Digite sua temperatura (°C)</h2>
      <form method="post">
        <input type="number" name="temperatura" step="0.1" placeholder="Ex: 36.5" required>
        <br> <br>
        <input type="submit" value="Bora ver se voce vai morrer">
      </form>

      <?php if (!empty($mensagem)) {
        echo "<div class='mensagem'>$mensagem</div>";
      } ?>
    </div>
</body>
</html>