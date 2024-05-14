<?php

    session_start();


    require_once("conexao.php");
    if(isset($_POST['entrar'])){
        $login = $_POST['email'];
        $password = $_POST['senha'];

        $queyUsuario = "SELECT id ,email , senha from usuario where email = :email limit 1";
        
        $resultado = $conexao ->prepare($queyUsuario);
        $resultado -> bindParam(':email',$login);
        $resultado -> execute();

        if(($resultado) AND ($resultado ->rowCount() != 0)){
            $result = $resultado ->fetch(PDO::FETCH_ASSOC);


            if(password_verify($password, $result['senha'])){
                header('location:adm.php');    
            }else{
                header('location:index.php');
                $_SESSION['msg'] = "Senha ou email incorretos";
            }
        }else{
            header('location:index.php');
        }
        
    }else{
         
    }
?>