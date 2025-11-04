<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

$pares = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if (!empty($n1) && !empty($n2)) {
        $inicio = min($n1, $n2);
        $fim = max($n1, $n2);

        for ($i = $inicio; $i <= $fim; $i++) {
            if ($i % 2 == 0) {
                array_push($pares, $i);
            }
        }
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

    <h2>Busca por pares</h2>
    <p>Digite um intervalo que deseja encontrar os pares.</p>

    <form method="post" action="">
        <div>
            <label>Valor 1:</label>
            <input type="number" id="n1" name="n1">
            <label>Valor 2:</label>
            <input type="number" id="n2" name="n2">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($pares)) {
                echo "Pares: " . implode(", ", $pares);
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>