<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="balada">

<form method="post">
      <label for="idade"><strong>Digite sua idade?</strong></label>
      <input type="number" name="idade" id="idade" required min="0" max="140">
      <br> <br>
      <input type="submit" value="Verificar">
    </form>

    <?php
    $mensagem = "";
    $idade = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idade"])) {
      $idade = intval($_POST["idade"]);

      if ($idade >= 18) {
    
        $mensagem = "Voce é maior de 18! Voce esta no inferno!";
      } elseif ($idade < 18) {
        
        $faltam = 18 - $idade;
        $mensagem = "Voce é menor de idade volte daqui $faltam anos, e tenha vergonha na cara.";
      }
    }
    ?>

    <?php
    if (!empty($mensagem)) {
      echo "<div class='resultado'>$mensagem</div>";
    }
    ?>
  </div>
</body>
</html>