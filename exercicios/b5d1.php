<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

$pares = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name[0] = $_POST['n1'];
    $name[1] = $_POST['n2'];
    $name[2] = $_POST['n3'];
    $name[3] = $_POST['n4'];
    $name[4] = $_POST['n5'];

    //var_dump(count($name));

    if (!empty($name[0]) && !empty($name[1]) && !empty($name[2]) && !empty($name[3]) && !empty($name[4])) {
        $soma = 0;

        for ($i = 0; $i < count($name); $i++) {
            $soma+=$name[$i];
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

    <h2>Média de Vários Valores</h2>
    <p>Digite 5 valores.</p>

    <form method="post" action="">
        <div>
            <label>Nota 1:</label>
            <input type="number" id="n1" name="n1">
            <label>Nota 2:</label>
            <input type="number" id="n2" name="n2">
            <label>Nota 3:</label>
            <input type="number" id="n3" name="n3">
            <label>Nota 4:</label>
            <input type="number" id="n4" name="n4">
            <label>Nota 5:</label>
            <input type="number" id="n5" name="n5">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($soma)) {
                echo "Soma: ";
                echo "$soma";
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>