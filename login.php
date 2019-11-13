<?php
	include "conexao.php";
    
    $email = htmlspecialchars($_POST['email']);
    $senha =  md5(htmlspecialchars($_POST['senha']));
    $query = "select * from user where email = '$email' and senha = '$senha' limit 1";
	$cons = mysqli_query($con, $query);
    
    if($usuario = mysqli_fetch_assoc($cons)){
        $email = $usuario['email'];
        $nome = $usuario['nome'];
    }
    if(mysqli_num_rows($cons) > 0){
        setcookie ("email", "$email", (time() + (24 * 3600)));
        setcookie ("nome", "$nome", (time() + (24 * 3600)));
        header("Location: home.php");
    }else{
        //mensagem de erro que vai para o script no index
        header("Location:index.php?mensagem=404");
    }
 ?>