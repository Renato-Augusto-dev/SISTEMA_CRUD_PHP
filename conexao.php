<?php
try{

$conexao = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $erro){
    echo "erro ->".$erro -> getMessage();
}
?>