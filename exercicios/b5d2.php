<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

$pares = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $campos = ['Maçã', 'Laranja', 'Melancia', 'Mamão', 'Uva'];


    foreach ($campos as $campo) {
        if (isset($_POST[$campo])) {
            $frutas[] = $campo;
            $soma += 1;
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

    <h2>Array e checkbox</h2>
    <p>Selecione as frutas desejadas.</p>

    <form method="post" action="">
        <div>
            <label>Maçã</label>
            <input type="checkbox" id="c1" name="Maçã">
            <label>Laranja</label>
            <input type="checkbox" id="c2" name="Laranja">
            <label>Melancia</label>
            <input type="checkbox" id="c3" name="Melancia">
            <label>Mamão</label>
            <input type="checkbox" id="c4" name="Mamão">
            <label>Uva</label>
            <input type="checkbox" id="c5" name="Uva">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($frutas)) {
                echo "Frutas selecionadas: " . implode(", ", $frutas) . "<br>";
            }
            ?>

        </div>
    </form>


</body>

</html>