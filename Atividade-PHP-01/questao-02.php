<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="codigo">
    <h1>Converta a temperatura Fahrenheit em Celsius aqui:</h1>
        
        <form method="POST">
            <div class="form-group">
                <label for="t">Digite a temperatura em Fahrenheit:</label>
                <input name="t" id="t" type="number" min="0" max="100" required>
            </div>
            <br>
        <button type="submit">Comverte temperatura</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            
            
            if(isset($_POST['t'])) {
                $temperatura = (float)$_POST['t'];
                

                $f = (($temperatura*9)/5)+32  ;
            }
            
                echo "<h2>Temperatura em Fahrenheit: $f </h2>";
                
        }
        ?>
    </div>
</body>
</html>