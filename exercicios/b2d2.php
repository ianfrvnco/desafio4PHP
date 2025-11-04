<?php
// --- BLOCO DE PROCESSAMENTO (PHP) ---

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $i1 = $_POST['i1'];

    if (!empty($i1)) {
        $atual = new DateTime();
        $idade = $atual->format('Y');
        $idade -= $i1;
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

    <h2>Calcular idade</h2>
    <p>Digite o ano de nascimento.</p>

    <form method="post" action="">
        <div>
            <label>Ano de nascimento:</label>
            <input type="number" id="i1" name="i1">
        </div>

        <div>
            <input type="submit" value="Calcular">
            <br>
            <br>
            <?php
            echo "<label>";
            if (!empty($idade)) {

                if($idade>=18 && $idade<=70){
                    echo "Voto obrigatório.";
                } else if ($idade>=16 && $idade<=18) {
                    echo "Voto facultativo.";
                } else {
                    echo "Não pode votar ainda.";
                }
            }
            ?>

        </div>
    </form>


</body>

</html>