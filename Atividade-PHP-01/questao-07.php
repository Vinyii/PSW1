<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Poder da fome</h1>
    <div class="section">

    <form method="POST">
        <label for="text"><strong>Seu nome:></label><br>
      <input type="text" name="nomed"required><br> <br>
        Escolha uma opção:<br>
        <select name="lanche">
            <option value="1">1 - Tatula lanshe R$26,00</option>
            <option value="2">2 - Drag tugu R$69,90</option>
            <option value="3">3 - Papoca tudo R$48,70</option>
            <option value="4">4 - Batata bofe R$65,70</option>
            <option value="5">5 - Chugar burgue R$100</option>
            <option value="6">6 - Babu cardes R$7,99</option>
        </select><br> <br>
        <input type="submit" value="Fazer Pedido">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $lanche = $_POST["lanche"];
        $mensagem = "";
        switch ($lanche) {
            case "1": $mensagem = "tatula lanshe R$26,00"; break;
            case "2": $mensagem = "Drag tugu R$69,99"; break;
            case "3": $mensagem = "papoca tudo R$48,70"; break;
            case "4": $mensagem = "Batata bofe R$65,70"; break;
            case "5": $mensagem = "chugar burgue R$100"; break;
            case "6": $mensagem = "babu cardes R$7,99"; break;
            default: $mensagem = "Opção inválida"; break;
        }
        echo "<p>Olá, $nome! Bem-vindo à nossa lanchonete.</p>";
        echo "<p>Você escolheu: $mensagem</p>";
    }
    ?>


 

        
</body>
</html>