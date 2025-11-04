<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $a1 = $_POST['a1'];
    $b1 = $_POST['b1'];

    if (!empty($a1 || !empty($b1))) {
        $area = $a1 * $b1;
        $perimetro = (2 * ($b1 + $a1));
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
            <label>Valor da base (em metros):</label>
            <input type="text" id="b1" name="b1">
            <label>Valor da altura (em metros):</label>
            <input type="text" id="a1" name="a1">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($area) && !empty($perimetro)) {
                echo "Resultado área: $area<br>";
                echo "Resultado perimetro: $perimetro";
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>