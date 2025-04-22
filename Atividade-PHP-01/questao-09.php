<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Aqui sera digitado todos os numeros pares de 1 a 100:</h1>

<div class="bloco-geral">
  <div class="forma">
    <form method="post">
      <input type="submit" name="forma1" value="forma 1: incremento de 2 em 2">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["forma1"])): ?>
      <div class="container">
        <?php
          for ($i = 2; $i <= 100; $i += 2) {
            echo "<span class='numero'>$i, </span>";
          }
        ?>
      </div>
    <?php endif; ?>
  </div>

  

</body>
</html>