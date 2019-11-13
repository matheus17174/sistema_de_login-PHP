<?php
    if(empty($_COOKIE['email'])){
        header("Location:index.php");
    }

    echo "parabens ". $_COOKIE['nome']." vc esta logado!";
?>

<br>
<a href="index.php"><-Voltar</a>