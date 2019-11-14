<?php
  if(isset($_GET['mensagem'])){
    echo "<script>alert('Email ou senha inválidos!');</script>";
  }

  require_once "header.php";
?>
<br>
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
