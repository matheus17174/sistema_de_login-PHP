<?php
    $id = $_GET['id'];

    include "conexao.php";
    
    $query = "DELETE FROM produtos
    WHERE id = '$id'";

    mysqli_query($con, $query);
    echo "<script>alert('Produto excluido com sucesso!');</script>";
    header("Refresh:0.5; url=home.php");
?>