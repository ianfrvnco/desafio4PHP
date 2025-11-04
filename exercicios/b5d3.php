<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

$pares = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = [
    $_POST['n1'],
    $_POST['n2'],
    $_POST['n3'],
    $_POST['n4'],
    $_POST['n5']
    ];

    //var_dump(count($name));

    if (!empty($numeros[0]) && !empty($numeros[1]) && !empty($numeros[2]) && !empty($numeros[3]) && !empty($numeros[4])) {
        $maior = 0;

        for($i = 1; $i<count($numeros); $i++){
            if($maior< $numeros[$i]){
                $maior = $numeros[$i];
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

    <h2>Retorna maior valor.</h2>
    <p>Digite 5 números.</p>

    <form method="post" action="">
        <div>
            <label>Numero 1:</label>
            <input type="number" id="n1" name="n1">
            <label>Numero 2:</label>
            <input type="number" id="n2" name="n2">
            <label>Numero 3:</label>
            <input type="number" id="n3" name="n3">
            <label>Numero 4:</label>
            <input type="number" id="n4" name="n4">
            <label>Numero 5:</label>
            <input type="number" id="n5" name="n5">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($maior)) {
                echo "Maior: ";
                echo "$maior";
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>