<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <h1>C A D A S T R O</h1>
    
    <?php

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>

    <form action="config.php" method="POST">

    <label for="">Nome: </label>
    <input type="text" name="nome" id="" placeholder="Digite seu nome" required> <br><br>

    <label for="">E-mail: </label>
    <input type="text" name="email" id="" placeholder="Digite seu email" required> <br><br>

    <input type="submit" value="Enviar">

    </form>
    
</body>
</html>