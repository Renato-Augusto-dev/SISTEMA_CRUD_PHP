<?php
require_once("conexao.php");


if(isset($_POST['enviar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaCR = password_hash($senha, PASSWORD_DEFAULT);
    
    $inserir = $conexao -> query("INSERT INTO usuario(email,senha) values ('$email','$senhaCR')");
    header("location:index.php");
}else{
    header('location:cadatro.php');
}

?>
