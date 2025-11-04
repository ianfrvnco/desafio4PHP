<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $d1 = $_POST['d1'];
    $dia = "";

    if (!empty($d1)) {
        switch ($d1) {
            case 1:
                $dia = "Domingo.";
                break;
            case 2:
                $dia = "Segunda-feira.";
                break;
            case 3:
                $dia = "Terça-feira.";
                break;
            case 4:
                $dia = "Quarta-feira.";
                break;
            case 5:
                $dia = "Quinta-feira.";
                break;
            case 6:
                $dia = "Sexta-feira.";
                break;
            case 7:
                $dia = "Sábado.";
                break;
            default:
                $dia = "Dia inválido.";
                break;
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

    <h2>Dia da semana</h2>
    <p>Digite um número de 1 a 7.</p>

    <form method="post" action="">
        <div>
            <label>Dia 1:</label>
            <input type="number" id="d1" name="d1">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($dia)) {
                echo "Hoje é: ";
                echo $dia;
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>