<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $m1 = $_POST['m1'];
    $mes = "";

    if (!empty($m1)) {
        switch ($m1) {
            case 1:
                $mes = "Janeiro.";
                break;
            case 2:
                $mes = "Fevereiro.";
                break;
            case 3:
                $mes = "Março.";
                break;
            case 4:
                $mes = "Abril.";
                break;
            case 5:
                $mes = "Maio.";
                break;
            case 6:
                $mes = "Junho.";
                break;
            case 7:
                $mes = "Julho.";
                break;
            case 8:
                $mes = "Agosto.";
                break;
            case 9:
                $mes = "Setembro.";
                break;
            case 10:
                $mes = "Outubro.";
                break;
            case 11:
                $mes = "Novembro.";
                break;
            case 12:
                $mes = "Dezembro.";
                break;
            default:
                $mes = "Mês inválido.";
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

    <h2>Mês por extenso</h2>
    <p>Digite um número de 1 a 12.</p>

    <form method="post" action="">
        <div>
            <label>Mês (1-12):</label>
            <input type="number" id="m1" name="m1">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($mes)) {
                echo "O mês é: ";
                echo $mes;
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>