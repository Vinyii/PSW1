<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="principal">


<div class="formulario">
  <h2>Digite 5 Nomes:</h2>
  <form method="post">
    <input type="text" name="nome" placeholder="Digite um nome" required>

    <?php
      $nomes = isset($_POST["nomes"]) ? $_POST["nomes"] : [];
      $novo = isset($_POST["nome"]) ? trim($_POST["nome"]) : null;

      if ($novo !== null && $novo !== "" && count($nomes) < 5) {
        $nomes[] = ($novo);
      }

      foreach ($nomes as $n) {
        echo "<input type='hidden' name='nomes[]' value=\"$n\">";
      }
    ?>

    <input type="submit" name="registrar" value="Adicionar">
  </form>

  <form method="post">
    <input type="submit" name="resetar" value="Resetar">
  </form>
</div>

<?php if (count($nomes) === 5): ?>
  <div class="resultado">
    <h3>Nomes:</h3>

    <?php foreach ($nomes as $nome): ?>
      <span class="nome"><?= $nome ?></span>
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