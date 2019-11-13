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
    <?php
      if(isset($_GET['mensagem'])){
        echo "<script>alert('Email ou senha inválidos!');</script>";
      }
    ?>
  <div class="container">
      <fieldset>
        <legend>Formulário de login:</legend>
        <form id="cad" name="myform" action="login.php" method="POST">
          <div class="form-group">
            
            <label for="email">Digite seu email:</label><br>
            <input class="form-control" type="email" name="email" pattern="[^. ][A-Za-z0-9.]*[^. ][@][A-Za-z0-9.]*[^. ]" required/><br>
            
            <label for="senha">Digite sua senha:</label><br>
            <input class="form-control" type="password" name="senha" id="senha" required/><br>
            
            
            <br>
            <input class="btn btn-outline-danger" type="reset" name="limpar" value="limpar" /> 
            <input class="btn btn-outline-success" type="submit" value="Logar" /><br>
          </div>  
        </form>
      </fieldset>
    </div>
    <div style="text-align:center;">
      <a href="cadastro.php"><h4>Cadastre-se Aqui!</h4></a>
    </div>
</body>
</html>
