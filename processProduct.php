<?php
    include "conexao.php";
    
    $nome = htmlspecialchars($_POST['nome']);
    $descricao = htmlspecialchars($_POST['descricao']);
    $preco =  htmlspecialchars($_POST['preco']);

    $query = "insert into produtos(nome, descricao, preco) values('$nome','$descricao','$preco')";
    mysqli_query($con, $query);
    header("Location:cadastrarProdutos.php?msg=true");

?>