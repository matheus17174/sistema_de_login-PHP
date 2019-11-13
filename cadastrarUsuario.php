<?php
	include "conexao.php";
    
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $senha =  md5(htmlspecialchars($_POST['senha']));

    $query = "insert into user(nome, email, senha) values('$nome','$email','$senha')";
    mysqli_query($con, $query);
    header("Location:cadastro.php?ok=ok");

 ?>