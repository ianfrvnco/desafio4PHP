<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $n1 = $_POST['n1'];

    if (!empty($n1) || $n1 == 0) {
        $resto = $n1%2;
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

    <h2>Par ou Ímpar</h2>
    <p>Digite um número inteiro.</p>

    <form method="post" action="">
        <div>
            <label>Número:</label>
            <input type="number" id="n1" name="n1">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if ($resto==0) {
                echo "O número é par.";
            } else {
                echo "O número é ímpar";
            }
            ?>

        </div>
    </form>


</body>

</html>