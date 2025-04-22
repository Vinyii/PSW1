<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div class="base">

<div class="formulario">
<h2>Digite 5 Números:</h2>

  <form method="post">

    <input type="number" name="numero" required>
    <?php

      $vetor = isset($_POST["vetor"]) ? $_POST["vetor"] : [];
      $novo = isset($_POST["numero"]) ? intval($_POST["numero"]) : null;

      if ($novo !== null && count($vetor) < 5) {
        $vetor[] = $novo;
      }

      foreach ($vetor as $v) {
        echo "<input type='hidden' name='vetor[]' value='$v'>";
      }
    ?>
    <input type="submit" name="registrar" value="adicionar a lísta">
  </form>
  <br> <br>
  <form method="post">
    <input type="submit" name="resetar" value="Resetar">
  </form>
</div>

<?php if (count($vetor) === 5): ?>
  <div class="resultado">
    <h3>Números:</h3>

    <?php foreach ($vetor as $num): ?>
      <span class="numero"><?= $num ?></span>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

</div>

<?php
if (isset($_POST["resetar"])) {
header("Location: " . $_SERVER["PHP_SELF"]);
exit();
}
?>
</body>
</html>