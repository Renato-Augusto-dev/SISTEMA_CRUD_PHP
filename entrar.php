<?php

use LDAP\Result;

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
            var_dump($result);
            if(password_verify($password, $result['senha'])){
                //header('location:adm.php');
                echo "senha verificada";
            }else{
                echo "erro2";
            }
        }else{
            echo "erro";
        }
        
    }else{
         
    }
?>