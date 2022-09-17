<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $altura;
    $peso;
    $imc = 0;
    $info = "Sem valor";

    if (isset($_GET['altura']) && !empty($_GET['altura']))
        $altura = $_GET['altura'];
    else
        $altura = 0;

    if (isset($_GET['peso']) && !empty($_GET['peso']))
        $peso = $_GET['peso'];
    else
        $peso = 0;

    if (!empty($peso) && !empty($altura)) {
        $imc = (float)$peso / pow((float)$altura, 2);

        if ($imc < 18.5)
            $info = "Abaixo do peso normal";
        else if ($imc >= 18.5 && $imc < 24.9)
            $info = "Peso normal";
        else if ($imc >= 25 && $imc < 29.9)
            $info = "Excesso de peso";
        else if ($imc >= 30 && $imc < 34.9)
            $info = "Obesidade classe I";
        else if ($imc >= 35 && $imc < 39.9)
            $info = "Obesidade classe II";
        else
            $info = "Obesidade classe III";
    }
    ?>

    <p>IMC: <?= $imc ?></p>
    <p>Classificação: <?= $info ?></p>

    <form method="GET">
        <label id="altura">Altura</label>
        <input name="altura" id="altura" />
        <label id="peso">Peso</label>
        <input name="peso" id="peso" />
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>