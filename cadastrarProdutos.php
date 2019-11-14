<?php
    require_once "header.php";

    if(isset($_GET['msg'])){
        echo "<script>alert('Produto cadastrado com sucesso!');</script>";
    }
?>
    <br>
    <div class="container">
    <h3>Cadastro de Produtos</h3>
    <br>
        <div class="row">
            <div class="col">
                <form action="processProduct.php" method="POST">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" name="nome"/>
                    <br>

                    <label for="descricao">Descrição</label>
                    <input class="form-control" type="text" id="descricao" name="descricao">
                    <br>

                    <label for="preco">Preço</label>
                    <input class="form-control" type="number" id="preco" name="preco">
                    <br>

                    <div align="center">
                        <button class="btn btn-outline-success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>