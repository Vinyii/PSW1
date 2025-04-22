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
            <form method="post">
            <label for="idade">Digite as idades (digite 0 para parar):</label>
            <input type="number" name="idade" id="idade" required min="0">

            <?php
                $idades = isset($_POST["idades"]) ? $_POST["idades"] : [];
                $nova_idade = isset($_POST["idade"]) ? intval($_POST["idade"]) : null;

                
                if ($nova_idade !== null && $nova_idade >= 1) {
                    $idades[] = $nova_idade;
                }


                foreach ($idades as $valor) {
                    echo "<input type='hidden' name='idades[]' value='$valor'>";
                }
            ?>

            <input type="submit" name="registrar" value="Registrar"><br><br>
            </form>

            <form method="post">
            <input type="submit" name="resetar" value="Resultados" class="reset">
            </form>
        </div>

        <?php
            $mostrar_resultado = ($nova_idade !== null && $nova_idade < 1);

            if ($mostrar_resultado && count($idades) > 0):
            $menores = 0;
            $idosos = 0;

            foreach ($idades as $idade) {
                if ($idade < 18) $menores++;
                if ($idade > 65) $idosos++;
            }
        ?>

        <div class="resultado">
                <p>Menores de 18: <?= $menores ?></p>
                <p>Maiores de 65: <?= $idosos ?></p>
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