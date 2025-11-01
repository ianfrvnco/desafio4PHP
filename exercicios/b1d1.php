<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $v1 = $_POST['v1'];

    if (!empty($v1)) {
        $conversao = $v1 / 5.38;
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
            justify-content: center;
            flex-direction: row;
            align-items: center;
            width: 121px;
        }
    </style>
</head>

<body>

    <h2>Conversor de Moedas</h2>
    <p>Digite o valor a ser convertido.</p>

    <form method="post" action="">
        <div>
            <label>Valor em Reais:</label>
            <input type="text" id="v1" name="v1">
        </div>

        <div>
            <input type="submit" value="Converter para dólar">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($conversao)) {
                echo "Resultado: " . number_format($conversao, 2);
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>