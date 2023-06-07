<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// echo "Nome: $nome<br>";
// echo "E-mail: $email";

$result = "INSERT INTO usuarios (nome, email, criacao) values ('$nome', '$email', NOW())";

$resultado = mysqli_query($conn, $result);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p> Usuario cadastrado com sucesso. </p>";
    header("Location: index.php");
}else{
    header("Location: index.php");
}


?>