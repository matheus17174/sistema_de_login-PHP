<?php
    if(empty($_COOKIE['email'])){
        header("Location:index.php");
    }

    require_once "conexao.php";

    $query = "select * from produtos";
    $request = mysqli_query($con, $query);
    $lines = mysqli_num_rows($request);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Validação de formulários - exercicios</title> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
    <body>

        <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="https://www.facebook.com/carvalho.tot">MATHEUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Listagem dos produtos<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cadastrarProdutos.php">Cadastro de produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
        </nav>

        <br>

        <h3 style="color:grey;">Bem vindo <?php echo $_COOKIE['nome']; ?></h3>

        <?php if($lines != 0){ ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    while($req = mysqli_fetch_array($request)){
                        echo "<tr>
                            <th scope='row'>$count</th>
                            <td>".$req['nome']."</td>
                            <td>".$req['descricao']."</td>
                            <td>R$".$req['preco']."</td>
                            <td><a class='btn btn-outline-danger' href='deleteProduto.php?id=".$req['id']."'>Excluir</a></td>
                        </tr>";
                        $count++;
                    } ?>
                </tbody>
            </table>
        <?php }else{
            echo "<h5 align='center'>Nenhum produto encontrado!</h5>";
        } 
        ?>

    </body>
</html>