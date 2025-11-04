<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $select = $_POST['select'];

    if (!empty($n1) || !empty($n2)) {

        if($select=="somar"){
            $valor = $n1+$n2;

        } else if ($select=="subtrair"){
            $valor = $n1-$n2;

        } else if ($select=="multiplicar"){
            $valor = $n1*$n2;

        } else {
            $valor = $n1/$n2;

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

    <h2>Calculadora</h2>
    <p>Digite os valores.</p>

    <form method="post" action="">
        <div>
            <label>Valor 1:</label>
            <input type="number" id="n1" name="n1">
            <label>Valor 2:</label>
            <input type="number" id="n2" name="n2">
            <label>Selecione uma operação:</label>
            <select name="select">
                <option value="somar">Somar</option>
                <option value="subtrair">Subtrair</option>
                <option value="dividir">Dividir</option>
                <option value="multiplicar">Multiplicar</option>
            </select>
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($valor)) {
                echo "Resultado: ";
                echo number_format($valor, 2, ',', '.');
                echo "</label>";
            }
            ?>

        </div>
    </form>


</body>

</html>