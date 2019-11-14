<?php
    if(isset($_COOKIE['email'])){
        setcookie("email","", time()-1);
    }
    if(isset($_COOKIE['nome'])){
        setcookie("nome","", time()-1);
    }

    echo "<script>alert('Deslogado com sucesso, \n Bye bye.');</script>";
    header("Location: index.php");
?>