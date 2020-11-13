<?php

$email = $_POST['email'];
$senhalogin = $_POST['senha'];
$btn = $_POST['btn'];

$servername = "localhost";
$username = "root";
$senha = "";

$db_name = "sistemalogin";

$conect = mysqli_connect($servername, $username, $senha, $db_name);

if(mysqli_connect_error()):
    echo "falha na conexao: ".mysqli_connect_error;
endif;



if (isset($btn)) {
    $erros = array();
    $login = mysqli_escape_string($conect, $email);
    $senha = mysqli_escape_string($conect, $senha);

    $sql = "SELECT login FROM usuarios WHERE login = '$email'";
    $resultado = mysqli_query($conect, $sql);
    if(mysqli_num_rows($resultado) > 0){
        
        $sql = "SELECT senha FROM usuarios WHERE senha = '$senhalogin'";
        $resultado = mysqli_query($conect, $sql);

        if(mysqli_num_rows($resultado) > 0){
            echo "seja bem vindo";

        }else{
            echo "Usuario e senha nao conferem";
        }
        
    }else{
        echo "usuario inexistente.";
    }
}
?>