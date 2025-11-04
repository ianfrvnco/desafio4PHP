<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $c1 = $_POST['c1'];
    $d1 = $_POST['d1'];

    if (!empty($c1) || !empty($d1)) {
        $media = $c1 / $d1;
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ex. 1: Média Aritmética</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .erro {
            color: red;
            background-color: #ffe8e8;
            border: 1px solid red;
            padding: 10px;
            margin-bottom: 15px;
        }

        .resultado {
            color: blue;
            background-color: #e8f0ff;
            border: 1px solid blue;
            padding: 10px;
            margin-bottom: 15px;
        }

        div {
            margin-bottom: 10px;
        }

        label {
            display: flex;
            justify-content: start;
            margin: 8px 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <h2>Calculadora de área e perimetro</h2>
    <p>Digite o base e a altura do retângulo.</p>

    <form method="post" action="">
        <div>
            <label>Distância percorrida (em metros):</label>
            <input type="text" id="d1" name="d1">
            <label>Combustível gasto (em litros):</label>
            <input type="text" id="c1" name="c1">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($media)) {
                echo "Consumo médio: ";
                echo number_format($media, 2, ',', '.');
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>