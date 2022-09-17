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
    // ----------------------- Parte 1 HTML -----------------------

    // $idade = 19;
    // $altura = 1.73;
    // $nome = '';
    // $email = '';

    // isset() // Para verificar se está setado
    // empty() // Verificar se variável está vazia

    // if (isset($_GET['nome']) && !empty($_GET['nome']))
    //     $nome = $_GET['nome'];
    // else
    //     $nome = 'Nome Aleatório';

    // if (isset($_POST['email']) && !empty($_POST['email']))
    //     $email = $_POST['email'];
    // else
    //     $email = 'exemplo@mail.com';

    // ----------------------- Parte 2 HTML -----------------------

    $resultado = 0;
    $op;

    if (isset($_GET["operacao"]))
        $op = $_GET['operacao'];

    switch ($op) {
        case 1:
            $resultado = $_GET['numero'] * 2;
            break;

        case 2:
            $resultado = pow($_GET['numero'], 2);
            break;

        case 3:
            $resultado = sqrt($_GET['numero']);
            break;

        default:
            $resultado = 'Não foi escolhido um tipo';
    }
    ?>

    <!-- <div id="Parte_1"> -->
    <!-- <h1>Olá <?= $nome ?></h1>
    <p>Minha idade é <?= $idade ?> e minha altura <?= $altura ?></p>
    <p>Seu email é <?= $email ?></p>

    <form method="GET">
        <label id="nome">Nome</label>
        <input name="nome" id="nome" />
        <input type="submit" value="Enviar" />
    </form>

    <form method="POST">
        <label id="email">Email</label>
        <input name="email" id="email" />
        <input type="submit" value="Enviar" />
    </form> -->
    <!-- </div> -->

    <!-- <div id="Parte_2"> -->
    <form method="GET">
        <label id="numero">Número</label>
        <input name="numero" id="numero" type="number" />
        <input type="radio" value="1" id="dobro" name="operacao" />
        <label id="dobro">Dobro</label>
        <input type="radio" value="2" id="potencia" name="operacao" />
        <label id="potencia">Potência</label>
        <input type="radio" value="3" id="raiz" name="operacao" />
        <label id="raiz">Raiz</label>
        <input type="submit" value="Enviar" />
    </form>

    <p>Resultado <?= $resultado ?></p>
    <!-- </div> -->
</body>

</html>